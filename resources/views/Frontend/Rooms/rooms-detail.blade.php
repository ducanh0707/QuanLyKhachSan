@extends('layout')
@section('content')
@foreach($detail_room as $key => $detail_room)

<section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="font-weight-bold text-light text-uppercase">Rooms &amp; Rates <span class="d-block mt-2">Check out our amazing options</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="section section-no-background section-no-border m-0 p-0">
	<div class="container">
		<div class="row mb-4">
			<div class="col">
				<h3 class="mt-4 pt-4 mb-0 pb-0 text-uppercase">{{$detail_room->ten_loai}}</h3>
				<div class="divider divider-primary divider-small mb-4 mt-0">
					<hr class="mt-2 mr-auto">
				</div>
				<div class="row">
					<div class="col-lg-7">
						<p class="mt-4 lead">{{$detail_room->thong_tin}}</p>
						<div class="room-suite-info">
							<ul>
								<li><label>Số giường</label> <span>{{$detail_room->so_giuong}} Giường</span></li>
								<li><label>Sô người</label> <span>{{$detail_room->so_nguoi}} người</span></li>
								<li><label>Diện Tích</label> <span>{{$detail_room->dien_tich}} m</span></li>
								<li><label>VIEW</label> <span>{{$detail_room->room_desc}}</span></li>
								<li><label>Giá Phòng</label> <strong>VNĐ {{$detail_room->gia_phong}}</strong></li>
								<li>
									<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2 room-suite-info-book-now" href="{{URL::to('/Book-Now')}}">Book Now</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5">
						<!-- <div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"> -->
							<div>
								<img src="{{URL::to('public/uploads/img/'.$detail_room -> image)}}" class="img-fluid" alt="">
							</div>
							<!-- <div>
								<img src="img/demos/hotel/room-2.jpg" class="img-fluid" alt="">
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endforeach
@endsection