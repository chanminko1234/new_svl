@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container">
		<div class="col-md-12">
			<h2>Create a New Resource Center</h2>
			<hr/>
			<form class="form" role="form" method="POST" action="{{ url('backend/rc_items') }}" enctype="multipart/form-data">
				{{ csrf_field() }} 
				<!-- image_name Form Input -->
				<div class="form-group{{ $errors->has('image_name') ?
					' has-error' : '' }}">
					<label class="control-label">Image Name</label>
					<input type="text" class="form-control" name="image_name"
					value="{{ old('image_name') }}">
					@if ($errors->has('image_name'))
					<span class="help-block">
						<strong>{{ $errors->first('image_name') }}</strong>
					</span>
					@endif
				</div>
				<!-- name Form Input -->
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label class="control-label">Name</label>
					<input type="text" class="form-control" name="name"
					value="{{ old('name') }}">
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>

				<!-- category-name Form Input -->
				<div class="form-group{{ $errors->has('cat_id') ?
					' has-error' : '' }}">
					<label class="control-label">Category Name</label>
					<input type="text" class="form-control" name="cat_id"
					value="{{ old('cat_id') }}">
					@if ($errors->has('cat_id'))
					<span class="help-block">
						<strong>{{ $errors->first('cat_id') }}</strong>
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
					<div class="form-group{{ $errors->has('download_link') ? ' has-error' : '' }}">
						<label class="control-label">Download Link</label>
						<input type="text" class="form-control" name="download_link"
						value="{{ old('download_link') }}">
						@if ($errors->has('download_link'))
						<span class="help-block">
							<strong>{{ $errors->first('download_link') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg">
							Create
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection