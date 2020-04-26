<!DOCTYPE html>
<html>
<head>
  <title></title>
<!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->

<style type="text/css">
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}


#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.header{
  margin-left:1%;


}
.info{
margin-top: -12%;
margin-left: 24%;
/*background-color:#13355F;
color:white;*/
width: 60%;
height: 20%;
}
.image{

}
label{
  
}

  footer {
                position: fixed; 
                bottom: -20px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

        text-align:right;
            }
hr{
  width: 35%;
  margin-left:66%;
}
</style>
</head>
<body>

  

<div class="header">
  <div class="image">
  <img src="images/eclarologo.png"  width="170px">
  </div>
  <div class="info">
<LABEL style=" font-size: 130%;">Eclaro  Academy</LABEL>
<br>
   <label  style=" font-size: 90%;">Zuzuarregui St, Matandang Balara, Quezon City, Metro Manila</label>
   <br>
  <label  style=" font-size: 90%;">Tel. No. 441-0501</label>
 <br>
  <label  style=" font-size: 90%;">eclaroacademy/official@yahoo.com</label>
  
</div>

</div>
  <table width="100%">
    <tr>
      <td> <label>Subject:</label><b> <label>{{$attendancelist[0]->subject->subject_description}}</label> </b></td>
      <td><label>Semester</label><b> </td>
      <td><label> {{$attendancelist[0]->semester}}</label> </b></td>
    </tr>
    <tr>
       <td><label>Section:</label> <b><label>{{$attendancelist[0]->section->section_description}} </label>  </b> </td>
       <td><label>Date:</label> </td>
       <td><b> <label>{{$attendancelist[0]->date}}</label>  </b></td>
    </tr>

  </table>
  

   

	 <table id="customers" style="width: 100%">
       <thead>
      <tr>  
        <th>Student No</th>
        <th>Full Name</th>
        <th>Time</th>
      </tr>
      </thead>
          @foreach($attendancelist as $attendance)
        <tr>
          <td>{{$attendance->student->students->student_no}}</td>
          <td> {{$attendance->student->students->lastname}}  {{$attendance->student->students->firstname}} {{$attendance->student->students->middlename}}</td>
  
          <td>{{$attendance->time_in}}</td>
          @endforeach
        </tr>
       
    </table>
  <footer>
    <div style="margin-top: -150px;">
      <label style="float: left; border-top: 1px solid"><b>{{ session()->get('fullname')}}</b> <br>Signature over Printed Name</label>
      <label style="float: right; border-top: 1px solid;">Signature over Printed Name <br><b>School Administrator</b></label>

      <div style="text-align: center; margin-top: 100px; border-top: 1px solid black">
        <label>4-F Estolano Bldg. EDSA cor. Aurora Blvd. Cubao, Quezon City</label>
        <br>
        <label>Website:<label style="text-decoration: underline; color: blue"> www.facebook.com/EACAD.PH </label><label>Email:</label><label style="text-decoration: underline; color: blue"> eclaroacademy/official@yahoo.com </label></label><br>
        <label style="font-size: 25px;"><b><i>"LEARN TODAY. LEAD TOMORROW"</i></b></label>
      </div>
    </div>
  </footer>
</div>
