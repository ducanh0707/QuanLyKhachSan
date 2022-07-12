@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm  Slider
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
                    <form role="form" action="{{URL::to('/insert-slider')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên slide</label>
                            <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1" placeholder="Tên thương hiệu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh</label>
                            <input type="file" name="slider_image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả slide</label>
                            <textarea style="resize: none " rows="8" class="form-control" id="exampleInputPassword1" name="slider_desc" placeholder="Mô tả thương hiệu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="slider_status" class="form-control input-sm m-bot15">
                                <option value="1">Ẩn slider</option>
                                <option value="0">Hiện slider</option>
                            </select>
                        </div>
                        <button type="submit" name="add_slider" class="btn btn-info">Thêm slider</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection