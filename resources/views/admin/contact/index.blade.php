@extends('admin.admin_master')

@section('admin')

<div class="py-12"> 
  <div class="container">
   <div class="row">
    
    
   <div class="col-md-12">
    <h2 class="text-center">Contact Page</h2>
    <a class="btn btn-info" style="" href="{{route('add.contact')}}">Add Contact</a> 
    <div class="card">
          
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>{{ session('success') }}</strong>  
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
  </div>
  @endif
       <div class="card-header">All Contact Data</div>
   <table class="table">
 <thead>
   <tr>
     <th scope="col" width="10%">SL No</th>
     <th scope="col" width="15%">Contact Address</th>
     <th scope="col" width="20%">Contact Email</th>
     <th scope="col" width="40%">Contact Phone</th>
    <th scope="col">Action</th>
   </tr>
 </thead>
 <tbody>
        @php($i=1)
       @foreach($contacts as $con) 
   <tr>
     <th scope="row"> {{ $i++}} </th>
     {{-- <th scope="row"> {{ $sliders->firstItem()+$loop->index  }} </th> --}}
     <td> {{ $con->address }} </td>
     <td> {{ $con->email }} </td>
     <td> {{ $con->phone }} </td>
     
     
      <td> 
      <a href="{{ url('contact/edit/'.$con->id) }}" class="btn btn-info">Edit</a>
      <a href="{{ url('contact/delete/'.$con->id) }}"
       onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger">Delete</a>
       </td> 
 
 
   </tr> 
   @endforeach
 
 
 </tbody>
 </table>

 
      </div>
   </div>
 
 

 
 
   </div>
 </div> 
 
 
 
 
 
 
   </div>
  @endsection
  