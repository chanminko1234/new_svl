@extends('frontend.layouts.master')
@section('content')


<div class="container w3-card-4">
	<div class="col-md-9">
		<h1>News</h1>

		<img src="{{ asset('image/feature_image (2).jpg') }}" class="w3-card-4 " style="width:100%;min-height:200px">
		<br />
		<h3>Name </h3>
		<h3>Date and Time</h3>


		<div class="w3-row">	

			<p class="pull-left">Save the Library</p>
			<p class="pull-right">Date and Time</p> 
		</div>
		<hr>
		<p>Description</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aspernatur recusandae, delectus autem perferendis iusto facilis explicabo velit, itaque eligendi ab doloribus cupiditate. Distinctio molestiae earum, animi, suscipit et tenetur!
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod cum dolorum modi expedita quidem vel beatae vero aspernatur, aliquid deleniti, ab, eos eum maxime veniam possimus laboriosam a quisquam recusandae?
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur iste iusto, possimus explicabo assumenda eos incidunt earum impedit fugiat corporis aut, minima recusandae illum quisquam laboriosam voluptas, quis dolores? Voluptatibus.</p>


		</div>

		<div class="col-md-3">
			<div class="nav-sidebar">
				<ul class="nav side">
					<li>
						<a href="#">
							<h4 class="active text">Latest News<i class="fa fa-angle-right pull-right"></i></h4>
						</a>
					</li>
					<li>
						<a href="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							<span class="data">
								<i class="fa fa-calendar-o"></i>
							</span>
						</a>

					</li>
					<hr>
					<li>
						<a href="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							<span class="data">
								<i class="fa fa-calendar-o"></i>
							</span>
						</a>
					</li>
					<hr>
					<li>
						<a href="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							<span class="data">
								<i class="fa fa-calendar-o"></i>
							</span>
						</a>
					</li>
					<hr>
					<li>
						<a href="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							<span class="data">
								<i class="fa fa-calendar-o"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>










	@endsection