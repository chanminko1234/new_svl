@extends("backend.layouts.master")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Category
        <small>Detail</small>
    </h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">

                    <div class="col-md-12">
                        <form action="{{ url('backend/rc_itm_cat') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="name">Category</label>
                                <br>
                                <p>{{ $rc_itm_cat->name }}</p>
                            </div>
                            
                        </div>                           
                    </form>
                </div>                    
            </div>
        </div>            
    </div>        
</div>    
</div>
</div>
@endsection