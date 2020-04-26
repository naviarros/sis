<?php

namespace App\Http\Controllers\auth\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qrcode;
use App\Models\Students;
use App\Models\Attendance;
use Carbon\Carbon;
use App\Models\Subjects;
use App\Models\Sections;
use App\Models\section_sub;
use App\Models\Subj_Maint;
use App\Models\Grades;
use App\Models\Teachers;
use App\Models\Sect_Maintenance;
use App\Models\corevalues;
Use PDF;
Use App\Models\Teacher_Login;
Use App\Models\Announcement;


class teachercontroller extends Controller
{

  //controller for pages
    public function teacherlayout(){

        $teacher = session()->get('instructor_id');
        $subject_sub= Sect_Maintenance::where('instructor_id','=',session()->get('instructor_id'))->get();

      
      return view('masterpages.teacherlayout',compact('subject_sub'));
    }
    public function announcementpages(){
      $announcement= Announcement::where('sendto','=','Teachers')->orWhere('sendto','=','all')->get();
      return view('teacher.announcement',compact('announcement'));
    }
    public function classadvisory(){
      // $class = Sect_Maintenance::with('student')->where('instructor_id','=','1')->get();
      $teacher = session()->get('instructor_id');


      $sections = Sect_Maintenance::where('instructor_id','=',$teacher)->get();



      // $class = Students::whereHas('section', function($query) use ($teacher){
      //           $query->where('instructor_id', '=', $teacher);
      //       })->with(['section' => function($query) use ($teacher){
      //           $query->where('instructor_id', '=', $teacher);
      //       }])->get();



            //    $class = Students::whereHas('section', function($query) use ($teacher){
            //     $query->where('instructor_id', '=', $teacher);
            //     $query->where('section_mid','=','1');
            //     $query->where('grade_level','=','11');
            // })->with(['section' => function($query) use ($teacher){
            //     $query->where('instructor_id', '=', $teacher);
           
            // }])->get();

      return view('teacher.classadvisory',compact('sections'));
    }

    public function getclassadvisory(Request $request){

      $section_mid = $request->get('section');
      $gradelevel = $request->get('gradelevel');


        $teacher = session()->get('instructor_id');
          $class = Students::whereHas('section', function($query) use ($teacher,$section_mid,$gradelevel){
                $query->where('instructor_id', '=', $teacher);
                $query->where('section_mid','=',$section_mid);
                $query->where('grade_level','=',$gradelevel);
            })->with(['section' => function($query) use ($teacher){
                $query->where('instructor_id', '=', $teacher);
           
            }])->get();


           return response()->json(compact('class'));
    }

