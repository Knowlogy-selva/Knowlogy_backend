@extends('layout.master')

@section('title', 'All Partner')

@section('content')


<div class="row">
     <div class="col-md-12">
     <h1 class="h3 mb-3">All Partner</h1>
          <div class="card">
          <div class="card-body">
              
                    <!-- ****** data-table-start ****** -->
     <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
               <th>#</th>
                <th>Name</th>
                <th>Code</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $partners as $partner)
          <tr>
                    <td>#</td>
                    <td>{{$partner->name}}</td>
                    <td>{{$partner->code}}</td>
                    <td>{{$partner->contact_person}}</td>
                    <td>{{$partner->mailid}}</td>
                    <td>{{$partner->location}}</td>
                    <td>
                         <a href="{{url('partner_detail/'.$partner->id)}}"><i class="fa fa-eye" aria-hidden="true" style="font-size:18px;color:#15cdca;"></i></a>
                    </td>
               </tr>
               @endforeach
        </tbody>
     </table>
          </div>
          </div>
     </div>
</div>



@endsection