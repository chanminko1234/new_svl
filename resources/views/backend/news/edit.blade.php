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


         <h2>Update Latest News Slider Images</h2>

         <hr/>

         <!-- delete button -->

         <div class="form-group pull-right">

         <form class="form" role="form" method="POST" action="{{ url('backend/news/'. $new->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

          </form>
        </div>
        <div class="control-label">Thumbnail:</div>
        <!-- image thumbnail -->
        <div>

        <img src="{{ $new->showImage($new, $thumbnailPath) }}">

        </div>
        <form class="form" role="form" method="POST" action="{{ url('backend/news/' . $new->id) }}" enctype="multipart/form-data">

          <input type="hidden" name="_method" value="patch">

          {{ csrf_field() }}

          <div class="form-group">
            <label class="control-label">Image
            </label>
            <input type="file" name="image" id="image" value="">
          </div>

          @if ($errors->has('image'))

          <span class="help-block">
            <strong>{{ $errors->first('image') }}</strong>
          </span>

          @endif

          <label class="control-label">News Title</label>
          <input type="text" class="form-control"
          name="title" value="{{$new->title}}">

          @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif

          <label class="control-label">News Description</label>
          <textarea name="description" id="summernote" cols="30" rows="10">{!! $new->description!!}</textarea>


          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif



          <label class="control-label">Location</label>
          <input type="text" class="form-control" name="location" value="{{$new->location}}">

          @if ($errors->has('location'))
          <span class="help-block">
            <strong>{{ $errors->first('location') }}</strong>
          </span>
          @endif



          <label class="control-label">Event Date</label>
          <input type="text" class="form-control" name="event_date" value="{{$new->event_date}}">

          @if ($errors->has('event_date'))
          <span class="help-block">
            <strong>{{ $errors->first('event_date') }}</strong>
          </span>
          @endif



          <label class="control-label">Time</label>
          <input type="text" class="form-control"
          name="event_time" value="{{$new->event_time}}">

          @if ($errors->has('event_time'))
          <span class="help-block">
            <strong>{{ $errors->first('event_time') }}</strong>
          </span>
          @endif



          <label class="control-label">Contact</label>
          <input type="text" class="form-control"
          name="contact" value="{{$new->contact}}">

          @if ($errors->has('contact'))
          <span class="help-block">
            <strong>{{ $errors->first('contact') }}</strong>
          </span>
          @endif
          <!-- Submit Button -->
          <br>


          
          <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

              Update

            </button>

          </div>
        </div>
      </form>
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
<script>
  function ConfirmDelete()
  {
    var x = confirm("Are you sure you want to delete?");
    if (x)
      return true;
    else
      return false;
  }
</script>
@endsection