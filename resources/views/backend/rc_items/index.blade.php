@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h2>Resource Center Images</h2>
	</section>
	<!-- Main content -->
	<div class="container">
		<div class="col-md-12">

			@if($rc_items->count() > 0)

			<table class="table table-hover table-bordered table-striped">

				<thead>
					<td>Id</td>
					<td>Thumbnail</td>
					<td>Image Name</td>
					<td>Book Name</td>
					<td>Category Name</td>
					<td>Download Links</td>
					<td>Date Created</td>
					<td></td>
				</thead>

				<tbody>

					@foreach($rc_items as $rc_item)
					<tr>
						<td><a href="{{url('backend/rc_items/'. $rc_item->id.'/edit')}}">{{ $rc_item->id }}</a></td>
						<td><a href="{{ url('backend/rc_items/'. $rc_item->id) }}"><img src="{{ $rc_item->showImage($rc_item, $thumbnailPath) }}"></a></td>
						<td><a href="{{url('backend/rc_items/'.$rc_item->id)}}">
							{{ $rc_item->image_name }}</a></td>

							<td><a href="{{ url('backend/rc_items/. $rc_item->id') }}">{{ $rc_item->name }}</a></td>
							<td><a href="{{ url('backend/rc_items/. $rc_item->id') }}">{{ $rc_item->cat_id }}</a></td>
							<td><a href="{{ url('backend/rc_items/. $rc_item->id') }}">{{ $rc_item->download_link }}</a></td>
							<td>{{ $rc_item->created_at }}</td>
							<td class="edit_btn"><a href="{{url('backend/rc_items/'.$rc_item->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
						</tr>

						@endforeach

					</tbody>

				</table>

				@else

				Sorry, no Resource Center Images

				@endif

				{{ $rc_items->links() }}

				<div> <a href="{{ url('backend/rc_items/create')}}">
					<button type="button" class="btn btn-lg btn-primary">
						Create New
					</button></a>
				</div>

			</div>
		</div>
	</div>
	@endsection