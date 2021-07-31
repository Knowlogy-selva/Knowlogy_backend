@extends('layout.master')

@section('title', 'edit_gallery')

@section('content')


<!-- *************************** -->


<!-- second card-box contend-start to here -->
    <div class="row">
          <!-- left side code functionality start to here -->
          <div class="col-lg-7">
          @foreach( $edit_gallery as $edit_gallery)
                    <div class="card">
                         <div class="card-body">
                         <!-- image-contend -->
                         <img src="{{ asset('storage/images/'.$edit_gallery->name) }}" alt="" class="img-thumbnail img_edit">
                         <!-- image-contend -->
                         </div>
                    </div>
          </div>
          <!-- left side code-functionality end to here -->
          <!-- ****************** -->

          <!-- right side code-functionality start to here -->

          <div class="col-lg-5">
        
               <div class="card">
               <div class="card-header">
                    <h1 class="h3 mb-3">Attachment details</h1>  
                    <hr>
               </div>
                    <div class="card-body">
                         
                        
                    <!-- details-contend-start-to-here -->
                    <div class="row">
                         <div class="col-md-3 gallery_details">
                         <p>Uploaded on: </p>
                         <p>Uploaded by:  </p>
                         <p>File name: </p>
                         <p>File type: </p>
                         <p>File size: </p>
                         <p>Dimensions:  </p>
                         </div>
                         <div class="col">
                         <p>{{$edit_gallery->created_at->format('F j Y')}}</p>
                         <p>knowlogyit</p>
                         <p>{{$edit_gallery->name}}</p>
                         <p>{{$edit_gallery->type}}</p>
                         <p>63 KB</p>
                         <p>1024 by 683 pixels</p>
                         </div>
                    </div>
                    <!-- details-contend-end-to-here -->

                    </div>
               </div>
          <!-- *********************************** -->
          <!-- form-contend start to here-->
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-body">
                         <!-- form -->
                              @csrf
                         <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" value="{{$edit_gallery->name}}" aria-describedby="emailHelp">
                         </div>
                         <div class="form-group">
                              <label for="file">File URL</label>
                              <input type="text" class="form-control" id="file" value="E:/Knowlogy-course/course/storage/app/public/images/{{$edit_gallery->name}}" aria-describedby="emailHelp">
                         </div>
                         <div class="form-group">
                              <label for="textarea">Description</label>
                              <textarea name="" id="textarea" class="form-control" name="description" rows="3"  required>{{$edit_gallery->description}}</textarea>
                         </div>
                         <!-- form -->
                    <hr> 
               <a href="/allgallery">
                    <button class="btn btn-primary">Back</button>
               </a>
               <a href="">
               <button class="btn btn-primary" type="submit">Update</button>
               </a>
               <a href="{{url('delete_gallery/'. $edit_gallery->id)}}">
                    <button  class="btn btn-danger">Delete</button>
               </a>
                         </div>  
                    </div>
               </div>
          </div>
          <!-- form-contend end to here -->
          <!-- ************************************* -->
          @endforeach
          </div>
          <!-- right side code-functionality end to here -->
    </div>

<!-- second card-box contend-end to here -->


@endsection