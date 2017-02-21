@extends('frontend.layouts.master')
@section('content')
<div class="container">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="bookreview_detail" target="_blank">
						<img src="{{ asset('image/image02.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/image02.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/image02.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/image01.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/image07.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/image06.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/image05.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/image04.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 book-review-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/image03.jpg') }}" alt="" class="bookreview-thumbnail">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>

	<div class="col-md-3">
		<div id="sidebar">
			<ul class="categories w3-margin">
				<li>
					<h4>Categories</h4>
					<ul>
						<li><a href="#">ဘာသာပြန်</a></li>
						<li><a href="#">ဝတ္တု</a></li>
						<li><a href="#">အတ္ထုပတ္တိ</a></li>
						<li><a href="#">ပံုပြင်</a></li>
						<li><a href="#">ကဗျာ</a></li>
						<li><a href="#">ဆောင်းပါးt</a></li>
						<li><a href="#">နိုင်ငံရေး</a></li>
						<li><a href="#">ဝတ္ထုတို</a></li>
						<li><a href="#">စစ်တမ်း</a></li>
					</ul>
				</li>
				<li>
					<h4>Authors</h4>
					<ul>
						<li><a href="#">နိုင်ရဲကျော်</a></li>
						<li><a href="#">မောင်ထွန်းသူ</a></li>
						<li><a href="#">မောင်ပေါ်ထွန်း</a></li>
						<li><a href="#">သင့်လူ</a></li>
						<li><a href="#">ကြည်အေး</a></li>
						<li><a href="#">ချစ်ဦးညို</a></li>
						<li><a href="#">ချိုပိန်းနောင်</a></li>
						<li><a href="#">စစ်ကိုင်းဦးဘိုးသင်း</a></li>
						<li><a href="#">ဇော်သက်ထွေး</a></li>
						<li><a href="#">ဒဂုန်တာရာ</a></li>
						<li><a href="#">နုနုရည်အင်းဝ</a></li>
						<li><a href="#">ဖေမြင့်</a></li>
						<li><a href="#">နိုင်ရဲကျော်</a></li>
						<li><a href="#">မင်းသုဝဏ်</a></li>
						<li><a href="#">မစန္ဒာ</a></li>
						<li><a href="#">မသီတာ(စမ်းချောင်း)</a></li>
						<li><a href="#">မောင်မိုးသူ</a></li>
						<li><a href="#">မြသန်းတင့်</a></li>
						<li><a href="#">လူသာမာန်</a></li>
						<li><a href="#">ဝင်းငြိမ်း</a></li>
						<li><a href="#">သာဓု</a></li>
						<li><a href="#">ဟိန်းလတ်</a></li>
						<li><a href="#">အောင်ချိမ့်</a></li>
						<li><a href="#">အောင်ဒင်</a></li>
						<li><a href="#">ခင်နှင်းယု</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

</div>









@endsection