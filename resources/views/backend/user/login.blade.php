<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="hold-transition login-page bg-grey-prism">
  <div class="login-box">
    <div class="login-logo">
      <a href="AdminLTE-2.3.11/index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ url('backend/login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
        <input name="Email" type="email" class="form-control" placeholder="Email" value="{{ old('Email') }}">
        @if($errors->has("Email"))
        <span class="text-danger">{{ $errors->first("Email")}}</span>  
         @endif
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       </div>
       <div class="form-group has-feedback">
         <input name="password" type="password" class="form-control" placeholder="Password">
         @if($errors->has("password"))
         <span class="text-danger">{{ $errors->first("password")}}</span>  
         @endif
         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
       </div>
       <div class="row">
         <div class="col-xs-8">
           <div class="checkbox">
             <label>
               <input name="cbRemember" type="checkbox"> Remember Me
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-xs-4">
           <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
         </div>
         <!-- /.col -->
       </div>
     </form>

     {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div> --}}
        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="{{ url('user/register') }}" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

