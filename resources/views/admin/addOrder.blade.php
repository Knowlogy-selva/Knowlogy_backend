@extends('layout.master')
@section('title', 'Entrollment')
@section('content')

<!-- entrollment_code_functionality_start_to_here -->
<h1 class="h3 mb-3">All Entrollment <button class="btn btn-outline-info">Create</button></h1>
     <div class="row">
               <div class="col-lg-9">
                    <div class="card">
                         <div class="card-body">
                              
                              <h6>Order #5182 details</h6>
                              <hr>
                         <div class="row pt-3">
                              <div class="col-lg-4">
                                   <div class="general">
                                        <p>General</p>
                                                  <div class="row">
                                                       <div class="col-lg-6">
                                                            <div class="form-group">
                                                                 <label for="Date created">Date created:</label>
                                                                 <input type="date" class="form-control" id="Date created" >
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <div class="form-group">
                                                                 <label for="Date created">Date created:</label>
                                                                 <input type="time" class="form-control" id="Date created" >
                                                            </div>
                                                       </div>
                                                  </div>
                                             
                                             <div class="form-group">
                                                  <label for="Status">Status</label>
                                                  <select class="form-control" id="Status">
                                                       <option>Pending Payment</option>
                                                       <option>Processing</option>
                                                       <option>On hold</option>
                                                       <option>Completed</option>
                                                       <option>Cancelled</option>
                                                       <option>Refunded</option>
                                                       <option>Failed</option>
                                                  </select>
                                             </div>
                                             <div class="form-group">
                                                  <label for="Customer">Customer</label>
                                                  <select class="form-control" id="Customer">
                                                       <option>Gust</option>
                                                  </select>
                                             </div>
                                   </div>
                              </div>

                                   <div class="col-lg-4">
                                        <p>Billing</p>
                                        <!--  -->
                                      
                                        <!--  -->
                                   </div>

                                   <div class="col-lg-4">
                                        <p>Shipping</p>
                                   </div>
                         </div>

                         </div>
                    </div>


<!--second_row_code_functionality_start_to_here -->
<div class="row">
               <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-lg-5">
                                        <p>Idem</p>
                                   </div>
                                   <div class="col-lg-2">
                                        <p>Cost</p>
                                   </div>
                                   <div class="col-lg-2">
                                        <p>Qty</p>
                                   </div>
                                   <div class="col-lg-3">
                                   <p>Total</p>
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <p>Items Subtotal: </p>
                                                  <p>Order Total: </p>
                                             </div>
                                             <div class="col-lg-6">
                                                  <p><b>$ 0</b></p>
                                                  <p><b>$ 0</b></p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         <hr/>
                         <button class="btn btn-outline-primary">Add item(s)</button>&nbsp;&nbsp;<button class="btn btn-outline-primary">Apply coupon</button>
                         <button  class="btn btn-primary recalculate">Recalculate</button>
                         </div>
                    </div>
               </div>
          </div>
          <!-- second_row_code_functionality_end_to_here -->

               </div>

                    <!-- right-side-card-code-functionality -->
                    <div class="col-lg-3">
                         <div class="card">
                              <div class="card-body">
                              <h6>Order Action</h6>
                              <hr>
                                   <div class="row">
                                        <div class="col-lg-9">
                                             <div class="form-group">
                                                       <select class="form-control" id="Status">
                                                            <option>Choose an action....</option>
                                                            <option>Email invoice / order details to customer</option>
                                                            <option>Resend new order notification</option>
                                                            <option>Regenerate download permissions</option>
                                                       
                                                       </select>
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <button class="btn btn-outline-info">Share</button>
                                        </div>

                                   </div>
                                        
                              </div>
                         </div>
          <!-- right-side-card-code-functionality-start -->
          <div class="row">
               <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                              <h6>Order Notes</h6>
                              <hr>
                              <div class="form-group">
                                   <label for="addnote">Add note</label>
                                   <textarea class="form-control" id="addnote" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                   <select class="form-control">
                                        <option>Private note</option>
                                        <option>Note to customer</option>
                                   </select>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                              <h6>Product Permission</h6>
                              <hr>
                              <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Search for a downloadable product…">
                              </div>
                              <button class="btn btn-outline-info">Grant access</button>
                         </div>
                    </div>
               </div>
          </div>
          <!-- right-side-card-code-functionality-start -->


                    </div>
                    <!-- right-side-card-code-functionality -->

     </div>


          



<!-- entrollment_code_functionality_end_to_here -->

@endsection