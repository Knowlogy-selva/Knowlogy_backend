@extends('layout.master')

@section('title', 'Add-Course')

@section('content')
<form action="insert"  method="Post" autocomplete="off" >
 @csrf
<div class="row">
        <!-- left-side-card-functionality -->
     <div class="col-md-9">
          <div class="card">
               <div class="card-header">
                    <!-- <h5 class="card-title mb-0">Course Name</h5> -->
               </div>
               <div class="card-body">
               <div class="form-group">
               <input type="text" class="form-control" name="course_name" placeholder="Course Title" required>
               </div>
               </div>
                 
          </div>   
<!-- second-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Course Overview</h5>
               </div>
               <div class="card-body">
                    <div class="form-group">
                         <textarea class="form-control" id="over_view" name="course_overview"></textarea>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- second-row -->

<!-- 3'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Schedule</h5>
               </div>
               <div class="card-body">
               <!-- schedule-code-functionality -->
               <i class="fas fa-folder-plus add-schedule" id='add-row' value='Add'></i>
                <table id="test-table" class="table table-striped">
               <thead>
               <tr>
                    <th>Start Date</th>
                    <th>Days</th>
                    <th>Status</th>
                    <th>Start Time</th>
                    <th>Time zone</th>
                    <th>Delivery</th>
                    <th>Price($)</th>
                    <th>Action</th>
               </tr>
               </thead>
               <tbody id="test-body">
               <tr id="row0">
                    <th>
                    <!-- ************** shedule-row-start************** -->
                         <div class="form-group">
                         <input name='sdate'  type='date' class='form-control' required>
                         </div>
                    <!-- ************** shedule-row-end************** -->
                    <!-- ************** partner-row-start************** -->

                         <div class="form-group">
                                        <select class='form-control' name="partner">
                                             <option value="none">Select Partner</option>
                                             @foreach($partner as $partner)
                                             <option value="{{$partner->name}}">{{$partner->name}}</option>
                                             @endforeach
                                        </select>
                         </div>
                    <!-- ************** partner-row-end************** -->

                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->

                         <div class="form-group">
                         <input name='days'  type='text' class='form-control' required>
                         </div>
                    <!-- ************** shedule-row-start************** -->
                    <!-- ************** partner-row-start************** -->

                         <div class="form-group">
                                        <select class='form-control' name="code">
                                             <option value="none">Code</option>
                                             <option value="K1">K1</option>
                                             <option value="T5">T5</option>
                                             <option value="L10">L10</option>
                                             <option value="XY">XY</option>
                                        </select>
                         </div>
                    <!-- ************** partner-row-end************** -->

                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->

                         <div class="form-group">
                              <select class='form-control' name='status'>
                                   <option value="none">Status</option>
                                   <option value="GTR">GTR</option>
                                   <option value="Enrolling Now">Enrolling Now</option>
                                   <option value="Year Subscription">Year Subscription</option>
                              </select>
                         </div>
                    <!-- ************** shedule-row-end************** -->
                    <!-- ************** partner-row-start************** -->

                         <div class="form-group">
                              <input type='text' name="total_course"  class='form-control' required placeholder="total_course">
                         </div>
                    <!-- ************** partner-row-end************** -->

                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->

                         <div class="form-group">
                              <input name='stime'  type='time' class='form-control' required>
                         </div>
                    <!-- ************** shedule-row-end************** -->
                    <!-- ************** partner-row-start************** -->

                         <div class="form-group">
                              <input type='text' name="rprice" class='form-control' required placeholder="Retail Price">
                         </div>
                    <!-- ************** partner-row-end************** -->

                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->

                         <div class="form-group">
                              <select class='form-control' name='timezone'>
                                   <option value="none">Time</option>
                                   <option value="Eastern Time(ET)">Eastern Time(ET)</option>
                                   <option value="Central Time(CT)">Central Time(CT)</option>
                                   <option value="Mountain Time(MT)">Mountain Time(MT)</option>
                                   <option value="Pacific Time(PT)">Pacific Time(PT)</option>
                              </select>
                         </div>
                    <!-- ************** shedule-row-end************** -->
                    <!-- ************** partner-row-start************** -->

                         <div class="form-group">
                              <input type='text' name="profit" class='form-control' required placeholder="Profit">
                         </div>
                    <!-- ************** partner-row-end************** -->

                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->

                         <div class="form-group">
                              <select class='form-control' name='deliverformat'>
                                   <option value="none">deliverformat</option>
                                   <option value="Live Virtual Led">Live Virtual Led</option>
                                   <option value="Live Virtual Led with Assistance">Live Virtual Led with Assistance</option>
                                   <option value="In-Classroom">In-Classroom</option>
                                   
                              </select>
                         </div>
                    <!-- ************** shedule-row-end************** -->
                    <!-- *************partner-row-start************ -->
                    <div class="form-group">
                              <select class='form-control' name='location'>
                                   <option value="none">Location</option>
                                   <option value="USA">USA</option>
                                   <option value="DUBAI">DUBAI</option>
                                   <option value="SINGAPORE">SINGAPORE</option>
                                   
                              </select>
                    </div>
                    <!-- *************partner-row-end ************** -->

                   
                    </th>
                    <th>
                    <!-- ************** shedule-row-start************** -->
                    <div class="form-group">
                         <input name='price'  type='text' class='form-control' required>
                    </div>
                    <!-- ************** shedule-row-end************** -->
                     <!-- *************** partner-row-start********** -->
                     <div class="form-group">
                              <input type='text' name="pprice"  class='form-control' required placeholder="price">
                    </div>
                    <!-- ************partner-row-end **************** -->

                    </th>
                    <th> 
                    <i class="far fa-trash-alt delete delete-row" value='Delete'></i>
                    </th>
               </tr>
              
               </tbody>
               </table>

               <!-- schedule-code-functionality -->

               </div>
          </div>
     </div>
