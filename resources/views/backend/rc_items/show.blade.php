@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container">
		<div class="col-md-12">

			<h1>Resource Center Image</h1>

			<div class="pull-left">


				<a href="{{ url('backend/rc_items/' . $rc_item->id . '/edit')}}">

					<button type="button" class="btn btn-primary btn-lg">Edit Image</button></a>

				</div>
				<br><br>

				<hr/>

				<div class="panel panel-default">

					<!-- Table -->
					<table class="table table-striped">

						<tr>

							<td>Thumbnail</td>

						</tr>

						<tr>

							<td>

								<img src="{{ $rc_item->showImage($rc_item, $thumbnailPath) }}">

							</td>

						</tr>


						<tr>

							<td>Primary Image</td>

						</tr>

						<tr>

							<td>

								<img src="{{ $rc_item->showImage($rc_item, $imagePath) }}" style="max-width: 600px;">

							</td>
						</tr>
						<tr>

							<td>Name</td>

						</tr>

						<tr>

							<td>

								{{$rc_item->name}}

							</td>
						</tr>

						<tr>

							<td>Category Id</td>

						</tr>

						<tr>

							<td>
								{{$rc_item->cat_id}}

							</td>
						</tr>

						<tr>

							<td>Download</td>

						</tr>

						<tr>

							<td>

								{{$rc_item->download_link}}

							</td>
						</tr>
						<tr>
							<td>

								<div class="form-group pull-left">

									<form class="form" role="form" method="POST" action="{{ url('backend/rc_items/'. $rc_item->id) }}">
										<input type="hidden" name="_method" value="delete">
										{{ csrf_field() }}

										<input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

									</form>
								</div>

							</td>

						</tr>

					</table>

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