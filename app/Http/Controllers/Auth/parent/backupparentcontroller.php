<?php

namespace App\Http\Controllers\auth\parent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guardians;
use App\Models\Students;
Use App\Models\Attendance;
use Illuminate\Support\Facades\Session;
Use App\Models\section_sub;
Use App\Models\QrCode;
Use App\Models\Grades;
Use App\Models\corevalues;
class parentcontroller extends Controller
{
    public function loginform(){
        return view('login.parent');
    }
    public function login(Request $request){
   


      $username = $request->get('username');
      $password = $request->get('password');

      $login = Guardians::with('student')->where('username','=',$username)->where('password','=',$password)->get();

     
 
        if(count($login))
        {
              $fullname = $login[0]->guardian_lname . " ". $login[0]->guardian_fname ." ". $login[0]->guardian_mname;
            Session::put('fullname',$fullname);
            Session::put('guardian_id',$login[0]->guardian_id);
     alert()->success('Successfully Login', 'Welcome '.$fullname);
        return view('masterpages.parentlayout');

      }
      else{
        alert()->error('Incorrect Information', 'Incorrect  Username or Password');
        return view('login.parent');
    }   
}
    public function parentlogout(){
          alert()->success('Log Out', 'Thank you!');
        Session::flush();
        
        return redirect('/parent/loginform');
    }
    
    public function layout(){

      return view('masterpages.parentlayout');
    }

    public function profile(){
      $profile = Guardians::with('student')->where('guardian_id','=',session()->get('guardian_id'))->get();
    
      return view('parent.profile',compact('profile'));
    }
    public function listofattendance(){
       $studentinfo = Students::with('qr')->where('guardian_id','=',session()->get('guardian_id'))->get();

    return view('parent.listattendance',compact('studentinfo'));
    }
    public function updateinformation(Request $request){

        $updateinformation = Guardians::find($request->get('guardian_id'));
        $updateinformation->contact = $request->get('contact');
        $updateinformation->address= $request->get('address');

        $updateinformation->update();
 alert()->success('Profiel Updated', 'Successfully Updated!');
        return redirect('/parent/profile');
    }

    public function scheduleofstudent(){
         $studentinformation = Students::with('guardian')->where('guardian_id','=',session()->get('guardian_id'))->get();
 
         $schedule = section_sub::where('section_mid','=',$studentinformation[0]->section_mid)->get();

       
         return view('parent.scheduleofstudent',compact('studentinformation','schedule'));

    }

    public function gradesofstudent(){
      $gradesofstudent = Students::with('grades')->where('guardian_id','=',session()->get('guardian_id'))->get();
      
      $grades = Grades::where('student_id','=',$gradesofstudent[0]->student_id)->get();  

   $grades2 = Grades::where('student_id','=',$gradesofstudent[0]->student_id)->where('average_grade','!=','')->get(); 

     $number = count($grades2);

          foreach ($grades2 as $key => $value) {

            $sample[] = $value->average_grade;
          }
          $totalgrades = array_sum($sample);
          $average_grade = $totalgrades / $number ;
          if($average_grade >= 75){
            $finalremarks = 'Passed';
          }
          else{
            $finalremarks = 'Failed';
          }
      
        $corevalues =corevalues::where('student_id','=',$gradesofstudent[0]->student_id)->get();
              
      
        return view('parent.grades',compact('gradesofstudent','corevalues','grades','average_grade','finalremarks'));
    }

    public function changepassword(Request $request){
      $this->validate($request,[
        'oldpassword' => 'required',
        'newpassword' =>'required',
        'confirmpassword'=>'required'

      ]);
    
    $teacher = Guardians::find($request->get('guardian_id'));

    $currentpassword = $teacher->password;
    $oldpassword = $request->get('oldpassword');
    $newpassword = $request->get('newpassword');
    $confirmpassword = $request->get('confirmpassword');
    if($currentpassword == $oldpassword){
      if($newpassword == $confirmpassword){

        $teacher->password = $confirmpassword;

        $teacher->save();
         alert()->success('Password Updated', 'Successfully Updated!');
        return redirect('/parent/profile');
      }
      else{
        alert()->error('Not Match', 'New password And Confirm password Not match!');
              return redirect('/parent/profile');
      }
    }
    else{
      alert()->error('Not Match', 'Incorrect Old Password');
            return redirect('/parent/profile');
    
    }
    

       

    }

    public function listofattendanceofstudent(Request $request){
       $studentinfo = Students::with('qr')->where('guardian_id','=',session()->get('guardian_id'))->get();

       $attendance = Attendance::with('student.students','subject')->where([['qr_id','=',$studentinfo[0]->qr->qr_id],['date','=',$request->get('date')]])->get();

        return response()->json(compact('attendance'));
       }
}
