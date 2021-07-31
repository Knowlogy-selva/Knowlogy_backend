@extends('layout.master')

@section('title', 'Tags')

@section('content')

<div class="row">
     <div class="col-md-8">
     <h1 class="h3 mb-3">Product Tags</h1>
          <div class="card">
               <div class="card-body">
             
                    <!-- table-code-function-start -->
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tag_name as $tag_name)
        <tr>
               <td>{{$tag_name->tag_name}}</td>
               <td>{{$tag_name->description}}</td>
               <td>{{$tag_name->tag_slug}}</td>
               <td>{{$tag_name->tag_count}}</td>
               <td>
                    <a href="{{url('edit_tags/'.$tag_name->id)}}"><i class="far fa-edit edit" font-size="10px"></i></a>
                    <a href="#"><i class="far fa-trash-alt delete" data-toggle="modal" data-target="#exampleModals"></i></a>
               </td>
          </tr>

<!-- model-code-functionality  -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
       <a href="{{url('delete_tags/'.$tag_name->id)}}"> <button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<!-- model-code-functionality -->

          @endforeach
        </tbody>
    </table>
                    <!-- table-code-function-end -->

               </div>
          </div>
     </div>

     <!-- right-side-card-functionality-start -->
     <div class="col-md-4">
     <h1 class="h3 mb-3">Add new Tag</h1>
          <div class="card">
          <div class="card-body">
               <form action="add_tags" method="post">
               @csrf
               <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" class="form-control form-control-sm" name="tag_name" id="exampleInputEmail1" >
               </div>
               <div class="form-group">
               <label for="exampleInputEmail1">Slug</label>
               <input type="text" class="form-control form-control-sm" name="tag_slug" id="exampleInputEmail1">
               </div>
               <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-info btn-sm">Add New Tags</button>
               </form>
          </div>
     </div>
     <!-- right-side-card-functionality-end -->
</div>

@endsection