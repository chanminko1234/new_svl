@extends("backend.layouts.master")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Category
      <small>Edit</small>
    </h1>
  </section>

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form action="{{ url('backend/book_cat/' . $book_cat->id) }}" method="POST">
                <input type="hidden" name="_method" value="patch">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label" for="name">Category</label>
                  <br>

                  @if($errors->has('name'))
                  <label class="text-danger" for="name"><small>{{ $errors->first('name') }}</small></label>
                  @endif
                  <input class="form-control" type="text" name="name" value="{{ $book_cat->name }}" />
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
            </div>                    
          </div>
        </div>            
      </div>        
    </div>    
  </div>
</div>
@endsection