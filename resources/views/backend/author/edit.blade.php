@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

@section('css') 
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

         <section class="content-header">
          <h1>
            Author
            <small>Edit</small>
          </h1>
        </section>

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="{{ url('backend/author/' . $author->id) }}" method="POST">
                      <input type="hidden" name="_method" value="patch">
                      {{ csrf_field() }}
                      <div class="form-group">
                      <label class="control-label" for="name">Author</label>
                        <br>

                        @if($errors->has('author_name'))
                        <label class="text-danger" for="name"><small>{{ $errors->first('name') }}</small></label>
                        @endif
                        <input class="form-control" type="text" name="name" value="{{ $author->name }}" />
                      </div>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                  </div>                    
                </div>
              </div>            
            </div>        
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