@extends('admin.admin_master')

@section('admin')

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <x-jet-welcome />
          </div> --}}
          
     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif
  
          <div class="container">
              <div class="row">
             
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">Edit Brand</div>
                      <div class="card-body">
                      <form action="{{url('brand/update/'.$brands->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
                        <div  class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Update Brand Name</label>
                          <input name="brand_name" type="text" class="form-control" 
                          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brands->brand_name}}">
                          @error('brand_name')
                            <samp class="text-danger">{{$message}}</samp>
                          @enderror
                        </div>
                          <br>
                        <div  class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Update Brand Image</label>
                          <input name="brand_image" type="file" class="form-control" 
                          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brands->brand_image}}">
                          @error('brand_image')
                            <samp class="text-danger">{{$message}}</samp>
                          @enderror
                        </div>
                          <br>
                          <div class="form-grup">
                              <img src="{{asset($brands->brand_image)}}" alt="image" style="height: 300px; width: 450px;">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Brand</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
         
          </div>
      </div>
  </div>
@endsection
