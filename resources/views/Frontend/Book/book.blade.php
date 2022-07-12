@extends('layout')
@section('content')
<section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-light text-uppercase">Đặt bây giờ<span class="d-block mt-2">Đặt phòng</span></h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <form id="bookForm" action="{{url('/save-dondat')}}" method="POST">
    {{csrf_field()}}
        <div class="row mt-5 mb-5">
            <div class="col-lg-4">

                <section class="section section-tertiary section-no-border p-5 mt-1 mb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 150}}">
                    <div class="form-row">
                        <div class="form-group col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Đặt phòng ngay</h4>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom form-control-datepicker-custom">
                                <input type="text" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Ngày Đến" name="bookNowArrival" id="bookNowArrival" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom form-control-datepicker-custom">
                                <input type="text" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Ngày trả" name="bookNowDeparture" id="bookNowDeparture" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom">
                                <select class="form-control text-uppercase text-2" name="bookNowAdults" data-msg-required="This field is required." id="bookNowAdults" required>
                                    <option value="">Người Lớn</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom">
                                <select class="form-control text-uppercase text-2" name="bookNowKids" data-msg-required="This field is required." id="bookNowKids" required>
                                    <option value="">Trẻ Em</option>
                                    <option value="1">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="col-lg-8">

                <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Chọn Phòng Ngay</h4>
                        </div>
                    </div>
                    @foreach($room as $key => $r)
                    <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" checked="checked" name="bookNowRoom" id="bookNowRoom" value="{{ $r->category_id }}">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="{{'public/uploads/img/'.$r->image}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">{{$r->ten_loai}}</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>Số Giường</label> <span>{{$r->so_giuong}} Giường</span></li>
                                    <li ><label>Giá Phòng</label> <strong >{{$r->gia_phong}} VNĐ</strong></li>
                                    <input type="text" name="giaphong" id="giaphong" value="{{$r->gia_phong}}" hidden>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" name="bookNowRoom" id="bookNowRoom" value="">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="img/demos/hotel/room-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">Premium Room</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>BEDS</label> <span>1 Double Bed</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 299</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" name="bookNowRoom" id="bookNowRoom" value="">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="img/demos/hotel/room-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">Deluxe Room</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>BEDS</label> <span>2 Double Beds</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 399</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </section>

                <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Thông Tin Khách Hàng</h4>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowFullName" class="form-control-label">Họ Tên </label>
                            <input type="text" require class="form-control" id="bookNowFullName" name="bookNowFullName" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowphone" class="form-control-label">Điện thoại</label>
                            <input type="text"require class="form-control" id="bookNowphone" name="bookNowphone" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowStreetAdd1" class="form-control-label">email</label>
                            <input type="email" require class="form-control" id="bookEmail" name="bookEmail" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowStreetAdd1" class="form-control-label">Địa chỉ </label>
                            <input type="text" require class="form-control" id="bookNowStreetAdd1" name="bookNowStreetAdd1" placeholder="Street address, P.O. box, company name, c/o">
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Đặt Ngay" onclick="myFunction()"name="add-don-dat" class="btn btn-primary btn-lg btn-block text-uppercase p-4 mb-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pb-4 text-2">
                           * Cảm ơn quý khách đã quan tâm đến dịch vụ của chúng tôi. Chúc quý khách có một ngày thật vui vẻ
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>
@endsection