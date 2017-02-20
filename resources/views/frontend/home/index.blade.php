@extends('frontend.layouts.master')
@section('css')
<style type="text/css">
	/* external css: flickity.css */

	* { box-sizing: border-box; }

	body { font-family: sans-serif; }

	.carousel {
		background: transparent;
	}

	.carousel-cell {
		width: 20%;
		height: 200px;
		margin-right: 10px;
		background: #8C8;
		counter-increment: carousel-cell;
	}

	.carousel-cell.is-selected {
		background: #ED2;
	}

	/* cell number */
	.carousel-cell:before {
		display: block;
		text-align: center;
		content: counter(carousel-cell);
		line-height: 200px;
		font-size: 80px;
		color: white;
	}
	.title{
		font: 20px 'Open Sans' !important;
		color: #f23e3e;
		text-transform: uppercase;
		margin-bottom: 14px;
	}
	.body{
		font-size: 15px !important;
		color: grey;
	}

</style>
@endsection
@section('content')
<div class="w3-content w3-section ct-main-slider">
	<img class="main-slider-imgs w3-animate-fading" src="{{ asset('image/main_slider(1).jpg') }}" style="width:100%;height:400px;" class="img-responsive" alt="Responsive image">
	<img class="main-slider-imgs w3-animate-fading" src="{{ asset('image/main_slider(2).jpg') }}" style="width:100%;height:400px;" class="img-responsive" alt="Responsive image">
	<img class="main-slider-imgs w3-animate-fading" src="{{ asset('image/main_slider(3).jpg') }}" style="width:100%;height:400px;" class="img-responsive" alt="Responsive image">
	<img class="main-slider-imgs w3-animate-fading" src="{{ asset('image/main_slider(4).jpg') }}" style="width:100%;height:400px;" class="img-responsive" alt="Responsive image">
</div>
<div class="jumbotron cd-description-block">
	<div class="container text-center">
		<strong>Save the Library ဆိုတာဘာလဲ ?</strong><br><br>
		လူ ၁ ေယာက္ ၁ လ ၁ ေထာင္က်ပ္ စုေပါင္းထည့္ ဝင္ေငြျဖင့္ လစဥ္စာအုပ္ဝယ္ၿပီး တက္ႂကြလႈပ္ရွားေနေသာ စာၾကည့္တိုက္မ်ားသို႔ လစဥ္အလွည့္က် ငွားရမ္းေပးျခင္း၊<br> (၄) လျပည့္လွ်င္ အေဟာင္းသိမ္း အသစ္ထပ္မံငွားရမ္းျခင္း၊<br> အျခားလိုအပ္သည့္ အားနည္းခ်က္ ရွိသည္မ်ားကို ျဖည့္ဆည္းေပးျခင္း (နည္းစနစ္၊ စာအုပ္ အပိုင္လႉျခင္း၊ စာဖတ္ရွိန္ျမႇင့္တင္ေရး လႈံ႕ေဆာ္မႈမ်ား ေဆာင္႐ြက္ေပးျခင္း)<br> စသည္တို႔ ေဆာင္႐ြက္ေပးမည့္ ကြန္ယက္ အဖြဲ႕ျဖစ္ပါသည္။
	</div>
</div>
{{-- <div class="text-center">
	<ul class="ct-description">
		<li class="descriptions w3-animate-fading">
			<strong>Save the Library ဆိုတာဘာလဲ ?</strong><br>
			လူ ၁ ေယာက္ ၁ လ ၁ ေထာင္က်ပ္ စုေပါင္းထည့္ ဝင္ေငြျဖင့္ လစဥ္စာအုပ္ဝယ္ၿပီး တက္ႂကြလႈပ္ရွားေနေသာ စာၾကည့္တိုက္မ်ားသို႔ လစဥ္အလွည့္က် ငွားရမ္းေပးျခင္း၊<br> (၄) လျပည့္လွ်င္ အေဟာင္းသိမ္း အသစ္ထပ္မံငွားရမ္းျခင္း၊<br> အျခားလိုအပ္သည့္ အားနည္းခ်က္ ရွိသည္မ်ားကို ျဖည့္ဆည္းေပးျခင္း (နည္းစနစ္၊ စာအုပ္ အပိုင္လႉျခင္း၊ စာဖတ္ရွိန္ျမႇင့္တင္ေရး လႈံ႕ေဆာ္မႈမ်ား ေဆာင္႐ြက္ေပးျခင္း)<br> စသည္တို႔ ေဆာင္႐ြက္ေပးမည့္ ကြန္ယက္ အဖြဲ႕ျဖစ္ပါသည္။
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>ဘယ္လိုစာၾကည့္တိုက္မ်ိဳးႏွင့္ ေဆာင္႐ြက္မလဲ ?</strong><br>
			တက္ႂကြတယ္၊ စုေပါင္းလုပ္ေဆာင္တတ္တယ္၊<br> စာဖတ္သူ ရွိေပမယ့္ လစဥ္စာအုပ္ ဝယ္ဖို႔ အခက္အခဲ ရွိတဲ့ စာၾကည့္တိုက္မ်ိဳးႏွင့္ လက္တြဲေဆာင္႐ြက္သြားပါမည္။
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>ဘယ္လိုစနစ္နဲ႕ ေဆာင္႐ြက္လဲ ?</strong><br>
			4 in 1 System နဲ႕ ငွားရမ္းေပးပါမည္။<br> စာၾကည့္တိုက္မ်ား အေနနဲ႕ မိမိေဒသအတြင္းနဲ႕ ပတ္ဝန္က်င္က စာၾကည့္တိုက္ (၄)တိုက္ေပါင္းၿပီး တစ္အုပ္စု ဖြဲ႕ရပါမည္။ ဖြဲ႕ၿပီးတာနဲ႕ ဆက္သြယ္နိုင္ပါၿပီ။<br> Save the Library ကေန စာၾကည့္တိုက္ (၄) တိုက္ကို အညီအမွ် စာအုပ္မ်ား ေပးပို႔ေပးပါမည္။
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>စာၾကည့္တိုက္ေတြ ဘာျပန္လုပ္ေပးရမလဲ ?</strong><br>
			မိမိကဲ့သို႔ အလားတူစာၾကည့္တိုက္ေတြအတြက္ ၁ လ ၁ ေထာင္ ျပန္ေပးလႉရပါမည္။<br> ေရာက္ရွိလာေသာ စာအုပ္မ်ားကို ဝါ၊ စိမ္း၊ နီ၊ ျပာ အုပ္စုခြဲၿပီး မိမိရရွိေသာ စာအုပ္မ်ားကို စာရင္းသြင္း၊ တိပ္ကပ္ၿပီးလွ်င္ ငွားလို႔ ရပါၿပီ။<br> စာအုပ္အသစ္မ်ား ဖတ္နိုင္ရန္အတြက္ တစ္လ တစ္ႀကိမ္ စာၾကည့္တိုက္ (၄)တိုက္ လဲလွယ္ ငွားရမ္းရပါမည္။
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>(၄)လ ျပည့္သြားရင္ Save the Library က ဘာလုပ္ေပးမွာလဲ ?</strong><br>
			အေဟာင္းသိမ္း အသစ္စနစ္ျဖင့္ စာအုပ္အသစ္မ်ား ထပ္မံ ပို႔ေပးပါမည္။
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>စာၾကည့္တိုက္ေတြအတြက္ ဘာထူးမွာလဲ ?</strong><br>
			မိမိတို႔ စာၾကည့္တိုက္ေတြအတြက္ အမွန္တကယ္ လိုအပ္ေသာ စာအုပ္မ်ား ရရွိျခင္း။<br>
			စာဖတ္သူမ်ားသို႔ တစ္လ (၁)ႀကိမ္ အသစ္မ်ားျဖင့္ လဲလွယ္ ငွားရမ္းေပးနိုင္ျခင္း<br>
			စာၾကည့္တိုက္အေနႏွင့္ေရာ စာဖတ္သူမ်ားအေနႏွင့္ပါ တာဝန္ယူမႈ၊ တာဝန္ခံမႈ၊ ပူးေပါင္းေဆာင္႐ြက္မႈ အေလ့အထကို ေဖာ္ေဆာင္နိုင္ျခင္း။<br>
			စာၾကည့္တိုက္ႏွင့္ ပတ္သက္သည့္ လႈပ္ရွားမႈမ်ားတြင္ အျခားစာၾကည့္တိုက္မ်ားႏွင့္အတူ ထဲထဲဝင္ဝင္ ပါဝင္ေဆာင္႐ြက္လာနိုင္ျခင္း။<br>
		</li>
		<li class="descriptions w3-animate-fading">
			<strong>Save the Library ကို တစ္လ တစ္ေထာင္ ဘယ္လိုထည့္မလဲ ?</strong><br>
			ကိုယ္တိုင္ လာေရာက္၍ ျဖစ္ေစ၊<br> Wave Money နဲ႕ OK$ ရွိတဲ့ ဆိုင္မ်ားမွ ျဖစ္ေစ၊<br> မိမိအေကာင့္မွျဖစ္ေစ Wave Money နဲ႕ OK$ အေကာင့္ဖြင့္ထားတဲ့ -<br>
			ဦးဝင္းေဆြ - 09785175259<br>
			ကိုေမာင္ေမာင္စိုး - 09798435623<br>
			ဖုန္းနံပါတ္မ်ားသို႔ ေပးပို႔လႉဒါန္းနိုင္ပါသည္။
		</li>
	</ul>
</div> --}}

