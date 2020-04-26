<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\Stud_Login;
use App\Mail\forgotStudent;
use Mail;
use Auth;

class studentloginController extends Controller
{
    public function studlogin(){
    	return view('login.studentportal');
    }

    public function studentLogin(Request $request)
    {
    	$stuname = $request->input('stuname');
        $stpword = $request->input('stpword');


        // $checklogin = Stud_Login::where('username', '=', $stuname)->where('password', '=', $stpword)->get();

        $checklogin = Stud_Login::with('student')->where('username', '=', $stuname)->where('password', '=', $stpword)->get();

        if(count($checklogin))
        {
            if($checklogin[0]->student->status == 'Active')
            {
                Session::put('stdloginid', $checklogin[0]->std_loginid);
                Session::put('qr_id', $checklogin[0]->student->qr_id);
                Session::put('studentid', $checklogin[0]->student->student_id);
                Session::put('studentno', $checklogin[0]->student->student_no);
                Session::put('studentname', $checklogin[0]->student->lastname. ' ,  '.$checklogin[0]->student->firstname.' '.$checklogin[0]->student->middlename);
                Session::put('strand', $checklogin[0]->student->strands->description);
                Session::put('section_md', $checklogin[0]->student->section_mid);
                Session::put('semester', $checklogin[0]->student->semester);
                Session::put('section_name', $checklogin[0]->student->section->section_description);
                Session::put('grade_level', $checklogin[0]->student->grade_level);
                alert()->success('Welcome Student!', 'Successfully Logged In');
                return redirect('/students/message');
            }
            elseif($checklogin[0]->student->status == 'Inactive')
            {
                alert()->error('Check Username or Password', 'Please Check Again!');
                return redirect('/login/student');
            }
        }
        else {
            alert()->error('Check Username or Password', 'Password Not Matched!');
            return view('login.studentportal');
        }
    }

    public function studentLogout()
    {
        Session::flush();
        alert()->success('Successfully Logged Out');
        return redirect('/login/student');
    }

    public function studentforgot()
    {
        return view('login.studentforgot');
    }

    public function forgotpass(Request $request)
    {
        $student = Stud_Login::where('emailAddress', '=', $request->get('forgotstudent'))->get();

        if(count($student))
        {
            Mail::to($student[0]->emailAddress)->send(new forgotStudent($student[0]));

            alert()->success('Check Your Email', 'The link has been sent');
            return redirect()->back();
        }
        else {
            alert()->error('Not Match', 'Please Try Again!');
            return redirect()->back();
        }
    }
}
