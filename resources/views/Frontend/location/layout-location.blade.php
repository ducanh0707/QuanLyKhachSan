@extends('layout')
@section('content')
<section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-light text-uppercase">Vị trí <span class="d-block mt-2">Trung tâm thành phố</span></h1>
            </div>
        </div>
    </div>
</section>

<div class="macro-map clearfix">
    <div class="macro-map-map w-100 p-3">
        <!-- <div id="googleMapsMacro" class="google-map m-0" style="height: 400px;"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.113240922966!2d105.80123181526739!3d21.028154485998638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab424a50fff9%3A0xbe3a7f3670c0a45f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBHaWFvIHRow7RuZyBW4bqtbiB04bqjaQ!5e0!3m2!1svi!2s!4v1629737879243!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="macro-map-info">
        <div class="macro-map-info-detail">
            <i class="icon-location-pin icons text-color-primary mt-3"></i>
            <label>address</label>
            <strong>No. 3 Cau Giay, Ngoc Khanh, Dong Da, Hanoi</strong>
        </div>
        <div class="macro-map-info-detail">
            <i class="icon-phone icons text-color-primary mt-3"></i>
            <label>call us</label>
            <strong>(800) 1234-5678</strong>
        </div>
    </div>
</div>

@endsection