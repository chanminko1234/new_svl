@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
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
            <h3 class="box-title">Edit</h3>
            <div class="box-tools pull-right">
              <form class="form frmDelete" id="Form" role="form" method="POST" 
              action="{{ url('backend/role/'. $role->id) }}">
                <input type="hidden" name="_method" value="delete">
                  {{ csrf_field() }}
                <button class="btn btn-danger btnDelete btn-sm">
                 Delete <i class="fa fa-remove"></i>
                </button>
              </form>
              {{-- <a class="btn btn-box-tool" title="Click to Edit" href="/admin/role/{{$role->id}}/edit">
                Delete
              </a> --}}
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <div class="row">
               <div class="col-lg-12">
                <form role="form" action="{{ url('backend/role/'.$role->id) }}" method="POST">

                  <input type="hidden" name="_method" value="patch">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('RoleName') ? ' has-error' : '' }} row">
                    <div class="col-md-6">
                      <label class="control-label">Role Name</label>
                      <input type="text" class="form-control" placeholder="Name of the role" name="RoleName" value="{{ $role->name }}" required>
                      @if ($errors->has('RoleName'))
                        <span class="help-block">
                          <strong>{{ $errors->first('RoleName') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }} row">
                    <div class="col-md-12">
                      <label class="control-label">Description</label>
                      <textarea maxlength="200" rows="2" class="form-control" id="Description" name="Description" placeholder="Place some info here" value="{{ old('Description') }}" required>{{$role->description}}</textarea>
                      @if ($errors->has('Description'))
                        <span class="help-block">
                          <strong>{{ $errors->first('Description') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group row">
                   <div class="col-md-12">
                     <label class="control-label">Permissions</label>
                     <div class="container mg-top-10">
                       {{editPermissions($role->permissions, 'user')}}
                       {{editPermissions($role->permissions, 'post')}}
                     </div>
                   </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-flat btn-primary">Save Changes</button>
                  </div>   

                </form>

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
<script src="{{ asset('AdminLTE-2.3.11/plugins/iCheck/icheck.min.js') }}"></script>
 <script>
  // $(function () {
  //     //$(".textarea").wysihtml5();
  //    $('input').iCheck({
  //      checkboxClass: 'icheckbox_square-blue',
  //      radioClass: 'iradio_square-blue',
  //      increaseArea: '20%' // optional
  //    });
  // });
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
          text              : "You will not be able to recover this role and permissions!",
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
          swal("Deleted!","Role has been deleted", "success");
          setTimeout(function() {
              self.parents(".frmDelete").submit();
          }, 1000); //1 second delay (1000 milliseconds = 1 seconds)
        }
        else{
          swal("Cancelled!","Role is safe", "error");
        }
    });
  });
</script>
@endsection