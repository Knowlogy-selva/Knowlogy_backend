@extends('layout.master')
@section('title', 'Partner Detail')
@section('content')

     <div class="row">
     @foreach( $partners as $partner)
          <div class="col-lg-12">
          <h1 class="h3 mb-3">Partner Details <a href="{{url('edit_partner_details/'. $partner->id)}}"><button class="btn btn-outline-primary">Edit</button></a></h1>
               <div class="card">
                    <div class="card-body">

                              <div class="row">
                                   <div class="col-lg-4">                  
                                        <div class="ustatic">
                                             <h6 class="partner_details_right">Partner Name :  <span class="partner_details_dynamic">{{$partner->name}}</span></h6>
                                             <h6 class="partner_details_right">Partner Code : <span class="partner_details_dynamic">{{$partner->code}}</span></h6>
                                             <h6 class="partner_details_right">Contact Person : <span class="partner_details_dynamic_cp">{{$partner->contact_person}}</span></h6>
                                             <h6 class="partner_details_right">Location : <span class="partner_details_dynamic_locat">{{$partner->location}}</span></h6>
                                      
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="ustatic">
                                             <h6 class="partner_details_right">City : <span class="partner_details_dynamic_city">{{$partner->city}}</span></h6>
                                             <h6 class="partner_details_right">State : <span class="partner_details_dynamic_state">{{$partner->state}}</span></h6>
                                             <h6 class="partner_details_right">Website : <span class="partner_details_dynamic_website">{{$partner->website}}</span></h6>
                                             <h6 class="partner_details_right">Fax : <span class="partner_details_dynamic_fax">{{$partner->fax}}</span></h6>
                                             
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="ustatic">
                                             <h6 class="partner_details_right">Phone :   <span class="partner_details_dynamic_city">{{$partner->phone}}</span></h6>
                                             <h6 class="partner_details_right">Mobile :  <span class="partner_details_dynamic_city">{{$partner->mobile}}</span></h6>
                                             <h6 class="partner_details_right">Mail ID : <span class="partner_details_dynamic_city">{{$partner->mailid}}</span></h6>
                                             <h6 class="partner_details_right">Address : <span class="partner_details_dynamic_add">{{$partner->address}}</span></h6>
                                             
                                        </div>
                                   </div>
                              </div>
                    </div>
               </div>
          </div>
     @endforeach
     </div>

     <div class="row">
    
          <div class="col-lg-12">
               <div class="card">
                    <div class="card-header">
                    <h6>Partner Courses</h6>
                    </div>
                    <!-- export code functionality start to here -->

                    <!-- *********export excel sheet model code functionality start to here*********** -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                         <h6 class="modal-title" id="exampleModalLabel">Select feild</h6>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <div class="modal-body">
                         <!-- select row functionality start to here -->
                         <form action="/excelexprot" method="Post" enctype="multipart/form-data" autocomplete="off">
                         @csrf
                         <div class="row">
                              <div class="col-md-4">
                                        <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                             <input type="checkbox" value="course_name" name="name[]" class="custom-control-input select_row" id="1">
                                             <label class="custom-control-label" for="1">Course Name</label>
                                        </div>
                                             <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                  <input type="checkbox" value="course_overview" name="name[]" class="custom-control-input" id="2">
                                                  <label class="custom-control-label" for="2">overview</label>
                                             </div>
                                                  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                       <input type="checkbox" value="course_wsa" name="name[]" class="custom-control-input" id="3">
                                                       <label class="custom-control-label" for="3">who Should Attent</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                       <input type="checkbox" value="course_prerequisites" name="name[]" class="custom-control-input" id="7">
                                                       <label class="custom-control-label" for="7">Prerequisites</label>
                                                  </div>
                              </div>

                              <div class="col-md-4">
                                        <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                             <input type="checkbox" value="course_objectives" name="name[]" class="custom-control-input" id="4">
                                             <label class="custom-control-label" for="4">Objectives</label>
                                        </div>
                                             <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                  <input type="checkbox" value="course_outline" name="name[]" class="custom-control-input" id="5">
                                                  <label class="custom-control-label" for="5">Outline</label>
                                             </div>
                                                  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                       <input type="checkbox" value="course_discription" name="name[]" class="custom-control-input" id="6">
                                                       <label class="custom-control-label" for="6">discription</label>
                                                  </div>
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                 <input type="checkbox" value="course_status" name="name[]" class="custom-control-input" id="8">
                                                                 <label class="custom-control-label" for="8">Status</label>
                                                            </div>
                              </div>
                              <div class="col-md-4">
                                       
                                             <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                  <input type="checkbox" value="course_categories" name="name[]" class="custom-control-input" id="9">
                                                  <label class="custom-control-label" for="9">Categories</label>
                                             </div>
                                                  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                       <input type="checkbox" value="partner_name" name="name[]" class="custom-control-input" id="10">
                                                       <label class="custom-control-label" for="10">Partner Name</label>
                                                  </div>
                                                   <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                            <input type="checkbox" value="course_tags" name="name[]" class="custom-control-input" id="11">
                                                            <label class="custom-control-label" for="11">Tags</label>
                                                       </div>
                                                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                                                 <input type="checkbox" value="price" name="name[]" class="custom-control-input" id="12">
                                                                 <label class="custom-control-label" for="12">Price</label>
                                                            </div>
                              </div>
                         </div>
                         
                         <!-- select row functionality end to here -->
                         </div>
                         <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                         <button type="submit" class="btn btn-info" >Export</button>
                         </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <!-- *********export excel sheet model code functionality end to here*********** -->

                    <div class="excelbutton">
                    <button class="btn btn-info float-right export" data-toggle="modal" data-target="#exampleModal">export</button>
                    <form action="/excelimport" method="POST" enctype="multipart/form-data">
                    @csrf
                         <input type="file" name="sheet" required>
                         <button class="btn btn-info" type="submit">Import</button>
                    </form>
                    </div>
                         <!-- export code functionality end to here -->
                    <div class="card-body">
                         <table id="example" class="table table-striped" style="width:100%">
                              <thead>
                                   <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Categories</th>
                                        <th>Tags</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                              @foreach( $part as $parts)
                              @foreach( $course as $course)
                              @if( $parts->name == $course->partner_name )
                                   <tr>
                                        <td>#</td>
                                        <td>{{$course->course_name}}</td>
                                        <td>In Stock</td>
                                        <td>3,975</td>
                                        <td>{{$course->course_categories}}</td>
                                        <td>{{$course->course_tags}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>
                                             <a href="{{url('edit_course/'.$course->id)}}"><i class="far fa-edit edit" font-size="10px"></i></a>
                                             <a href="{{url('delete_course/'.$course->id)}}"><i class="far fa-trash-alt delete"></i></a>
                                        </td>
                                   </tr>
                              @endif
                              @endforeach
                              @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>

@endsection