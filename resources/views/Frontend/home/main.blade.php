@extends('layout')
@section('content')
<div class="slider-container rev_slider_wrapper" style="height:530px;">
	<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
		<ul>
			@foreach($slide as $key => $sli)
			<li data-transition="boxfade">
				<img src="public/uploads/slider/{{$sli->slider_image}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li>
			@endforeach
			<!-- <li data-transition="boxfade">
				<img src="{{asset('public/style/frontend/img/demos/hotel/slides/slide-hotel-1.jpg')}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li>
			<li data-transition="boxfade">
				<img src="{{asset('public/style/frontend/img/demos/hotel/slides/slide-hotel-1.jpg')}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li> -->
		</ul>
	</div>
</div>
<section class="section section-no-background section-no-border m-0">
	<div class="container">
		<div class="row">

			<div class="col-lg-8">

				<h3 class="mt-4 mb-0 pb-0 text-uppercase">Hotel Overview</h3>
				<div class="divider divider-primary divider-small mb-4 mt-0">
					<hr class="mt-2 mr-auto">
				</div>

				<p class="mt-4 mb-2">Bạn sẽ ngạc nhiên bởi nét quyến rũ và hấp dẫn của mọi cảnh vật xung quanh Resort.
					Năng lượng được tái sinh khi bạn cảm nhận được từng làn gió lướt qua những rặng thông.
					Hãy để tâm trí khám phá những vẻ đẹp kiến trúc – một cung điện nguy nga nằm giữa thiên nhiên dường
					như không có giới hạn về không gian lẫn thời gian.</p>

				<div class="row">
					@foreach($all_dv as $key => $value)
					<div class="col-lg-4">
						<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
							<li><i class="fas fa-check"></i> {{$value->tendichvu}}</li>
							<!-- <li><i class="fas fa-check"></i> Fitness center</li>
							<li><i class="fas fa-check"></i> Airport transporation</li> -->
						</ul>
					</div>
					@endforeach

					<!-- <div class="col-lg-4">
						<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
							<li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
							<li><i class="fas fa-check"></i> Cocktail Bar</li>
							<li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
						</ul>
					</div>
					<div class="col-lg-4">
						<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
							<li><i class="fas fa-check"></i> Valet car service</li>
							<li><i class="fas fa-check"></i> Pool</li>
							<li><i class="fas fa-check"></i> Free Wi-Fi</li>
						</ul>
					</div> -->
				</div>

			</div>
			<div class="col-lg-4">
				<div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
					@foreach($all_dv as $key => $value)
					<div>
						<img alt="" class="img-fluid" style=" height:254px!important" src="public/uploads/service/{{$value->img_service}}">
					</div>
					@endforeach
					<!-- <div>
						<img alt="" class="img-fluid" src="img/demos/hotel/gallery/gallery-2.jpg">
					</div> -->
				</div>
			</div>

		</div>
	</div>
</section>

<section class="parallax section section-parallax section-center m-0 section-overlay-opacity section-overlay-opacity-scale-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/hotel/parallax-hotel.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3 class="mb-1 mt-0 text-light text-uppercase">tận hưởng những phút giây thoải mái</h3>
				<p class="lead text-light mb-4">Đặt chỗ ngay để nhận ưu đãi tốt nhất</p>

				<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="{{URL('/Book-Now')}}">Đặt Ngay</a>
			</div>
		</div>
	</div>
</section>
<section class="section section-text-light section-background section-center section-overlay-opacity section-overlay-opacity-scale-4 m-0" style="background-image: url('data:image/jpeg;base64,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');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="height: 360px;">
				<a href="https://www.youtube.com/watch?v=VCVRH9jX4qk" class="play-video-custom"><img src="public/img/demos/hotel/play-icon.png" class="img-fluid" width="90" height="90" /></a>
			</div>
		</div>
	</div>
</section>

