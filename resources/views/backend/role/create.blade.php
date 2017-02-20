@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  {{-- <section class="content-header">
    <h1>
      Let's Create a New Role<small>with unique name, description and carefully set permissions for it.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
      <li class="active"><i class="fa fa-user-plus"></i> Add New User</li>
    </ol>
  </section> --}}

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">
              Let's Create a New Role!
              <small> with unique name, description and carefully set permissions for it.</small>
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- form start -->
            <form role="form" action="{{ url('backend/role/') }}" method="POST">
              {{ csrf_field() }}

              <div class="form-group {{ ($errors->has('RoleName')) ? 'has-error' : ' ' }} row no-margin-bt">
                <div class="col-md-6">
                  <label for="RoleName" class="control-label">Role Name:</label>
                  <input type="text" class="form-control" id="RoleName" name="RoleName" placeholder="Enter Role name" value="{{ old('RoleName') }}" required>
                  @if($errors->has("RoleName"))
                  <span class="text-danger">{{ $errors->first("RoleName") }}</span>  
                  @else
                  <p class="help-block"><span class="text-info">eg. Administrator, Moderator, etc.</span></p>
                  @endif
                </div>
              </div> {{-- form-group --}}

              <hr class="mg-tp-bt-10" />

              <div class="form-group {{ ($errors->has('Description')) ? 'has-error' : '' }} row no-margin-bt">
                <div class="col-md-12">
                  <label for="Description" class="control-label">Description:</label>
                  <textarea maxlength="200" rows="2" class="form-control" id="Description" name="Description" placeholder="Place some info here" value="{{ old('Description') }}" required></textarea> 
                  @if($errors->has("Description"))
                  <span class="text-danger">{{ $errors->first("Description") }}</span>  
                  @else
                  <p class="help-block"><span class="text-info">Add a little information about this role.</span></p>
                  @endif
                </div>
              </div> {{-- form-group --}}

              <hr class="mg-tp-bt-10" />

              <div class="form-group row no-margin-bt">
                <div class="col-md-12">
                  <label class="control-label">Set Permissions</label>
                  <div class="container mg-top-10">
                    {{cbPermGetter('user')}}
                    {{cbPermGetter('post')}}
                  </div>
                  {{-- <div class="panel panel-default" id="cbContainer">
                    <div class="panel-heading" style="margin-top: -5px;"><strong>For User</strong></div>
                    <div class="panel-body text-right">
                      {{ checkBoxes('user') }}
                    </div>
                    <div class="panel-heading"><strong>For Product</strong></div>
                    <div class="panel-body text-right">
                      {{ checkBoxes('post') }}
                      @if($errors->has("post"))
                      <span class="text-danger">{{ $errors->first("post") }}</span>  
                      @else
                      <p class="help-block">Can't be null.</p>
                      @endif
                    </div>
                  </div>  --}}{{-- Panel --}}
                </div>
              </div> {{-- form-group --}}

              {{-- Form Footer --}}
              <div class="box-footer">
                {{-- <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div> --}}
                {{-- <button class="btn btn-lg btn-primary btn-block register-btn" type="submit">Register</button> --}}
                <button type="submit" class="btn btn-flat btn-primary">Save it All</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> {{-- row --}}
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->
@endsection