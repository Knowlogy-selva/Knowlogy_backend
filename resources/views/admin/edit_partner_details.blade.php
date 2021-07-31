@extends('layout.master')

@section('title', 'Edit_Partner')

@section('content')


<!--  -->
@foreach( $update as $update )


     <div class="row">
          <div class="col-lg-12">
          <h1 class="h3 mb-3">Add Partner</h1>
               <div class="card">
                    <div class="card-body">
                         <form action="{{url('update_partner_details/'.$update->id)}}" method="post" autocomplete="off">
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
                                   <div class="upinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pname" value="{{$update->name}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pcode" value="{{$update->code}}" class="form-control" readonly >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="cperson" value="{{$update->contact_person}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name ="plocation" value="{{$update->location}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pcity" value="{{$update->city}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pstate" value="{{$update->state}}" class="form-control" >
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
                                    <div class="upinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pwebsite" value="{{$update->website}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pfax" value="{{$update->fax}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pphone" value="{{$update->phone}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pmobile" value="{{$update->mobile}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="pmail" value="{{$update->mailid}}" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="pinput-feild">
                                        <div class="form-group">
                                             <input type="text" name="paddress" value="{{$update->address}}" class="form-control" >
                                        </div>
                                   </div>
                                   <!-- input-feild-end -->

                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12">
                              <center>
                                    <button type="submit" class="btn btn-outline-success">Update</button> 
                                   <a href="../allpartner"><button type="button" class="btn btn-outline-primary">Back</button></a>
                                   <a href="{{url('partner_delete/'.$update->id)}}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                              </center>
                              </div>
                         </div>
                    </form>
                    </div>
               </div>
          </div>
     </div>
@endforeach
<!--  -->

@endsection