@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container">
		<div class="col-md-12">

			<h2>Update Image</h2>

			<hr/>

			<!-- delete button -->

			<div class="form-group pull-right">

				<form class="form" role="form" method="POST" action="{{ url('backend/rc_items/'. $rc_item->id) }}">
					<input type="hidden" name="_method" value="delete">
					{{ csrf_field() }}

					<input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

				</form>
			</div>

			<!-- image name no input -->
			<div>

				<div class="control-label">
					Image Name:

				</div>

				<h4>{{ $rc_item->image_name
					. '.' .
					$rc_item->image_extension }}
				</h4>

			</div>

			<div class="control-label">Thumbnail:</div>
			<!-- image thumbnail -->
			<div>

				<img src="{{ $rc_item->showImage($rc_item, $thumbnailPath) }}">

			</div>

			<br>

			<form class="form" role="form" method="POST"
			action="{{ url('backend/rc_items/' . $rc_item->id) }}"
			enctype="multipart/form-data">

			<input type="hidden" name="_method" value="patch">

			{{ csrf_field() }}
			<!-- name Form Input -->
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label class="control-label">Name</label>
				<input type="text" class="form-control" name="name"
				value="{{ $rc_item->name }}">
				@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
				@endif
			</div>

			<!-- cat_id Form Input -->
			<div class="form-group{{ $errors->has('cat_id') ?
				' has-error' : '' }}">
				<label class="control-label">Category Id</label>
				<input type="text" class="form-control" name="cat_id"
				value="{{ $rc_item->cat_id }}">
				@if ($errors->has('cat_id'))
				<span class="help-block">
					<strong>{{ $errors->first('cat_id') }}</strong>
				</span>
				@endif
			</div>

			<!-- download_link Form Input -->
			<div class="form-group{{ $errors->has('download_link') ?
				' has-error' : '' }}">
				<label class="control-label">Download Link</label>
				<input type="text" class="form-control" name="download_link"
				value="{{ $rc_item->download_link }}">
				@if ($errors->has('download_link'))
				<span class="help-block">
					<strong>{{ $errors->first('download_link') }}</strong>
				</span>
				@endif
			</div>

			<!-- image file Form Input -->

			<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

				<div class="form-group">
					<label class="control-label">Primary Image
					</label>

					<input type="file" name="image" id="image">
				</div>

				@if ($errors->has('image'))

				<span class="help-block">
					<strong>{{ $errors->first('image') }}</strong>
				</span>

				@endif

				<!-- Submit Button -->

				<div class="form-group">

					<button type="submit" class="btn btn-primary btn-lg">

						Update

					</button>

				</div>
			</div>

		</form>

	</div>
</div>
</div>
@endsection

@section('scripts')
<script>
	function ConfirmDelete()
	{
		var x = confirm("Are you sure you want to delete?");
		if (x)
			return true;
		else
			return false;
	}
</script>
@endsection