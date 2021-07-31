@extends('layout.master')

@section('title', 'Categories')

@section('content')

<div class="row">
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
        @foreach($get_categories as $all_cate)
        <tr>
               <td>{{$all_cate->image}}</td>
               <td>{{$all_cate->name}}</td>
               <td>{{$all_cate->description}}</td>
               <td>{{$all_cate->slug}}</td>
               <td>{{$all_cate->categories}}</td>
               <td>{{$all_cate->count}}</td>
               <td>
                    <a href="{{url('edit_categories/'.$all_cate->id)}}"><i class="far fa-edit edit" font-size="10px"></i></a>
                    <a href="{{url('delete_categories/'.$all_cate->id)}}"><i class="far fa-trash-alt delete" data-toggle="modal" data-target="#exampleModala"></i></a>
               </td>
          </tr>

<!-- model-code-functionality -->
<!-- Modal -->
<div class="modal fade" id="exampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
       <a href="{{url('delete_categories/'.$all_cate->id)}}"><button  class="btn btn-danger">Delete</button></a>
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
     <h1 class="h3 mb-3">Add new category</h1>
          <div class="card">
          <div class="card-body">
               <form action="add_categories" method="post">
               @csrf
               <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="categories_name" class="form-control form-control-sm" >
               </div>
               <div class="form-group">
               <label for="exampleInputEmail1">Slug</label>
               <input type="text" name="categories_slug" class="form-control form-control-sm"  >
               </div>
               <div class="form-group">
               <label for="exampleFormControlSelect1">Parent category</label>
               <select class="form-control form-control-sm" name="parent_categories" id="exampleFormControlSelect1">
                    <option value="none">--select categories--</option>
                    @foreach($get_all_categories as $all_cate)
                    <option value="{{$all_cate->name}}">{{$all_cate->name}}</option>
                    @endforeach
               </select>
               </div>
               <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control form-control-sm" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-info btn-sm">Add New Categories</button>
               </form>
          </div>
     </div>
     <!-- right-side-card-functionality-end -->
</div>

@endsection