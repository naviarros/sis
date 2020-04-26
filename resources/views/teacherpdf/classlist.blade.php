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
  width: 40%;
  margin-left:60%;
}
.jacob{

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
  <table width="100%">
    <tr>
      <td><label>Subject:</label><b> <label>{{$students[0]->subjects->subject_description}}</label> </b></td>
      <td><label>Semester</label><b> <label> {{$students[0]->grading_period}}</label> </b></td>
    </tr>
    <tr>
       <td><label>Section:</label> <b> <label> {{$students[0]->section->section_description}} </label>  </b> </td>
    </tr>

  </table>
  
	 <table id="customers" style="width: 100%; margin-top:10px;">
          <thead> 
            <tr>
           
              <th>Student No.</th>
              <th>Full name</th>
          
 
            </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
            <tr>
              
              <td>{{$student->students->student_no}}</td>
              <td>{{$student->students->lastname}} {{$student->students->firstname}} {{$student->students->middlename}}</td>
          
            </tr>
            @endforeach
        </tbody>
      
    </table>
  <footer>
    
    <label style="
  border:1px; border-top: 1px solid;
"> {{session()->get('fullname')}}</label>
    
   
 </footer>
</div>
