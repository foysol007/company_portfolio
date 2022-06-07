@extends('admin.admin_master')

@section('admin')

<div class="py-12"> 
  <div class="container">
   <div class="row">
    
    
   <div class="col-md-12">
    <h2 class="text-center">Home About</h2>
    <a class="btn btn-info" style="" href="{{route('add.about')}}">Add About</a> 
    <div class="card">
          
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>{{ session('success') }}</strong>  
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
  </div>
  @endif
       
   <table class="table">
 <thead>
   <tr>
     <th scope="col" width="10%">SL No</th>
     <th scope="col" width="15%">Home Title</th>
     <th scope="col" width="20%">Short Description</th>
     <th scope="col" width="40%">Long Description</th>
     
 
     <th scope="col">Action</th>
   </tr>
 </thead>
 <tbody>
        @php($i=1)
       @foreach($homeabout as $about) 
   <tr>
     <th scope="row"> {{ $i++}} </th>
     {{-- <th scope="row"> {{ $sliders->firstItem()+$loop->index  }} </th> --}}
     <td> {{ $about->title }} </td>
     <td> {{ $about->short_dis }} </td>
     <td> {{ $about->long_dis }} </td>
     
     
      <td> 
      <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
      <a href="{{ url('about/delete/'.$about->id) }}"
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
  