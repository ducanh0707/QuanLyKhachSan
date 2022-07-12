@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Dịch vụ
      </header>
      <?php
      $message = Session::get('message');
      if ($message) {
        echo '<span style="color:red; text-align:center;width: 100%;font-weight: bold;">', $message, '</span>';
        Session::put('message', null);
      }
      ?>
      <div class="panel-body">
        <div class="position-center">
          <div class="col-md-12">
          <form role="form" action="{{URL::to('/insert-service')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Tên dịch vụ</label>
              <input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên dịch vụ">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Hình ảnh</label>
              <input type="file" name="img_service" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mô tả </label>
              <textarea style="resize: none " rows="4" class="form-control" id="exampleInputPassword1" name="mota" placeholder="Mô tả thương hiệu"></textarea>
            </div>
            <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="slider_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn slider</option>
                                <option value="1">Hiện slider</option>
                            </select>
                        </div> -->
            <button type="submit" name="add_slider" class="btn btn-info">Thêm dịch vụ</button>
          </form></div>
        </div>
      </div>
    </section>
  </div>
</div>
<div class="row">
  <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Danh sách dịch vụ
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
              <th>Tên dịch vụ</th>
              <th>Hình Ảnh</th>
              <th>Mô tả</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_servi as $key => $sv)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$sv-> tendichvu}}</td>
              <td><img src="public/uploads/service/{{$sv->img_service}}" width="150px" height="100px"></td>
              <td>{{$sv-> mota}}</td>
              <td>
              <a onclick="return confirm('bạn có muốn chắc xóa dịch vụ')" href="{{URL('/delete-service/'.$sv->id_dichvu )}}" class="active style-edit" ui-toggle-class="">
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
            <small class="text-muted inline m-t-sm m-b-sm ">showing 20-30 of 50 items</small>
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