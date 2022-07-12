@extends('layout')
@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="public/style/frontend/img/demos/hotel/parallax-hotel-2.jpg">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-light text-uppercase">Ưu đãi <span class="d-block mt-2">Giảm giá tại khách sạn </span></h1>
            </div>
        </div>
    </div>
</section>

<section class="section section-no-background section-no-border m-0">
    <div class="container">
    @foreach($room as $key => $r)
        <div class="row">
            <div class="col">
                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom">
                    <span class="thumb-info-side-image-wrapper">
                        <img alt="" class="img-fluid" style="max-width: 340px;" src="{{'public/uploads/img/'.$r->image}}">
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                            <h4 class="text-uppercase mb-1">{{$r->ten_loai}}</h4>
                            <p>{{$r->thong_tin}}</p>
                            <p class="text-right p-4 pb-0">
                                <a class="btn btn-primary btn-lg text-2 text-uppercase mb-3" href="{{URL::to('/Book-Now')}}">Book Now <i class="icon-calendar icons ml-2"></i></a>
                            </p>
                        </span>
                    </span>
                </span>
            </div>
        </div>
        @endforeach
        <!-- <div class="row">
            <div class="col">
                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom">
                    <span class="thumb-info-side-image-wrapper">
                        <img alt="" class="img-fluid" style="max-width: 340px;" src="public/style/frontend/img/demos/hotel/gallery/gallery-1.jpg">
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                            <h4 class="text-uppercase mb-1">Plan Ahead</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan...</p>
                            <p class="text-right p-4 pb-0">
                                <a class="btn btn-primary btn-lg text-2 text-uppercase mb-3" href="demo-hotel-book.html">Book Now <i class="icon-calendar icons ml-2"></i></a>
                            </p>
                        </span>
                    </span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom mb-0">
                    <span class="thumb-info-side-image-wrapper">
                        <img alt="" class="img-fluid" style="max-width: 340px;" src="public/style/frontend/img/demos/hotel/gallery/gallery-3.jpg">
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                            <h4 class="text-uppercase mb-1">Valentine's Day</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan...</p>
                            <p class="text-right p-4 pb-0">
                                <a class="btn btn-primary btn-lg text-2 text-uppercase mb-3" href="demo-hotel-book.html">Book Now <i class="icon-calendar icons ml-2"></i></a>
                            </p>
                        </span>
                    </span>
                </span>
            </div>
        </div> -->
    </div>
</section>
@endsection