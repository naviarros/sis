<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Mail;
use App\Mail\forgotAdmin;

class adminloginController extends Controller
{
    public function login(){
    	return view('login.admin');
    }

    public function adminlogin(Request $request)
    {
    	$uname = $request->input('uname');
    	$pword = $request->input('pword');

    	$checklogin = Admin::where('admin_uname', '=', $uname)->where('admin_pword', '=', $pword)->get();

    	if(count($checklogin))
    	{
    		Session::put('adminid', $checklogin[0]->admin_id);
            alert()->success('Welcome!'.' '. ucfirst($checklogin[0]->admin_uname), 'Successfully Logged In');
    		return redirect('/admin/analytics');
    	}
    	else {
    		alert()->error('Check Username or Password', 'Password Not Matched!');
            return view('login.admin');
    	}
    }

    public function adminlogout()
    {
    	Session::flush();
        alert()->success('Successfully Logged Out');
        return redirect('/login/admin');
    }

    public function adminforgot()
    {
        return view('login.adminforgot');
    }

    public function forgotpass(Request $request)
    {
        $admin = Admin::where('email', '=', $request->get('forgotadmin'))->get();

        if(count($admin))
        {
            Mail::to($admin[0]->email)->send(new forgotAdmin($admin[0]));

            alert()->success('Check Your Email', 'The link has been sent');
            return redirect()->back();
        }
        else {
            alert()->error('Not Match', 'Please Try Again!');
            return redirect()->back();
        }
    }
}
