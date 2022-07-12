@extends('Backend.layoutAdmin')
@section('content')
<h3>Chào mừng bạn đến với Admin</h3>
<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
                    <i class="fas fa-taxi"></i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Service</h4>
					<h3>
						<?php
						print_r($sl_dv)
						?>
					</h3>
					<p>Other hand, we denounce</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fas fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Customer</h4>
						<h3><?php
						print_r($sl_customer)
						?></h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
                    <i class="fas fa-house-user"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Rooms</h4>
						<h3><?php
						print_r($sl_room)
						?></h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
                    <i class="fas fa-file-invoice"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Orders</h4>
						<h3><?php
						print_r($sl_dp)
						?></h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Khách hàng 
    </div>
    <div>
        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Họ tên</th>
                    <th data-breakpoints="xs">Số điện thoại</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
				@foreach($key as $key => $ct)
                <tr data-expanded="true">
                    <td>{{$ct->id_customer}}</td>
                    <td>{{$ct->ten_kh}}</td>
                    <td>{{$ct->sdt_kh}}</td>
                    <td>{{$ct->diachi}}</td>
                </tr>
				@endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection