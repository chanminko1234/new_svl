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
           At Here, You Can Get All Informations of {{$user->first_name}}.
           <small>Don't afraid to edit by clicking the Edit Button at right! <i class="fa fa-hand-o-right"></i></small>
         </h3>
          {{-- @if ($user->hasAccess(['user.update'])) --}}
            <div class="box-tools pull-right">
              <a class="btn btn-box-tool btn-flat" title="Click to Edit" href="/backend/user/{{$user->id}}/edit">
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
              <label class="control-label col-sm-2">Username</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$user->first_name}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Email</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{$user->email}}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">In Roles</label>
              <div class="col-sm-10">
                <h3 class="form-control no-border no-margin">
                  @foreach ($roles as $role)
                  @if ($user->inRole($role->slug))
                  <span class="label label-info">{{$role->name}}</span>
                  @endif
                  @endforeach
                </h3>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Last Login at</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->last_login)) }}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Member Since</label>
              <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->created_at)) }}</strong>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Last Updated at</label>
            <div class="col-sm-10">
                <strong class="form-control no-border">{{ date('d-m-Y', strtotime($user->updated_at)) }}</strong>
              </div>
            </div>
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