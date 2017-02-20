@extends('backend.layouts.master')

@section('title')
<title>News | Create</title>
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
          <div class="row">
            <div class="col-md-12">

              <h2>Create News</h2>

              <hr/>

              <form class="form" role="form" method="POST" action="{{ url('backend/news') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <!--News Title Form Input -->
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label class="control-label">News Title</label>
                  <input type="text" class="form-control"
                  name="title" value="{{ old('title') }}">

                  @if ($errors->has('title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                  @endif

                </div>
                <!--News Description Form Input -->
                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label class="control-label">News Description</label>
                  <textarea name="description" id="summernote" class="form-control" >{{old('description')}}</textarea>
                  @if ($errors->has('description'))
                  <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                  </span>
                  @endif
                </div>
                <!-- date Form Input -->

                <div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">

                  <label class="control-label">Event Date</label>
                  <div>

                    {{ Form::date('event_date', \Carbon\Carbon::today())}} 

                  </div>
                  @if ($errors->has('event_date'))

                  <span class="help-block">
                    <strong>{{ $errors->first('event_date') }}</strong>
                  </span>

                  @endif

                </div>




                <!-- time Form Input -->

                <div class="form-group{{ $errors->has('event_time') ? ' has-error' : '' }}">

                  <label class="control-label">Event Time</label>

                  <input type="text" class="form-control" name="event_time" value="{{ old('event_time') }}">

                  @if ($errors->has('event_time'))

                  <span class="help-block">
                    <strong>{{ $errors->first('event_time') }}</strong>
                  </span>

                  @endif

                </div>

                <!-- Location Form Input -->
                
                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

                  <label class="control-label">Location</label>

                  <input type="text" class="form-control" name="location" value="{{ old('location') }}">

                  @if ($errors->has('location'))

                  <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
                  </span>

                  @endif

                </div>

                <!-- Contact Form Input -->
                
                <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">

                  <label class="control-label">Contact</label>

                  <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">

                  @if ($errors->has('contact'))

                  <span class="help-block">
                    <strong>{{ $errors->first('contact') }}</strong>
                  </span>

                  @endif

                </div>


                <!-- image_name Form Input -->

                <div class="form-group{{ $errors->has('img_name') ? ' has-error' : '' }}">

                  <label class="control-label">Image Name</label>

                  <input type="text" class="form-control" name="img_name" value="{{ old('img_name') }}">

                  @if ($errors->has('img_name'))

                  <span class="help-block">
                    <strong>{{ $errors->first('img_name') }}</strong>
                  </span>

                  @endif

                </div>




                <!-- Image File Input -->
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                  <label class="control-label">News Image
                  </label>

                  <input type="file" name="image" id="image">

                  @if ($errors->has('image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                </div>



                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg">
                    Create
                  </button>
                </div>
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