</div>
<!-- 3'rd-row -->

<!-- 4'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Who Should Attend</h5>
               </div>
               <div class="card-body">
               <div class="form-group">
                    <textarea class="form-control" id="wsa" name="course_wsa" ></textarea>
               </div>
               </div>
          </div>
     </div>
</div>
<!-- 4'rd-row -->

<!-- 5'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Prerequisites</h5>
               </div>
               <div class="card-body">
               <div class="form-group">
                    <textarea class="form-control" id="prerequisites" name="course_prerequieste"></textarea>
               </div>
               </div>
          </div>
     </div>
</div>
<!-- 5'rd-row -->

<!-- 6'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">objectives</h5>
               </div>
               <div class="card-body">
               <div class="form-group">
                         <textarea class="form-control" id="objectives" name="course_objectives" ></textarea>
               </div>
               </div>
          </div>
     </div>
</div>
<!-- 6'rd-row -->

<!-- 7'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Course Outline</h5>
               </div>
               <div class="card-body">
               <div class="form-group">
                         <textarea class="form-control" id="course_outline" name="course_outline"></textarea>
               </div>
               </div>
          </div>
     </div>
</div>
<!-- 7'rd-row -->

<!-- 8'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Course Short Discription</h5>
               </div>
               <div class="card-body">
               <div class="form-group">
                         <textarea class="form-control" id="course_description" name="course_discription"></textarea>
               </div>
               </div>
          </div>
     </div>
</div>
<!-- 8'rd-row -->

     </div>
     <!-- left-side-card-functionality -->

     <!-- right-side-card-functionality -->
     <div class="col-md-3">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Publish</h5>
               </div>
               <div class="card-body">
               <button type="submit" class="btn btn-primary" name="publish" value="Draft">Save Draft</button>
               <button class="btn btn-info  btn-right" >Preview</button>

               <div class="pubilsh">
               <h6 class="status">Status: Draft <a href=""> Edit</a></h5>
               <h6 class="visibility">Visibility:  Public <a href=""> Edit</a></h5>
               <h6 class="Publish">Publish: immediately  <a href=""> Edit</a></h5>
               </div>
               <hr/>
               <button type="submit" class="btn btn-success  btn-right" name="publish" value="publish">Publish</button>
               </div>
          </div>

