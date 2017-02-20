@extends('backend.layouts.master')

@section('title')
<title>Admin | Dashboard</title>
@endsection

{{-- @section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<script src="{{ asset('js/select2.min.js') }}"></script>
@endsection --}}

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
            action="{{ url('backend/library/'. $library->id) }}">
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
              <form role="form" action="{{ url('backend/library/'.$library->id) }}" class="form-horizontal" method="POST" id="app">

                <input type="hidden" name="_method" value="patch">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('LibraryName') ? ' has-error' : '' }}">
                  <label for="LibraryName" class="control-label col-sm-2">Library Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Name of the role" name="LibraryName" value="{{ $library->name }}" id="LibraryName" required>
                    @if ($errors->has('LibraryName'))
                    <span class="help-block">
                      <strong>{{ $errors->first('LibraryName') }}</strong>
                    </span>
                    @endif 
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Address">Library Address *</label>
                  <div class="col-sm-10">
                    <textarea maxlength="200" rows="2" class="form-control" id="Add" name="Address" placeholder="Type Library Address" required>{{ $library->address }}</textarea> 
                    @if ($errors->has('Address'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Address') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Ward') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Ward">Ward</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Ward of Library" name="Ward" value="{{ $library->ward }}" id="Ward" required>
                    @if($errors->has("Ward"))
                    <span class="text-danger">{{ $errors->first("Ward")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Location') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Location">Library Location</label>
                  <div class="col-sm-10">
                    <input name="Location" type="text" class="form-control" placeholder="Location of the library" value="{{ $library->location }}">
                    @if($errors->has("Location"))
                    <span class="text-danger">{{ $errors->first("Location")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('ContactNumber') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="ContactNumber">Contact Number</label>
                  <div class="col-sm-10">
                    <input name="ContactNumber" type="tel" class="form-control" placeholder="Contact Number" value="{{$library->contact_no}}">
                    @if($errors->has("ContactNumber"))
                    <span class="text-danger">{{ $errors->first("ContactNumber")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('ContactName') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="ContactName">Contact Name</label>
                  <div class="col-sm-10">
                    <input name="ContactName" type="text" class="form-control" placeholder="Contact Name" value="{{ $library->contact_name }}">
                    @if($errors->has("ContactName"))
                    <span class="text-danger">{{ $errors->first("ContactName")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Email">Email</label>
                  <div class="col-sm-10">
                    <input name="Email" type="email" class="form-control" placeholder="example@mail.com" value="{{ $library->email }}">
                    @if($errors->has("Email"))
                    <span class="text-danger">{{ $errors->first("Email")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Facebook') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Facebook">Facebook URL</label>
                  <div class="col-sm-10">
                    <input name="Facebook" type="url" class="form-control" placeholder="https://www.facebook.com/yourpage" value="{{ $library->facebook }}">
                    @if($errors->has("Facebook"))
                    <span class="text-danger">{{ $errors->first("Facebook")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('StartDate') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="StartDate">Start Date</label>
                  <div class="col-sm-10">
                    {{ Form::date('StartDate', $library->start_date)}} 
                    @if($errors->has("StartDate"))
                    <span class="text-danger">{{ $errors->first("StartDate")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Description">Description</label>
                  <div class="col-sm-10">
                    <textarea maxlength="200" rows="2" class="form-control" id="Description" name="Description" placeholder="Place some info here" required>{{$library->description}}</textarea>
                    @if($errors->has("Description"))
                    <span class="text-danger">{{ $errors->first("Description")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="State">Choose State</label>
                  <div class="col-sm-10">
                    <select v-on:change="getTownships" v-model="state" class="form-control" name="State">
                      @foreach ($states as $state)
                      <option value="{{$state->id}}" {{ ($state->id == $state_id) ? 'selected' : '' }} >{{$state->name}}</option>
                      @endforeach              
                    </select>
                  </div>
                </div>
                {{--  --}}

                <hr>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="TownShip">Choose Township</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="Township" >
                      <option v-for="township in townships" v-bind:value="township.id" >@{{township.name}}</option>
                    </select>
                  </div>
                </div>

                <hr>
                
                <div class="form-group{{ $errors->has('Services') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="Services">Services</label>
                  <div class="col-sm-10">
                  <input name="Services" type="text" class="form-control" placeholder="Services" value="{{ $library->services }}">
                    @if($errors->has("Services"))
                    <span class="text-danger">{{ $errors->first("Services")}}</span>  
                    @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('ImageName') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="ImageName">Image Name</label>
                  <div class="col-sm-10">
                    <h5> {{ $library->img_name }} </h5>
                   @if($errors->has("ImageName"))
                     <span class="text-danger">{{ $errors->first("ImageName")}}</span>  
                   @endif
                  </div>
                </div>

                <hr>

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                  <label class="control-label col-sm-2" for="image">Image</label>
                  <div class="col-sm-10">
                  {{-- <label class="btn btn-default btn-sm center-block btn-file">
                    <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                    <input type="file" style="display: none;">
                  </label> --}}
                    <input name="image" type="file" class="btn btn-danger" id="image">
                   @if($errors->has("image"))
                   <span class="text-danger">{{ $errors->first("image")}}</span>  
                   @endif
                  </div>
                </div>

                <div class="box-footer">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-flat btn-primary">Save Changes</button>
                  </div>
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

<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
<script>

  var app = new Vue({
    el : '#app',
    data: {
      state : {{$state_id}},
      townships: []
    },
    mounted: function() { 
      this.getTownships();
    },
    methods: {
      getTownships: function() {
        axios.get('/get-townships/'+this.state).then(response => this.townships = response.data);
      }
    }
  });
  app.getTownships();

</script>

<script>
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
      text              : "You will not be able to recover this library!",
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
        swal("Deleted!","Library has been deleted", "success");
        setTimeout(function() {
          self.parents(".frmDelete").submit();
          }, 1000); //1 second delay (1000 milliseconds = 1 seconds)
      }
      else{
        swal("Cancelled!","Library is safe", "error");
      }
    });
  });
</script>
@endsection