@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Category
		</h1>
	</section>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Category Name</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($rc_itm_cats as $rc_itm_cat)
							<tr>
								<td>{{ $rc_itm_cat->id }}</td>

								<td>{{ $rc_itm_cat->name }}</td>


								<td>
									<a class="btn btn-primary" href="{{ url('backend/category/resource-items/') }}">Edit</a>
								</td>

								<td>
									<form action="{{ route('rc_itm_cat.destroy', $rc_itm_cat->id) }}" method="post">
										{{ csrf_field() }}
										{{ method_field('delete') }}
										<button class="btn btn-danger">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>






</div>






@endsection