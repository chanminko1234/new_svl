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
     <i class="fa fa-cog fa-spin fa-fw"></i> General Setting <small>set default values and more.</small>
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
        {{-- <div class="box ">
				  <div class="box-header ">
            <h3 class="box-title">List of All Roles</h3><small>  Click to view more info.</small>
          </div>
          <!-- /.box-header -->
        </div> --}}
        <!-- /.box -->
        <form role="form" action="{{ url('backend/setting/save') }}" class="well form-horizontal" method="POST" id="app">
          {{ csrf_field() }}

          @if (isSuperAdmin($user->id))
            <div class=" form-group" >
              <label class="col-sm-offset-1 col-sm-2 control-label">Set a default roles </label>
              <div class="col-sm-9">
                <h3 class="form-control no-border no-margin">
                  @foreach ($roles as $role)
                    @php
                      $checked = ( ($role->is_default) ? 'checked' : '');
                    @endphp
                    <div class="checkbox checkbox-inline no-padding">
                      <label>
                        <input type="checkbox" name="Roles[]" value="{{$role->slug}}" {{$checked}}>{{$role->name}}
                      </label>
                    </div>
                  @endforeach
                </h3>
              </div>
            </div>
          @endif

          <div class="form-group">
            <select v-on:change="getTownships" v-model="state" class="form-control">
              @foreach ($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
              @endforeach              
            </select><hr>
            <select class="form-control">
              <option v-for="township in townships">@{{township.name}}</option>
            </select>
            <code>@{{townships}}</code>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary btn-flat">Save Changes</button>
            </div>
          </div>
          <pre>@{{ $data | json }}</pre>
        </form>
        
      </div>
    </div>
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->
@endsection

@section('script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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