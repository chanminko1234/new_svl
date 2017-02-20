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

          <div class="container">
            <h1> News</h1>
            <div class="row">
              <div class="pull-left col-md-2">


                <a href="{{url('backend/news/'.$new->id.'/edit')}}">

                  <button type="button" class="btn btn-primary btn-lg">Edit News</button></a>

                </div>


                <div class="form-group col-md-2">

                  <form class="form" role="form" method="POST" action="{{ url('backend/news/'. $new->id) }}">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}

                    <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete Library">

                  </form>
                </div>
              </div>

              <hr/>

              <div class="panel panel-default">

                <!-- Table -->
                <table class="table table-striped showtable table-responsive">

                  <tr>

                    <th>Thumbnail</th>

                  </tr>

                  <tr>

                    <td>

                      <img src="{{ $new->showImage($new, $thumbnailPath) }}">

                    </td>

                  </tr>
                  <tr>

                    <th>Primary Image</th>

                  </tr>

                  <tr>

                    <td>
                      new
                      <img src="{{ $new->showImage($new, $imagePath) }}" style="max-width: 600px;">

                    </td>
                  </tr>
                  <tr>

                    <th>News Title</th>

                  </tr>


                  <tr>
                    <td>
                      {{$new->title}}
                    </td>
                  </tr>

                  <tr>

                    <th>News Description</th>

                  </tr>

                  <tr>
                    <td>
                      {!! $new->description !!}
                    </td>
                  </tr>

                  <tr>

                    <th>Location</th>

                  </tr>

                  <tr>
                    <td>
                     {!! $new->location !!}
                   </td>
                 </tr>

                 <tr>

                  <th>Date</th>

                </tr>


                <tr>
                  <td>
                   {!! $new->event_date !!}
                 </td>
               </tr>

               <tr>

                <th>Time</th>

              </tr>


              <tr>
                <td>
                 {!! $new->event_time !!}
               </td>
             </tr>


             <tr>

               <th>Contact</th>

             </tr>


             <tr>
              <td>
               {!! $new->contact !!}
             </td>
           </tr>





         </table>

       </div>

       <div class="container">





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