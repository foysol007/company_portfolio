@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
<div class="card-header card-header-border-bottom">
     <h2>User Profile Update</h2>
</div>
<div class="card-body">
     <form method="POST" action="{{ route('update.user.profile') }}" class="form-pill">
          @csrf

          <div class="form-group">
               <label for="exampleFormControlInput3">User Name</label>
               <input type="text" name="name" class="form-control" id="current_password" value="{{$user['name']}}">

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput3">User Name</label>
            <input type="text" name="email" class="form-control" id="current_password" value="{{$user['email']}}">

     </div>

         

          <button type="submit" class="btn btn-primary btn-default">Update Profile</button>
           
     </form>
</div>
</div>



@endsection