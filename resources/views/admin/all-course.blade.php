@extends('layout.master')

@section('title', 'all-course')

@section('content')


<div class="row">
     <div class="col-md-12">
     <h1 class="h3 mb-3">All Courses</h1>
          <div class="card">
          <div class="card-body">
                    <!-- ****** data-table-start ****** -->
          <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
               <th>#</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Categories</th>
                <th>Tags</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($allcourse as $allcourse)
        <tr>
               <td>#</td>
               <td>{{$allcourse->course_name}}</td>
               <td>In stock</td>
               <td>${{$allcourse->price}}</td>
               <td>{{$allcourse->course_categories}}</td>
               <td>{{$allcourse->course_tags}}</td>
               <td>{{$allcourse->created_at}}</td>
               <td>
                    <a href="{{url('edit_course/'.$allcourse->id)}}"><i class="far fa-edit edit" font-size="10px"></i></a>
                    <a href="#"><i class="far fa-trash-alt delete" data-toggle="modal" data-target="#exampleModal"></i></a>
               </td>
               
          </tr>


<!-- model-code-functionality  -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h6>Are you sure you want to delete?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
       <a href="{{url('delete_course/'.$allcourse->id)}}"><button  class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<!-- model-code-functionality -->
          @endforeach
        </tbody>
    </table>
                    <!-- ****** data-table-end ****** -->
               </div>
          </div>
     </div>
</div>


@endsection