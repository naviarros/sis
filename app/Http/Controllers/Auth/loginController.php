<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\Teacher_Login;
use App\Mail\forgotTeacher;
use Illuminate\Support\Str;
use Mail;


class loginController extends Controller
{

    public function teacherloginform(){
        return view('login.teacher');
    }

    public function teacher(Request $request){

 
      $username = $request->get('username');
      $password = $request->get('password');

      $login = teacher_login::with('teacher')->where('username','=',$username)->where('password','=',$password)->get();

        if(count($login))
        {
              $fullname = $login[0]->teacher->lastname . " ". $login[0]->teacher->firstname ." ". $login[0]->teacher->middlename;
            Session::put('fullname',$fullname);
            Session::put('instructor_id',$login[0]->teacher->instructor_id);
              alert()->success('Successfully Login', 'Welcome  '.$fullname);
        return view('masterpages.teacherlayout');
      }
      else{
           alert()->error('Incorrect Information', 'Incorrect Employee No or Password');
        return view('login.teacher');
    }   
        }
    public function teacherlogout(){
        
        Session::flush();
          alert()->success('Log Out', 'Thank you!');
        return redirect('/login/teacherform');
    }

    public function teacherforgot()
    {
        return view('login.teacherforgot');
    }

    public function forgotpass(Request $request)
    {
        $teacher = Teacher_Login::where('email', '=', $request->get('forgotteacher'))->get();

        if(count($teacher))
        {
            Mail::to($teacher[0]->email)->send(new forgotTeacher($teacher[0]));

            alert()->success('Check Your Email', 'The link has been sent');
            return redirect()->back();
        }
        else {
            alert()->error('Not Match', 'Please Try Again!');
            return redirect()->back();
        }
    }
}