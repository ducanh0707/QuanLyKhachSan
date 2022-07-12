@extends('Backend.layoutAdmin')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Danh Sách Khách hàng
    </div>
    <div>
        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Họ tên</th>
                    <th data-breakpoints="xs">Số điện thoại</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Email</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Địa chỉ</th>

                    <th style="width:30px;"></th>

                </tr>
            </thead>
            <tbody>
                @foreach($customer as $key => $ct)
                <tr data-expanded="true">
                    <td>{{$ct->id_customer}}</td>
                    <td>{{$ct->ten_kh}}</td>
                    <td>{{$ct->sdt_kh}}</td>
                    <td>{{$ct->email}}</td>
                    <td>{{$ct->diachi}}</td>
                    <td>
                        <a onclick="return confirm('bạn có muốn chắc xóa người dùng')" href="{{URL('/delete-cus/'.$ct->id_customer)}}" class="active style-edit" ui-toggle-class="">
                            <i class="fa fa-times text-danger text"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection