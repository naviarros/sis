<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login/admin', 'login\adminloginController@login')->name('admin.logins');
Route::get('/login/student', 'login\studentloginController@studlogin')->name('student.logins');
Route::get('/login/studentforgot', 'login\studentloginController@studentforgot');
Route::get('/login/teacherforgot', 'Auth\loginController@teacherforgot');
Route::get('/login/adminforgot', 'login\adminloginController@adminforgot');
Route::get('/login/parentforgot', 'Auth\parent\parentcontroller@parentforgot');
Route::post('/students/message', 'login\studentloginController@studentLogin');
Route::post('/admin/dashboard', 'login\adminloginController@adminlogin')->name('admin.login');

Route::get('/student/pdf', 'Auth\admin\admincontroller@listofstudentpdf')->name('overall.student');

Route::post('/login/teacherforgot', 'Auth\loginController@forgotpass')->name('teacher.forgotpass');
Route::post('/login/studentforgot', 'login\studentloginController@forgotpass')->name('student.forgotpass');
Route::post('/login/adminforgot', 'login\adminloginController@forgotpass')->name('admin.forgotpass');
Route::post('/login/parentforgot', 'Auth\parent\parentcontroller@forgotpass')->name('parent.forgotpass');
// Middleware for admin

// end of middleware

// Group admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::get('/announcement', 'Auth\admin\admincontroller@announcement');
	Route::get('/dashboard', 'Auth\admin\admincontroller@dashboard')->name('admin.dashboard');
	Route::get('/studentregistration', 'Auth\admin\admincontroller@studentreg')->name('student.reg');
	Route::get('/students', 'Auth\admin\admincontroller@studentslist');
	Route::get('/faculties', 'Auth\admin\admincontroller@instructor');
	Route::get('/generate', 'Auth\admin\admincontroller@qr');
	Route::get('/teachers', 'Auth\admin\admincontroller@teacher');
	Route::get('/sections', 'Auth\admin\admincontroller@sections');
	Route::get('/subjects', 'Auth\admin\admincontroller@subjects');
	Route::get('/rooms', 'Auth\admin\admincontroller@rooms');
	Route::get('/listofteachers', 'Auth\admin\admincontroller@listofteachers');
	Route::get('/enrollment', 'Auth\admin\admincontroller@enrollment');
	Route::get('/grades', 'Auth\admin\admincontroller@grades');
	Route::get('/analytics', 'Auth\admin\admincontroller@dataanalytics');
	Route::get('/listofannouncements', 'Auth\admin\admincontroller@listofannouncement');
	Route::get('/managesections', 'Auth\admin\admincontroller@sectionlist');
	Route::get('/sectionadviser', 'Auth\admin\admincontroller@sectionadviser');
	Route::get('/strands', 'Auth\admin\admincontroller@strands');
	Route::get('/curriculum', 'Auth\admin\admincontroller@curriculum');
	Route::get('/curriculumlists', 'Auth\admin\admincontroller@curriculumlists');
	Route::get('/retake', 'Auth\admin\admincontroller@retake');
	Route::get('/fees', 'Auth\admin\admincontroller@fees');
	Route::get('/summerclass', 'Auth\admin\admincontroller@summersched');
	Route::get('/studentarchive', 'Auth\admin\admincontroller@studentarchive');
	Route::get('/teachersarchive', 'Auth\admin\admincontroller@teacherarchive');
	Route::get('/studentgrades', 'Auth\admin\admincontroller@studentgrades');
	Route::get('/backup', 'Auth\admin\admincontroller@backup');
	Route::get('/changepassword', 'Auth\admin\admincontroller@changepassword');
	Route::get('/backupcreate', 'Auth\admin\admincontroller@createbackup')->name('createBackup');
	Route::get('/backupdownload/{file_name}', 'Auth\admin\admincontroller@download_backup');
	Route::get('/backupdelete/{file_name}', 'Auth\admin\admincontroller@delete_backup');
});

Route::get('/download', 'Auth\admin\admincontroller@download');
Route::get('/dataanalyst', 'Auth\admin\admincontroller@analytics');
// All edit commands
Route::get('/edit', 'Auth\admin\admincontroller@editsubject');
Route::get('/editschedule', 'Auth\admin\admincontroller@editschedule');

Route::get('/editroom', 'Auth\admin\admincontroller@editroom');

Route::get('/subjectedit', 'Auth\admin\admincontroller@subjectedit');

Route::get('/editadviser', 'Auth\admin\admincontroller@editadviser');

Route::get('/editteacher', 'Auth\admin\admincontroller@editteacher');

Route::get('/editstudent', 'Auth\admin\admincontroller@editstudent');

Route::get('/editenrollment', 'Auth\admin\admincontroller@editenrollment');

Route::get('/editsection', 'Auth\admin\admincontroller@editsection');

Route::get('/edittrack', 'Auth\admin\admincontroller@edittrack');

Route::get('/strandedit', 'Auth\admin\admincontroller@editstrand');

Route::get('/emailverification', 'Auth\admin\admincontroller@sendEmailDone')->name('sendEmailDone');
// ------------------------------------------------------

// All search commands and controls
Route::get('/search', 'Auth\admin\admincontroller@searchsubject');
Route::get('/searchadviser', 'Auth\admin\admincontroller@searchsectionadviser');
Route::get('/searchsections', 'Auth\admin\admincontroller@searchsections');
Route::get('/searchad', 'Auth\admin\admincontroller@searchadviser');
Route::get('/studsearch', 'Auth\admin\admincontroller@studsearch');
Route::get('/searchqr', 'Auth\admin\admincontroller@searchqr');
Route::get('/studsearchrec', 'Auth\admin\admincontroller@studsearchrec');
Route::get('/searchstudents', 'Auth\admin\admincontroller@searchstudents');
Route::get('/searchgrade', 'Auth\admin\admincontroller@searchgrade');
Route::get('/searchlevel', 'Auth\admin\admincontroller@searchlevel');
Route::get('/searchsub', 'Auth\admin\admincontroller@searchsub');
Route::get('/subjreg', 'Auth\admin\admincontroller@subjreg');
Route::get('/sectionsearch', 'Auth\admin\admincontroller@sectionsearch');
Route::get('/searchstrandsubj', 'Auth\admin\admincontroller@searchstrandsubj');
Route::get('/searchstrandsubj2', 'Auth\admin\admincontroller@searchstrandsubj2');
Route::get('/searchst', 'Auth\admin\admincontroller@stsrc');
Route::get('/searchtc', 'Auth\admin\admincontroller@sttch2');
Route::get('/searchsectionsubs', 'Auth\admin\admincontroller@searchsectionsubs');
Route::get('/serchsbj', 'Auth\admin\admincontroller@serchsbj');
Route::get('/curriculumsc', 'Auth\admin\admincontroller@curriculumsc');
Route::get('/perstrandanalyticssearch', 'Auth\admin\admincontroller@perstrandanalytics');
Route::get('/perstrandanalyticsgendersearch', 'Auth\admin\admincontroller@perstrandanalyticsgender');
//----------------------

Route::get('/admin/printsectionsubjects/{section_mid}', 'Auth\admin\admincontroller@listofsubjectsection');
// Print Lists of Subjects
Route::get('/admin/printsubjects', 'Auth\admin\admincontroller@generatesubject');
//------------------------------

// Generate Student Report
Route::get('/admin/printstudents/{student_id}', 'Auth\admin\admincontroller@generatestudent');
//--------------------------------

// Generate Teacher Report
Route::get('/admin/printteacher/{instructor_id}', 'Auth\admin\admincontroller@generateteacher');
//----------------------------------------

// Generate Section Lists
Route::get('/admin/printsection', 'Auth\admin\admincontroller@generatesectionlist');
Route::get('/admin/printsectionstudents/{section_mid}', 'Auth\admin\admincontroller@generatesectionstudents');
//-------------------------------
// Registration card for students
Route::get('/admin/registrationcard/{student_id}', 'Auth\admin\admincontroller@generateregi');
//----------------------

// Printing out of student receipt
Route::get('/admin/receipt/{student_id}', 'Auth\admin\admincontroller@generatereceipt');
//----------------

Route::get('/admin/viewgrades/{student_id}', 'Auth\admin\admincontroller@viewgrades');

Route::get('/downloadresume/{teacher_id}', 'Auth\admin\admincontroller@downloadresume');

Route::get('/downloadqr/{student_id}', 'Auth\admin\admincontroller@printqr');
//----------------

// Printing of Grades for Students
Route::get('/students/print', 'Auth\students\studentcontroller@printgrades');
//----------------

Route::get('/curriculumres', 'Auth\admin\admincontroller@curriculumresult');

Route::get('/searchyr', 'Auth\admin\admincontroller@searchcurriculum');
Route::get('/sectsubsearch', 'Auth\admin\admincontroller@sectsubsearch');
Route::get('/searchteacher', 'Auth\admin\admincontroller@searchteacher');
Route::get('/curlistsearch', 'Auth\admin\admincontroller@curlistsearch');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::post('/faculties', 'Auth\admin\admincontroller@teacherregistration')->name('teacher.store');
	Route::post('/rooms', 'Auth\admin\admincontroller@roomsregistration')->name('room.new');
	Route::post('/studentregistration', 'Auth\admin\admincontroller@studentregistration')->name('student.register');
	Route::post('/strands', 'Auth\admin\admincontroller@strandregistration')->name('strand.new');
	Route::post('/subjects', 'Auth\admin\admincontroller@subjectregistration')->name('subj.main.new');
	Route::post('/managesections', 'Auth\admin\admincontroller@strandsubject')->name('subj.new');
	Route::post('/schedulemaintenance', 'Auth\admin\admincontroller@schedulemaintenance')->name('sched.new');
	Route::post('/assignteacher', 'Auth\admin\admincontroller@assignteacher')->name('assign.teacher');
	Route::post('/sections', 'Auth\admin\admincontroller@sectionmaintenance')->name('section.new');
	Route::post('/curriculum', 'Auth\admin\admincontroller@setcurriculum')->name('add.curriculum');
	Route::post('/roomdelete', 'Auth\admin\admincontrolelr@roomdelete');
	Route::post('/grades', 'Auth\admin\admincontroller@grade');
	Route::post('/retake', 'Auth\admin\admincontroller@retakeinsert')->name('insert.retake');
	Route::post('/fees', 'Auth\admin\admincontroller@schoolfees')->name('create.fees');
	Route::post('/announcement', 'Auth\admin\admincontroller@makeannouncement')->name('create.announcement');
	Route::post('/strand', 'Auth\admin\admincontroller@trackregistration')->name('track.registration');
	Route::post('/undostudent', 'Auth\admin\admincontroller@undostudent');
	Route::post('/summerclass', 'Auth\admin\admincontroller@summerstrandsubject')->name('summer.new');
	Route::post('/changepassword', 'Auth\admin\admincontroller@passchange')->name('admin.pass');
});

Route::group(['prefix' => 'admin'], function(){
	Route::put('/managesections', 'Auth\admin\admincontroller@updateschedule')->name('sched.upd');
	Route::put('/rooms', 'Auth\admin\admincontroller@updateroom')->name('update.room');
	Route::put('/subjectupdate', 'Auth\admin\admincontroller@subjectupdate')->name('update.subject');
	Route::put('/updateadviser', 'Auth\admin\admincontroller@updateadviser')->name('update.adviser');
	Route::put('/updateteacher', 'Auth\admin\admincontroller@updateteacher')->name('update.teacher');
	Route::put('/updatesection', 'Auth\admin\admincontroller@updatesection')->name('update.sect');
	Route::put('/enrollment', 'Auth\admin\admincontroller@updateenrollment')->name('update.enrollment');
	Route::put('/updatestudent', 'Auth\admin\admincontroller@updatestudent')->name('update.student');
	Route::put('/updatetrack', 'Auth\admin\admincontroller@updatetrackcodes')->name('update.track');
	Route::put('/updatestrand', 'Auth\admin\admincontroller@updatestrand')->name('update.strand');
});
// end group

// admin delete group
Route::group(['prefix' => 'admin'], function(){
	Route::post('/deletecurriculum/{curriculum_id}', 'Auth\admin\admincontroller@deletecurriculum');
	Route::post('/deleteroom/{room_id}', 'Auth\admin\admincontroller@deleteroom');
	Route::post('/removesection/{section_mid}', 'Auth\admin\admincontroller@removesection');
	Route::post('/removeteacher/{instructor_id}', 'Auth\admin\admincontroller@removeteacher');
	Route::post('/removestudent/{student_id}', 'Auth\admin\admincontroller@removestudent');
	Route::post('/restorestudent/{student_id}', 'Auth\admin\admincontroller@restorestudent');
	Route::post('/restoreteacher/{instructor_id}', 'Auth\admin\admincontroller@restoreteacher');
	Route::post('/deleteannouncement/{announcement_id}', 'Auth\admin\admincontroller@deleteannouncement');
	Route::post('/deletesubjects/{subject_id}', 'Auth\admin\admincontroller@deletesubject');
	Route::post('/deletestrand/{strand_id}', 'Auth\admin\admincontroller@removestrand');
	Route::post('/deletesectsub/{section_subj_id}', 'Auth\admin\admincontroller@deletesectsub');
});

//-----------------


// Route::get('/admin/announcement', 'Auth\admin\admincontroller@announcement');
// Route::get('/admin/dashboard', 'Auth\admin\admincontroller@dashboard');

Route::group(['prefix' => 'students', 'middleware' => 'student'], function(){
	Route::get('/message', 'Auth\students\studentcontroller@index');
	Route::get('/grades', 'Auth\students\studentcontroller@grades');
	Route::get('/attendance', 'Auth\students\studentcontroller@attendance');
	Route::get('/schedule', 'Auth\students\studentcontroller@schedules');
	Route::get('/voucher', 'Auth\students\studentcontroller@voucher');
	Route::get('/registration', 'Auth\students\studentcontroller@regi');
	Route::get('/profile', 'Auth\students\studentcontroller@profile');
	Route::get('/changepassword', 'Auth\students\studentcontroller@password');
});

Route::get('/searchattendance', 'Auth\students\studentcontroller@attendancedate');

Route::group(['prefix' => 'students', 'middleware' => 'student'], function(){
	Route::post('/editprofile', 'Auth\students\studentcontroller@updateprofile')->name('student.profileedit');
	Route::post('/registration', 'Auth\students\studentcontroller@enrollment')->name('stud.enroll');
	Route::post('/changepassword', 'Auth\students\studentcontroller@changepassword')->name('change.pass');
});

Route::get('/logout', 'login\studentloginController@studentLogout');
Route::get('/admin/logout', 'login\adminloginController@adminlogout');

Route::group(['prefix' => 'teacher'], function(){
Route::get('/teacherlayout','Auth\teacher\teachercontroller@teacherlayout');
Route::get('/announcement','Auth\teacher\teachercontroller@announcementpages');
Route::get('/grades','Auth\teacher\teachercontroller@gradespages');
Route::get('/classlist','Auth\teacher\teachercontroller@classlistpages');
Route::get('/listofattendance','Auth\teacher\teachercontroller@listofattendancepages');
Route::get('/profile','Auth\teacher\teachercontroller@profilepages');
Route::get('/schedule','Auth\teacher\teachercontroller@schedulepages');
Route::get('/studentattendance','Auth\teacher\teachercontroller@studentattendancepages');
Route::get('/camera','Auth\teacher\teachercontroller@camera');
Route::get('/classadvisory','Auth\teacher\teachercontroller@classadvisory');
Route::get('/getcorevalues','Auth\teacher\teachercontroller@getcorevalues');
Route::get('/gradesgetsection/{id}','Auth\teacher\teachercontroller@gradesgetsection');
});

Route::group(['prefix' => 'teacher'],function(){

Route::post('/studentattendance','Auth\teacher\teachercontroller@getattendance');
Route::post('/getstudentinformation','Auth\teacher\teachercontroller@getstudentinformation');
Route::post('/getsection','Auth\teacher\teachercontroller@getsection');
Route::post('/getsemester','Auth\teacher\teachercontroller@getsemester');
Route::post('/updateinformation','Auth\teacher\teachercontroller@updateinformation');
Route::patch('/inputgrades','Auth\teacher\teachercontroller@editgrades')->name('editgrades');
Route::patch('/corevalues','Auth\teacher\teachercontroller@corevalues')->name('corevalues');
Route::post('/changepassword','Auth\teacher\teachercontroller@changepassword');
Route::post('/displaystudentgrade','Auth\teacher\teachercontroller@displaystudentgrades');
Route::post('/attendancelist','Auth\teacher\teachercontroller@attendancelist');
Route::post('/getclassadvisory','Auth\teacher\teachercontroller@getclassadvisory');
Route::post('/getschedule','Auth\teacher\teachercontroller@getschedule');

});


Route::group(['prefix'=>'parent'],function(){

Route::get('/parent','Auth\parent\parentcontroller@layout');
Route::get('/profile','Auth\parent\parentcontroller@profile');
Route::get('/listofattendance','Auth\parent\parentcontroller@listofattendance');
Route::get('/loginform','Auth\parent\parentcontroller@loginform')->name('parent.logins');
Route::get('/scheduleofstudent','Auth\parent\parentcontroller@scheduleofstudent');
Route::get('/gradesofstudent','Auth\parent\parentcontroller@gradesofstudent');
Route::get('/logout','Auth\parent\parentcontroller@parentlogout');
});

Route::group(['prefix'=>'parent'],function(){
Route::post('/updateinformation','Auth\parent\parentcontroller@updateinformation')->name('mama');
Route::post('/login','Auth\parent\parentcontroller@login');
Route::post('/changepassword','Auth\parent\parentcontroller@changepassword');
Route::post('/listofattendanceofstudent','Auth\parent\parentcontroller@listofattendanceofstudent');

});

Route::get('/', function () {
    return view('welcome');
});



//pdf in teacher module
Route::post('/schedulepdf','Auth\teacher\teachercontroller@schedulepdf');
Route::post('/gradespdf','Auth\teacher\teachercontroller@gradespdf');
Route::post('/classadvisorypdf','Auth\teacher\teachercontroller@classadvisorypdf');
Route::post('/classlistpdf','Auth\teacher\teachercontroller@classlistpdf');
Route::post('/attendancelistpdf','Auth\teacher\teachercontroller@attendancelistpdf');
Route::get('/studentpdf/{id}','Auth\teacher\teachercontroller@studentpdf');
Route::get('/studentgradepdf/{id}','Auth\teacher\teachercontroller@studentgradepdf');


Route::group(['prefix'=>'login'],function(){
Route::get('/teacherform','Auth\loginController@teacherloginform')->name('teacher.logins');
Route::get('/teacherlogout','Auth\loginController@teacherlogout');

});
Route::group(['prefix'=>'login'],function(){


Route::post('/teacher','Auth\loginController@teacher');

});
