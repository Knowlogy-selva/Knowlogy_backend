@extends('layout.master')

@section('title', 'Add-Course')

@section('content')




<!-- add-new and search-code-functionality start to here -->
    <div class="row">
          <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                         
                         <div class="row">
                              <div class="col-md-4">
                                   <h1 class="h3 mb-3">Media Library </h1>  
                              </div>
                              <div class="col-md-7">
                               <!-- search-code-functions-start -->
                               <form action="get_search" method="Post" id="search" onchange="mySearch()" autocomplete="off">
                               @csrf
                               <div class="form-group row form-inline search-media">
                                   <label for="inputPassword" class="col-sm-2 col-form-label">Search</label>
                                        <div class="col-sm-10">
                                             <input type="search" class="form-control" name="search" id="inputPassword" >
                                        </div>
                              </div>
                              </form>
                              <!-- search-code-functions-end -->
                              </div>

                              <div class="col-md-1">
                              <form action="add_img"  method="Post" enctype="multipart/form-data" onchange="myFunction()" id="auto_submit">
                              @csrf
                               <!-- Add-new-image-code-functionality-start -->
                                   <div class='file file--upload '>
                                        <label for='input-file'>Add New</label>
                                        <input id='input-file' type='file' name='image'/>
                                   </div>
                              <!-- Add-new-image-code-functionality-end -->
                              </form>
                              </div>

                         </div>
                             
                         </div>
                    </div>
          </div>
    </div>
<!-- add-new and search-code-functionality end to here -->


<!-- gallery code start to here -->
     <div class="card">
          <div class="card-body">
               <div class="row">
          @foreach( $gallery as $gallery )
               <div class="col-md-2 bottom-space">
                    <a href="{{url('edit_gallery/'.$gallery->id)}}">
                         <img src="{{ asset('storage/images/'.$gallery->name) }}" alt="" class="img-thumbnail max_width">
                    </a>
               </div>
          @endforeach 
               </div>
          </div>
     </div>
<!-- gallery code end to here -->


<!-- auto-submit-code-functionality-script -->
<script>
function myFunction() {
    document.getElementById('auto_submit').submit();
}
function mySearch() {
    document.getElementById('search').submit();
}
</script>
<!-- auto-submit-code-functionality-script -->

@endsection