@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

@section('css')
<style>
  .form-group{
    margin-bottom: 30px;
  }
</style>
@endsection

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
           At Here, You Can Get All Informations of {{$library->name}}.
           <small>Don't afraid to edit by clicking the Edit Button at right! <i class="fa fa-hand-o-right"></i></small>
         </h3>
          {{-- @if ($user->hasAccess(['user.update'])) --}}
            <div class="box-tools pull-right">
              <a class="btn btn-box-tool btn-flat" title="Click to Edit" href="/backend/library/{{$library->id}}/edit">
                <i class="fa fa-edit text-primary" ></i>
              </a>
            </div>
          {{-- @endif --}}
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       <div class="row">
        <div class="col-lg-12">
          <div class="well form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2">Library Name</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->name}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Address</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->address}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Ward</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->ward}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Location</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->location}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Contact Number</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->contact_no}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Contact Name</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->contact_name}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->email}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Facebook Link</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->facebook}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Start Date</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->start_date}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->description}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Township</label>
              <div class="col-sm-10">
                @php
                  $township = \App\Townships::find($library->township_id);
                @endphp
                <strong class="form-control no-border">{{$township->id}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Services</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$library->services}}</strong>
              </div>
            </div>
            {{-- <div class="form-group">
              <label class="col-sm-2 control-label">Last Login at</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->last_login)) }}</strong>
              </div>
            </div> --}}
            {{-- <div class="form-group">
              <label class="col-sm-2 control-label">Member Since</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->created_at)) }}</strong>
              </div>
            </div> --}}
            {{-- <div class="form-group">
              <label class="col-sm-2 control-label">Last Updated at</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->updated_at)) }}</strong>
              </div>
            </div> --}}
          </div>
        </div>
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
@section('script')

@endsection