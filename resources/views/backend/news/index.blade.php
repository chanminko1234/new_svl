
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
            


            <div class="container">
  <h2>Images</h2>

  <hr/>

  @if($news->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <th>Id</th>
     <th>Thumbnail</th>
     <th>News Title</th>
     <th>News Description</th>
     <th>Event Date</th>
     <th>Event Time</th>
     <th>Location</th>
     <th></th>
   </thead>

   <tbody>

    @foreach($news as $new)

    <tr>
      <td><a href="{{url('backend/news/'. $new->id.'/edit')}}">{{ $new->id }}</a></a></td> 

      <td><a href="{{url('backend/news/'.$new->id.'-'.$new->slug)}}"><img src="{{ $new->showImage($new, $thumbnailPath) }}"></a></td> 

      


      <td><a href="{{url('backend/news/'.$new->id.'-'.$new->slug)}}">{{$new->title}}</a></td> 


      <td>{!! $new->description !!}</td> 
      <td>{{ $new->event_date }}</td> 

      <td>{{ $new->event_time }}</td>

      <td>{{ $new->location }}</td> 

      <td class="edit_btn"><a href="{{url('backend/news/'.$new->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
    </tr>

    @endforeach

  </tbody>

</table>

@else

Sorry, no Latest News Images

@endif

{{ $news->links() }}

<div> <a href="{{url('backend/news/create')}}">
  <button type="button" class="btn btn-lg btn-primary">
    Create New
  </button></a>
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