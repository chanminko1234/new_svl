@extends('backend.layouts.master')

@section('title')
<title>Author | Index</title>
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
            </h1>
          </section>
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>Author Name</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($authors as $author)
                      <tr>
                        <td>{{ $author->id }}</td>

                        <td>{{ $author->name }}</td>


                        <td>
                          <a class="btn btn-primary" href="{{ route('author.edit', $author->id) }}">Edit</a>
                        </td>

                        <td>
                          <form action="{{ route('author.destroy', $author->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    {{ $authors->links() }}

                  </table>
                </div>
                 {{ $authors->links() }}
                    <div> <a href="{{url('backend/author/create')}}">
                      <button type="button" class="btn btn-lg btn-primary">
                        Create New
                      </button></a>
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