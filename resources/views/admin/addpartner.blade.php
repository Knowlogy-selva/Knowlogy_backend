@extends('layout.master')

@section('title', 'Add Partner')

@section('content')


<!--  -->
     <div class="row">
          <div class="col-lg-12">
          <h1 class="h3 mb-3">Add Partner</h1>
               <div class="card">
                    <div class="card-body">
                         <form action="partner_datail_insert" method="post" autocomplete="off">
                              @csrf
                         <div class="row">
                              <div class="col-lg-2">
                                        <div class="pdetails">
                                             <h6>Partner Name :</h6>
                                             <h6>Partner Code :</h6>
                                             <h6>Contact Person :</h6>
                                             <h6>Location :</h6>
                                             <h6>City :</h6>
                                             <h6>State :</h6>
                                        </div>
                              </div>
                              <div class="col-lg-4">
                                   <!--  input-feild-start -->
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pname" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pcode" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="cperson" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name ="plocation" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pcity" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pstate" class="form-control" >
                                        </div>
                                   </div>
                                   <!-- input-feild-end -->
                                   
                              </div>
                              <div class="col-lg-2">
                                        <div class="pdetails">
                                             <h6>Website :</h6>
                                             <h6>Fax :</h6>
                                             <h6>Phone :</h6>
                                             <h6>Mobile :</h6>
                                             <h6>Mail ID :</h6>
                                             <h6>Address :</h6>
                                             
                                        </div>
                              </div>
                              <div class="col-lg-4">
                                   
                                    <!--  input-feild-start -->
                                    <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pwebsite" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pfax" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pphone" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pmobile" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pmail" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="paddress" class="form-control" >
                                        </div>
                                   </div>
                                   <!-- input-feild-end -->

                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12">
                              <center>
                                    <button type="submit" class="btn btn-success">Submit</button> 
                                    <button type="reset" class="btn btn-danger">Cancel</button> 
                              </center>
                              </div>
                         </div>
                    </form>
                    </div>
               </div>
          </div>
     </div>
<!--  -->

@endsection