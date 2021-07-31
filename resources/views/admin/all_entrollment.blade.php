@extends('layout.master')
@section('title', 'Entrollment')
@section('content')

<!-- entrollment_code_functionality_start_to_here -->
          <div class="row">
               <div class="col-lg-12">
               <h1 class="h3 mb-3">All Entrollment <a href="addOrder"><button class="btn btn-outline-primary">Add New</button></a></h1>
                    <div class="card">
                         <div class="card-body">
                              
                         <!-- table -->
                         <table id="example" class="table table-striped" style="width:100%">
                              <thead>
                                   <tr>
                                        <th>#</th>
                                        <th>Order</th>
                                        <th>Student_Name</th>
                                        <th>Partner_Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                        <tr>
                                             <td>#</td>
                                             <td>MS-700: Managing Microsoft Teams</td>
                                             <td>Student_name</td>
                                             <td>Logical Operations</td>
                                             <td>student@oddcounts.com</td>
                                             <td><span class="badge badge-success badgestatus">complete</span></td>
                                             <td>$2,495</td>
                                             <td><i class="fa fa-eye entrol" aria-hidden="true" style="font-size:18px;color:#15cdca;" data-toggle="modal" data-target="#exampleModalCenter"></i></td>
                                        </tr>
                                        <tr>
                                             <td>#</td>
                                             <td>MS-500: Microsoft 365 Security Administration</td>
                                             <td>Student_name</td>
                                             <td>TechSherpas</td>
                                             <td>student@oddcounts.com</td>
                                             <td><span class="badge badge-warning badgestatus">pending</span></td>
                                             <td>$2,495</td>
                                             <td><i class="fa fa-eye entrol" aria-hidden="true" style="font-size:18px;color:#15cdca;" data-toggle="modal" data-target="#exampleModalCenter"></i></td>
                                        </tr>
                                        <tr>
                                             <td>#</td>
                                             <td>Automating Administration with Windows PowerShell</td>
                                             <td>Student_name</td>
                                             <td>Logical Operations</td>
                                             <td>student@oddcounts.com</td>
                                             <td><span class="badge badge-success badgestatus">complete</span></td>
                                             <td>$2,495</td>
                                             <td><i class="fa fa-eye entrol" aria-hidden="true" style="font-size:18px;color:#15cdca;" data-toggle="modal" data-target="#exampleModalCenter"></i></td>
                                        </tr>
                              </tbody>
                         </table>
                         <!-- table -->

                         </div>
                    </div>
               </div>
          </div>
<!-- entrollment_code_functionality_end_to_here -->


<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Order #4598 </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <!-- billing-details -->
     <div class="details">
          <h6>Billing details</h6><p>Briggs burton<br>NAAEE<br>1725 DeSales St NW<br>Washington,DC 20036</p>
     </div>
     <div class="email">
          <h6>Email</h6><p><a href="#">entroll@oddcounts.com</a></p>
     </div>
     <div class="phone">
          <h6>phone</h6><p><a href="#">9876543210</a></p>
     </div>
     <div class="payment">
          <h6>payment via</h6><p>Credit Card(stripe)<br/><a href="#">create/debitcard-details</a></p>
     </div>
     <div class="product">
          <h6>Product <span style="padding-left:210px">Quantity</span><span style="padding-left:40px">Total</span></h6>
          <hr>
         <p> MS-700: Managing Microsoft Teams <span class="entrollcourse">5</span><span class="entrollcount" >$1,475</span></p>
         <h7>Delivery Format :<span class="entrollformat">Live Virtual Led</span></h7>
         <br>
         <h7>Start Date :<span class="entrolldate">03/02/2021</span></h7>
         <br>
         <h7>Days :<span class="entrolldays">5</span></h7>
         <br>
         <h7>Status :<span class="entrollstatus">GTR</span></h7>
     </div>
     
     <hr>
     <button style="float: right;" class="btn btn-outline-info">Edit</button>
     <!-- billing-details -->
      </div>
     
    </div>
  </div>
</div>
<!-- modal -->



@endsection