<?php

namespace App\Http\Controllers\auth\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Charts\AnalyticsChart;
use Illuminate\Support\Str;
use Auth;
use Artisan;
use Exception;
use Log;
use Alert;
use DB;
use PDF;
use Carbon\Carbon;
use Mail;
use App\Mail\newTeacher;
use App\Mail\newParent;
use App\Mail\newStudent;
use App\Models\Admin;
use App\Models\Attendance;
use App\Models\Announcement;
use App\Models\Curriculum;
use App\Models\corevalues;
use App\Models\Students;
use App\Models\Requirements;
use App\Models\Payment;
use App\Models\Fees;
use App\Models\Rooms;
use App\Models\Sections;
use App\Models\Grades;
use App\Models\Strands;
use App\Models\section_sub;
use App\Models\Parents;
use App\Models\Guardians;
use App\Models\Sect_Maintenance;
use App\Models\QrCode;
use App\Models\Stud_Login;
use App\Models\Subj_Maint;
use App\Models\Summer;
use App\Models\Schedule;
use App\Models\Teachers;
use App\Models\Tch_Req;
use App\Models\Teacher_Login;
use App\Models\Track;

class admincontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('authenticated:admin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // This function is for registering new teacher
    public function teacherregistration(Request $request)
    {
        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'lotno' => 'required',
            'blgname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'bday' => 'required',
            'cty' => 'required',
            'muni' => 'required',
            'statereg' => 'required',
            'brgy' => 'required',
            'email' => 'required|email',
            'cstat' => 'required',
            'mlname' => 'required',
            'mfname' => 'required',
            'mocc' => 'required',
            'flname' => 'required',
            'ffname' => 'required',
            'focc' => 'required',
            'elemsch' => 'required',
            'elemschgrd' => 'required',
            'hssch' => 'required',
            'hsgrd' => 'required',
            'cllgsch' => 'required',
            'cllggrd' => 'required',
            'crse' => 'required',
            'tchusrname' => 'required',
            'tchpsw' => 'required'
        ]);

        $teacher = (new Teachers)->fill([
            'lastname' => $request->get('lastname'),
            'firstname' => $request->get('firstname'),
            'middlename' => $request->get('middlename'),
            'age' => $request->get('age'),
            'address' => $request->get('lotno').' '.$request->get('blgname'),
            'gender' => $request->get('gender'),
            'bday' => $request->get('bday'),
            'city' => $request->get('cty'),
            'municipality' => $request->get('muni'),
            'nationality' => $request->get('ntnty'),
            'placeofbirth' => $request->get('pob'),
            'fcontact' => $request->get('fcontact'),
            'mcontact' => $request->get('mcontact'),
            'zipcode' => $request->get('zipc'),
            'region' => $request->get('statereg'),
            'barangay' => $request->get('brgy'),
            'contact' => $request->get('teachercntact'),
            'civil_status' => $request->get('cstat'),
            'spouse_lname' => $request->get('splname'),
            'spouse_fname' => $request->get('spfname'),
            'spouse_mname' => $request->get('spmname'),
            'no_of_child' => $request->get('children'),
            'spouse_occupation' => $request->get('occupation'),
            'spouse_bday' => $request->get('birthday'),
            'mlname' => $request->get('mlname'),
            'mfname' => $request->get('mfname'),
            'mmname' => $request->get('mmname'),
            'mocc' => $request->get('mocc'),
            'flname' => $request->get('flname'),
            'ffname' => $request->get('ffname'),
            'fmname' => $request->get('fmname'),
            'sfx_name' => $request->get('sfx'),
            'f_occ' => $request->get('focc'),
            'elem_schname' => $request->get('elemsch'),
            'elem_gradyr' => $request->get('elemschgrd'),
            'hs_schname' => $request->get('hssch'),
            'hs_gradyr' => $request->get('hsgrd'),
            'clg_schname' => $request->get('cllgsch'),
            'clg_gradyr' => $request->get('cllggrd'),
            'clg_crse' => $request->get('crse'),
            'mstrs_schname' => $request->get('mstrssch'),
            'mstrs_gradyr' => $request->get('mstrsgrad'),
            'mstrs_taken' => $request->get('mstrscrse'),
            'dctr_schname' => $request->get('dctrsch'),
            'dctr_gradyr' => $request->get('dctrsgrad'),
            'dctr_crse' => $request->get('dctrscrse'),
            'status' => 'Active'
        ])->emp()->associate(Teacher_Login::firstOrCreate([
            'username' => $request->get('tchusrname'), 
            'password' => $request->get('tchpsw'),
            'email' => $request->get('email'),
            'verifyToken' => Str::random(40)
        ]));

        if($request->hasFile('docu'))
        {
            $file = $request->file('docu');
            $filename = $file->getClientOriginalName();

            $path = public_path() . '/documents/resume';

            $upload = $file->move($path, $filename);

            $teacher->req()->associate(Tch_Req::firstOrCreate(['sss' => $request->get('sss'),
                'philhealth' => $request->get('philhealth'),
                'pagibig' => $request->get('pagibig'),
                'prc_no' => $request->get('prcno'),
                'date_passed' => $request->get('pssed'),
                'resume_filename' => $filename,
                'file_path' => $path
            ]));
        }

        $teacher->save();

        $thisUser = Teachers::with('emp')->findOrFail($teacher->instructor_id);
        Mail::to($thisUser->emp['email'])->send(new newTeacher($thisUser));

        alert()->success('New Teacher Added', 'Created Successfully!');

        return redirect()->back();        
        
    }

    public function sendEmailDone($email, $verifyToken)
    {
        $teacher = Teacher_Login::where(['email' => $email, 'verifyToken' => $verifyToken])->first();
        if($teacher)
        {
            $newpass = Teacher_Login::where(['email' => $email, 'verifyToken' => $verifyToken]);
            $newpass->update(['status' => '1', 'verifyToken' => null, 'password' => $newpassword]);
            return redirect()->intended('/login/teacherform');
        }
        else {
            return 'user not found';
        }
    }

    public function changeNewPass()
    {
        
    }
    // ---------------------

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function studentreg(Request $request){
        $strand = Strands::all();
        $section = Sect_Maintenance::all();
        $payment = Payment::count();
        $student = Students::count();
        $guardian = Guardians::count();
        $fees = Fees::all();
        return view('admin.studentadmin')->with('strand', $strand)->with('section', $section)->with(['payment' => $payment])->with(['student' => $student])->with('fees', $fees)->with('guardian', $guardian);
    }
    
    public function editschedule(Request $request)
    {
        if($request->ajax())
        {
            $data = section_sub::with('subject')->find($request->id);
            return response($data);
        }
    }

    public function editsection(Request $request)
    {
        if($request->ajax())
        {
            $data = Sect_Maintenance::with('strand', 'instructor')->find($request->id);
            return response($data);
        }
    }

    public function updatesection(Request $request)
    {
        $data = Sect_Maintenance::find($request->id);
        $data->section_description = $request->sctn;
        $data->strand_id = $request->stnd;
        $data->instructor_id = $request->tchname;

        $data->update();

        alert()->success('Section Updated', 'Updated Successfully');

        return redirect()->intended('/admin/sections');
    }

    public function updateschedule(Request $request)
    {
        if($request->ajax()){
            $data = section_sub::with('subject')->find($request->id);

            $data->instructor_id = $request->instruct;
            $data->start = $request->day.' '.$request->strt;
            $data->start1 = $request->day1.' '.$request->strt1;
            $data->start2 = $request->day2.' '.$request->strt2;
            $data->end = $request->ends;
            $data->end1 = $request->ends1;
            $data->end2 = $request->ends2;
            $data->room = $request->room;
            $data->room1 = $request->room1;
            $data->room2 = $request->room2;
            $data->update();

            return response($data);
        }
    }

    public function download(){
        Artisan::command('backup:run');

        return 'success';
    }

    public function downloadresume($teacher_id)
    {
        $download = Teachers::find($teacher_id);
        $file = public_path(). "/documents/resume/". $download->req->resume_filename;
        return response()->download($file);
    }

    public function searchteacher(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $data = Teachers::where('lastname', 'like', '%'.$request->srchins.'%')->orWhere('firstname', 'like', '%'.$request->srchins.'%')->get();

            if($data)
            {
                foreach($data as $teachersins)
                {
                    $output .= '<tr>'.
                    '<td>'.$teachersins->instructor_id.'</td>'.
                    '<td>'.$teachersins->lastname.','.$teachersins->firstname. $teachersins->middlename.'</td>'.
                    '<td><a href="'.action('Auth\admin\admincontroller@downloadresume', $teachersins->instructor_id).'" class="btn btn-primary"><span class="fa fa-print"></span> Download</a></td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function updateroom(Request $request)
    {
        $data = Rooms::find($request->id);
        $data->room_name = $request->roomname;
        $data->status = $request->sts;
        $data->capacity = $request->cpctys;
        $data->update();

        alert()->success('Room Updated', 'Updated Successfully!');

        return response($data);
    }

    public function updateadviser(Request $request)
    {
        $data = Sect_Maintenance::find($request->id);
        $data->instructor_id = $request->tchname;
        $data->update();

        alert()->success('Class Adviser has been changed', 'Updated Successfully!');

        return response($data);
    }

    // This method used for rendering strands view for SHS
    public function strands(){
        $strands = Strands::all();
        $track = Track::all();
        return view('admin.strands', compact('strands', 'track'));
    }

    // This method used for registering strands for SHS
    public function strandregistration(Request $request){
        $this->validate($request, [
            'strcode' => 'required',
            'descr' => 'required',
        ]);

        $strand = Strands::firstOrCreate(['strand_code' => $request->get('scdes'), 'description' => $request->get('descr'), 'track_id' => $request->get('strcode')]);

        $strand->save();

        if($strand->wasRecentlyCreated)
        {
            alert()->success('Strand Created', 'Successfully Added!');
        }
        else {
            alert()->error('Strand Exists', 'Failed Added!');
        }

        return redirect()->back();
    }

    public function trackregistration(Request $request)
    {
        $track = Track::firstOrCreate(['track_description' => $request->get('codes')]);

        $track->save();

        if($track->wasRecentlyCreated)
        {
            alert()->success('Track Created', 'Successfully Added!');
        }
        else
        {
            alert()->error('Creation Failed', 'Track Exists!');
        }
        
        return redirect()->back();
    }

    // This method used for registering new/old students
    public function studentregistration(Request $request){
        $this->validate($request, [
            'stts' => 'required',
            'scyr' => 'required',
            'scyr1' => 'required',
            'sem' => 'required',
            'lname' => 'required',
            'fname' => 'required',
            'sex' => 'required',
            'ntnlity' => 'required',
            'religion' => 'required',
            'dob' => 'required',
            'pob' => 'required',
            'cstat' => 'required',
            'age' => 'required',
            'region' => 'required',
            'city' => 'required',
            'brgy' => 'required',
            'email' => 'required',
            'lotno' => 'required',
            'blgname' => 'required',
            'flastname' => 'required',
            'ffirstname' => 'required',
            'contactno' => 'required',
            'mlastname' => 'required',
            'mfirstname' => 'required',
            'mothercontactnumber' => 'required',
            'guardianlastname' => 'required',
            'guardianfirstname' => 'required',
            'relation' => 'required',
            'add' => 'required',
            'telno' => 'required',
            'elemsch' => 'required',
            'elemschaddr' => 'required',
            'elemschgrd' => 'required',
            'secschname' => 'required',
            'secaddr' => 'required',
            'secyrgrd' => 'required',
            'strands' => 'required',
            'sectlists' => 'required',
            'usrname' => 'required',
            'psword' => 'required',
        ]);

        $student = (new Students)->fill([
            'strand_id' => $request->get('strands'), 
            'section_mid' => $request->get('sectlists'), 
            'student_no' => $request->get('studnumber'), 
            'student_type' => $request->get('stts'), 
            'start_schyr' => $request->get('scyr'), 
            'end_schyr' => $request->get('scyr1'), 
            'grade_level' => $request->get('glvl'), 
            'semester' => $request->get('sem'), 
            'lastname' => $request->get('lname'), 
            'firstname' => $request->get('fname'), 
            'middlename' => $request->get('mname'), 
            'age' => $request->get('age'), 
            'nationality' => $request->get('ntnlity'),
            'gender' => $request->get('sex'), 
            'address' => $request->get('lotno').' '.$request->get('blgname'), 
            'civil_status' => $request->get('cstat'), 
            'religion' => $request->get('religion'), 
            'city' => $request->get('city'), 
            'region' => $request->get('region'), 
            'barangay' => $request->get('brgy'), 
            'zipcode' => $request->get('zipcode'), 
            'dateofbirth' => $request->get('dob'),  
            'mobile_no' => $request->get('mobileno'), 
            'placeofbirth' => $request->get('pob'), 
            'elementarySchName' => $request->get('elemsch'), 
            'elemAddress' => $request->get('elemschaddr'), 
            'elemGradYr' => $request->get('elemschgrd'), 
            'secondarySchName' => $request->get('secschname'), 
            'secAddress' => $request->get('secaddr'), 
            'secYrGrad' => $request->get('secyrgrd'), 
            'status' => $request->get('studentstat')
        ])->parent()->associate(Parents::firstOrCreate([
            'mother_lname' => $request->get('mlastname'), 
            'mother_fname' => $request->get('mfirstname'), 
            'mother_mname' => $request->get('mmidlename'), 
            'mother_occ' => $request->get('motheroccupation'), 
            'mother_cntact' => $request->get('mothercontactnumber'), 
            'father_lname' => $request->get('flastname'), 
            'father_fname' => $request->get('ffirstname'), 
            'father_mname' => $request->get('fmiddlename'), 
            'father_occ' => $request->get('fatheroccupation'), 
            'father_cntact' => $request->get('contactno')]));

        foreach($request->get('core') as $co)
        {
            $core = corevalues::firstOrCreate(['student_id' => $request->get('id'), 'grade_level' => $request->get('glvl'), 'grading' => $co]);
            $core->save();
        }

        $subjectIds = explode(',', $request['sects']);
        $instructorIds = explode(',', $request['instructor']);

        for($i=0; $i<count($subjectIds);$i++)
        {
            $grades = Grades::firstOrCreate([
                'subject_id' => $subjectIds[$i],
                'student_id' => $request->get('id'),
                'grading_period' => $request->get('sem'),
                'grade_level' => $request->get('glvl'),
                'instructor_id' => $instructorIds[$i],
                'section_mid' => $request->get('sectlists')
            ]);

            $grades->save();  
        }

        $student->std_login()->associate(Stud_Login::firstOrCreate(['username' => $request->get('usrname'), 'password' => $request->get('psword'), 'emailAddress' => $request->get('email'), 'verifyToken' => Str::random(40)]));

        $student->guardian()->associate(Guardians::firstOrCreate([
            'guardian_lname' => $request->get('guardianlastname'), 
            'guardian_fname' => $request->get('guardianfirstname'), 
            'guardian_mname' => $request->get('guardianmiddlename'), 
            'relation' => $request->get('relation'), 
            'address' => $request->get('add'), 
            'username' => $request->get('grdusrname'), 
            'password' => $request->get('grdpsword'), 
            'contact' => $request->get('telno'),
            'email' => $request->get('emailadd'),
        ]));

        // $student->payment()->associate(Payment::firstOrCreate(['or_number' => $request->get('ornumber'), 'payment_method' => $request->get('paymentmethod'), 'payment_type' => $request->get('modeofpayment'), 'debit' => $request->get('totalfee')]));

        $student->payment()->associate(Payment::firstOrCreate(['or_number' => $request->get('ornumber'), 'payment_method' => $request->get('paymentmethod'), 'school_type' => $request->get('sector')]));
        
        $image = \QrCode::format('png')->size(200)->errorCorrection('H')->generate($request->get('qrkey'));

        $output_file = '/images/qr_codes/img-'. time() . '.png';

        $store = Storage::disk('public')->put($output_file, $image);

        $student->qr()->associate(QrCode::firstOrCreate(['qrContent' => $request->get('qrkey'), 'qrImg' => $store, 'qrLink' => $output_file]));

        $student->save();

        $thisUser = Students::with('std_login')->findOrFail($student->student_id);
        Mail::to($thisUser->std_login['emailAddress'])->send(new newStudent($thisUser));

        alert()->success('Student Enrolled', 'Successfully Created!');

        return redirect()->back();
    }

    public function searchsub(Request $request)
    {
        if($request->ajax())
        {
            $retakesearchsub = $request->retakesearchsub;

            $data = section_sub::with('instructor')->whereHas('subject', function($query) use($retakesearchsub){
                $query->where('subject_description', 'like', '%'.$retakesearchsub.'%');
            })->where('section_mid', '=', $request->sumsect)->where('semester', '=', $request->sumsem)->with(['subject' => function($query) use($retakesearchsub){
                $query->where('subject_description', 'like', '%'.$retakesearchsub.'%');
            }])->get();
            // $data = section_sub::with('subject', 'instructor')->where('section_mid', '=', $request->sumsect)->where('subject_description', 'like', '%'.$request->subsum.'%')->where('semester', '=', $request->sumsem)->get();

            return response()->json(compact('data'));
        }
    }

    public function sectsubsearch(Request $request)
    {
        if($request->ajax())
        {
            $output = "";

            $data = section_sub::with('subject', 'instructor')->where('grade_level', '=', $request->glvl)->where('strand_id', '=', $request->strands)->where('semester', '=', 'First Semester')->where('section_mid', 'like', '%'. $request->sectlists . "%")->get();

            return response()->json(compact('data'));
        }
    }

    public function searchstrandsubj(Request $request)
    {
        if($request->ajax())
        {
            $strand = $request->strand1;
            $gralvel = $request->gradeslvl;
            $section1 = $request->sctionstud;
            $semester = $request->mngesectsem;

            $data = section_sub::with('subject', 'instructor')->where('strand_id', $strand)->where('grade_level', $gralvel)->where('section_mid', $section1)->where('semester', 'like', '%'.$semester.'%')->get();

            return response()->json(compact('data'));
        }
    }

    public function searchstrandsubj2(Request $request)
    {
        if($request->ajax())
        {
            $strand = $request->strand1;
            $gralvel = $request->gradeslvl;
            $section1 = $request->sctionstud;
            $semester = $request->mngesectsem;

            $data = section_sub::with('subject', 'instructor')->where('strand_id', $strand)->where('grade_level', $gralvel)->where('section_mid', $section1)->where('semester', 'like', '%'.$semester.'%')->get();

            return response()->json(compact('data'));
        }
    }

    public function deletesectsub($id)
    {
        section_sub::find($id)->delete();
        return redirect()->back();
    }

    public function deleteroom($id)
    {
        Rooms::find($id)->delete();
        return redirect()->intended('/admin/rooms');
    }

    public function schoolfees(Request $request)
    {
        $this->validate($request, [
            'regfee' => 'required',
            'idfee' => 'required',
            'guidancefee' => 'required',
            'athleticfee' => 'required',
            'medfee' => 'required',
            'breakagefee' => 'required',
            'devfee' => 'required',
            'energyfee' => 'required',
            'insfee' => 'required',
            'labfee' => 'required',
            'nstpfee' => 'required',
            'tuitionfee' => 'required',
        ]);

        $fee = Fees::create(['registration_fee' => $request->get('regfee'), 'id_fee' => $request->get('idfee'), 'guidance_fee' => $request->get('guidancefee'), 'athletic_fee' => $request->get('athleticfee'), 'medical_fee' => $request->get('medfee'), 'breakage_fee' => $request->get('breakagefee'), 'development_fee' => $request->get('devfee'), 'energy_fee' => $request->get('energyfee'), 'insurance_fee' => $request->get('insfee'), 'lab_fee' => $request->get('labfee'), 'nstp_fee' => $request->get('nstpfee'), 'tuition_fee' => $request->get('tuitionfee')]);

        $fee->save();

        alert()->success('Successfully Created', 'School Fees Created');

        return redirect()->back();
    }

    public function sectionlist(){
        $strands = Strands::all();
        $subj = Subj_Maint::all();
        $teacher = Teachers::whereNotIn('instructor_id', array('1'))->get();
        $subject = section_sub::whereNotIn('semester', ['Summer Semester'])->get();
        $rooms = Rooms::where('status', '=', 'Available')->get();
        $sections = Sect_Maintenance::all();
        $curriculum = Curriculum::all();
        return view('admin.managesections', compact('strands', 'subj', 'subject', 'teacher', 'rooms', 'sections', 'curriculum'));
    }

    public function searchcurriculum(Request $request)
    {
        if($request->ajax())
        {
            $srchyr = $request->get('schyr');
            $str = $request->get('strlists');
            $lvl = $request->get('grlvl');
            $sem = $request->get('semester');

            $output = "";
            $cur = Curriculum::when($str, function($q) use ($str) {
                    return $q->where('strand_id', $str);
                })->when($lvl, function($q) use ($lvl){
                    return $q->where('grade_level', $lvl);
                })->when($sem, function($q) use ($sem){
                    return $q->where('semester', $sem);
                })->when($srchyr, function($q) use ($srchyr){
                    return $q->where('sch_yr', 'like', '%'.$srchyr.'%');
                })->get();

            if($cur)
            {
                foreach($cur as $key => $cu)
                {
                    $output .= '<tr>'.
                    '<td class="hidechk"><input type="checkbox" class="hidechk" name="cur[]" value="'.$cu->subject->subject_id .'" checked="checked">'.'</td>'.
                    '<td>'.$cu->strands->description .'</td>'.
                    '<td>'.$cu->subject->subject_description.'</td>'.
                    '<td><label><input type="checkbox" class="hidechk" name="prereq[]" value="'.$cu->subject->prerequisite.'" checked="checked">'.$cu->subject->prerequisite.'</label>'.'</td>'.
                    '<td>'.$cu->grade_level.'</td>'.
                    '<td>'.$cu->semester.'</td>'.
                    '<td>'.$cu->sch_yr.'</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function searchsubject(Request $request)
    {
        if($request->ajax())
        {
            $output = "";
            $subjsrch = Subj_Maint::where('subject_type', 'like', '%' . $request->search . "%")->get();
            if($subjsrch)
            {
                foreach($subjsrch as $key => $srch)
                {
                    $output .= '<tr>'.
                    '<td><input type="checkbox" name="sbj[]" value="'.$srch->subject_id.'">'.'</td>'.
                    '<td>'.$srch->subject_code.'</td>'.
                    '<td>'.$srch->subject_description.'</td>'.
                    '<td>'.$srch->subject_type.'</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function setcurriculum(Request $request)
    {
        $this->validate($request, [
            'strand' => 'required',
            'semster' => 'required',
            'grlvl' => 'required',
            'sbj' => 'required',
            'cryr' => 'required'
        ]);

        $subjectlist = $request->get('sbj');

        foreach($subjectlist as $subjectlists)
        {
            $curriculum = Curriculum::firstOrCreate(['strand_id' => $request->get('strand'),
            'grade_level' => $request->get('grlvl'), 'subject_id' => $subjectlists, 
            'semester' => $request->get('semster'), 'sch_yr' => $request->get('cryr')]);
        }

        $curriculum->save();

        if($curriculum->wasRecentlyCreated)
        {
            alert()->success('Successfully Created', 'Curriculum Created!');
        }
        else
        {
            alert()->error('Failed Added', 'Curriculum Not Added');
        }

        return redirect()->back();
    }

    public function studentslist(){
        $studs = Students::whereNotIn('status', ['Inactive'])->paginate(5);
        $sect = Sect_Maintenance::all();
        return view('admin.listofstudents', compact('studs', 'sect'));
    }

    public function studsearch(Request $request){
        if($request->ajax())
        {
            $output = "";
            $studsearch = Students::where('student_no', 'like', '%'.$request->get('studsearch')."%")->orWhere('lastname', 'like', '%'.$request->get('studsearch')."%")->get();

            if($studsearch)
            {
                foreach($studsearch as $key => $studse)
                {
                    $output .= '<tr>'.
                    '<td>'.$studse->student_no.'</td>'.
                    '<td>'.$studse->lastname.', '.$studse->firstname.' '.$studse->middlename.'</td>'.
                    '<td><a href="'.action('Auth\admin\admincontroller@generateregi', $studse->student_id).'" class="btn btn-primary" name="inseet"><span class="fa fa-print"></span></a></td>'.
                    '</tr>';
                }

                return response($output);
            }
        }
    }

    public function searchqr(Request $request){
        if($request->ajax())
        {
            $output = "";
            $studsearch = Students::where('student_no', 'like', '%'.$request->get('qrsearch')."%")->orWhere('lastname', 'like', '%'.$request->get('qrsearch')."%")->get();

            if($studsearch)
            {
                foreach($studsearch as $key => $studse)
                {
                    $output .= '<tr>'.
                    '<td>'.$studse->student_no.'</td>'.
                    '<td>'.$studse->lastname.', '.$studse->firstname.' '.$studse->middlename.'</td>'.
                    '<td><a href="'.action('Auth\admin\admincontroller@printqr', $studse->student_id).'" class="btn btn-primary" name="inseet"><span class="fa fa-print"></span></a></td>'.
                    '</tr>';
                }

                return response($output);
            }
        }
    }

    public function printqr($student_id)
    {
        $download = Students::find($student_id);
        $file = Storage::disk('public')->path($download->qr->qrLink);
        return response()->download($file);
    }

    public function studsearchrec(Request $request){
        if($request->ajax())
        {
            $output = "";
            $studsearch = Students::with('payment')->where('student_no', 'like', '%'.$request->get('orsrch')."%")->orWhere('lastname', 'like', '%'.$request->get('orsrch')."%")->get();

            if($studsearch)
            {
                foreach($studsearch as $key => $rec)
                {
                    $output .= '<tr>'.
                    '<td>'.$rec->student_no.'</td>'.
                    '<td>'.$rec->lastname.', '.$rec->firstname.' '.$rec->middlename.'</td>'.
                    '<td>'.$rec->payment->or_number.'</td>'.
                    '<td><a href="'.action('Auth\admin\admincontroller@generatereceipt', $rec->student_id).'" class="btn btn-primary" name="inseet"><span class="fa fa-print"></span></a></td>'.
                    '</tr>';
                }

                return response($output);
            }
        }
    }

   
    public function subjectedit(Request $request)
    {
        if($request->ajax())
        {
            $data = Subj_Maint::find($request->id);
            return response($data);
        }
    }

    public function edittrack(Request $request)
    {
        if($request->ajax())
        {
            $data = Track::find($request->id);
            return response($data);
        }
    }

    public function editteacher(Request $request)
    {
        if($request->ajax())
        {
            $data = Teachers::with(['emp', 'req'])->find($request->id);
            return response()->json(compact('data'));
        }
    }

    public function sttch2(Request $request)
    {
        if($request->ajax())
        {
            $data = Teachers::with('emp')->where('lastname', 'like', '%'.$request->tch13.'%')->get();
            return response()->json(compact('data'));
        }
    }

    public function editstudent(Request $request)
    {
        if($request->ajax())
        {
            $data = Students::with('section','parent', 'requirement', 'std_login', 'guardian', 'payment')->find($request->id);
            return response($data);
        }
    }

    public function editstrand(Request $request)
    {
        if($request->ajax())
        {
            $data = Strands::with('track')->find($request->id);
            return response()->json(compact('data'));
        }
    }


    public function editenrollment(Request $request)
    {
        if($request->ajax())
        {
            $data = Sect_Maintenance::with('strand')->find($request->id);
            return response($data);
        }
    }

    public function updatetrackcodes(Request $request)
    {
        $data = Track::find($request->id);
        $data->track_description = $request->tckde;
        $data->update();

        alert()->success('Student Changed', 'Changed Successfully');

        return redirect()->intended('/admin/strands');
    }

    public function updatestrand(Request $request)
    {
        $data = Strands::find($request->id);
        $data->track_id = $request->get('trackcode');
        $data->strand_code = $request->get('strandcode');
        $data->description = $request->get('stranddescr');
        $data->update();

        alert()->success('Strand Updated', 'Updated Successfully');

        return redirect()->intended('/admin/strands');
    }

    public function updatestudent(Request $request)
    {
        $data = Students::with('payment')->find($request->id);
        $data->lastname = $request->last;
        $data->firstname = $request->first;
        $data->middlename = $request->middle;
        $data->age = $request->age;
        $data->civil_status = $request->sts;
        $data->nationality = $request->ntnlity;
        $data->dateofbirth = $request->bdy;
        $data->city = $request->cty;
        $data->region = $request->reg;
        $data->barangay = $request->bgy;
        $data->zipcode = $request->zip;
        $data->address = $request->add;
        $data->mobile_no = $request->mbno;
        $data->placeofbirth = $request->pb;
        $data->elementarySchName = $request->schelem;
        $data->elemAddress = $request->schelemadd;
        $data->elemGradYr = $request->gdelem;
        $data->secondarySchName = $request->schhs;
        $data->secAddress = $request->schhsadd;
        $data->secYrGrad = $request->gdhs;
        $data->section_mid = $request->sectname;
        $data->grade_level = $request->lvlg;

        $data->update();

        $payment = $data->payment()->update([
            'payment_method' => $request->pymthod,
            'school_type' => $request->stor
        ]);

        $parents = $data->parent()->update([
            'mother_lname' => $request->mlast,
            'mother_fname' => $request->mfirst,
            'mother_mname' => $request->mmiddle,
            'mother_occ' => $request->motherocc,
            'father_lname' => $request->flast,
            'father_fname' => $request->ffirst,
            'father_mname' => $request->fmiddle,
            'father_occ' => $request->fatherocc
        ]);

        $login = $data->std_login()->update([
            'emailAddress' => $request->addremail
        ]);

        $guardian = $data->guardian()->update([
            'guardian_lname' => $request->grdlastname,
            'guardian_fname' => $request->grdfirstname,
            'guardian_mname' => $request->grdmiddlename,
            'contact' => $request->grdcontact,
            'address' => $request->grdaddress,
            'email' => $request->grdemail
        ]);

        alert()->success('Student Changed', 'Changed Successfully');

        return redirect()->intended('/admin/students');
    }

    public function removestudent($id)
    {
        $stud = Students::find($id);
        $stud->update(['status' => 'Inactive']);
        return redirect()->intended('/admin/students');
    }

    public function restorestudent($id)
    {
        $stud = Students::find($id);
        $stud->update(['status' => 'Active']);
        return redirect()->intended('/admin/studentarchive');
    }

    public function restoreteacher($id)
    {
        $stud = Teachers::find($id);
        $stud->update(['status' => 'Active']);
        return redirect()->intended('/admin/studentarchive');
    }

    public function removesection($id){
        Sect_Maintenance::find($id)->delete();
        return redirect()->intended('/admin/sections');
    }

    public function updateenrollment(Request $request)
    {
        $data = Sect_Maintenance::find($request->id);
        $data->grade_level = $request->lgr;
        $data->semester = $request->semester;
        $data->status = $request->statusenrl;
        $data->update();

        alert()->success('Enrollment Changed', 'Changed Successfully');

        return redirect()->intended('/admin/enrollment');
    }

    public function updateteacher(Request $request)
    {
        $data = Teachers::with('req')->find($request->id);
        $data->lastname = $request->lname;
        $data->firstname = $request->fstname;
        $data->middlename = $request->mdlename;
        $data->age = $request->age;
        $data->bday = $request->birthday;
        $data->civil_status = $request->cvlstat;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->municipality = $request->municipality;
        $data->barangay = $request->brngy;
        $data->zipcode = $request->zpc;
        $data->spouse_lname = $request->slname;
        $data->spouse_fname = $request->sfname;
        $data->spouse_mname = $request->smname;
        $data->spouse_occupation = $request->occp;
        $data->no_of_child = $request->chld;
        $data->mlname = $request->mothlname;
        $data->mfname = $request->mothfname;
        $data->mmiddle = $request->mothmname;
        $data->mocc = $request->ocp;
        $data->flname = $request->fathlname;
        $data->ffname = $request->fathfname;
        $data->fmname = $request->fathmname;
        $data->f_occ = $request->occpfath;
        $data->elem_schname = $request->elemname;
        $data->elem_gradyr = $request->grd;
        $data->hs_schname = $request->hsn;
        $data->hs_gradyr = $request->hsgd;
        $data->clg_schname = $request->collegename;
        $data->clg_gradyr = $request->collegegrad;
        $data->mstrs_schname = $request->mastersname;
        $data->mstrs_gradyr = $request->mastersgrad;
        $data->dctr_schname = $request->doctorsname;
        $data->dctr_gradyr = $request->doctorsgrad;

        if($request->has('fileres'))
        {
            $file = $request->file('fileres');
            $filename = $file->getClientOriginalName();

            $path = public_path() . '/documents/resume';

            $upload = $file->move($path, $filename);

            $data->req()->update([
                'resume_filename' => $filename,
                'file_path' => $path
            ]);
        }

        $data->req()->update([
            'sss' => $request->get('sss'),
            'philhealth' => $request->get('phealth'),
            'pagibig' => $request->get('pgibig'),
        ]);

        $data->emp()->update([
            'email' => $request->get('emailaddupd')
        ]);

        $data->update();

        alert()->success('Teacher Updated', 'Updated Successfully');

        return redirect()->intended('/admin/teachers');
    }

    public function subjectupdate(Request $request)
    {
        $data = Subj_Maint::find($request->id);
        $data->subject_code = $request->subjectcode;
        $data->subject_description = $request->sbjdescr;
        $data->subject_type = $request->stype;
        $data->prerequisite = $request->prerequisite;
        $data->update();

        alert()->success('Subject Updated', 'Updated Successfully!');

        return redirect()->back();
    }

    public function roomdelete(Request $request)
    {
        if($request->ajax())
        {
          $delete = Rooms::find($request->id)->delete();
          return response($delete);
        }
    }

    public function generateteacher($instructor_id)
    {
        $teacher = Teachers::with('sect', 'subj')->find($instructor_id);
        $pdf = PDF::loadView('/admin/printteacher', compact('teacher'));
        return $pdf->stream('teacher.pdf');
    }

    public function generatesectionlist(){
        $student = Sect_Maintenance::all();
        $pdf = PDF::loadView('/admin/printsectionlists', compact('student'));
        return $pdf->stream('sections.pdf');
    }

    public function listofsubjectsection($section_mid){
        $section = Sect_Maintenance::find($section_mid);
        $sect_sub = section_sub::where('section_mid', '=', $section->section_mid)->get();
        $pdf = PDF::loadView('/admin/printsectionsubjects', compact('sect_sub'));
        return $pdf->stream('sectsub.pdf');
    }

    public function listofstudentpdf()
    {
        $students = Students::all();
        $pdf = PDF::loadView('/admin/studentlistpdf', compact('students'));
        return $pdf->stream('studentlist.pdf');
    }

    public function searchsectionsubs(Request $request)
    {
        if($request->ajax())
        {
            $output = "";
            $studsearch = section_sub::where('section_mid', 'like', '%'.$request->get('sectsubjsearch')."%")->get();
            $studsearch = $studsearch->unique('section_mid');
            if($studsearch)
            {
                foreach($studsearch as $key => $studse)
                {
                    $output .= '<tr>'.
                    '<td>'.$studse->section->section_description.'</td>'.
                    '<td>'.$studse->section->strand->description.'</td>'.
                    '<td>'.$studse->section->grade_level.'</td>'.
                    '<td><a href="'.action('Auth\admin\admincontroller@listofsubjectsection', $studse->section_mid).'" class="btn btn-primary" name="inseet"><span class="fa fa-print"></span></a></td>'.
                    '</tr>';
                }

                return response($output);
            }
        }
    }

    public function generatesectionstudents($section_mid)
    {
        $section = Sect_Maintenance::find($section_mid);
        $student = Students::with('section')->where('section_mid', '=', $section->section_mid)->get();
        $pdf = PDF::loadView('/admin/printsectionstudents', compact('section', 'student'));
        return $pdf->stream('lists.pdf');
    }

    public function generatestudent($student_id)
    {
        $students = Students::with('strands', 'section.subj', 'parent', 'guardian', 'qr')->find($student_id);
        $pdf = PDF::loadView('/admin/printstudents', compact('students'));
        return $pdf->stream('student.pdf');
    }

    public function generatesubject()
    {
        $subjects = Subj_Maint::all();

        $pdf = PDF::loadView('/admin/printsubjects', compact('subjects'));
        return $pdf->stream('subjects.pdf');
    }

    public function generateregi($student_id)
    {
        $regi = Students::find($student_id);

        $sectsub = section_sub::where('section_mid', '=', $regi->section_mid)->where('grade_level', '=', $regi->grade_level)->where('strand_id', '=', $regi->strand_id)->where('semester', '=', $regi->semester)->get();

        $fee = Fees::all();
        $pdf = PDF::loadView('/admin/registrationcard', compact('regi', 'sectsub', 'fee'))->setPaper('a4', 'landscape');

        return $pdf->stream('registrationcard.pdf');
    }

     public function viewgrades($student_id){
        
        $students = Grades::find($student_id);

        $grs = Grades::with('students')->where('student_id', '=', $students->student_id)->get(); 

        $pdf = PDF::loadView('/admin/gradesview', compact('grs'));

        return $pdf->stream('viewgrades.pdf');
    }


    public function generatereceipt($student_id)
    {
        $paymen = Students::find($student_id);
        $pdf = PDF::loadView('/admin/receipt', compact('paymen'));

        return $pdf->stream('receipt.pdf');
    }

    public function qr(){
        return view('admin.generate');
    }

    public function instructor(){
        $teacher = Teachers::count();
        return view('admin.faculties', compact('teacher'));
    }

    public function teacher(){
        $teacher = Teachers::whereNotIn('status', ['Inactive'])->whereNotIn('instructor_id', ['1'])->paginate(5);
        return view('admin.manageteacher', compact('teacher'));
    }

    public function sections(){
        $stran = Strands::all();
        $sects = Sect_Maintenance::all();
        $teacher = Teachers::whereNotIn('instructor_id', array('1'))->get();
        return view('admin.sections', compact('stran', 'sects', 'teacher'));
    }

    // Maintenance function for student sections
    public function sectionmaintenance(Request $request){
        $this->validate($request, [
            'sect_descr' => 'required',
            'strdescr' => 'required',
            'startyr' => 'required',
            'endyr' => 'required',
            'grlevel' => 'required',
        ]);
        
        $sect = Sect_Maintenance::firstOrCreate([
            'section_description' => $request->get('sect_descr'), 
            'strand_id' => $request->get('strdescr'), 
            'start_schyr' => $request->get('startyr'), 
            'end_schyr' => $request->get('endyr'), 
            'grade_level' => $request->get('grlevel'), 
            'instructor_id' => $request->get('adviser')
        ]);
        
        $sect->save();

        if($sect->wasRecentlyCreated)
        {
            alert()->success('New Section Added.', 'Successfully Added!');
        }
        else {
            alert()->error('Section Exists.', 'Failed Added!');
        }

        return redirect()->back();        
    }

    public function searchgrade(Request $request)
    {
        $data = Students::with('strands', 'section')->where('lastname', 'like', '%'.$request->grsearch.'%')->orWhere('firstname', 'like', '%'.$request->grsearch.'%')->get();
        return response()->json(compact('data'));
    }

    // --------------------------

    public function subjects() {
        $subjects = Subj_Maint::paginate(5);
        $subj = Subj_Maint::all();
        $subject = Subj_Maint:: all();
        return view('admin.subjects', compact('subjects', 'subj', 'subject'));
    }

    public function subjectregistration(Request $request){
        $this->validate($request, [
            'scode' => 'required',
            'descr' => 'required',
            'type' => 'required',
            'units' => 'required',
            'lecthrs' => 'required',
            'labhrs' => 'required'
        ]);

        $subject = Subj_Maint::firstOrCreate(['subject_code' => $request->get('scode'), 
            'subject_description' => $request->get('descr'),
            'subject_type' => $request->get('type'),
            'credited_units' => $request->get('units'),
            'lect_hrs' => $request->get('lecthrs'),
            'lab_hrs' => $request->get('labhrs')
        ]);

        $subject->save();

        alert()->success('Subject Registered', 'Successfully Added!');

        return redirect()->back();
    }

    public function strandsubject(Request $request){
        $this->validate($request, [
            'strlists' => 'required',
            'grlvl' => 'required',
            'semester' => 'required',
            'scyr' => 'required',
            'scyr1' => 'required',
            'sections' => 'required'
        ]);

        $cur = $request->get('cur');
        $prereq = $request->get('prereq');

        for($i = 0; $i < count($cur); $i++)
        {
            $subjectsection = section_sub::firstOrCreate(['section_mid' => $request->get('sections'), 'grade_level' => $request->get('grlvl'), 'semester' => $request->get('semester'), 'prerequisite' => $prereq[$i], 'sch_yr' => $request->get('scyr').'-'.$request->get('scyr1'), 'subject_id' => $cur[$i], 'strand_id' => $request->get('strlists'), 'instructor_id' => '1']);
        }
        // foreach($cur as $curi)
        // {
        //     foreach($prereq as $req)
        //     {
        //         $subjectsection = section_sub::firstOrCreate(['section_mid' => $request->get('sections'), 'grade_level' => $request->get('grlvl'), 'semester' => $request->get('semester'), 'prerequisite' => $req, 'sch_yr' => $request->get('scyr').'-'.$request->get('scyr1'), 'subject_id' => $curi, 'strand_id' => $request->get('strlists'), 'instructor_id' => '5']);
        //     }
        // }

        $subjectsection->save();

        if($subjectsection->wasRecentlyCreated)
        {
            alert()->success('Successfully Created', 'Subject Created!');
        }
        else {
            alert()->error('Failed Added', 'Subject Section Exists!');
        }

        return redirect()->back();
    }

    public function summerstrandsubject(Request $request){
        $this->validate($request, [
            'strlists' => 'required',
            'grlvl' => 'required',
            'semester' => 'required',
            'sections' => 'required'
        ]);

        $subs = $request->get('sbujs');

        foreach($subs as $curi)
        {
        $subjectsection = section_sub::firstOrCreate(['section_mid' => $request->get('sections'), 'grade_level' => $request->get('grlvl'), 'semester' => $request->get('semester'), 'subject_id' => $curi, 'strand_id' => $request->get('strlists'), 'instructor_id' => '1']);
        }

        $subjectsection->save();

        if($subjectsection->wasRecentlyCreated)
        {
            alert()->success('Successfully Created', 'Subject Created!');
        }
        else {
            alert()->error('Failed Added', 'Subject Section Exists!');
        }

        return redirect()->back();
    }

    public function rooms(){
        $room = Rooms::all();
        return view('admin.rooms', compact('room'));
    }

    public function roomsregistration(Request $request){
        $this->validate($request, [
            'roomname' => 'required',
            'cpcty' => 'required',
            'tpe' => 'required'
        ]);

        $room = Rooms::firstOrCreate(['room_name' => $request->get('roomname'), 'capacity' => $request->get('cpcty'), 'status' => $request->get('tpe')]);

        $room->save();

        if($room->wasRecentlyCreated)
        {
            alert()->success('Successfully Added!','Room Created');
        }
        else {
            alert()->error('Failed Added!', 'Room Exists');
        }

        return redirect()->back();
    }

    public function curriculum(Request $request){
        $strands1 = Strands::all();
        $subject = Subj_Maint::paginate(10);

        return view('admin.curriculum')->with('strands1', $strands1)->with('subject', $subject);
    }

    public function stsrc(Request $request){
        if($request->ajax())
        {
            $data = Students::with('strands')->where('lastname', 'like', '%'.$request->stsrc.'%')->get();
            return response()->json(compact('data'));
        }
    }

    public function serchsbj(Request $request)
    {
        if($request->ajax())
        {
            $data = Subj_Maint::where('subject_code', 'like', '%'.$request->serchsbj.'%')->orWhere('subject_description', 'like', '%'.$request->serchsbj.'%')->where('subject_type', 'like', '%'.$request->serchsbj.'%')->orWhere('prerequisite', 'like', '%'.$request->serchsbj.'%')->get();
            return response()->json(compact('data'));
        }
    }

    public function curriculumsc(Request $request)
    {
        if($request->ajax())
        {
            $data = Curriculum::with('strands', 'subject')->where('subject_description', 'like', '%'.$request->curriculumsearch.'%')->get();
            return response()->json(compact('data'));
        }
    }

    public function searchstudents(Request $request)
    {
        if($request->ajax())
        {
            $output = "";

            $find = $request->get('studentfind');

            $searchst = Grades::whereHas('students', function($query) use ($find){
                $query->where('student_no', 'like', '%'.$find.'%')->orWhere('lastname', 'like', '%'.$find.'%');
            })->with(['students' => function($query) use ($find){
                $query->where('student_no', 'like', '%'.$find.'%')->orWhere('firstname', 'like', '%'.$find.'%');
            }])->get();

            if($searchst)
            {
                foreach($searchst as $key => $st)
                {
                    $output .= '<tr>'.
                        '<td><input type="checkbox" name="studgrad[]" id="studgrad" value="'.$st->student_id.'">'.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->students->student_no.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->students->lastname.', '.$st->students->firstname.' '.$st->students->middlename.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->students->strands->description.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->students->section->section_description.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->subjects->subject_description.' ('.$st->subjects->subject_code.') '.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->average_grade.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->grade_status.'</td>'.
                        '<td class="small font-weight-bolder">'.$st->students->semester.'</td>'.
                        '</tr>';
                }
            }

            return response($output);
        }
    }

    public function searchlevel(Request $request)
    {
        if($request->ajax())
        {
            $data = Students::select('grade_level')->where('student_id', 'like', '%'.$request->studgrad.'%')->get();

            $data = $data->unique('grade_level');

            return response()->json(compact('data'));
        }
    }

    public function sectionadviser(){
        $sects = Sect_Maintenance::all();
        $teacher = Teachers::all();
        return view('admin.sectionadviser', compact('sects', 'teacher'));
    }

    public function searchsectionadviser(Request $request){
        return Sect_Maintenance::where('strand_id', 'like', '%'.$request->sects."%")->get();
    }

    public function searchsections(Request $request){
        return Sect_Maintenance::where('grade_level', 'like', '%'. $request->get('grl'). "%")->get();
    }

    public function searchadviser(Request $request){
        if($request->ajax())
        {
            $strs = $request->get('sects');
            $grl = $request->get('grl');
            $sct = $request->get('sct');

            $output = "";
            $srchadv = Sect_Maintenance::when($strs, function($q) use ($strs) {
                    return $q->where('strand_id', $strs);
                })->when($grl, function($q) use ($grl){
                    return $q->where('grade_level', $grl);
                })->when($sct, function($q) use ($sct){
                    return $q->where('section_description', 'like', '%'.$sct.'%');
                })->get();
            if($srchadv)
            {
                foreach($srchadv as $key => $srchad)
                {
                    $output .= '<tr id="srchad'.$srchad->section_mid.'">'.
                    '<td>'.$srchad->strand->description.'</td>'.
                    '<td>'.$srchad->section_description.'</td>'.
                    '<td>'.$srchad->grade_level.'</td>'.
                    '<td>'.$srchad->instructor->lastname.','.$srchad->instructor->firstname.'</td>'.
                    '<td><button class="btn btn-primary adviser-modal" data-id="'.$srchad->section_mid.'"><span class="fa fa-pencil"></span></button>'.
                    '<button class="btn btn-danger delete-modal" data-id="'.$srchad->section_mid.'"><span class="fa fa-trash"></span></button>'.
                    '</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function curriculumlists(){
        $stands = Strands::all();
        $curriculum = Curriculum::paginate(5);
        return view('admin.curriculumlists', compact('stands', 'curriculum'));
    }

    public function curlistsearch(Request $request)
    {
        if($request->ajax())
        {
            $data = Curriculum::with('strands', 'subject')->where('strand_id', '=', $request->strandcursearch)->where('semester', '=', $request->strandcursem)->where('grade_level', 'like', '%'.$request->strandcurlvl.'%')->get();

            return response()->json(compact('data'));
        }
    }

    public function deletecurriculum($id)
    {
        Curriculum::with('strands', 'subject')->find($id)->delete();
        return redirect()->intended('/admin/curriculumlists');
    }

    public function removeteacher($id)
    {
        $teach = Teachers::with('emp')->find($id);
        $teach->update(['status' => 'Inactive']);
        return redirect()->intended('/admin/teachers');
    }

    public function deleteannouncement($id)
    {
        Announcement::find($id)->delete();
        return redirect()->intended('/admin/listofannouncements');
    }

    public function removestrand($id)
    {
        Strands::find($id)->delete();
        return redirect()->intended('/admin/strands');
    }

    public function deletesubject($subject_id)
    {
        Subj_Maint::find($subject_id)->delete();
        return redirect()->intended('/admin/subjects');
    }

    public function undostudent($student_id)
    {
        $data = Students::find($student_id);
        $data->restore();
        return redirect()->intended('/admin/students');
    }

    public function curriculumresult(Request $requset){
        if($request->ajax())
        {
            $schyr = $request->get('yrsch');
            $strand = $request->get('stran');
            $gradelevel = $request->get('gradelvl');
            $semester = $request->get('semester');

            $output = "";
            $curres = Curriculum::when($schyr, function($q) use ($schyr) {
                    return $q->where('sch_yr', $schyr);
                })->when($strand, function($q) use ($strand){
                    return $q->where('strand_id', $strand);
                })->when($gradelevel, function($q) use ($gradelevel){
                    return $q->where('grade_level', $gradelevel);
                })->when($semester, function($q) use ($semester){
                    return $q->where('semester', 'like', '%'.$semester.'%');
                })->get();

            if($curres)
            {
                foreach($curres as $key => $curr)
                {
                    $output = '<tr>'.
                    '<td>'.$curr->strands->description.'</td>'.
                    '<td>'.$curr->sch_yr.'</td>'.
                    '<td>'.$curr->grade_level.'</td>'.
                    '<td>'.$curr->semester.'</td>'.
                    '<td>'.$curr->subject->subject_description.'</td>'.
                    '<td>'.$curr->subject->subject_type.'</td>'.
                    '<td><button class="btn btn-primary" data-id="'.$curr->curriculum_id.'"><span class="fa fa-pencil"></span></button>'.'<button class="btn btn-danger" data-id="'.$curr->curriculum_id.'"><span class="fa fa-trash"></span></button>'.
                    '</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function editroom(Request $request){
        if($request->ajax())
        {
            $data = Rooms::find($request->id);
            return response($data);
        }
    }

    public function editadviser(Request $request)
    {
        if($request->ajax())
        {
            $data = Sect_Maintenance::with('strand')->find($request->id);
            return response($data);
        }
    }

    public function subjreg(Request $request)
    {
        if($request->ajax())
        {
            $output = "";

            $listsub = Input::get('suco');

            $subjregi = Grades::with('subjects')->where('subject_id', 'like', '%'.$listsub."%")->get();

            if($subjregi)
            {
                foreach($subjregi as $key => $sub)
                {
                    $output .= '<tr>'.
                    '<td>'.'<input type="text" name="ornum" value="0005" readonly>'.'</td>'.
                    '<td>'.$sub->subjects->subject_description.'</td>'.
                    '<td>'.$sub->subjects->credited_units.'</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function summersched()
    {
        $strands = Strands::all();
        $sections = Sect_Maintenance::all();
        $subjs = Subj_Maint::all();
        $teacher = Teachers::whereNotIn('instructor_id', array('1'))->get();
        $rooms = Rooms::all();
        $summer = section_sub::where('semester', '=', 'Summer Semester')->get();
        return view('admin.createsummersched', compact('strands', 'sections', 'subjs', 'summer', 'teacher', 'rooms'));
    }

    public function retakeinsert(Request $request)
    {

        $pay = Payment::firstOrCreate(['or_number' => $request->get('ornumber'), 'debit' => $request->get('amnt'), 'balance' => $request->get('amnt'), 'payment_method' => $request->get('pymmet'), 'payment_type' => $request->get('pymtype')]);

        $pay->save();

        foreach($request->get('studgrad') as $studid)
        {
            foreach($request->get('suco') as $suco)
            {
                foreach($request->get('instructor') as $insts)
                {
                    $student = Grades::where('student_id', '=', $studid)->where('subject_id', '=', $request->subsum);
                    $student->update(['grade_status' => '', 'mid_grade' => '0', 'final_grade' => '0', 'average_grade' => '0', 'grading_period' => 'Summer Semester', 'section_mid' => $request->get('sumsect'), 'instructor_id' => $insts]);
                    // $grade = Grades::create(['student_id' => $studid, 'subject_id' => $request->get('subsum'), 'section_mid' => $request->get('sumsect'), 'grading_period' => $request->get('sumsem'), 'grade_level' => $request->get('grlevel'), 'instructor_id' => $insts]);
                    // $grade->save();

                    $summer = Summer::create(['student_id' => $studid, 'section_subj_id' => $suco]);
                    $summer->save();

                    $getStudent = Students::find($studid);
                    $getStudent->grade_level = $request->get('grlevel');
                    $getStudent->semester = $request->get('sumsem');
                    $getStudent->save();
                }
            }
        }

        // $studentArr = array();

        // foreach($getStudent as $i => $getStudents)
        // {
        //     $studentArr[$i] = new Students();
        //     $studentArr[$i]->std_loginid = $getStudents->std_loginid;
        //     $studentArr[$i]->strand_id = $getStudents->strand_id;
        //     $studentArr[$i]->requirement_id = $getStudents->requirement_id;
        //     $studentArr[$i]->section_mid = $request->get('sumsect');
        //     $studentArr[$i]->payment_id = $pay->payment_id;
        //     $studentArr[$i]->qr_id = $getStudents->qr_id;
        //     $studentArr[$i]->parent_id = $getStudents->parent_id;
        //     $studentArr[$i]->guardian_id = $getStudents->guardian_id;
        //     $studentArr[$i]->student_no = $getStudents->student_no;
        //     $studentArr[$i]->student_type = $getStudents->student_type;
        //     $studentArr[$i]->start_schyr = $getStudents->start_schyr;
        //     $studentArr[$i]->end_schyr = $getStudents->end_schyr;
        //     $studentArr[$i]->semester = $request->get('sumsem');
        //     $studentArr[$i]->lastname = $getStudents->lastname;
        //     $studentArr[$i]->firstname = $getStudents->firstname;
        //     $studentArr[$i]->middlename = $getStudents->middlename;
        //     $studentArr[$i]->age = $getStudents->age;
        //     $studentArr[$i]->nationality = $getStudents->nationality;
        //     $studentArr[$i]->gender = $getStudents->gender;
        //     $studentArr[$i]->address = $getStudents->address;
        //     $studentArr[$i]->civil_status = $getStudents->civil_status;
        //     $studentArr[$i]->religion = $getStudents->religion;
        //     $studentArr[$i]->city = $getStudents->city;
        //     $studentArr[$i]->region = $getStudents->region;
        //     $studentArr[$i]->barangay = $getStudents->barangay;
        //     $studentArr[$i]->zipcode = $getStudents->zipcode;
        //     $studentArr[$i]->dateofbirth = $getStudents->dateofbirth;
        //     $studentArr[$i]->mobile_no = $getStudents->mobile_no;
        //     $studentArr[$i]->emailAddress = $getStudents->emailAddress;
        //     $studentArr[$i]->elementarySchName = $getStudents->elementarySchName;
        //     $studentArr[$i]->elemAddress = $getStudents->elemAddress;
        //     $studentArr[$i]->elemGradYr = $getStudents->elemGradYr;
        //     $studentArr[$i]->secondarySchName = $getStudents->secondarySchName;
        //     $studentArr[$i]->secAddress = $getStudents->secAddress;
        //     $studentArr[$i]->secYrGrad = $getStudents->secYrGrad;
        //     $studentArr[$i]->placeofbirth = $getStudents->placeofbirth;
        //     $studentArr[$i]->save();
        // }

        alert()->success('Created Successfully', 'Successfully Added!');

        return redirect()->back();
    }

    public function schedule(){
        return view('admin.schedule');
    }

    public function announcement(){
        return view('admin.announcement');
    }

    public function makeannouncement(Request $request)
    {
        $this->validate($request, [
            'sender' => 'required',
            'subj' => 'required',
            'bodyofmsg' => 'required'
        ]);

        $create = Announcement::create(['title' => $request->get('subj'), 'sendto' => $request->get('sender'), 'description' => $request->get('bodyofmsg')]);

        $create->save();

        alert()->success('Announcement Created', 'Successfully Created');

        return redirect()->back();
    }

    public function listofteachers(){
        return view('admin.listofteachers');
    }
    public function enrollment(){
        $strands = Strands::all();
        $sect = Sect_Maintenance::all();
        return view('admin.enrollment', compact('strands', 'sect'));
    }

    public function enroll(Request $request)
    {

    }

    public function sectionsearch(Request $request)
    {
        if($request->ajax())
        {
            $sts = $request->get('stlists');
            $lvlgr = $request->get('levelgr');
            $sems = $request->get('sems');

            $output = "";

            $sections = Sect_Maintenance::when($sts, function($q) use ($sts) {
                    return $q->where('strand_id', $sts);
                })->when($lvlgr, function($q) use ($lvlgr){
                    return $q->where('grade_level', 'like', '%'.$lvlgr.'%');
                })->when($sems, function($q) use ($sems){
                    return $q->where('semester', $sem);
                })->get();

            if($sections)
            {
                foreach($sections as $key => $sec)
                {
                    $output .= '<tr>'.
                    '<td>'.$sec->strand->description.'</td>'.
                    '<td>'.$sec->section_description.'</td>'.
                    '<td>'.$sec->grade_level.'</td>'.
                    '<td>'.$sec->semester.'</td>'.
                    '<td>'.'<span class="badge badge-primary">'.$sec->status.'</span>'.'</td>'.
                    '<td><button class="btn btn-primary enrollbtn" data-id="'.$sec->section_mid.'"><span class="fa fa-pencil"></span></button>'.'<button class="btn btn-danger enrolldel" data-id="'.$sec->section_mid.'"><span class="fa fa-trash"></span></button>'.
                    '</td>'.
                    '</tr>';
                }
            }

            return response($output);
        }
    }

    public function grades(){
        return view('admin.encodingofgrades');
    }

    public function studentgrades(){
        $grades = Students::all();
        return view('admin.studentgrades', compact('grades'));
    }

    // public function dataanalytics(){
    //     $strands = Strands::all();
    //     $strands2 = Strands::select('description')->where('description', '=', 'Accounting, Business and Management')->where('description', '=', 'Humanities and Social Sciences')->where('description', '=', 'Science, Technology, Engineering, and Mathematics')->where('description', '=', 'General Academic Strand')->where('description', '=', 'Information and Communication Technology')->get();
    //     $usersChart = new AnalyticsChart;
    //     $student = Students::where('strand_id', '=', '1')->get();
    //     $humss = Students::where('strand_id', '=', '3')->get();
    //     $stem = Students::where('strand_id', '=', '4')->get();
    //     $ict = Students::where('strand_id', '=', '5')->get();
    //     $gas = Students::where('strand_id', '=', '6')->get();
    //     $usersChart->labels(['ABM', 'STEM', 'HUMSS', 'GAS', 'ICT']);
    //     $usersChart->dataset('Accounting, Business and Management', 'bar', [$student->count()]);
    //     $usersChart->dataset('Science, Technology, Engineering and Mathematics', 'bar', [$stem->count()]);
    //     $usersChart->dataset('Humanities and Social Science', 'bar', [$humss->count()]);
    //     $usersChart->dataset('General Academic Strand', 'bar', [$gas->count()]);
    //     $usersChart->dataset('Information and Communication Technology', 'bar', [$ict->count()]);

    //     $studentmale = Students::where('strand_id', '=', '1')->where('strand_id', '=', '2')->where('strand_id', '=', '1')->where('strand_id', '=', '1')->where('strand_id', '=', '1')->where('gender', '=', 'Male')->get();
    //     $studentfemale = Students::where('strand_id', '=', '1')->where('gender', '=', 'Female')->get();

    //     $chart2 = new AnalyticsChart;
    //     $chart2->dataset('Number of Male Student in all Strand', 'pie', [$studentmale->count()]);
    //     $chart2->dataset('Number of Female Student in all Strand', 'pie', [$studentfemale->count()]);
    //     return view('admin.dataanalytics', compact('usersChart', 'strands', 'chart2'));
    // }

    public function dataanalytics(Request $request){
        $strands = Strands::all();
        $strands2 = Strands::all();
        $usersChart = new AnalyticsChart;
        $chart2 = new AnalyticsChart;
        $studentnumber = Students::count();
        $strandtotal = Strands::count();
        foreach($strands2 as $strand)
        {
            if($request->ajax()){
               $student = Students::where('strand_id', '=', $strand->strand_id)->where('start_schyr', '=', 
                '2019')->get();
                $usersChart->dataset($strand->description, 'bar', [$student->count()]);

                return $usersChart->api();
            }
            else{
                $student = Students::where('strand_id', '=', $strand->strand_id)->get();
                $usersChart->dataset($strand->description, 'bar', [$student->count()]);

                $studentmale = Students::where('strand_id', '=', $strand->strand_id)->where('gender', '=', 'Male')->get();
                $studentfemale = Students::where('strand_id', '=', $strand->strand_id)->where('gender', '=', 'Female')->get();
                $chart2->dataset($strand->description.'; Male', 'bar', [$studentmale->count()]);
                $chart2->dataset($strand->description.'; Female', 'bar', [$studentfemale->count()]);
            }
        }

        return view('admin.dataanalytics', compact('usersChart', 'strands', 'chart2', 'studentnumber', 'strandtotal'));
    }

    public function perstrandanalytics(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $chartresult = new AnalyticsChart;
            $strand = Students::where('start_schyr', 'like', '%'.$request->schyr.'%')->get();
            
            foreach($strand as $str)
            {
                $output .= $chartresult->dataset($str->description, 'bar', [$str->count()]);
            }

            return response()->json($output);
        }
    }

    public function perstrandanalyticsgender(Request $request)
    {
        if($request->ajax())
        {
            $chartresult = new AnalyticsChart;
            $strand = Students::where('strand_id', '=', $request->srchgenderstrand)->where('gender', 'like', '%'.$request->srchgenderstrand1.'%')->get();
            
            foreach($strand as $str)
            {
                $chartresult->dataset($str->strands->description, 'bar', [$str->count()]);
            }

            return $chartresult->api();
        }
    }

    public function analytics(){
        $sections = Students::with('section')->where('section_mid', '=', 1)->get();
        return response()->json($sections);
    }

    public function listofannouncement(){
        $announce = Announcement::all();
        return view('admin.listofannouncement', compact('announce'));
    }

    public function fees(){
        $fees = Fees::all();

        return view('admin.fees', compact('fees'));
    }

    public function retake(Request $request){
        $grades = Grades::where('grade_status', '=', 'Failed')->orWhere('grade_status', '=', 'Dropped')->orWhere('grade_status', '=', 'Withdrawn')->get();
        $section = Sect_Maintenance::all();
        $payment = Payment::count();
        $subj = Subj_Maint::all();
        $summer = section_sub::where('semester', '=', 'Summer Semester')->get();
        return view('admin.retake', compact('grades', 'section', 'subj', 'payment', 'summer'));
    }

    public function studentarchive()
    {   
        $studentarch = Students::where('status', '=', 'Inactive')->get();
        return view('admin.studentarchive', compact('studentarch'));
    }

    public function teacherarchive()
    {
        $teacherarch = Teachers::where('status', '=', 'Inactive')->get();
        return view('admin.teachersarchive', compact('teacherarch'));
    }

    public function backup(){
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
                        'file_size'     => $this->human_filesize($disk->size($f)),
                        'last_modified' => $this->get_date($disk->lastModified($f)),
                        'disk'          => $disk_name,
                        'download'      => ($adapter instanceof local) ? true : false,
                        ];
                }
            }
        }
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);

        return view('admin.backupandrestore')->with(compact('backups'));
    }

     public function get_date($date){
        return Carbon::createFromTimeStamp($date)->formatLocalized('%d %B %Y %H:%M');
    }

    public function createbackup()
    {
        try {
            // start the backup process
            Artisan::call('backup:run',['--only-db'=>true]);
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
            // return the results as a response to the ajax call
            Alert::success('New backup created');
            return redirect('/admin/backup')->with('success', 'Database backup successfully added');   
        } catch (Exception $e) {
            //Flash::error($e->getMessage());
            return redirect('/admin/backup')->with('error', 'Error');   
        }
    }

    public function download_backup($file_name)
    {
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
            return redirect('/admin/backup')->with('danger', "The backup file doesn't exist.");   
        }
    }

    public function delete_backup($file_name)
    {
        $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists(config('backup.backup.name') . '/' . $file_name)) {
            $disk->delete(config('backup.backup.name') . '/' . $file_name);
            return redirect()->back();
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }

    public function changepassword(){
        return view('admin.changepassword');
    }

    public function passchange(Request $request)
    {
        $changepass = Admin::find(session()->get('adminid'));

        $oldpass = $changepass->admin_pword;

        $oldpassword = $request->get('oldpassword');
        $newpassword = $request->get('newpassword');
        $confirm = $request->get('confirmpassword');

        if($oldpass == $oldpassword){
            if($newpassword == $confirm)
            {
                $changepass->admin_pword = $confirm;
                $changepass->save();

                alert()->success('Password Changed', 'Updated Successfully');
                return redirect()->back();
            }
            else {
                alert()->error('Password Not Match');
                return redirect()->back();
            }
        }
        else {
            alert()->error('Password Not Matched', 'Check your password');
            return redirect()->back();
        }
    }

    function human_filesize($bytes, $decimals = 2)
    {
        if($bytes < 1024)
        {
            return $bytes. ' B';
        }

        $factor = floor(log($bytes, 1024));

        return sprintf("%.{$decimals}f ", $bytes / pow(1024, $factor)). ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$factor];
    }
}
