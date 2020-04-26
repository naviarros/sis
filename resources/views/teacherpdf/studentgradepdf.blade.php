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

#customers tr:nth-child(even){background-color: #f2f2f2;}

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
  font-weight: bold;
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
  width: 40%;
  margin-left:60%;
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
<div>

  <div>
  <label>Name:</label> <label>{{$students[0]->students->lastname}} {{$students[0]->students->firstname}} {{$students[0]->students->middlename}}</label> <br>
  <label>Section:</label> <label>{{$students[0]->section->section_description}} </label>
</div>

<table id="customers">
  <thead>
    <tr>
     
      <th>Subject</th>
      <th>Grade Level</th>x
      <th>Midterm Grade</th>
      <th>Final Grade</th>
      <th>Average Grade</th>
      <th>Remarks</th>
    </tr>
  </thead>
  <tbody>
     @foreach($students as $student)
    <tr>

       <td>{{$student->subjects->subject_description}}</td>
        <td>{{$student->grade_level}}</td>
         <td>{{$student->mid_grade}}</td>
          <td>{{$student->final_grade}}</td>
           <td>{{$student->average_grade}}</td>
            <td>{{$student->grade_status}}</td>
    </tr>
   @endforeach
  </tbody>

</table>



   
  <footer>
    
    <hr> 
     {{session()->get('fullname')}}
   
 </footer>
</div>
