@extends('frontend.layouts.master')
@section('content')


<div class="container">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="#" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w3-card-2 library-box">
					<a href="/w3images/fjords.jpg" target="_blank">
						<img src="{{ asset('image/feature_image (2).jpg') }}" alt="" class="library-thumbnails">
						<div class="caption">
							<p class="w3-container w3-center w3-padding-12">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="right-sidebar">
			<h2>Category</h2>
			<div class="panel-group" id="accordion"><!--category-productsr-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
								ကချင်ပြည်နယ်
							</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">ဗန်းမော်</a></li>
								<li><a href="#">မြစ်ကြီးနား</a></li>
								<li><a href="#">ခေါင်လန်ဖူး</a></li>
								<li><a href="#">ချီဗွေ</a></li>
								<li><a href="#">ဆော့လော်</a></li>
								<li><a href="#">ဆွမ်ပရာဘွမ်</a></li>
								<li><a href="#">တနိုင်း</a></li>
								<li><a href="#">နောင်မွန်း</a></li>
								<li><a href="#">ပူတာအို</a></li>
								<li><a href="#">ဖားကန့်</a></li>
								<li><a href="#">မချမ်းဘော</a></li>
								<li><a href="#">မန်စီ</a></li>
								<li><a href="#">မိုးကောင်း</a></li>
								<li><a href="#">မိုးညှင်း</a></li>
								<li><a href="#">မိုးမောက်</a></li>
								<li><a href="#">ရွှေကူ</a></li>
								<li><a href="#">ဝိုင်းမော်</a></li>
								<li><a href="#">အင်ဂျန်းယန်</a></li>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
									ကယားပြည်နယ်
								</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul>
									<li><a href="#">ဒီမောဆို</a></li>
									<li><a href="#">ဖရူဆို</a></li>
									<li><a href="#">ဖားဆောင်း</a></li>
									<li><a href="#">ဘောလခဲ</a></li>
									<li><a href="#">မယ်စဲ့</a></li>
									<li><a href="#">ရှားတော</a></li>
									<li><a href="#">လွိုင်ကော်</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
									ကရင်ပြည်နယ်</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="#">ကော့ကရိတ်</a></li>
										<li><a href="#">ကြာအင်းဆိပ်ကြီး</a></li>
										<li><a href="#">ဖာပွန်</a></li>
										<li><a href="#">ဘားအံ</a></li>
										<li><a href="#">မြဝတီ</a></li>
										<li><a href="#">လှိုင်းဘွဲ့</a></li>
										<li><a href="#">သံတောင်ကြီး</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
										<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
										ချင်းပြည်နယ်</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ကန်ပက်လက်</a></li>
											<li><a href="#">တီးတန်</a></li>
											<li><a href="#">တွန်းဇံ</a></li>
											<li><a href="#">ထန်တလန်</a></li>
											<li><a href="#">ပလက်ဝ</a></li>
											<li><a href="#">ဖလန်း</a></li>
											<li><a href="#">မင်းတပ်</a></li>
											<li><a href="#">မတူပီ</a></li>
											<li><a href="#">ဟားခါး</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
											<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
											စစ်ကိုင်းတိုင်းဒေသကြီး
										</a>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ကသာ</a></li>
											<li><a href="#">ကောလင်း</a></li>
											<li><a href="#">ခင်ဦး</a></li>
											<li><a href="#">မင်းကင်း</a></li>
											<li><a href="#">ရွှေဘို</a></li>
											<li><a href="#">ကနီ</a></li>
											<li><a href="#">ကန့်ဘလူ</a></li>						
											<li><a href="#">ကလေး</a></li>
											<li><a href="#">ကလေးဝ</a></li>
											<li><a href="#">ကျွန်းလှ</a></li>
											<li><a href="#">ခန္တီး</a></li>
											<li><a href="#">ချောင်းဦး</a></li>
											<li><a href="#">စစ်ကိုင်း</a></li>
											<li><a href="#">ဆားလင်းကြီး</a></li>
											<li><a href="#">တန့်ဆည်</a></li>
											<li><a href="#">တမူး</a></li>
											<li><a href="#">ထီးချိုင့်</a></li>
											<li><a href="#">ဒီပဲယင်း</a></li>
											<li><a href="#">နန်းယွန်း</a></li>
											<li><a href="#">ပင်လည်ဘူး</a></li>
											<li><a href="#">ပုလဲ</a></li>
											<li><a href="#">ဖောင်းပြင်</a></li>
											<li><a href="#">ဗန်းမောက်</a></li>
											<li><a href="#">ဘုတလင်</a></li>
											<li><a href="#">မုံရွာ</a></li>
											<li><a href="#">မော်လိုက်</a></li>
											<li><a href="#">မြင်းမူ</a></li>
											<li><a href="#">မြောင်</a></li>
											<li><a href="#">ယင်းမာပင်</a>'5</li>
											<li><a href="#">ရေဦး</a></li>
											<li><a href="#">လဟယ်</a></li>
											<li><a href="#">လေရှီး</a></li>
											<li><a href="#">ဝက်လက်</a></li>
											<li><a href="#">ဝန်းသို</a></li>						
											<li><a href="#">ဟုမ္မလင်း</a></li>
											<li><a href="#">အင်းတော်</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
											<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
											တနင်္သာရီတိုင်းဒေသကြီး</a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="#">ပုလော</a></li>
												<li><a href="#">ကော့သောင်း</a></li>
												<li><a href="#">ကျွန်းစု</a></li>
												<li><a href="#">တနင်္သာရီ</a></li>
												<li><a href="#">ထားဝယ်</a></li>
												<li><a href="#">ဘုတ်ပြင်း</a></li>
												<li><a href="#">မြိတ်</a></li>
												<li><a href="#">ရေဖြူ</a></li>
												<li><a href="#">လောင်းလုံ</a></li>
												<li><a href="#">သရက်ချောင်း</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
												<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
												နေပြည်တော်</a>
											</h4>
										</div>
										<div id="collapse7" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
													<li><a href="#">လယ်ဝေး</a></li>
													<li><a href="#">ဇမ္ဗူသီရိ</a></li>
													<li><a href="#">ဇေယျာသီရိ</a></li>
													<li><a href="#">တပ်ကုန်း</a></li>
													<li><a href="#">ဒက္ခိဏသီရိ</a></li>
													<li><a href="#">ပုဗ္ဗသီရိ</a></li>
													<li><a href="#">ပျဉ်းမနား</a></li>
													<li><a href="#">ဥတ္တရသီရိ</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
													<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>ပဲခူးတိုင်းဒေသကြီး(အနောက်)</a>
												</h4>
											</div>
											<div id="collapse8" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">မိုးညို</a></li>
														<li><a href="#">ကြို့ပင်ကောက်</a></li>
														<li><a href="#">ဇီးကုန်း</a></li>
														<li><a href="#">နတ္တလင်း</a></li>
														<li><a href="#">ပန်းတောင်း</a></li>
														<li><a href="#">ပေါက်ခေါင်း</a></li>
														<li><a href="#">ပေါင်းတည်</a></li>
														<li><a href="#">ပြည်</a></li>
														<li><a href="#">မင်းလှ</a></li>
														<li><a href="#">ရွှေတောင်</a></li>
														<li><a href="#">လက်ပံတန်း</a></li>
														<li><a href="#">သာယာဝတီ</a></li>
														<li><a href="#">သဲကုန်း</a></li>
														<li><a href="#">အုတ်ဖို</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ပဲခူးတိုင်းဒေသကြီး(အရှေ့)

													</a>
												</h4>
											</div>
											<div id="collapse9" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">ကဝ</a></li>
														<li><a href="#">ကျောက်ကြီး</a></li>
														<li><a href="#">ကျောက်တံခါး</a></li>
														<li><a href="#">ညောင်လေးပင်</a></li>
														<li><a href="#">တောင်ငူ</a></li>
														<li><a href="#">ထန်းတပင်</a></li>
														<li><a href="#">ဒိုက်ဦး</a></li>
														<li><a href="#">ပဲခူး</a></li>
														<li><a href="#">ဖြူး</a></li>
														<li><a href="#">ရေတာရှည်</a></li>
														<li><a href="#">ရွှေကျင်</a></li>
														<li><a href="#">ဝေါ</a></li>
														<li><a href="#">သနပ်ပင်</a></li>
														<li><a href="#">အုတ်တွင်း</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														မကွေးတိုင်းဒေသကြီး
													</a>
												</h4>
											</div>
											<div id="collapse10" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">စလင်း</a></li>
														<li><a href="#">ထီးလင်း</a></li>
														<li><a href="#">စေတုတ္တရာ</a></li>
														<li><a href="#">ပွင့်ဖြူ</a></li>
														<li><a href="#">မင်းလှ</a></li>
														<li><a href="#">ကံမ</a></li>
														<li><a href="#">ချောက်</a></li>
														<li><a href="#">ဂန့်ဂေါ</a></li>
														<li><a href="#">ငဖဲ</a></li>
														<li><a href="#">ဆင်ပေါင်ဝဲ</a></li>
														<li><a href="#">ဆိပ်ဖြူ</a></li>
														<li><a href="#">ဆော</a></li>
														<li><a href="#">တောင်တွင်းကြီး</a></li>
														<li><a href="#">နတ်မောက်</a></li>
														<li><a href="#">ပေါက်</a></li>
														<li><a href="#">မကွေး</a></li>
														<li><a href="#">မင်းတုန်း</a></li>
														<li><a href="#">မင်းဘူး</a></li>
														<li><a href="#">မြိုင်</a></li>
														<li><a href="#">မြို့သစ်</a></li>
														<li><a href="#">ရေစကြို</a></li>
														<li><a href="#">ရေနံချောင်း</a></li>
														<li><a href="#">သရက်</a></li>
														<li><a href="#">အောင်လံ</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														မန္တလေးတိုင်းဒေသကြီး
													</a>
												</h4>
											</div>
											<div id="collapse11" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">စဉ့်ကူး</a></li>
														<li><a href="#">ဝမ်းတွင်း</a></li>
														<li><a href="#">ချမ်းမြသာစည်</a></li>
														<li><a href="#">မဟာအောင်မြေ</a></li>
														<li><a href="#">မြင်းခြံ</a></li>
														<li><a href="#">သပိတ်ကျဉ်း</a></li>
														<li><a href="#">အမရပူရ</a></li>
														<li><a href="#">ကျောက်ဆည်</a></li>
														<li><a href="#">ကျောက်ပန်းတောင်း</a></li>
														<li><a href="#">ချမ်းအေးသာဇံ</a></li>
														<li><a href="#">ငါန်းဇွန်</a></li>
														<li><a href="#">ညောင်ဦး</a></li>
														<li><a href="#">တံတားဦး</a></li>
														<li><a href="#">တောင်သာ</a></li>
														<li><a href="#">နွားထိုးကြီး</a></li>
														<li><a href="#">ပုသိမ်ြကီး</a></li>
														<li><a href="#">ပျော်ဘွယ်</a></li>
														<li><a href="#">ပြင်ဦးလွင်</a></li>
														<li><a href="#">ပြည်ကြီးတံခွန်</a></li>
														<li><a href="#">မတ္တရာ</a></li>
														<li><a href="#">မလှိုင်</a></li>
														<li><a href="#">မိတ္ထီလာ</a></li>
														<li><a href="#">မိုးကုတ်</a></li>
														<li><a href="#">မြစ်သား</a></li>
														<li><a href="#">ရမည်းသင်း</a></li>
														<li><a href="#">သာစည်</a></li>
														<li><a href="#">အောင်မြေသာဇံ</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														မွန်ပြည်နယ်
													</a>
												</h4>
											</div>
											<div id="collapse12" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">ကျိုက္မရော</a></li>
														<li><a href="#">ကျိုက်ထို</a></li>
														<li><a href="#">ချောင်းဆုံ</a></li>
														<li><a href="#">ပေါင်</a></li>
														<li><a href="#">ဘီးလင်း</a></li>
														<li><a href="#">မုဒုံ</a></li>
														<li><a href="#">မော်လမြိုင်</a></li>
														<li><a href="#">ရေး</a></li>
														<li><a href="#">သထုံ</a></li>
														<li><a href="#">သံဖြူဇရပ်</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ရန်ကုန်တိုင်းဒေသကြီး
													</a>
												</h4>
											</div>
											<div id="collapse13" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">တာမွေ</a></li>
														<li><a href="#">လှိုင်</a></li>
														<li><a href="#">ကျောက်တံတား</a></li>
														<li><a href="#">မင်္ဂလာဒုံ</a></li>
														<li><a href="#">ဆိမ်ကမ်း</a></li>
														<li><a href="#">တောင်ဥက္ကလာပ</a></li>
														<li><a href="#">ထန်းတပင်</a></li>
														<li><a href="#">ဒဂုံမြို့သစ်မြောက်ပိုင်း</a></li>
														<li><a href="#">ဗဟန်း</a></li>
														<li><a href="#">မြောက်ဥက္ကလာပ</a></li>
														<li><a href="#">ရွှေပြည်သာ</a></li>
														<li><a href="#">ကမာရွတ်</a></li>
														<li><a href="#">ကိုကိုးကျွန်း</a></li>
														<li><a href="#">ကော့မှူး</a></li>
														<li><a href="#">ကျောက်တန်း</a></li>
														<li><a href="#">ကြည့်မြင်တိုင်</a></li>
														<li><a href="#">ကွမ်းခြံကုန်း</a></li>
														<li><a href="#">ခရမ်း</a></li>
														<li><a href="#">စမ်းချောင်း</a></li>
														<li><a href="#">ဆိပ်ကြီးခနောင်တို</a></li>
														<li><a href="#">တိုက်ကြီး</a></li>
														<li><a href="#">တွံတေး</a></li>
														<li><a href="#">ဒဂုံ</a></li>
														<li><a href="#">ဒဂုံမြို့သစ်ဆိပ်ကမ်း</a></li>
														<li><a href="#">ဒဂံုမြို့သစ်တောင်ပိုင်း</a></li>
														<li><a href="#">ဒဂုံမြို့သစ်အရှေ့ပိုင်း</a></li>
														<li><a href="#">ဒလ</a></li>
														<li><a href="#">ဒေါပုံ</a></li>
														<li><a href="#">ပန်းဘဲတန်း</a></li>
														<li><a href="#">ပုဇွန်တောင်</a></li>
														<li><a href="#">ဗိုလ်တထောင်</a></li>
														<li><a href="#">မင်္ဂလာတောင်ညွန့်</a></li>
														<li><a href="#">မရမ်းကုန်း</a></li>
														<li><a href="#">မှော်ဘီ</a></li>
														<li><a href="#">ရန်ကင်း</a></li>
														<li><a href="#">လမ်းမတော်</a></li>
														<li><a href="#">လသာ</a></li>
														<li><a href="#">လှည်းကူး</a></li>
														<li><a href="#">လှိုင်သာယာ</a></li>
														<li><a href="#">သင်္ဃန်းကျွန်း</a></li>
														<li><a href="#">သန်လျှင်</a></li>
														<li><a href="#">သာကေတ</a></li>
														<li><a href="#">သုံးခွ</a></li>
														<li><a href="#">အင်းစိန်</a></li>
														<li><a href="#">အလုံ</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ရှမ်းပြည်နယ်(တောင်)

													</a>
												</h4>
											</div>
											<div id="collapse14" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">တောင်ကြီး</a></li>
														<li><a href="#">ကလော</a></li>
														<li><a href="#">ကျေးသီး</a></li>
														<li><a href="#">ကွန်ဟိန်း</a></li>
														<li><a href="#">ဆီဆိုင်</a></li>
														<li><a href="#">ညောင်ရွှေ</a></li>
														<li><a href="#">နမ့်စန်</a></li>
														<li><a href="#">ပင်းတယ</a></li>
														<li><a href="#">ဖယ်ခုံ</a></li>
														<li><a href="#">မိုင်းကိုင်</a></li>
														<li><a href="#">မိုင်းပန်</a></li>
														<li><a href="#">မိုင်းရှုး</a></li>
														<li><a href="#">မိုးနဲ</a></li>
														<li><a href="#">မောက်မယ်</a></li>
														<li><a href="#">ရပ်စောက်</a></li>
														<li><a href="#">ရွာငံ</a></li>
														<li><a href="#">လင်းခေး</a></li>
														<li><a href="#">လဲချား</a></li>
														<li><a href="#">လွိုင်လင်</a></li>
														<li><a href="#">ဟိုပုံး</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ရှမ်းပြည်နယ်(တောင်)

													</a>
												</h4>
											</div>
											<div id="collapse15" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">တောင်ကြီး</a></li>
														<li><a href="#">ကလော</a></li>
														<li><a href="#">ကျေးသီး</a></li>
														<li><a href="#">ကွန်ဟိန်း</a></li>
														<li><a href="#">ဆီဆိုင်</a></li>
														<li><a href="#">ညောင်ရွှေ</a></li>
														<li><a href="#">နမ့်စန်</a></li>
														<li><a href="#">ပင်းတယ</a></li>
														<li><a href="#">ဖယ်ခုံ</a></li>
														<li><a href="#">မိုင်းကိုင်</a></li>
														<li><a href="#">မိုင်းပန်</a></li>
														<li><a href="#">မိုင်းရှုး</a></li>
														<li><a href="#">မိုးနဲ</a></li>
														<li><a href="#">မောက်မယ်</a></li>
														<li><a href="#">ရပ်စောက်</a></li>
														<li><a href="#">ရွာငံ</a></li>
														<li><a href="#">လင်းခေး</a></li>
														<li><a href="#">လဲချား</a></li>
														<li><a href="#">လွိုင်လင်</a></li>
														<li><a href="#">ဟိုပုံး</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ရှမ်းပြည်နယ်(မြောက်)

													</a>
												</h4>
											</div>
											<div id="collapse16" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">ကလောင်ဖာ</a></li>
														<li><a href="#">ကုန်းကြီး</a></li>
														<li><a href="#">ကုန်းကြမ်း(အထူးဒေသ ၁)</a></li>
														<li><a href="#">ကောင်မင်ဆန်း</a></li>
														<li><a href="#">ကျောက်မဲ</a></li>
														<li><a href="#">ကွတ်ခိုင်</a></li>
														<li><a href="#">ကွမ်းလုံ</a></li>
														<li><a href="#">ချင်းရွှေဟော်မြို့နယ်ခွဲ</a></li>
														<li><a href="#">ခွန်းမား</a></li>
														<li><a href="#">ဆောင်ဖ</a></li>
														<li><a href="#">တန့်ယန်း</a></li>
														<li><a href="#">နမ္မတူ</a></li>
														<li><a href="#">နမ့်တစ်</a></li>
														<li><a href="#">နမ့်ခမ်း</a></li>
														<li><a href="#">နမ်ခမ်းဝူး</a></li>
														<li><a href="#">နမ့်ဆန်</a></li>
														<li><a href="#">နားကောင်</a></li>
														<li><a href="#">နားဖန့်</a></li>
														<li><a href="#">နာဝီး</a></li>
														<li><a href="#">နောင်ခစ်</a></li>
														<li><a href="#">နောင်ချို</a></li>
														<li><a href="#">ပန်ခမ့်</a></li>
														<li><a href="#">ပန်ဆန်း</a></li>
														<li><a href="#">ပန်ယန်း</a></li>
														<li><a href="#">ပန်ဝိုင်း</a></li>
														<li><a href="#">မက်မန်း</a></li>
														<li><a href="#">မန်တုန်</a></li>
														<li><a href="#">မန်တွန်း</a></li>
														<li><a href="#">မန်မန်ဆိုင်</a></li>
														<li><a href="#">မဘိမ်း</a></li>
														<li><a href="#">မိုင်းမော</a></li>
														<li><a href="#">မိုင်းရယ်</a></li>
														<li><a href="#">မိုးမိတ်</a></li>
														<li><a href="#">မူဆယ်</a></li>
														<li><a href="#">ယောင်လင်း</a></li>
														<li><a href="#">ရင်ဖန့်</a></li>
														<li><a href="#">လင်ဟော်</a></li>
														<li><a href="#">လားရှိုး</a></li>
														<li><a href="#">လုံထန်</a></li>
														<li><a href="#">လောက်ကိုင်</a></li>
														<li><a href="#">လောက်ကိုင်(အထူးဒေသ ၁)</a></li>
														<li><a href="#">သိန်းနီ</a></li>
														<li><a href="#">သီပေါ</a></li>
														<li><a href="#">ဟိုပန်</a></li>
														<li><a href="#">အိုက်ချန်</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ရှမ်းပြည်နယ်(အရှေ့)

													</a>
												</h4>
											</div>
											<div id="collapse17" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">ကျိုင်းတုံ</a></li>
														<li><a href="#">တာချီလိတ်</a></li>
														<li><a href="#">နမ့်ဖိုင်</a></li>
														<li><a href="#">မိုင်းကာ</a></li>
														<li><a href="#">မိုင်းခတ်</a></li>
														<li><a href="#">မိုင်းဆတ်</a></li>
														<li><a href="#">မိုင်းတုံ</a></li>
														<li><a href="#">မိုင်းပေါက်</a></li>
														<li><a href="#">မိုင်းပျင်း</a></li>
														<li><a href="#">မိုင်းဖျန်</a></li>
														<li><a href="#">မိုင်းဖြတ်</a></li>
														<li><a href="#">မိုင်းယန်း</a></li>
														<li><a href="#">မိုင်းယောင်း</a></li>
														<li><a href="#">မိုင်းလား</a></li>
														<li><a href="#">ဟိုတောင်း</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse18">
														<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>
														ဧရာဝတီတိုင်းဒေသကြီး

													</a>
												</h4>
											</div>
											<div id="collapse18" class="panel-collapse collapse">
												<div class="panel-body">
													<ul>
														<li><a href="#">ကြံခင်း</a></li>
														<li><a href="#">အင်္ဂပူ</a></li>
														<li><a href="#">ကန်ကြီးထောင့်</a></li>
														<li><a href="#">ကျိုက်လတ်</a></li>
														<li><a href="#">ကျုံပျော်</a></li>
														<li><a href="#">ကျောင်းကုန်း</a></li>
														<li><a href="#">ငပုတော</a></li>
														<li><a href="#">ဇလွန်</a></li>
														<li><a href="#">ညောင်တုန်း</a></li>
														<li><a href="#">ဒေးဒရဲ</a></li>
														<li><a href="#">ဓနုဖြူ</a></li>
														<li><a href="#">ပန်းတနော်</a></li>
														<li><a href="#">ပုသိမ်</a></li>
														<li><a href="#">ဖျာပုံ</a></li>
														<li><a href="#">ဘိုကလေး</a></li>
														<li><a href="#">မအူပင်</a></li>
														<li><a href="#">မော်လမြိုင်ကျွန်း</a></li>
														<li><a href="#">မြန်အောင်</a></li>
														<li><a href="#">မြောင်းမြ</a></li>
														<li><a href="#">ရေကြည်</a></li>
														<li><a href="#">လပွတ္တာ</a></li>
														<li><a href="#">လေးမျက်နှာ</a></li>
														<li><a href="#">ဝါးခယ်မ</a></li>
														<li><a href="#">သာပေါင်း</a></li>
														<li><a href="#">ဟင်္သာတ</a></li>
														<li><a href="#">အိမ်မဲ</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div> <!-- right slide -->
								</div>
							</div>
						</div>











						@endsection