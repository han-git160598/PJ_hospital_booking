@extends('dashboard_customer')
@section('customer_content') 
<style>

#detail_service_packet {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

#detail_service_packet td, #detail_service_packet th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

#detail_service_packet tr:nth-child(even) {
background-color: #dddddd;
}
 

.total_history strong {
    font-size: small;
}
.total_history{
    width: 100%;
    cel

}
.total_history tr>td:nth-child(2){
    text-align: right;
}
a:hover {
background-color: yellow;
}
.menu {
display: block;
list-style-type: disc;
margin-block-start: 1em;
margin-block-end: 1em;
margin-inline-start: 0px;
margin-inline-end: 0px;
padding-inline-start: 0px;
}
p{
    color: #10ABFE;
}
</style>

<body>     
      
<div style="clear: both; height: 61px;"></div>
<div class="wrapper wrapper-content animated fadeInRight">
    {{--  <div class="row">
        <div class="col-lg-12">
            <div class="inqbox float-e-margins">
            <div class="inqbox-content">
                <h2>Clients</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Apps</a>
                    </li>
                    <li class="active">
                        <strong>Clients</strong>
                    </li>
                </ol>
            </div>
            </div>
        </div>
    </div>  --}}
    <div class="row">
        <div class="col-sm-7">
            <div class="inqbox">
            <div class="inqbox-content">
                {{--  <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2015</span>
                <h2>Clients</h2>  --}}
                <div class="input-group">
                    <input type="text" placeholder="Search client " class="input form-control">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                    </span>
                </div>
                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                        <div class="full-height-scroll">
                            <div class="table-responsive" style="width:100%;height:400px; overflow: auto;">
                                <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="30px"></th>
                                        <th>Tên dich vụ</th>
                                        <th>Giá tiền</th>
                                        <th colspan="2"><center>Hành động </center></th>
                                        <th><button class="btn btn-primary btn-sm" >Xóa hết</button></th>
                                    </tr>

                                    </thead>
                                    <tbody id="list_cart">
                                    <tr>
                                        <th style="30px"></th>
                                        <td>Anthony Jackson</td>
                                        <td>20.000.000</td>
                                        <td colspan="2"><a><center><i class="fa fa-remove"></i> </a></center></td>
                                    </tr>
                                    </tbody>

                                </table>
                                
                            </div>
                            <hr>
                            <table class="total_history" >
                                <tr> 
                                <td><strong  style="color:#44C13C;font-size: large;">  Tổng tiền:</strong></td>
                                <td><strong id="total_service_price"  style="color:#44C13C;font-size: large;"> 0 VND</h2></strong></td>
                                </tr>
                            </table>
                        <select id="type_cars" onchange="form_profile_cart()" class="btn btn-danger btn-sm btn-block">
                            <option value="0">Chọn hình thức</option>
                            <option value="1">Khám cá nhân</option>
                            <option value="2">Đặt khám hộ</option>
                        </select>
                        </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                        <div class="full-height-scroll">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody>

                                    <tr>
                                        <td><a data-toggle="tab" href="#company-2" class="client-link">Et Arcu Inc.</a></td>
                                        <td>Sioux City</td>
                                        <td><i class="fa fa-flag"></i> Burundi</td>
                                        <td class="client-status"><span class="label label-primary">Active</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
     <div class="col-sm-5">
            <div class="inqbox ">
            <div class="inqbox-content" id="detail_profile">
               
                <div class="tab-content" hidden>
                    <div id="contact-1" class="tab-pane active">
                        <div class="row m-b-lg">
                        <div class="col-lg-12 text-center">
                            <h2><strong style="color:#10ABFE"> Khám cá nhân </strong></h2>
                        </div>
                        </div>
                        <div class="client-detail">
                        <div class="full-height-scroll">
                            
                           
                            <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                                
                               
                            <h3><strong style="color:Black">Kết quả xét nghiệm: </strong></h3>
                            <img alt="" height="150" width="99%" src="{{ asset('images/slide/204683265.png')}}">
                           
                            <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>
                            <div>
                              <table class="total_history">
                                <tr> 
                                    <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                                    <td><strong style="color:#10ABFE"> Ng Gia Hân</strong></td>
                                </tr>
                                <tr> 
                                    <td><strong style="color:#10ABFE"> SDT:</strong></td>
                                    <td><strong style="color:#10ABFE"> 0123456789 </strong></td>
                                </tr>
                                <tr> 
                                    <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                                    <td><strong style="color:#10ABFE"> D2, Bình Thạch, tp.HCM</strong></td>
                                </tr>
                                <tr> 
                                    <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                                    <td><strong style="color:#10ABFE"> 10/11/2021</strong></td>
                                </tr>
                                <tr> 
                                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                                    <td><strong style="color:#10ABFE"> Nam </strong></td>
                                </tr>
                              </table>
                             
                              <table    >
                               <tr> 
                                    <td> <strong style="color:#10ABFE">1. Ngày hẹn:</strong></td>
                                     <td> <input type="date" class="form-control"></td>
                                </tr>
                                <tr> 
                                    <td> <strong style="color:#10ABFE">2. Giờ hẹn:</strong></td>
                                    <td> <input type="time" class="form-control"></td>
                                </tr>
                               
                              </table>
                              
                                <p>Tiểu sử(nếu có):</p>
                                <textarea rows="6" cols="50"></textarea>
                            </div>
                                <hr>
                                   <button type="button" onclick="create_booking()" class="btn btn-danger btn-sm btn-block">Xem lại lịch đặt khám</button>
                                 
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
{{--  payment  --}}
<div id="type_paypal" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">

      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <center><h2 class="modal-title"><strong style="color:black">Phương thức thanh toán</strong></h2></center>
      </div>
      <div class="modal-body">
      <form>
        <table class="total_history">
                <tr> 
                    <td><strong style="color:#10ABFE">  <span style="color:blue;"><i><img src="../backend/icon/cash in hand.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí tại bệnh viện.svg"></i> </span></strong></td>
                    <td><strong style="color:#10ABFE"> <input onChange="cash_in_hand()" checked type="radio" name="radio_pay"> </strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE">  <span style="color:blue;"><i><img src="../backend/icon/online payment.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí qua chuyển khoản.svg"></i> </span></strong></td>
                    <td><strong style="color:#10ABFE"> <input onChange="online_payment()" type="radio" name="radio_pay"></strong></td>
                </tr>
        </table>
       </form>
        <div id="img_type_pay">
            <center><img alt="" height="270" width="250" src="{{ asset('backend/icon/img_paypal.svg')}}"> </center>
            <center><h2><strong style="color:orange"> Lưu ý :</strong></h2></center>
            <p style="color:black">Đối với khách hàng thanh toán trực tiếp tại bệnh viện chúng tôi sẽ hỗ trợ đặt lịch khám cho khách hàng. Tuy nhiên số thứ tự khám bệnh sẽ được cấp sau khi khách hàng thanh toán chi phí khám cho bệnh viện. </p>
        </div>
       </div>

      <div class="modal-footer">
       <button type="button" data-dismiss="modal" id="insert_service" onClick="select_type_payment()" class="btn btn-danger">Chọn ngay</button>
       <button type="button" class="btn btn-default" data-dismiss="modal"> Đóng </button>
      </div>
      
     </div>
    </div>
</div>
{{--    --}}
</body>
    <script src="{{ asset('backend/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    <script src="{{ asset('backend/customer-js/cart.js') }}"></script>
@endsection