<section class="section section-primary section-no-border m-0" data-plugin-parallax data-plugin-options="{'speed': 6}" data-image-src="img/demos/hotel/parallax-hotel-map.png">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3 class="mt-4 mb-0 pb-0 text-light text-uppercase">Cảm nhận khách hàng</h3>
				<div class="divider divider-light divider-small divider-small-center mb-4 mt-0">
					<hr class="mt-2">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
					<blockquote class="box-shadow-custom">
						<p>Căn hộ được bài trí trẻ trung, sáng sủa và sạch sẽ. Giường ngủ rộng rãi thoải mái, chỉ cần đi qua cầu là vào ngay trung tâm. Phía dưới nhà có tiệm bánh mì rất ngon. Đi bộ vài phút là có siêu thị có bản hải sản và mọi thứ cần thiết. Chúng tôi đã có một thời gian vui vẻ dễ chịu.</p>
					</blockquote>
					<div class="testimonial-arrow-down mx-auto"></div>
					<div class="testimonial-author">
						<p><strong>Nguyễn Phương Hằng</strong><span>Porto Advisor</span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
					<blockquote class="box-shadow-custom">
						<p>Thật tuyệt vời khi được đến đây. Người dân rất thân thiện,Đầy đủ dụng cụ. Đầy đủ dụng cụ. Phòng sạch sẽ. Phòng sạch sẽ. lễ tân cực kỳ vui tính và tốt bụng. Cảnh quan tuyệt vời. Hãy đến nơi đây một lần, bạn không hối tiếc về điều đó</p>
					</blockquote>
					<div class="testimonial-arrow-down mx-auto"></div>
					<div class="testimonial-author">
						<p><strong>hồ quan hiếu</strong><span>Porto Advisor</span></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
					<blockquote class="box-shadow-custom">
						<p>Chỗ nghĩ rất tiện nghi. Đầy đủ dụng cụ. Phòng sạch sẽ. Giường êm. Giao nhận chìa khóa rất tốt. Liên hệ với chủ nhà rất nhanh chóng. Chủ nhà có thể giúp bạn tìm xe đưa đón sân bay. Vị trí tuyệt vời ngay con đường chính của khu phố cổ. Chúng tôi sẽ quay lại</p>
					</blockquote>
					<div class="testimonial-arrow-down mx-auto"></div>
					<div class="testimonial-author">
						<p><strong>MC trấn thành</strong><span>Porto Advisor</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-no-background section-no-border m-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h3 class="mb-0 pb-0 text-uppercase">Ưu đãi cuối năm</h3>
				<div class="divider divider-primary divider-small divider-small-center mb-4 mt-0">
					<hr class="mt-2">
				</div>

				<div class="row pt-4">
					@foreach($list1_room as $key => $rr)
					<div class="col-lg-6">
						<a href="#" class="text-decoration-none">
							<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom thumb-info-no-zoom thumb-info-side-image-custom-highlight appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
								<span class="thumb-info-side-image-wrapper">
									<img alt="" class="img-fluid " src="public/uploads/img/{{$rr->image}}">
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h4 class="text-uppercase">{{$rr->ten_loai}}</h4>
										<p style="overflow: hidden;width: 250px;text-overflow: ellipsis;white-space: nowrap;">{{$rr->thong_tin}}</p>
									</span>
								</span>
							</span>
						</a>
					</div>
					@endforeach
					<div class="col-lg-6">
						<!-- <div class="row"> -->
					@foreach($list_room as $key => $r)
							<!-- <div class="col-12"> -->
								<a href="#" class="text-decoration-none">
									<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
										<span class="thumb-info-side-image-wrapper">
											<img alt="" class="img-fluid" style="width:225px; height:167px;" src="public/uploads/img/{{$r->image}}">
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text pr-3">
												<h4 class="text-uppercase">{{$r->ten_loai}}</h4>
												<p style="overflow: hidden;width: 250px;text-overflow: ellipsis;white-space: nowrap;   ">{{$r->thong_tin}}</p>
											</span>
										</span>
									</span>
								</a>
							<!-- </div> -->
					@endforeach
						<!-- </div> -->

					</div>
				</div>

				<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="demo-hotel-special-offers.html">View All</a>

			</div>

		</div>
	</div>
</section>
@endsection