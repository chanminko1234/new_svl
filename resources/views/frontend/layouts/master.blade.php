<!DOCTYPE html>
<html>
<head>
	@include('frontend.layouts.meta')
	<title>Save The Library</title>
	@yield('title')

	@include('frontend.layouts.css')
	
	@yield('css')

</head>
<body>
	@include('frontend.layouts.nav')
	{{-- @include('frontend.layouts.sidebar') --}}

	<a href="#" class="scrollup text-center w3-card-4"><i class="fa fa-arrow-circle-up" style="color: grey;font-size: 33px"></i></a>
	@yield('content')


	@include('frontend.layouts.footer')

	{{-- @include('frontend.layouts.control-sidebar') --}}
	
	@include('frontend.layouts.scripts')

	@include('sweet::alert')

	@yield('script')
	
</body>
</html>