@extends('common.layout')
@section('content')
<main>
<section class="review_banner">
			<img class="desktop__viewB_slide" width="100%" src="{{ asset('public/frontend-styles/Biz/img/pratham webiste banner.jpeg') }}">
            <img class="mobile__viewB_slide" src="{{ asset('public/frontend-styles/Biz/img/pratham webiste banner-mob.jpg') }}" width="100%">
		</section>
	<section class="community-review">
		<div class="container">
			<div class="review-heading">
				<h2 class="heading-black">Reviews From Our community</h2>

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-12 col-centered">

							<div id="carousel" class="carousel slide thumbNail__slider" data-ride="carousel" data-type="multi" data-interval="2500">
								<ul class="carousel-indicators">
									<li data-target="#theCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#theCarousel" data-slide-to="1"></li>
									<li data-target="#theCarousel" data-slide-to="2"></li>
									<li data-target="#theCarousel" data-slide-to="2"></li>
									<li data-target="#theCarousel" data-slide-to="2"></li>
									<li data-target="#theCarousel" data-slide-to="2"></li>
									<li data-target="#theCarousel" data-slide-to="2"></li>
								</ul>
								<div class="carousel-inner">

									<div class="item active">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794045124?h=161ca7ca83"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb1.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/793326464?h=baca28725b"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb2.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794046942?h=3384c212bc"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb3.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794046877?h=cde60b3bb7"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb4.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794023656?h=5662a3ad38"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb5.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/793323759?h=81b2394c55"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb6.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794024342?h=b24bd2745e"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb7.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794023738?h=2630f7dcf1"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb8.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794023943?h=d0244415c6"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb9.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794024188?h=77fad76a99"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb10.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794016405?h=b1d2eed079"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb11.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794023866?h=57e9591d03"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb12.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794045574?h=85063219ee"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb13.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794011622?h=4c88e2eff9"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb14.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="carousel-col">
											<div class="preview-spantile" data="https://player.vimeo.com/video/794023819?h=ac4d03e43f"><a href="#1" class="thumbNail__sliderConatnt">
													<span class="thumb__play"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
													<img src="{{ asset('public/frontend-styles/Biz/img/review_thumbs/thumb15.jpg') }}" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
								</div>

								<!-- Controls -->
								<div class="left carousel-control">
									<a href="#carousel" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
								</div>
								<div class="right carousel-control">
									<a href="#carousel" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>

				<p>Read How Gurukul Nation Impacts People</p>
			</div>
			<div class="comment-row">
				<div class="row">
					@foreach($reviews as $row)
					<div class="col-md-4">
						<div class="comment-div">
							<div class="comment-txt">
								<img src="{{ $row->image }}">
								<h3>"i highly recommend to go on this remarkable Journey"</h3>
								<p class="addReadMore showlesscontent">{{ $row->comments }}
								</p>
							</div>
							<div class="comment-name">
								<h3>{{ $row->name }}</h3>
								<p>{{ $row->designation }}</p>

							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
</main>
@endsection