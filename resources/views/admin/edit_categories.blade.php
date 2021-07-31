@extends('layout.master')

@section('title', 'Categories')

@section('content')

<div class="row">
@foreach($edit_categories as $edit_categories)
     <div class="col-md-8">
     <h1 class="h3 mb-3">Product Categories</h1>
          <div class="card">
               <div class="card-body">

                    <!-- table-code-function-start -->
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
               <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Parent Category</th>
                <th>Count</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
               <td>{{$edit_categories->image}}</td>
               <td>{{$edit_categories->name}}</td>
               <td>{{$edit_categories->description}}</td>
               <td>{{$edit_categories->slug}}</td>
               <td>{{$edit_categories->categories}}</td>
               <td>{{$edit_categories->count}}</td>
               <td>
                    <a href="#"><i class="far fa-trash-alt delete" data-toggle="modal" data-target="#exampleModal"></i></a>
               </td>
          </tr>
<!-- model-code-functionlity -->

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
       <a href="{{url('delete_categories/'.$edit_categories->id)}}"> <button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<!-- model-code-functiionality -->

        </tbody>
    </table>
                    <!-- table-code-function-end -->
               </div>
          </div>
     </div>

     <!-- right-side-card-functionality-start -->
     <div class="col-md-4">
     <h1 class="h3 mb-3">Update Category</h1>
          <div class="card">       
          <div class="card-body">
               <form action="{{url('update_categories/'.$edit_categories->id)}}" method="post">
               @csrf
               <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="categories_name" class="form-control form-control-sm" value="{{$edit_categories->name}}" >
               </div>
               <div class="form-group">
               <label for="exampleInputEmail1">Slug</label>
               <input type="text" name="categories_slug" class="form-control form-control-sm" value="{{$edit_categories->slug}}" >
               </div>
               <div class="form-group">
               <label for="exampleFormControlSelect1">Parent category</label>
               <select class="form-control form-control-sm" name="parent_categories" id="exampleFormControlSelect1">
                    <option value="{{$edit_categories->categories}}">{{$edit_categories->categories}}</option>
                    <option value="none">--select categories--</option>
                    @foreach($categories as $categories)
                    <option value="{{$categories->name}}">{{$categories->name}}</option>
                   @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control form-control-sm" name="description" id="exampleFormControlTextarea1" rows="3">{{$edit_categories->description}}</textarea>
               </div>
               <button type="submit" class="btn btn-info btn-sm">Update</button>
               </form>
          </div>
     </div>
     <!-- right-side-card-functionality-end -->
     @endforeach
</div>

@endsection