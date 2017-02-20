<!DOCTYPE html>
<html>
<head>
	@include('backend.layouts.meta')

	@yield('title')

	@include('backend.layouts.css')
	
	@yield('css')

</head>
<body class="hold-transition skin-red fixed sidebar-mini">
	@include('backend.layouts.header')
	@include('backend.layouts.sidebar')

	<div class="wrapper">
		@yield('content')
	</div>

	@include('backend.layouts.footer')

	@include('backend.layouts.control-sidebar')
	
	@include('backend.layouts.scripts')

	@include('sweet::alert')

	@yield('script')
	
</body>
</html>