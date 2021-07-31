<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Knowlogy - @yield('title')</title>

     <!-- bootstrap CDN code-functionality library start to here -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <!-- bootstrap CDN code-functionality library end to here -->

     <!-- sidebar-code functionality style library start to here -->
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- sidebar-code functionality style library end to here -->

     <!-- data-table-library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <!-- data-table-library -->

<!-- text-editor-code-library-file's start -->
<script src="{{asset('js/script.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css'>
<!-- tesxt-editor-code-library-file's end -->

<!-- schedule-script code-functionality  -->
<!-- angular-script-code-functionaliy -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!-- angular-script-code-functionality -->
<script src="{{asset('js/schedule.js')}}"></script>
<!-- schedule-script code-functionality -->


</head>
<body>
     
<!-- warrper-start-to here -->
<div class="wrapper">
<!-- header start to here -->
     <div class="header">
          <div class="header-menu">
               <div class="title"></div>
               <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
               </div>
               <ul>
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="#"><i class="fas fa-power-off"></i></a></li>
               </ul>
          </div>
     </div>
<!-- header end to here -->
<!-- sidebar start to here -->
<div class="sidebar">
     <div class="sidebar-menu">
          <div class="logo"><img src="{{asset('img/3.png')}}" alt=""></div>
          <hr class="hr"/>
          <!-- <center class="profile">
          <img src="{{ asset('img/2.png')}}"  alt=""> -->
          <!-- <p>knowlogy</p> -->
          <!-- </center> -->
          <li class="item">
               <a href="./get" class="menu-btn">
                    <i class="fas fa-desktop"></i><span>Dashboard</span>
               </a>
          </li>
          <li class="item" id="profile">
               <a href="#profile" class="menu-btn">
               <i class="fas fa-book-open"></i><span>Course<i class="fas fa-chevron-down drop-down"></i></span>
               </a>
               <div class="sub-menu">
                    <a href="../get_course"><span>All Courses</span></a>
                    <a href="../get_add_course"><span>Add Course</span></a>
                    <a href="../get_categories"><span>Categories</span></a>
                    <a href="../get_tags"><span>Tags</span></a>
               </div>
          </li>
          <li class="item" id="partner">
               <a href="#partner" class="menu-btn">
               <i class="fas fa-hands-helping"></i><span>Partner<i class="fas fa-chevron-down drop-down"></i></span>
               </a>
               <div class="sub-menu">
                    <a href="../allpartner"><span>All Partner</span></a>
                    <a href="../addpartner"><span>Add Partner</span></a>
                    <a href="../partner_dashboard"><span>Dashboard</span></a>
               </div>
          </li>

          <!-- entrollment menu code-functionality start to here -->
          <li class="item" id="entrollment">
               <a href="#entrollment" class="menu-btn">
               <i class="fas fa-graduation-cap"></i><span>Entrollment<i class="fas fa-chevron-down drop-down"></i></span>
               </a>
               <div class="sub-menu">
                    <a href="../all_entrollment"><span>All Entrollment</span></a>
                    <a href="../addOrder"><span>Add Entroll</span></a>
               </div>
          </li>
          <!-- entrollment menu code-functionality end to here -->
          <!-- gallery menu code-functionality start to here -->
          <li class="item" id="gallery">
               <a href="#gallery" class="menu-btn">
               <i class="fas fa-camera"></i><span>Gallery<i class="fas fa-chevron-down drop-down"></i></span>
               </a>
               <div class="sub-menu">
                    <a href="../allgallery"><span>All Gallery</span></a>
               </div>
          </li>
          <!-- gallery menu code-functionality end to here -->
      </div>
</div>
<!-- sidebar end to here -->

<!-- main contend start to here -->
<div class="main-container">
<!-- start the main body-contend here -->
<div class="contend">
            @yield('content')
        </div>
<!-- end to the main body-contend here -->
</div>

<!-- main contend end to here -->

</div>
<!-- warrper-end-to-here -->

<!-- mobile-menu-script functionality start to here -->

<script>
$(document).ready(function(){
     $(".sidebar-btn").click(function(){
          $(".wrapper").toggleClass("collapse");
     });
});
</script>

<!-- mobile-menu-script functionality end to here -->

<!-- data-table-library -->
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<!-- data-table-library -->
<!-- ************************** -->

<!-- text-editor code-functionality start to here -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js'></script>


<!-- text-editor code-functionality end to here -->


<!-- boostrap code-functionality library start to here -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- boostrap code-functionality libraary end to here -->

</body>
</html>