<div class="container w3-white w3-card-4">
	<h1 class="text-center">Libraries</h1>

	<!-- Flickity HTML init -->
	<div class="carousel ct-carousel" data-flickity='{ "groupCells": true, "wrapAround": true, "autoPlay": true , "pageDots": false}'>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
		<div class="carousel-cell w3-card-2"></div>
	</div>

	<div class="text-center">
		<ul class="ct-description cd-library-block"> 		
			<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု"> "ပညာလို အိုသည်မရှိ<br>
				ပညာရဲရင့် ပွဲလည်တင့်<br>
				ပညာသည် တန်ခိုးကိုဖန်ဆင်း၏<br>
				ပညာရွှေအိုး လူမခိုး<br>
				အလိမ္မာစာမှာရှိ" </li>

				<li class="descriptions w3-animate-fading" author="Ralph Nader">"လောကမှာ အကောင်းဆံုးဆရာဆိုတာ<br>
					နောက်ဆံုးအမှားပါပဲ"
				</li>

				<li class="descriptions w3-animate-fading" author="Albert Einstein"> "အမှားကို တစ်ခါမှမကျူးလွန်ဖူးသူဟာ<br>
					အသစ်ကိုရှာဖွေဖို့ ဘယ်တော့မှ မကြိုးစားတော့တဲ့သူပဲ"
				</li>  

				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ကိုင်းကျွန်းမှီ ကျွန်းကိုင်းမှီ<br>
					ပတ္တမြားမှန်က နွံမှာနစ်လည်းမညစ်<br>
					သတိမမူ ဂူမမြင်၊ သတိမူ မြူမြင်"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ပညာရှိသတိဖြစ်ခဲ"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ပညာရှာ ပမာသူဖုန်းစား"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ပိုနေမြဲ..ကျားနေမြဲ"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ရှာဖွေလေ..တွေ့ရှိလေ"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"ရတနာရှိရာ..ရတနာလာ"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"သတိပညာ ဉာဏ်မြေကတုတ် ချွန်းကဲ့သို့အုပ်"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"သူများအကျိုးဆောင် ကိုယ်ကျိုးအောင်"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"သစ်တစ်ပင်ကောင်း...<br>ငှက်တစ်သောင်းနားနိုင်"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"သားသမီးမကောင်း မိဘခေါင်း"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"တလုပ်စားဖူး သူ့ကျေးဇူး"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"အစကောင်းမှ အနှောင်းသေချာ"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"အချိန်နှင့်ဒီရေသည် လူကိုမစောင့်"
				</li>
				<li class="descriptions w3-animate-fading" author="ေရှးစကားပံု">"အချိန်ရှိခိုက် လုံ့လစိုက်"
				</li>
				<li class="descriptions w3-animate-fading" author="Ed Bradley">"ကြိုတင်ပြင်ဆင်ပါ။ အလုပ်ကြိုးစားပါ၊ ကံကြမ္မာကို အနည်းငယ်သာ မျှော်လင့်ပါ။ အလုပ်ကြိုးစားလေလေ ကံကောင်းလေလေပါပဲ။"
				</li>
				<li class="descriptions w3-animate-fading" author="Bernard Mellzer">"ခွင့်လွှတ်ြခင်းဟာ အတိတ်ကဖြစ်ရပ်တွေကို ပြောင်းလဲပေးနိုင်စွမ်း မရှိပါဘူး။ သို့သော် အနာဂတ်အတွက် ပေါင်းသင်းဆက်ဆံရေးပြေလည်မှုကိုတော့
					အထောက်အကူပြုမှာ သေချာပါတယ်။"
				</li> 
				<li class="descriptions w3-animate-fading" author="ဦးသောင်းဌေး (ရန်ကုန်တက္ကသိုလ်)">"အသိပညာကို သင်ယူခြင်းအားဖြင့် ရရှိနိုင်သည်။<br>
					ကျွမ်းကျင်မှုကို လေ့ကျင့်မှုမှ ရရှိနိုင်သည်။<br>
					ယံုကြည်မှုကို သံသယမှ ရရှိနိုင်သည်။<br>
					မေတ္တာကို မေတ္တာမှသာ ရရှိနိုင်ပါသည်။"
				</li> 
			</ul>
		</div>
		<h1 class="text-center">News</h1>

		<!-- Flickity HTML init -->
		<div class="carousel ct-carousel" data-flickity='{ "groupCells": true, "wrapAround": true, "autoPlay": true , "pageDots": false}'>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
		</div>
		<div class="jumbotron cd-new-block">
			<h1>new</h1>
		</div>
		<h1 class="text-center">Book Review</h1>

		<!-- Flickity HTML init -->
		<div class="carousel ct-carousel" data-flickity='{ "groupCells": true, "wrapAround": true, "autoPlay": true , "pageDots": false}'>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
			<div class="carousel-cell w3-card-2"></div>
		</div>
	</div>
	<div class="jumbotron cd-intro-block">
		<div class="container text-center">
			<div class="col-md-3">
				<h3>Agenda</h3>
				<div>
					<label class="icon-box" for="">
						<i class="fa fa-question icon"></i>
					</label>
				</div>
				<p class="title">(၄)လ ျပည့္သြားရင္ Save the Library က ဘာလုပ္ေပးမွာလဲ ?
				</p>
				<p class="body">
					အေဟာင္းသိမ္း အသစ္စနစ္ျဖင့္ စာအုပ္အသစ္မ်ား ထပ္မံ ပို႔ေပးပါမည္။
				</p>

			</div>
			<div class="col-md-3">
				<h3>Benefits</h3>
				<label class="text-center icon-box" for="">
					<i class="material-icons">&#xe8dc;</i>
				</label>
				<p class="title">
					စာၾကည့္တိုက္ေတြအတြက္ ဘာထူးမွာလဲ ?
				</p>
				<p class="body">
					မိမိတို႔ စာၾကည့္တိုက္ေတြအတြက္ အမွန္တကယ္ လိုအပ္ေသာ စာအုပ္မ်ား ရရွိျခင္း။
					စာဖတ္သူမ်ားသို႔ တစ္လ (၁)ႀကိမ္ အသစ္မ်ားျဖင့္ လဲလွယ္ ငွားရမ္းေပးနိုင္ျခင္း
					{{-- စာၾကည့္တိုက္အေနႏွင့္ေရာ စာဖတ္သူမ်ားအေနႏွင့္ပါ တာဝန္ယူမႈ၊ တာဝန္ခံမႈ၊ ပူးေပါင္းေဆာင္႐ြက္မႈ အေလ့အထကို ေဖာ္ေဆာင္နိုင္ျခင္း။
					စာၾကည့္တိုက္ႏွင့္ ပတ္သက္သည့္ လႈပ္ရွားမႈမ်ားတြင္ အျခားစာၾကည့္တိုက္မ်ားႏွင့္အတူ ထဲထဲဝင္ဝင္ ပါဝင္ေဆာင္႐ြက္လာနိုင္ျခင္း။ --}}
				</p>
			</div>
			<div class="col-md-3">
				<h3>Donate</h3>
				<label class="text-center icon-box" for="">
					<span class="glyphicon">&#xe148;</span>
				</label>
				<p class="title">Save the Library ကို တစ္လ တစ္ေထာင္ ဘယ္လိုထည့္မလဲ ?</p>
				<p class="body">ကိုယ္တိုင္ လာေရာက္၍ ျဖစ္ေစ၊ Wave Money နဲ႕ OK$ ရွိတဲ့ ဆိုင္မ်ားမွ ျဖစ္ေစ၊ မိမိအေကာင့္မွျဖစ္ေစ Wave Money နဲ႕ OK$ အေကာင့္ဖြင့္ထားတဲ့ -{{-- 
					ဦးဝင္းေဆြ - 09785175259
					ကိုေမာင္ေမာင္စိုး - 09798435623
					ဖုန္းနံပါတ္မ်ားသို႔ ေပးပို႔လႉဒါန္းနိုင္ပါသည္။ --}}</p>
				</div>
				<div class="col-md-3">
					<h3>Contact</h3>
					<label class="text-center icon-box" for="">
						<span class="glyphicon">&#xe183;</span>
					</label>
					<p class="body">
						စာဖတ်ရှိန်မြှင့်တင်ရေးအကြံပေး
						ဦးဝင်းဆွေ 
						(အလင်းတံခါး စာကြည့်တိုက်)<br>
						<i class="fa fa-phone" aria-hidden="true"></i> ၀၉ ၅၁၇၅၂၅၉
					</p>
				</div>
			</div>
		</div>

		@endsection
		@section('script')
		<script>

	//

	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("main-slider-imgs");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 9000);    
	}
	
	var myCounter = 0;
	twinkler();

	function twinkler(){
		var j;
		var y = document.getElementsByClassName("descriptions");
		for (j = 0; j < y.length; j++) {
			y[j].style.display = "none";  
		}
		myCounter++;
		if (myCounter > y.length) {myCounter = 1}    
			y[myCounter-1].style.display = "block";  
		setTimeout(twinkler, 2000); 
	}
</script>
@endsection