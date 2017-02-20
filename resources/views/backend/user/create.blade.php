@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

{{-- @section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<script src="{{ asset('js/select2.min.js') }}"></script>
@endsection --}}

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 {{--  <section class="content-header">
    <h1>
     Here is what you clicked.<small>Create a new custom role and set permissions for it.</small>
   </h1> --}}
   {{--  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
      <li class="active"><i class="fa fa-user-plus"></i> Add New User</li>
    </ol> 
  </section> --}}

  <!-- Main content -->
  <section class="content">
   <div class="row">
     <div class="col-lg-12">
      <div class="box box-info">
        <div class="box-header with-border" >
          <h3 class="box-title">
          Let's Create a New User!
            <small> with a cool username, unique email and give a strong password for it.</small>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class="row">
           <div class="col-lg-12">
            <form role="form" action="{{ url('backend/user/') }}" class="form-horizontal" method="POST">

              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('Username') ? ' has-error' : '' }}">
                <label for="Username" class="control-label col-sm-2">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Name of the role" name="Username" value="{{ old('Username') }}" id="Username" required>
                  @if ($errors->has('Username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('Username') }}</strong>
                  </span>
                  @endif 
                </div>
              </div>

              <hr>

              <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="Email">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="example@mail.com" name="Email" value="{{ old('Email') }}" id="Email" required>
                  @if ($errors->has('Email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('Email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <hr>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="password">Password</label>
                <div class="col-sm-10">
                  <input name="password" type="password" class="form-control" placeholder="Password">
                  @if($errors->has("password"))
                  <span class="text-danger">{{ $errors->first("password")}}</span>  
                  @endif
                </div>
              </div>

              <hr>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="password_confirmation">Confirm Password</label>
                <div class="col-sm-10">
                  <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
                 @if($errors->has("password_confirmation"))
                 <span class="text-danger">{{ $errors->first("password_confirmation")}}</span>  
                 @endif
                </div>
              </div>

              <hr>

              <div class="form-group">
               <label for="Roles" class="col-sm-2 control-label">Set Roles</label>
               <div class="col-sm-10">
                @foreach ($roles as $role)
                  @php
                    $checked = ( ($role->is_default) ? 'checked' : '' );
                  @endphp
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Roles[]" value="{{$role->slug}}" {{$checked}}>{{$role->name}}
                  </label>
                </div>
                @endforeach
                  {{-- @if ($errors->has('Roles'))
                  <span class="help-block">
                    <strong>{{ $errors->first('Roles') }}</strong>
                  </span>
                  @endif --}}
                </div>
              </div>

              <hr>
              
              <div class="form-group">
                 <label for="activate" class="col-sm-2 control-label"></label>
                 <div class="col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="activate" value="activate"> Activate This User
                    </label>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="col-sm-offset-2">
                  <button type="submit" class="btn btn-flat btn-primary">Register</button>`
                </div>
              </div>   

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- content -->
</div>
<!-- content-wrapper -->
@endsection
{{-- @section('script')
<script>
  $('button.btnDelete').on('click', function(e){
    e.preventDefault();
    // "Bubbling from parent onclick event" Start Here!
    if (!e) var e = window.event;
    e.cancelBubble = true;
    if (e.stopPropagation) e.stopPropagation();
    // "Bubbling from parent onclick event" End Here! 
    var self = $(this);
    swal({
      title             : "Are you sure you want to delete?",
      text              : "You will not be able to recover this user and related data!",
      type              : "warning",
      showCancelButton  : true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText : "Yes, delete it!",
      cancelButtonText  : "No, Cancel delete!",
      closeOnConfirm    : false,
      closeOnCancel     : false
    },
    function(isConfirm){
      if(isConfirm){
        swal("Deleted!","User has been deleted", "success");
        setTimeout(function() {
          self.parents(".frmDelete").submit();
          }, 1000); //1 second delay (1000 milliseconds = 1 seconds)
      }
      else{
        swal("Cancelled!","User is safe", "error");
      }
    });
  });
</script>
@endsection --}}