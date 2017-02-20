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
      Create a brand new library<small>with details.</small>
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
            <h3 class="box-title"></h3><small>{{-- a little more --}}</small>
          </div>

          <div class="box-body">
            <div class="row">
              <div class="col-lg-12">
                <form role="form" action="{{ url('backend/library/') }}" class="form-horizontal" method="POST" id="app" enctype="multipart/form-data">

                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('LibraryName') ? ' has-error' : '' }}">
                    <label for="LibraryName" class="control-label col-sm-2">Library Name *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Name of Library" name="LibraryName" value="{{ old('LibraryName') }}" id="LibraryName" required>
                      @if ($errors->has('LibraryName'))
                      <span class="help-block">
                        <strong>{{ $errors->first('LibraryName') }}</strong>
                      </span>
                      @endif 
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Library">Library Address *</label>
                    <div class="col-sm-10">
                      <textarea maxlength="200" rows="2" class="form-control" id="Description" name="Address" placeholder="Type Library Address" required value="{{ old('Address') }}"></textarea> 
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
                      <input type="text" class="form-control" placeholder="Ward of Library" name="Ward" value="{{ old('Ward') }}" id="Ward" required>
                      @if($errors->has("Ward"))
                      <span class="text-danger">{{ $errors->first("Ward")}}</span>  
                      @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Location') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Location">Library Location</label>
                    <div class="col-sm-10">
                      <input name="Location" type="text" class="form-control" placeholder="Location of the library" value="{{ old('Location') }}">
                     @if($errors->has("Location"))
                     <span class="text-danger">{{ $errors->first("Location")}}</span>  
                     @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('ContactNumber') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="ContactNumber">Contact Number</label>
                    <div class="col-sm-10">
                      <input name="ContactNumber" type="tel" class="form-control" placeholder="Contact Number" value="{{ old('ContactNumber') }}">
                     @if($errors->has("ContactNumber"))
                     <span class="text-danger">{{ $errors->first("ContactNumber")}}</span>  
                     @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('ContactName') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="ContactName">Contact Name</label>
                    <div class="col-sm-10">
                      <input name="ContactName" type="text" class="form-control" placeholder="Contact Name" value="{{ old('ContactName') }}">
                      @if($errors->has("ContactName"))
                        <span class="text-danger">{{ $errors->first("ContactName")}}</span>  
                      @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Email">Email</label>
                    <div class="col-sm-10">
                      <input name="Email" type="email" class="form-control" placeholder="example@mail.com" value="{{ old('Email') }}">
                     @if($errors->has("Email"))
                     <span class="text-danger">{{ $errors->first("Email")}}</span>  
                     @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Facebook') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Facebook">Facebook URL</label>
                    <div class="col-sm-10">
                      <input name="Facebook" type="url" class="form-control" placeholder="https://www.facebook.com/yourpage" value="{{ old('Facebook') }}">
                     @if($errors->has("Facebook"))
                     <span class="text-danger">{{ $errors->first("Facebook")}}</span>  
                     @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('StartDate') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="StartDate">Start Date</label>
                    <div class="col-sm-10">
                      {{ Form::date('StartDate', \Carbon\Carbon::today())}} 
                     @if($errors->has("StartDate"))
                     <span class="text-danger">{{ $errors->first("StartDate")}}</span>  
                     @endif
                    </div>
                  </div>

                  <hr>

                  <div class="form-group{{ $errors->has('Description') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Description">Description</label>
                    <div class="col-sm-10">
                      <textarea maxlength="200" rows="2" class="form-control" id="Description" name="Description" placeholder="Place some info here" value="{{ old('Description') }}" required></textarea>
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
                          <option value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach              
                      </select>
                    </div>
                  </div>

                  <hr>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="TownShip">Choose Township</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="Township" >
                        <option v-for="township in townships" v-bind:value="township.id">@{{township.name}}</option>
                      </select>
                    </div>
                  </div>

                  <hr>
                
                  <div class="form-group{{ $errors->has('Services') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="Services">Services</label>
                    <div class="col-sm-10">
                      <input name="Services" type="text" class="form-control" placeholder="Services" value="{{ old('Services') }}">
                     @if($errors->has("Services"))
                       <span class="text-danger">{{ $errors->first("Services")}}</span>  
                     @endif
                    </div>
                  </div>
                  
                  <hr>

                  <div class="form-group{{ $errors->has('ImageName') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-2" for="ImageName">Image Name</label>
                    <div class="col-sm-10">
                      <input name="ImageName" type="text" class="form-control" placeholder="Name of Image" value="{{ old('ImageName') }}">
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

                  {{-- <hr>

                  <div class="form-group">
                   <label for="Roles" class="col-sm-2 control-label">Set Roles</label>
                   <div class="col-sm-10">
                    @foreach ($roles as $role)

                      @php
                        $checked = ( ($role->is_default) ? 'checked' : '' );
                      @endphp

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="Roles[]" value="{{$role->slug}}" {{$checked}}>{{$role->name}}
                        </label>
                      </div>

                    @endforeach
                    </div>
                  </div>

                  <hr>
                  
                  <div class="form-group">
                     <label for="activate" class="col-sm-2 control-label"></label>
                     <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="activate" value="activate"> Activate This User
                        </label>
                      </div>
                    </div>
                  </div> --}}

                  <div class="box-footer">
                    <div class="col-sm-offset-2 pull-right">
                      <button type="submit" class="btn btn-flat btn-primary">Save All</button>
                    </div>
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
<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
<script>
  
var app = new Vue({
  el : '#app',
  data: {
    state : 1,
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

</script>

@endsection