@extends('masterpages.teacherlayout')



@section('content')
<style type="text/css">
  
.taddress{
  width:500px;
}
 .baba ul{
  background-color:#AAD036;
}
.ss{
  margin-left:-55px;
}
.maincontent{
        width: 85%;
}
</style>
<div class="ss">
  <div class="baba">
      <ul class="nav nav-tabs mt-4 ml-5">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Personal Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Family Background</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Education Background</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu3">Change Password</a>
        </li>
    </ul>
</div>
@foreach($teacherinformation as $teacher)
    <div class="tab-content">
      <div class="tab-pane container active ml-5 mt-3" id="home">
        <form method="post" action="/teacher/updateinformation">
          <input type="hidden" name="teacherid" value="{{$teacher->instructor_id}}">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Personal Information</legend>
            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Last Name:</label>
                  <input type="text" name="" value="{{$teacher->lastname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>First Name:</label>
                  <input type="text" name="" value="{{$teacher->firstname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Middle Name:</label>
                  <input type="text" name="" value="{{$teacher->middlename}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Suffix:</label>
                </div>

                <div class="col-md-5">
               <input type="text" name="" value="{{$teacher->suffixname}}"  class="form-control" disabled>
                </div>
              </div>
            </div>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-2">
                  <label>Gender:</label>
                </div>
                <div class="col-md-12">
               <input type="text" name="" value="{{$teacher->gender}}"  class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Date of Birth:</label>
                  <input type="text" name="" value="{{$teacher->bday}}"  disabled class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Place of Birth:</label>
                  <select class="form-control" name="placeofbirth" disabled >
                    <option selected value="{{$teacher->placeofbirth}}"> {{$teacher->placeofbirth}}</option>
                    <option></option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Age:</label>
                  <select class="form-control" disabled>
                    <option>{{$teacher->age}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Civil Status:</label>
                  <select class="form-control" name="civil_status">
                    <option value="{{$teacher->civil_status}}"> {{$teacher->civil_status}}</option>
                    <option></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widow">Widow</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Nationality:</label>
                  <select class="form-control" disabled>
                    <option>{{$teacher->nationality}}</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Religion:</label>
                  <select class="form-control" name="religion">
                    <option  value="{{$teacher->religion}}" selected> {{$teacher->religion}}</option>
                    <option>--- Religion ---</option>
                    <option value="Roman Catholic">Roman Catholic</option>
                    <option value="Iglesia Ni Cristo">Iglesia ni Cristo</option>
      
                    <option value="Islam">Islam</option>
                    <option value="Others"> Others</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Region:</label>
                  <select class="form-control" name="region" id="region">
                    <option selected value="{{$teacher->region}}"> {{$teacher->region}}</option>
                    <option></option>
                            <option value="National Capital Region">National Capital Region</option>
                                <option value="ARMM">ARMM</option>
                                <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
                                <option value="Region I - Ilocos Region">Region I - Ilocos Region</option>
                                <option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
                                <option value="Region III - Central Luzon">Region III - Central Luzon</option>
                                <option value="Region IV-A - CALABARZON">Region IV-A - CALABARZON</option>
                                <option value="Region IV-B - MIMAROPA">Region IV-B - MIMAROPA</option>
                                <option value="Region V - Bicol Region">Region V - Bicol Region</option>
                                <option value="Region VI - Western Visayas">Region VI - Western Visayas</option>
                                <option value="Region VII - Central Visayas">Region VII - Central Visayas</option>
                                <option value="Region VIII - Eastern Visayas">Region VIII - Eastern Visayas</option>
                                <option value="Region IX - Zamboanga Peninsula">Region IX - Zamboanga Peninsula</option>
                                <option value="Region X - Northern Mindanao">Region X - Northern Mindanao</option>
                                <option value="Region XI - Davao Region">Region XI - Davao Region</option>
                                <option value="Region XII - SOCCSKSARGEN">Region XII - SOCCSKSARGEN</option>
                                <option value="Region XIII - CARAGA Region">Region XIII - CARAGA Region</option>
                              </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>City:</label>
                  <select class="form-control" name="city" id="city">
                    <option value="{{$teacher->city}}" selected> {{$teacher->city}}</option>
                    <option>----</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-12">
                      <label>Municipality:</label>
                      <select class="form-control" name="muns" id="muns">
                          <option value="{{ $teacher->municipality}}">{{ $teacher->municipality}}</option>
                          <option></option>
                      </select>
                  </div>
              </div>
            </div>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Barangay:</label>
                  <select class="form-control" name="barangay" id="bgy">
                      <option value="{{$teacher->barangay}}">{{$teacher->barangay}}</option>
                    <option>------------</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <label>Zip Code:</label>
                  <select class="form-control" name="zipcode" id="zipcode">
                    <option value="{{$teacher->zipcode}}"> {{$teacher->zipcode}}</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Address:</label>
                  <div class="taddress">
              <input type="text" name="address" value="{{$teacher->address}}"class="form-control">
            </div>
              </div>
              </div>
            </div>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Contact:</label>
              <input type="text" maxlength = "11"  onkeydown="return numbersOnly(event);" name="contact" value="{{$teacher->contact}}"class="form-control">
              </div>
              </div>
              <div class="form-group">
                <div class="col-md-13">
                  <label>Email Address:</label>
   
                  <input  style="width:450px;" type="email" name="email" value="{{$teacher->emp->email}}" class="form-control" required>
            
                </div>
              </div>
                 
            </div>
      
          </fieldset>
      </div>

      <div class="tab-pane container fade ml-5 mt-3" id="menu1">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Family Background/Information</legend>
            <h6 class="mt-2 ml-5"><b>Mother Information:</b></h6>
            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Mother's Last Name:</label>
                  <input type="text" name="mlastname" value="{{$teacher->mlname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Mother's First Name:</label>
                  <input type="text"  value="{{$teacher->mfname}}" name="mfirstname" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Mother's Middle Name: </label>
                  <input type="text" name="mmiddlename" value="{{$teacher->mmiddle}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Occupation:</label>
                  <input type="text" value="{{$teacher->mocc}}" name="moccupation" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Contact Number:</label>
                  <input type="text" name="mcontact"  onkeydown="return numbersOnly(event);" value="{{$teacher->mcontact}}"class="form-control">
                </div>
              </div>
            </div>

            <h6 class="mt-2 ml-5"><b>Father Information:</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Father's Last Name:</label>
                  <input type="text" name="flastname" value="{{$teacher->flname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Father's First Name:</label>
                  <input type="text" name="ffirstname" value="{{$teacher->ffname}}"class="form-control" disabled>  
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Father's Middle Name: </label>
                  <input type="text" name="fmiddle"  Value="{{$teacher->fmname}}"class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Occupation:</label>
                  <input type="text" name="foccupation" value="{{$teacher->f_occ}}" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Contact Number:</label>
                  <input type="text" name="fcontact" onkeydown="return numbersOnly(event);" value="{{$teacher->fcontact}}"class="form-control">
                </div>
              </div>
            </div>
                <h6 class="mt-2 ml-5"><b>Spouse Information:</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Last Name:</label>
                  <input type="text" name="slastname" value="{{$teacher->spouse_lname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>First Name:</label>
                  <input type="text" name="sfirstname" value="{{$teacher->spouse_fname}}" class="form-control" disabled>  
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label> Middle Name: </label>
                  <input type="text" name="smiddle" value="{{$teacher->spouse_mname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Occupation:</label>
                  <input type="text" name="soccupation" value="{{$teacher->spouse_occupation}}" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Contact Number:</label>
                  <input type="text" name="scontact" onkeydown="return numbersOnly(event);" value="{{$teacher->spouse_contact}}" class="form-control">
                </div>
              </div>
            </div>
             <h6 class="mt-2 ml-5"><b>Children'Information:</b></h6>

            <div class="row mt-2 ml-5">
             
              <div class="col-md-12">
                No. of child
              </div>
              <div class="col-md-10"> 
                <input type="text" name="nchild" maxlength="2" onkeydown="return numbersOnly(event);" class="form-control" value="{{$teacher->no_of_child}}">
              </div>
              
              </div>
              <br>
        <button class="btn btn-primary ml-5" style="width: 90%;" > Update</button>
             
          </fieldset>

      </div>


      <div class="tab-pane container fade ml-5 mt-3" id="menu2">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Education Background</legend>
            <h6 class="mt-2 ml-5"><b>Primary Education:</b></h6>
            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label> School:</label>
                  <input type="text" name=""  value="{{$teacher->elem_schname}}"class="form-control" disabled>
                </div>
              </div>

            <!--   <div class="form-group">
                <div class="col-md-12">
                  <label>School Address:</label>
                  <input type="text" name="" value="Dasmariñas Cavite"class="form-control" disabled>
                </div>
              </div> -->

              <div class="form-group">
                <div class="col-md-12">
                  <label>Year Graduated:</label>
                 <div class="col-md-6">
             <input type="text" name="" value="{{$teacher->elem_gradyr}}" disabled class="form-control">
             </div>
                </div>
              </div>
            </div>

            <h6 class="mt-2 ml-5"><b>Secondary Education:</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>School:</label>
                  <input type="text" name="" value="{{$teacher->hs_schname}}" class="form-control" disabled>
                </div>
              </div>

             <!--  <div class="form-group">
                <div class="col-md-12">
                  <label>School Address:</label>
                  <input type="text" name="" value="Dasmariñas City" class="form-control" disabled>
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-md-12">
                  <label>Year Graduated:</label>
                 <div class="col-md-6">
             <input type="text" name="" value="{{$teacher->hs_gradyr}}" disabled class="form-control">
             </div>
                </div>
              </div>
            </div>
            <h6 class="mt-2 ml-5"><b>Tertiary Education:</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>School:</label>
                  <input type="text" name="" value="{{$teacher->clg_schname}}" class="form-control" disabled>
                </div>
              </div>

              <!-- <div class="form-group">
                <div class="col-md-12">
                  <label>School Address:</label>
                  <input type="text" name=""  value="Mabini Campus, Anonas St., Sta. Mesa
Manila, Philippines 1016"class="form-control" disabled>
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-md-12">
                  <label>Year Graduated:</label>
                 <div class="col-md-6">
             <input type="text" name="" value="{{$teacher->clg_gradyr}}" disabled class="form-control">
             </div>
                </div>
              </div>

            </div>
            <h6 class="mt-2 ml-5"><b>Post Grad :</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>School:</label>
                  <input type="text" name=""  value="{{$teacher->mstrs_schname}}" class="form-control" disabled>
                </div>
              </div>

           <!--    <div class="form-group">
                <div class="col-md-12">
                  <label>School Address:</label>
                  <input type="text" name="" value="Mabini Campus, Anonas St., Sta. Mesa
Manila, Philippines 1016" class="form-control" disabled="">
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-md-12">
                  <label>Year Graduated:</label>
                 <div class="col-md-6">
             <input type="text" name="" value="{{$teacher->mstrs_gradyr}}" disabled class="form-control">
             </div>

                </div>

              </div>
            </div>
 <h6 class="mt-2 ml-5"><b>Doctorate:</b></h6>

            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>School:</label>
                  <input type="text" name="" value="{{$teacher->dctr_schname}}" class="form-control" disabled>
                </div>
              </div>

              <!-- <div class="form-group">
                <div class="col-md-12">
                  <label>School Address:</label>
                  <input type="text" name=""  value="Mabini Campus, Anonas St., Sta. Mesa
Manila, Philippines 1016"class="form-control" disabled>
                </div>
              </div> -->
              
              <div class="form-group">
                <div class="col-md-12">
                  <label>Year Graduated:</label>
                   <div class="col-md-6">
             <input type="text" name="" value="{{$teacher->dctr_gradyr}}" disabled class="form-control">
             </div>
                </div>
              </div>

            </div>
          </fieldset>
          {{csrf_field()}}
</form>

      </div>
     
      <div class="tab-pane container fade ml-5 mt-3" id="menu3">
        <form method="post" action="/teacher/changepassword">
          <input type="hidden" name="teacherid" value="{{$teacher->instructor_id}}">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Change Password</legend>
                 <div class="row">
                  <div class="col-md-4">
                 <label>Old Password</label>
                 <input type="password" name="oldpassword" class="form-control">
               </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4">
                 <label>New Password</label>
                 <input type="password" name="newpassword" class="form-control">
                 </div></div>
                 <div class="row">
                     <div class="col-md-4">
                 <label>Confirm Password</label>
                 <input type="password" name="confirmpassword" class="form-control">
                     </div>
                 </div>
                 @csrf
                   <button  type="submit" class="btn btn-primary ml-2" style="width: 95%; margin-top: 15px;" > Update</button>
                 </fieldset>
               </form>
            </div>
      
          </fieldset>
      </div>


    </div>
@endforeach
  </div>
  


@endsection