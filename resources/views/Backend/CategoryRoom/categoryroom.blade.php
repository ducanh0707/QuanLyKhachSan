@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading " style="font-weight: bold;">
                Thêm danh mục phòng
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
                    <form role="form" action="{{URL::to('/save-category-room')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_room_name" class="form-control" required id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số Giường</label>
                            <input type="text" name="sogiuong" class="form-control" id="exampleInputEmail1"   placeholder="Giá phòng">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tỉ Suất sử dụng</label>
                            <input type="text" name="tisuat" class="form-control" id="exampleInputEmail1"   placeholder="Giá phòng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diện Tích Phòng</label>
                            <input type="text" name="dientich" class="form-control" id="exampleInputEmail1"   placeholder="Giá phòng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh phòng</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Phòng</label>
                            <input type="text" name="category_room_price" class="form-control" id="exampleInputEmail1"   placeholder="Giá phòng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thông tin phòng</label>
                            <textarea rows="8"  class="form-control "  name="room_infor" placeholder="Mô tả phòng" > </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả phòng</label>
                            <textarea rows="2"  class="form-control "  name="room_desc" placeholder="Mô tả phòng" > </textarea>
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>

                            <select name="room_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiện</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="add_category_room" class="btn btn-info">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<style>
    p.ck-placeholder {
    height: 127px;
}
</style>
<script>
var Title = $('<textarea />').html("Chris&apos; corner").text();
console.log(Title);
</script>
@endsection