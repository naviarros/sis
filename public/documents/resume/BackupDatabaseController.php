<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Image;
use Log;
use Artisan;
use Alert;
use Response;
use Exception;
use Carbon\Carbon;

class BackupDatabaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(){
        if (!count(config('backup.backup.destination.disks'))) {
            dd(trans('backpack::backup.no_disks_configured'));
        }
        $backups = [];
        foreach (config('backup.backup.destination.disks') as $disk_name) {
            $disk = Storage::disk($disk_name);
            $adapter = $disk->getDriver()->getAdapter();
            $files = $disk->allFiles();
            // make an array of backup files, with their filesize and creation date
            foreach ($files as $k => $f) {
                // only take the zip files into account
                if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                    $backups[] = [
                        'file_path'     => $f,
                        'file_name'     => str_replace(config('app.name').'/', '', $f),
                        'file_size'     => $disk->size($f),
                        'last_modified' => $this->get_date($disk->lastModified($f)),
                        'disk'          => $disk_name,
                        'download'      => ($adapter instanceof local) ? true : false,
                        ];
                }
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        $data = [
            'backups' => $backups
        ];
        return view('backup',compact('data'));  
    }

    public function add_backup(){
        try {
            // start the backup process
            Artisan::call('backup:run',['--only-db'=>true]);
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
            // return the results as a response to the ajax call
            Alert::success('New backup created');
            return redirect('/maintenance/backup')->with('success', 'Database backup successfully added');   
        } catch (Exception $e) {
            //Flash::error($e->getMessage());
            return redirect('/maintenance/backup')->with('error', 'Error');   
        }
    }

    public function delete_database($file_name){
        $disk = Storage::disk(config('app.destination.disks')[0]);
        $disk_two = Storage::disk(config('destination.disks')[0]);
        if ($disk->exists(config('app.name') . '/' . $file_name)) {
            $disk->delete(config('app.name') . '/' . $file_name);
            return redirect('/maintenance/backup')->with('success', 'Database backup successfully deleted');   
        } else {
            if($disk_two->exists($file_name)){
                $disk->delete($file_name);
                return redirect('/maintenance/backup')->with('success', 'Database backup successfully deleted');   
            }
            else{
                return redirect('/maintenance/backup')->with('danger', "The backup file doesn't exist.");   

            }
        }
    }

    public function download_database($file_name)
    //public function download_backup($file_name)
    {
        // $file = config('app.name') . '/' . $request->file_name;
        // $file_two = $request->file_name;
        // $disk = Storage::disk(config('app.destination.disks')[0]);
        // $storage_path = $disk->getDriver()->getAdapter()->getPathPrefix();
        // if ($disk->exists($file)) {
        //     $fs = Storage::disk(config('app.destination.disks')[0])->getDriver();
        //     $stream = $fs->readStream($file);
        //     return \Response::stream(function () use ($stream) {
        //         fpassthru($stream);
        //     }, 200, [
        //         "Content-Type" => $fs->getMimetype($file),
        //         "Content-Length" => $fs->getSize($file),
        //         "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
        //     ]);
        // } else {
        //     if ($disk->exists($file_two)) {
        //         $fs = Storage::disk(config('destination.disks')[0])->getDriver();
        //         $stream = $fs->readStream($file_two);
                
        //         return \Response::stream(function () use ($stream) {
        //             fpassthru($stream);
        //         }, 200, [
        //             "Content-Type" => $fs->getMimetype($file_two),
        //             "Content-Length" => $fs->getSize($file_two),
        //             "Content-disposition" => "attachment; filename=\"" . basename($file_two) . "\"",
        //         ]);
        //     }
        //     else{
        //         abort(404, "The backup file doesn't exist.");
        //         return 'error';

        //     }
        // }
        $file = config('app.name') . '/' . $file_name;
        $disk = Storage::disk(config('app.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs = Storage::disk(config('app.destination.disks')[0])->getDriver();
            $stream = $fs->readStream($file);
                 
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            return redirect('/maintenance/backup')->with('danger', "The backup file doesn't exist.");   
        }

    }

    public function get_date($date){

        return Carbon::createFromTimeStamp($date)->formatLocalized('%d %B %Y %H:%M');
    }
}
