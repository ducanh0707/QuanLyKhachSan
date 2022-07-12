@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh Sách Đặt Phòng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <?php
      $message = Session::get('message');
      if ($message) {
        echo '<span style="color:red; text-align:center;width: 100%;font-weight: bold;">', $message, '</span>';
        Session::put('message', null);
      }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên Phòng</th>
            <th>Khách Hàng</th>
            <th>Ngày Đến</th>
            <th>Dự Kiến</th>
            <th>Giá phòng</th>
            <th>Trạng Thái</th>
            <th>Xét Duyệt</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($thongkehd as $key => $tk)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$tk -> ten_loai}}</td>
            <td>{{$tk ->ten_kh}}</td>
            <td>{{$tk ->tu_ngay}}</td>
            <td>{{$tk ->den_ngay}}</td>
            <td>{{$tk ->tong_tien}}</td>
            <td>{{$tk ->tthai_ttoan}}</td>
            <td><span class="text-ellipsis">
                  <?php
                  if ($tk->trang_thai == 1) {
                  ?>
                    <!-- trả về 1 trang unactive-category-product nối sau là id của danh mục sp đó (category_product là khóa id của bảng tbl-category-produc) -->
                    <a href="{{URL::to('/status/'.$tk->id_dondat.'/0')}}"><span class="fa-thumbs-style fa fa-thumbs-down"></span></a>
                  <?php
                  } else {
                  ?>
                    <a href="{{URL::to('/status/'.$tk->id_dondat.'/1')}}"><span class="fa-thumbs-style fa fa-thumbs-up"></span></a>
                  <?php
                  }
                  ?>
                </span>
              <td>
              <td>
             
             <a onclick="return confirm('bạn có muốn chắc xóa đơn đặt')" href="{{URL('/delete-don-dat/'.$tk->id_dondat)}}" class="active style-edit" ui-toggle-class="">
               <i class="fa fa-times text-danger text"></i>
             </a>
           </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</div>
@endsection