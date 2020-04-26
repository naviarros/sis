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
<div>
	 <table  id="customers" width="100%">
          <thead>
            <tr>
          <th>Section</th>
          <th>  Subject </th>
          
          <th>  Schedule </th>
          <th> Room</th>
          </tr>
          </thead>
          <tbody> 
            @foreach($schedule as $sched)
            <tr>
              <td>{{$sched->section->section_description}}</td>
              <td>{{$sched->subject->subject_description}}</td>
              <td>{{$sched->start}}-{{$sched->end}}/ {{$sched->start1}}-{{$sched->end1}}/ {{$sched->start2}}-{{$sched->end2}}</td>
              <td>{{$sched->room}}/ {{$sched->room1}}/ {{$sched->room2}}</td>
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