    public function gradespages(){
          $students = Grades::with('teacher')->where('instructor_id','=',session()->get('instructor_id'))->get();
          $subject_subs = section_sub::with('subject')->where('instructor_id','=',session()->get('instructor_id'))->get();

          $subject_sub =$subject_subs->unique('subject_id');

      return view('teacher.grades',compact('students','subject_sub'));
      // $section_sub = Sect_Maintenance::with('subj')->where('section_mid', '=', 1)->get();

      

   //      $grades = Grades::where('student_id', '=', 1)->get();
     
    
   //      foreach ($grades as $grade) {


   // $subjects = section_sub::whereHas('subject', each($grades, function($query){
   //              $query->where('subject_description','=','Oral Communication' ); 
   //          }))->where('section_mid', '=',1)->get();

   // dd($subjects);

            // dd($subjects);
            // foreach ($grades as $grade) {
            //     if($grade->grade_status == 'Failed')
            //     {
            //         foreach($grade->whereNotIn('grade_status', ['Passed'])->get() as $gra)
            //         {
            //             dd($gra);
            //         }
            //     }
            //     // if($grade->subjects->subject_description == $subject->subject->prerequisite)
            //     // {
            //     //     dd($grade);
            //     // }    
            // }
        
    }
    public function classlistpages(){
          $students = Grades::with('teacher')->where('instructor_id','=',session()->get('instructor_id'))->get();
            $subject_subs = section_sub::with('subject')->where('instructor_id','=',session()->get('instructor_id'))->get();

            $subject_sub =$subject_subs->unique('subject'); 
      return view('teacher.classlist',compact('students','subject_sub'));

    }
    public function listofattendancepages(){
        $subject_subs = section_sub::with('subject')->where('instructor_id','=',session()->get('instructor_id'))->get();

        $subject_sub =$subject_subs->unique('subject'); 
    return view('teacher.listofattendance',compact('subject_sub'));

    }
    public function attendancelist(Request $request){
          $attendancelist = Attendance::with('student.students','subject','section')->where([['instructor_id','=',session()->get('instructor_id')],['subject_id','=',$request->get('select_subject')],['section_mid','=',$request->get('select_section')],['semester','=',$request->get('semester')],['date','=',$request->get('date')]])->get();

            return response()->json(compact('attendancelist'));
    }
    public function profilepages(){
      $teacherinformation = Teachers::with('emp')->where('instructor_id','=',session()->get('instructor_id'))->get();
      return view('teacher.profile',compact('teacherinformation'));
    }
    public function schedulepages(){

      $schedule  = section_sub::select('sch_yr')->where('instructor_id','=',session()->get('instructor_id'))->get();

        
        $schedules =$schedule->unique('sch_yr');
        
  
      return view('teacher.schedule',compact('schedules'));
    }

    public function getschedule(Request $request){

          

 $getschedule = section_sub::with('section','subject')->where([['instructor_id','=',session()->get('instructor_id')],['semester','=',$request->get('semester')],['sch_yr','=',$request->get('schoolyear')]])->get();


      return response()->json(compact('getschedule'));
    }

    public function studentattendancepages(){
         $subject_subs = section_sub::with('subject')->where('instructor_id','=',session()->get('instructor_id'))->get();


         $subject_sub =$subject_subs->unique('subject'); 
      return view('teacher.studentattendance',compact('subject_sub'));

    }

    public function getcorevalues(Request $request){
      $getcorevalues = corevalues::where('student_id','=',$request->id)->get();

      echo json_encode($getcorevalues);
    }
    public function getsection(Request $request){
        //  $this->validate($request,[

        // 'select_subject'=>'required'        


        //  ]);
        $section = section_sub::with('section')->where('subject_id','=',$request->select_subject)->where('instructor_id','=',session()->get('instructor_id'))->get();
        $section =$section->unique('section_mid');
        $output = '<option value=""> Select</option>';

        foreach($section as $sections){
          // echo ' <option value="{{$sections->section_mid}}"> {{$sections->section->section_description}}</option>';
          $output.='<option value="'.$sections->section_mid.'">'.$sections->section->section_description.' </option>';

        }
    

          echo json_encode($output);


    }
 
    public function getsemester(Request $request){
        $semesters = section_sub::with('section')->where('instructor_id','=',session()->get('instructor_id'))->where('subject_id','=',$request->select_subject)->distinct()->get(['semester']);


           // $semesters =$semesters->unique('semesters'); 
        // $outputt = '<option value=""> Select</option>';

        // foreach($semester as $sem){
        //   $outputt.='<option value="'.$sem->semester.'">'.$sem->semester.' </option>';
        //   // $outputt .= "<option value='".$sem->semester."'>";
        //   // $outputt .= $sem->semester;
        //   // $outputt .= "</option>";
        // }
        // echo "<pre>";
        // print_r($semester);
        // echo "</pre>";
        return response()->json(compact('semesters'));

        
    }


      public function getattendance(Request $request){
         $this->validate($request,[

        'content'=>'required',
        'select_section'=>'required',
        'select_subject'=>'required',
        'semester'=>'required'        


         ]);
         $studentqr = QrCode::where('qrContent','=', $request->content)->get();



         foreach ($studentqr as $student)
{
        
         // $attendance = Attendance::firstOrCreate(['qr_id'=>$student->qr_id,'time_in'=>$request->get('time'),'section_description'=>$request->get('select_section'),'date'=>$request->get('date'),'subject_description'=>$request->get('select_subject')]);
        
   $attendance = Attendance::firstOrCreate(
    ['qr_id'=>$student->qr_id, 
    'semester'=>$request->get('semester'),
    'instructor_id'=>session()->get('instructor_id'),
    'time_in'=>$request->get('time'),
    'section_mid'=>$request->get('select_section'),
    'date'=>$request->get('date'),
    'status'=>$request->get('status'),
    'subject_id'=>$request->get('select_subject')]);
    $attendance->save();
    echo json_encode($attendance);

}

    
   }



    
      public function getstudentinformation(Request $request){
     
     
         $this->validate($request,[

        'content'=>'required'         


         ]);

         // $student = Students::all()->toArray();
     

$studentqr =QrCode::with('students')->where('qrContent','=', $request->content)->get();

echo json_encode($studentqr);
       
}