<!-- second-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Categories</h5>
               </div>
               <div class="card-body">
               <!-- category-content-start -->
               <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Categories</a>
               <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Most Used</a>
               </div>
               </nav>
               <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="categorys">
                   <!-- category -->
                   <!-- main-category -->
                    @foreach($get_cate as $get_cato)
                   <div class="custom-control custom-checkbox my-1 mr-sm-2 category">
                    <input type="checkbox" class="custom-control-input" id="{{$get_cato->name}}" value="{{$get_cato->name}}" name="categories">
                    <label class="custom-control-label" for="{{$get_cato->name}}"> {{$get_cato->name}}</label>
               <!-- test functionality start to here-->

               @foreach($subcategories as $subcategoriess)
               @if($get_cato->name == $subcategoriess->categories)
               <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="{{$subcategoriess->name}}" name="categories" value="{{$subcategoriess->name}}" >
                    <label class="custom-control-label" for="{{$subcategoriess->name}}"> {{$subcategoriess->name}}</label>
               </div>
               @endif
               @endforeach

                    </div>
               @endforeach
                    <!-- *** main-category*** -->

                   
                   <!-- category -->
                   </div>
               <!-- ******* -->
               </div>
               <!-- ************* -->
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

               <div class="categorys">
                   <!-- category -->
                   @foreach($get_cate as $categories)
                   <div class="custom-control custom-checkbox my-1 mr-sm-2 category">
                    <input type="checkbox" class="custom-control-input" id="{{$categories->name}}">
                    <label class="custom-control-label" for="{{$categories->name}}">{{$categories->name}}</label>
                    </div>
                    @endforeach
                   <!-- category -->
                   </div>
               <!-- ******* -->
               </div>
               </div>
               <!-- category-content-end -->
               </div>
          </div>
     </div>
</div>
<!-- second-row -->

<!-- 3'rd-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0" >Course Image</h5>
               </div>
               <div class="card-body">
               <div class='file file--upload '>
                                        <label for='input-file'>Add New</label>
                                        <input id='input-file' type='file' data-toggle="modal" name="fetured_image" data-target=".bd-example-modal-xl" onchange="showPreview(event);"/>
                                   </div>
               </div>
               <div class="preview_image">
               <img id="preview" class="img-thumbnail course_img">
               </div>

          </div>
     </div>
</div>
<!-- 3'rd-row -->

<!-- 4'th-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Course Tags</h5>
               </div>
               <div class="card-body">
              
                    <div class="row">
                         <div class="col-md-12">
                         <div class="form-group">
                         <select class="form-control" name="tags">
                         <option value="none">--Select Tag--</option>
                         @foreach( $tags as $tag )
                              <option value="{{$tag->tag_name}}">{{$tag->tag_name}}</option>
                         @endforeach
                         </select>
                         </div>
                         </div>
                         <!-- <div class="col-md-4">
                         <button type="button" class="btn btn-primary">Add Tag</button>
                         </div> -->
                    </div>

               </div>
          </div>
     </div>
</div>
<!-- 4'th-row -->

<!-- 5'th-row -->
<div class="row">
     <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                    <h5 class="card-title mb-0">Course Gallery</h5>
               </div>
               <div class="card-body">
               <button class="btn btn-outline-primary">Add product gallery images</button>
               </div>
          </div>
     </div>
</div>
<!-- 5'th-row -->

     </div>
     <!-- right-side-card-functionality -->
</div>
</form>


<!-- model-code-functionality -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
     
     <!-- header-contend-code-functionality -->

<!-- form -->
<form action="set_course_image" method="Post">
<!-- form -->
<div class="row">
          <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                         <div class="row">
                              <div class="col-md-4">
                                   <h1 class="h3 mb-3">Set Featured Image </h1>  
                              </div>
                              <div class="col-md-7">
                               <!-- search-code-functions-start -->
                               
                              <!-- search-code-functions-end -->
                              </div>
                              <div class="col-md-1">
                              <button type="button" class="btn btn-primary">Set Image</button>
                              </div>
                         </div>
                         </div>
                    </div>
          </div>
    </div>
<!-- header-contend-code-functionality -->

<!-- select_gallery_image_code_functionality -->
<div class="card">
                    <div class="card-body">
                    <div class="row">
                    @foreach( $gallery as $gallery )
                         <div class="col-md-2 bottom-space">
                         <img src="{{ asset('storage/images/'.$gallery->name) }}" alt="" class="img-thumbnail max_width">
                         </div>
                    @endforeach
                    </div>
                    </div>
            </div>
  <!-- select_gallery_image_code_functionality -->

     <!-- main-contend -->





    </div>
  </div>
</div>

<!-- model-code-functionality -->


@endsection