<?php

namespace App\Http\Controllers\Auth\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use PDF;
use Illuminate\Support\Facades\Session;
use App\Models\Stud_Login;
use App\Models\corevalues;
use App\Models\Attendance;
use App\Models\Students;
use App\Models\section_sub;
use App\Models\Summer;
use App\Models\Announcement;
use App\Models\Grades;
use App\Models\Sect_Maintenance;

class studentcontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('student');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcementstudent = Announcement::where('sendto', '=', 'Student')->orWhere('sendto', '=', 'All')->get();
        return view('students.portal.news', compact('announcementstudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function grades(){
        $gradeinfo = Grades::with('subjects', 'teacher')->where('student_id', '=', session()->get('studentid'))->get();
        $corevalues = corevalues::where('student_id', '=', session()->get('studentid'))->get();
        return view('students.portal.grades', compact('gradeinfo', 'corevalues'));
    }

    public function password(){
        return view('students.portal.changepassword');
    }

    public function changepassword(Request $request)
    {
        $change = Stud_Login::find(session()->get('stdloginid'));
        
        $oldpass = $change->password;

        $oldpassword = $request->get('oldpassword');
        $newpassword = $request->get('newpassword');
        $confirm = $request->get('confirmpassword');

        if($oldpass == $oldpassword){
            if($newpassword == $confirm)
            {
                $change->password = $confirm;
                $change->save();

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

        return redirect()->back();
    }

    public function attendance(){
        $attendance = Attendance::with('student.students')->where('qr_id', '=', session()->get('qr_id'))->get();
        return view('students.portal.attendance', compact('attendance'));
    }

    public function attendancedate(Request $request){
        $attend = Attendance::with('student.students')->where('qr_id', '=', session()->get('qr_id'))->where('date', 'like', '%'.$request->daysearch.'%')->get();
        return response()->json(compact('attend'));
    }

    public function schedules(){

        $semester = session()->get('semester');

        if($semester == "First Semester" || "Second Semester")
        {

             $schedule = section_sub::with('summersub')->where('section_mid', '=', session()->get('section_md'))->where('grade_level', '=', session()->get('grade_level'))->where('semester', '=', session()->get('semester'))->get();

              $section = Sect_Maintenance::with('subj')->where('section_mid', '=', session()->get('section_md'))->get();

              $student = Students::where('student_id', '=', session()->get('studentid'))->where('semester', '=', session()->get('semester'))->where('section_mid', '=', session()->get('section_md'))->get();

        return view('students.portal.schedule', compact('schedule', 'section', 'student'));
        }

        elseif($semester == 'Summer Semester'){
             $schedule = section_sub::whereHas('summersub', function($query){
            $query->where('student_id', '=', session()->get('studentid'));
        })->where('section_mid', '=', session()->get('section_md'))->where('grade_level', '=', session()->get('grade_level'))->Where('semester', '=', session()->get('semester'))->get();
              $section = Sect_Maintenance::with('subj')->where('section_mid', '=', session()->get('section_md'))->get();

              $student = Students::where('student_id', '=', session()->get('studentid'))->where('semester', '=', session()->get('semester'))->where('section_mid', '=', session()->get('section_md'))->get();

        return view('students.portal.schedule', compact('schedule', 'section', 'student'));

        }
    }

    public function regi(Request $request){
        $section_sub = Sect_Maintenance::with('subj')->where('section_mid', '=', session()->get('section_md'))->get();

        $grades = Grades::with('subjects')->where('student_id', '=', session()->get('studentid'))->where('grade_status', '=', 'Failed')->get();

        $subjects = section_sub::with('subject')->where('section_mid', '=', session()->get('section_md'))->get();

        foreach($grades as $grade){
            $subjects = $subjects->whereNotIn('prerequisite',array($grade->subjects->subject_description));
        }
        
        // $subjects = $subjectss->whereNotIn('prerequisite',array($grade->subjects->subject_description));

          // $subjects = $subjectss->whereNotIn('prerequisite',array($grade->subjects->subject_description));

        return view('students.portal.registration', compact('subjects', 'section_sub','grades'));
    }

    public function enrollment(Request $request){
        $subject = $request->get('subjects');
        $semester = $request->get('sem');
        $gradelevel = $request->get('glv');
        $teacher = $request->get('teacher');
        $core = $request->get('core');


          for($i=0; $i<count($teacher);$i++){
                        $enroll = Grades::firstOrCreate(['student_id' => session()->get('studentid'), 'subject_id' => $subject[$i], 'grading_period' => $semester[$i], 'student_id' => session()->get('studentid'), 'section_mid' => session()->get('section_md'), 'grade_level' => $gradelevel[$i], 'instructor_id' => $teacher[$i]]);
             }


        if($gradelevel[0] == '12' && $semester[0] == 'First Semester')
        {
            foreach($core as $core1)
            {
                $core = corevalues::firstOrCreate(['student_id' => session()->get('studentid'), 'grade_level' => $gradelevel[0], 'grading' => $core1]);
            }
        }
        
        foreach($request->get('sem') as $semester)
        {
            foreach($request->get('glv') as $gradelevel)
            {
                $student = Students::find(session()->get('studentid'));
                $student->semester = $semester;
                $student->grade_level = $gradelevel;
                $student->save();
            }
        }

        alert()->success('Subjects Enrolled', 'Successfully Created!');

        return redirect()->back();
    }

    public function profile(){
        $studentinfo = Stud_Login::with('student')->where('std_loginid', '=',session()->get('studentid'))->get();

        return view('students.portal.editprofile',compact('studentinfo'));
    }

    public function updateprofile(Request $request)
    {
          $updateinformation = Students::find(session()->get('studentid'));
          $updateinformation->religion = $request->religion;
          $updateinformation->barangay = $request->brgy;
          $updateinformation->city = $request->cty;
          $updateinformation->region = $request->region;
          $updateinformation->address = $request->address;
          $updateinformation->zipcode = $request->zipc;
          $updateinformation->elementarySchName = $request->elemSchName;
          $updateinformation->elemAddress = $request->elemAdd;
          $updateinformation->elemGradYr = $request->elemYr;
          $updateinformation->secondarySchName = $request->secSchName;
          $updateinformation->secAddress = $request->secAdd;
          $updateinformation->secYrGrad = $request->secYr;
          
          $updateinformation->update();

          $updateinformation->std_login()->update([
              'emailAddress' => $request->email
          ]);

          $updateinformation->parent()->update([
              'mother_lname' => $request->mlname,
              'mother_fname' => $request->mfname,
              'mother_mname' => $request->mmname,
              'mother_occ' => $request->mocc,
              'mother_cntact' => $request->contact,
              'father_lname' => $request->flname,
              'father_fname' => $request->ffname,
              'father_mname' => $request->fmname,
              'father_occ' => $request->focc,
              'father_cntact' => $request->fcntact
          ]);

          alert()->success('Updated Information', 'Successfully Updated!');
          return redirect()->back();
    }

    public function printgrades()
    {
        $grades = Grades::with('students')->where('student_id', '=', session()->get('studentid'))->get();

        $corevalues = corevalues::where('student_id', '=', session()->get('studentid'))->get();

        $pdf = PDF::loadView('/students/portal/print', compact('grades', 'corevalues'));

        return $pdf->stream('print.pdf');
    }

    public function voucher(){
        return view('students.portal.voucher');
    }
}
