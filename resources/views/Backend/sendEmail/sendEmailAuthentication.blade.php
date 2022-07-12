<section>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="container bootstrap snippets bootdeys" style="    width: 54%;margin: auto;padding: 30px;background: #e2d5d5;border-radius: 11px;">
        <div class="row" >
            <div class="col-sm-12">
                <div class="panel panel-default invoice" id="invoice">
                    <div class="panel-body">
                       
                        <div class="row">

                            <div class="col-sm-6 top-left">
                                <i class="fa fa-rocket"></i>
                            </div>

                            <div class="col-sm-6 top-right" style="line-height: 5px;">
                                <h3 class="marginright">Hóa Đơn Mua Hàng</h3>
                                <span class="marginright">14 April 2014</span>
                            </div>

                        </div>
                        <hr>
                        <div class="row" style="display: flex;">

                            <div class="col-xs-4 from" style="width: 33.33333333%;">
                                <p class="lead marginbottom" style="margin-bottom: 20px;font-size: 21px;font-weight: 300;line-height: 1.4;">From :Khác Sạn ABC</p>
                                <p style="line-height: 0.5rem;">Lê văn lương-hà nội</p>
                                <p style="line-height: 0.5rem;">Phone: 415-767-3600</p>
                                <p style="line-height: 0.5rem;">Email: contact@dynofy.com</p>
                            </div>

                            <div class="col-xs-4 to " style="width: 33.33333333%;">
                                <p class="lead marginbottom" style="margin-bottom: 20px;font-size: 21px;font-weight: 300;line-height: 1.4;">To : {{$name}}</p>
                                <p style="line-height: 0.5rem;">{{$diachi}}</p>
                                <p style="line-height: 0.5rem;">Phone:{{$dienthoai}}</p>
                                <p style="line-height: 0.5rem;">Email: {{$email_n}}</p>

                            </div>

                            <div class="col-xs-4 text-right payment-details" style="width:33.33333333%;text-align: end;">
                                <p class="lead marginbottom payment-info"  style="margin-bottom: 20px;font-size: 21px;font-weight: 300;line-height: 1.4;">Chi Tiết Hóa Đơn</p>
                                <p style="line-height: 0.5rem;">Date: 14 April 2014</p>
                                <p style="line-height: 0.5rem;">VAT: DK888-777 </p>
                                <p style="line-height: 0.5rem;">Total Amount: $1019</p>
                                <p style="line-height: 0.5rem;">Account Name: Flatter</p>
                            </div>

                        </div>
                        <div class="row table-row">
                            <hr>
                            <table class="table table-striped" style="color:red;width: 100%;max-width: 100%;margin-bottom: 20px;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:50%;text-align: left;">Loại Phòng</th>
                                        <th class="text-right" style="width:15%,text-alight:right;">Số Người</th>
                                        <th class="text-right" style="width:15%,text-alight:right;">Giá phòng</th>
                                        <th class="text-right" style="width:15%,text-alight:right;">Thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Phòng thường</td>
                                        <td class="text-right" style="text-align: center;">4</td>
                                        <td class="text-right"  style="text-align: center;">$18</td>
                                        <td class="text-right"  style="text-align: center;">$180</td>
                                    </tr>
                                  
                                </tbody>
                            </table>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6 margintop" style="float:left">
                                <p class="lead marginbottom" style="margin-bottom: 20px;font-size: 21px;font-weight: 300;line-height: 1.4;">THANK YOU!</p>

                               
                            </div>
                            <div class="col-xs-6 text-right pull-right invoice-total" style="text-align: end;">
                                <p style="margin: 0;">Subtotal : $1019</p>
                                <p style="margin: 0;">Discount (10%) : $101 </p>
                                <p style="margin: 0;">VAT (8%) : $73 </p>
                                <p style="margin: 0;">Total : $991 </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>