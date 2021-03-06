@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('js/dropzone/dist/dropzone.css') }}">
<script src="{{ asset('js/dropzone/dist/dropzone.js') }}"></script>
<script>
  var Dropzone = require("dropzone");
</script>

@endsection

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Here's what you created <small>about roles to manage access levels.</small>
    </h1>
   {{--  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
      <li class="active"><i class="fa fa-user-plus"></i> Add New User</li>
    </ol> --}}
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-info">
				  <div class="box-header with-border">
            <h3 class="box-title">{{-- title --}}</h3><small>{{-- a little more --}}</small>
          </div>

          <div class="box-body">
            <div class="row">
              <div class="col-lg-12">
                <form action="#" class="dropzone" id="my-awesome-dropzone">
                  <input type="file" name="file" multiple/>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box -->
        
      </div>
    </div>
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->
@endsection

@section('script')
@endsection