  public function updateinformation(Request $request){


      $updateinformation = Teachers::with('emp')->find(session()->get('instructor_id'));
      $updateinformation->contact =$request->get('contact');
      // $updateinformation->placeofbirth = $request->get('placeofbirth');
      $updateinformation->civil_status = $request->get('civil_status');
      $updateinformation->barangay = $request->get('barangay');
      $updateinformation->city = $request->get('city');
      $updateinformation->zipcode = $request->get('zipcode');
      $updateinformation->address = $request->get('address');
      $updateinformation->region = $request->get('region'); 

   

      $updateinformation->municipality = $request->get('muns');
      $updateinformation->mocc = $request->get('moccupation');
      $updateinformation->mcontact  = $request->get('mcontact');
      $updateinformation->f_occ = $request->get('foccupation');
      $updateinformation->fcontact = $request->get('fcontact');
      $updateinformation->spouse_occupation = $request->get('soccupation');
      $updateinformation->spouse_contact  = $request->get('scontact');
      $updateinformation->no_of_child = $request->get('nchild');
      $updateinformation->religion=$request->get('religion');

      $updateinformation->update();

      $updateinformation->emp()->update([
                'email' => $request->get('email')
               
            ]);
 alert()->success('Updated Information', 'Successfully Updated!');
      return redirect('teacher/profile');

  }
    public function changepassword(Request $request){
      $this->validate($request,[
        'oldpassword' => 'required',
        'newpassword' =>'required',
        'confirmpassword'=>'required'

      ]);
    
    $teacher = Teacher_Login::find($request->get('teacherid'));

    $currentpassword = $teacher->password;
    $oldpassword = $request->get('oldpassword');
    $newpassword = $request->get('newpassword');
    $confirmpassword = $request->get('confirmpassword');
    if($currentpassword == $oldpassword){
      if($newpassword == $confirmpassword){

        $teacher->password = $confirmpassword;

        $teacher->save();
         alert()->success('Password Updated', 'Successfully Updated!');
        return redirect('/teacher/profile');
      }
      else{
        alert()->error('Not Match', 'New password And Confirm password Not match!');
              return redirect('/teacher/profile');
      }
    }
    else{
      alert()->error('Not Match', 'Incorrect Old Password');
            return redirect('/teacher/profile');
    
    }
    

       

    }
    public function editgrades(Request $request){




      $studentgrade = Grades::find($request->get('id'));

      $studentgrade->mid_grade=$request->get('midterm');
      $studentgrade->final_grade=$request->get('finals');

      $midtermgrade= $studentgrade->mid_grade;
      $finalsgrade = $studentgrade->final_grade;


      if($midtermgrade !="" && $finalsgrade !="" && $midtermgrade > 0 && $finalsgrade > 0 ){
        $average = $midtermgrade + $finalsgrade;
        $total= $average/2;
        $studentgrade->average_grade = $total ; 
        if($total >= 75){
        $studentgrade->grade_status ='Passed';}
        else{
        $studentgrade->grade_status='Failed';
      
        }
            
      }
 

      $studentgrade->save();
              
   echo json_encode($studentgrade);
  
    }
    public function corevalues(Request $request){

      $corevalues = corevalues::where([['student_id','=',$request->get('student_id')],['grade_level','=',$request->get('gradelevel')],['grading','=',$request->get('grading')]])->first();

      $grading= $request->get('grading');
      if($grading == "1st"){
        $corevalues->makadiyos1=$request->get('makadiyos1');
        $corevalues->makadiyos2=$request->get('makadiyos12');
        $corevalues->makatao1=$request->get('makatao1');
        $corevalues->makatao2=$request->get('makatao12');
        $corevalues->makakalikasan=$request->get('makakalikasan1');
        $corevalues->makabansa1=$request->get('makabansa1');
        $corevalues->makabansa2=$request->get('makabansa12');
        
        $corevalues->save();
       
   echo json_encode($corevalues);

       
      }
      if($grading =="2nd"){
    $corevalues->makadiyos1=$request->get('makadiyos21');
        $corevalues->makadiyos2=$request->get('makadiyos22');
        $corevalues->makatao1=$request->get('makatao21');
        $corevalues->makatao2=$request->get('makatao22');
        $corevalues->makakalikasan=$request->get('makakalikasan21');
        $corevalues->makabansa1=$request->get('makabansa21');
        $corevalues->makabansa2=$request->get('makabansa22');
        
        $corevalues->save();
             
   echo json_encode($corevalues);
      }
      if($grading =="3rd"){
        $corevalues->makadiyos1=$request->get('makadiyos31');
        $corevalues->makadiyos2=$request->get('makadiyos32');
        $corevalues->makatao1=$request->get('makatao31');
        $corevalues->makatao2=$request->get('makatao32');
        $corevalues->makakalikasan=$request->get('makakalikasan31');
        $corevalues->makabansa1=$request->get('makabansa31');
        $corevalues->makabansa2=$request->get('makabansa32');
        
        $corevalues->save();
    alert()->success('Grade Created', 'Successfully Updated!');
              
   echo json_encode($corevalues);
      }
      
      if($grading=="4th"){
        $corevalues->makadiyos1=$request->get('makadiyos41');
        $corevalues->makadiyos2=$request->get('makadiyos42');
        $corevalues->makatao1=$request->get('makatao41');
        $corevalues->makatao2=$request->get('makatao42');
        $corevalues->makakalikasan=$request->get('makakalikasan41');
        $corevalues->makabansa1=$request->get('makabansa41');
        $corevalues->makabansa2=$request->get('makabansa42');
        
        $corevalues->save();
      alert()->success('Grade Created', 'Successfully Updated!');
              
   echo json_encode($corevalues);
      }
      
    } 



public function schedulepdf(Request $request){

    $schedule = section_sub::with('section','subject')->where([['instructor_id','=',session()->get('instructor_id')],['semester','=',$request->get('semester')],['sch_yr','=',$request->get('schoolyear')]])->get();
     $pdf = PDF::loadView('teacherpdf.schedule',compact('schedule'));

        return $pdf->stream('schedule.pdf');
}
public function classadvisorypdf(Request $request){
   $section_mid = $request->get('section');
      $gradelevel = $request->get('gradelevel');


        $teacher = session()->get('instructor_id');
          $class = Students::whereHas('section', function($query) use ($teacher,$section_mid,$gradelevel){
                $query->where('instructor_id', '=', $teacher);
                $query->where('section_mid','=',$section_mid);
                $query->where('grade_level','=',$gradelevel);
            })->with(['section' => function($query) use ($teacher){
                $query->where('instructor_id', '=', $teacher);
           
            }])->get();


     $pdf = PDF::loadView('teacherpdf.classadvisory',compact('class'));

        return $pdf->stream('classadvisory.pdf');
}
public function gradespdf(Request $request){
   $students = Grades::with('teacher')->where([['instructor_id','=',session()->get('instructor_id')],['subject_id','=',$request->get('select_subject')],['grading_period','=',$request->get('semester')],['section_mid','=',$request->get('select_section')]])->get();

     $pdf = PDF::loadView('teacherpdf.grades',compact('students'));

        return $pdf->stream('grades.pdf');

}


public function classlistpdf(Request $request){
  $students = Grades::with('teacher')->where([['instructor_id','=',session()->get('instructor_id')],['subject_id','=',$request->get('select_subject')],['grading_period','=',$request->get('semester')],['section_mid','=',$request->get('select_section')]])->get();
  
     $pdf = PDF::loadView('teacherpdf.classlist',compact('students'));

        return $pdf->stream('classlist.pdf');
}

public function attendancelistpdf(Request $request){
         $attendancelist = Attendance::with('student','subject','section')->where([['instructor_id','=',session()->get('instructor_id')],['subject_id','=',$request->get('select_subject')],['section_mid','=',$request->get('select_section')],['semester','=',$request->get('semester')],['date','=',$request->get('date')]])->get();

     $pdf = PDF::loadView('teacherpdf.attendancelist',compact('attendancelist'));

        return $pdf->stream('attenadancelist.pdf');
}

public function studentpdf($student_id){
    $getcorevalues = corevalues::with('student')->where('student_id','=',$student_id)->get();
// dd($getcorevalues);
  $pdf = PDF::loadView('teacherpdf.studentpdf',compact('getcorevalues'))->setPaper('a4', 'landscape');
;

  return $pdf->stream('$student->lastname.pdf');


}

public function studentgradepdf($student_id){
      $students = Grades::with('students')->where([['student_id','=',$student_id],['instructor_id','=',session()->get('instructor_id')]])->get();

      $pdf = PDF::loadView('teacherpdf.studentgradepdf',compact('students'))->setPaper('a4', 'portrait');
;

  return $pdf->stream('$student->lastname.pdf');
}



public function displaystudentgrades(Request $request){

   $students = Grades::with('teacher', 'students', 'subjects','section')->where([['instructor_id','=',session()->get('instructor_id')],['subject_id','=',$request->get('select_subject')],['section_mid','=',$request->get('select_section')],['grading_period','=',$request->get('semester')]])->get();

   return response()->json(compact('students'));

  //  foreach($students as $student){

  // $outputt ='<tr>'.
  //             '<td>'.$student->subjects->subject_description.'</td>'.
  //            '<td>'.$student->section->section_description.'</td>'.
  //            '<td>'.$student->grading_period.'</td>'.
  //            '<td>'.$student->students->student_no.'</td>'.
  //            '<td>'.$student->students->lastname.' '.$student->students->firstname.' '.$student->students->middlename.'</td>'.
  //            '<td>'.$student->mid_grade.'</td>'.
  //            '<td>'.$student->final_grade.'</td>'.
  //            '<td>'.$student->average_grade.'</td>'.
  //            '<td>'.$student->grade_status.'</td>'.
              
      
  //              '<td><button class="btn btn-info" data-fullname="'.$student->students->lastname.' '.$student->students->firstname.'" data-subject="'.$student->subjects->subject_description.'"  data-section="'.$student->section->section_description.'" data-studentno="'.$student->grade_id.'" data-toggle="modal" class="btn btn-primary" data-midterm="'.$student->mid_grade.'" data-finals="'.$student->final_grade.'"data-target="#grades" >Edit</button> | <a href="/studentgradepdf/'.$student->student_id.'" class="btn btn-primary" ><span class="fa fa-print"></span> </a></td>'.
  //           '</tr>';
  // }

           
  //  echo json_encode($outputt);

        
    
   

}

}