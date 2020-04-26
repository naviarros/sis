@extends('masterpages.parentlayout')

@section('content')

<style type="text/css">
  
.taddress{
  width:700px;
}
.maincontent{
  width: 88%;
}
</style>
  <div class="baba">
      <ul class="nav nav-tabs mt-4 ml-5">
        <li class="nav-item">
          <a class="nav-link active text-dark" data-toggle="tab" href="#home">Personal Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " data-toggle="tab" href="#menu1">Change  Password</a>
        </li>
   
    </ul>
</div>
  
    <div class="tab-content">
      <div class="tab-pane container active ml-5 mt-3" id="home">
          <input type="hidden" name="teacherid" value="">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Personal Information</legend>
            <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  @foreach($profile as $guardianprofile)
                  <form method="post" action="{{route('mama')}}">
                    <input type="hidden" name="guardian_id" value="{{$guardianprofile->guardian_id}}">
                  <label>Last Name:</label>
                  <input type="text" name="" value="{{$guardianprofile->guardian_lname}}" class="form-control" disabled>
                </div>
              </div>
                {{csrf_field()}}
              <div class="form-group">
                <div class="col-md-12">
                  <label>First Name:</label>
                  <input type="text" name="" value="{{$guardianprofile->guardian_fname}}" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Middle Name:</label>
                  <input type="text" name="" value="{{$guardianprofile->guardian_mname}}"class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <label>Suffix:</label>
                </div>

                <div class="col-md-5">
               <input type="text" name="" value="" class="form-control" disabled>
                </div>
              </div>
            </div>
           <div class="row mt-2 ml-5">
              <div class="form-group">
                <div class="col-md-12">
                  <label>Relation:</label>
                </div>

                <div class="col-md-12">
               <input type="text" name="" disableD value="{{$guardianprofile->relation}}" class="form-control" >
                </div>
              </div>
            <div class="form-group">
                <div class="col-md-12">
                  <label>Email:</label>
                </div>

                <div class="col-md-12">
               <input type="text" name="email" style="width: 300px;" value="{{$guardianprofile->email}}" class="form-control" >
                </div>
              </div>
           

             <div class="form-group">
                <div class="col-md-12">
                  <label>Contact:</label>
                </div>

                <div class="col-md-12">
               <input type="text" name="contact" maxlength="11" onkeypress="return numbersOnly(event);"value="{{$guardianprofile->contact}}" class="form-control" >
                </div>
              </div>
           </div>
              <div class="row  ml-5">
             <div class="form-group">
                <div class="col-md-12">
                  <label>Address:</label>
                </div>

                <div class="col-md">
                <div class="taddress">
               <input type="text" name="address" value="{{$guardianprofile->address}}" class="form-control">
                </div>
              </div>
              <br>
                   <button class="btn btn-primary" type="submit" style="width: 100%;" > Update</button>
             
                 </div>
            </div>

            
      </fieldset>
    </form>
</div>
      <div class="tab-pane container fade" id="menu1">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Change Password</legend>
                     <form method="post" action="/parent/changepassword">
          <input type="hidden" name="guardian_id" value="{{$guardianprofile->guardian_id}}">
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
    </form>
      </div>
</div>
   @endforeach
@endsection