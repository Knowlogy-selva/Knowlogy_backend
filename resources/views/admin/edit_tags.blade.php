@extends('layout.master')

@section('title', 'edit_Tags')

@section('content')

<div class="row">
@foreach($edit_tags as $tags)
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
        <tr>
               <td>{{$tags->tag_name}}</td>
               <td>{{$tags->description}}</td>
               <td>{{$tags->tag_slug}}</td>
               <td>{{$tags->tag_count}}</td>
               <td><a href="#"><i class="far fa-trash-alt delete" data-toggle="modal" data-target="#exampleModal1"></i></a></td>
          </tr>
        </tbody>
    </table>
                    <!-- table-code-function-end -->

               </div>
          </div>
     </div>

     <!-- right-side-card-functionality-start -->
     <div class="col-md-4">
     <h1 class="h3 mb-3">Update Tag</h1>
          <div class="card">
          <div class="card-body">
          
               <form action="{{url('update_tags/'.$tags->id)}}" method="post">
               @csrf
               <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" class="form-control form-control-sm" name="tag_name" value="{{$tags->tag_name}}" id="exampleInputEmail1" >
               </div>
               <div class="form-group">
               <label for="exampleInputEmail1">Slug</label>
               <input type="text" class="form-control form-control-sm" name="tag_slug" value="{{$tags->tag_slug}}" id="exampleInputEmail1">
               </div>
               <div class="form-group">
               <label for="exampleFormControlTextarea1">Description</label>
               <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" name="description" rows="3">{{$tags->description}}</textarea>
               </div>
               <button type="submit" class="btn btn-info btn-sm">Update</button>
               </form>
          </div>
     </div>
     <!-- right-side-card-functionality-end -->
</div>

<!-- model code-functionality -->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a href="{{url('delete_tags/'.$tags->id)}}"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<!-- model code-functionality -->


@endforeach

</div>






@endsection