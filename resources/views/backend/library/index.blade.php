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
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="col-md-1">#</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-2">Township</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Contact No</th>
                    <th class="text-center col-md-3">
                      <p>Action</p>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($libraries as $library)
                    @php
                      $township = \App\Townships::where('id', $library->township_id)->first();
                    @endphp
                  <tr class="btn-table-row" onclick="location.href='{{ url('backend/library/'.$library->id.'/show') }}'" 
                    title="Click to see more">
                    <th class="col-md-1" scope="row">{{ $row_number }}.</th>
                    <td class="col-md-2">{{ $library->name}}</td>
                    <td class="col-md-2">{{ $township->name}}</td>
                    <td class="col-md-2">{{ $library->email }}</td>
                    <td class="col-md-2">{{ $library->contact_no }}</td>
                    <td class="text-center col-md-3" style="display: inline;">
                      <div class="form-inline">
                        <div class="form-group">
                          <a class="btn btn-circle btn-primary" href='{{ url('/backend/library/'.$library->id.'/edit') }}'" title="Edit">
                            <i class="fa fa-edit"></i>
                          </a>
                        </div>

                        <div class="form-group">
                          <form class="form frmDelete" id="Form" role="form" method="POST" 
                          action="{{ url('backend/library/'. $library->id) }}">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <button class="btn btn-circle btn-danger btnDelete" title="Delete">
                              <i class="fa fa-remove"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                   </td>
                  </tr> 

                @php
                $row_number++;
                @endphp 

                @endforeach
              </tbody>

            </table>
          </div>
          <div class="box-footer clearfix ">
            {{$libraries->links()}}
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
  $('.pagination').addClass('pagination-sm no-margin pull-right');
  $('button.btnDelete').on('click', function(e){
    e.preventDefault();
    // "Bubbling from parent onclick event" Start Here!
    if (!e) var e = window.event;
    e.cancelBubble = true;
    if (e.stopPropagation) e.stopPropagation();
    // "Bubbling from parent onclick event" End Here! 
    var self = $(this);
    swal({
      title             : "Are you sure you want to delete?",
      text              : "You will not be able to recover this user's data!",
      type              : "warning",
      showCancelButton  : true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText : "Yes, delete it!",
      cancelButtonText  : "No, Cancel delete!",
      closeOnConfirm    : false,
      closeOnCancel     : false
    },
    function(isConfirm){
      if(isConfirm){
        swal("Deleted!","User has been deleted", "success");
        setTimeout(function() {
          self.parents(".frmDelete").submit();
          }, 1000); //1 second delay (1000 milliseconds = 1 seconds)
      }
      else{
        swal("Cancelled!","User is safe", "error");
      }
    });
  });
</script>
@endsection