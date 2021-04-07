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

#img_result{
    position: relative;
    
}
#img_result span{
    position: absolute;
    top: 40%;
    left: 45%;
    font-size: 26px;
    font-weight: 700;
}
</style>

<body>     
      
<div style="clear: both; height: 61px;"></div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="inqbox float-e-margins">
            <div class="inqbox-content">
                <h2>Lịch sử lịch hẹn</h2>
               
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <div class="inqbox">
            <div class="inqbox-content">
                {{--  <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2015</span>
                <h2>Clients</h2>  --}}
                <div class="input-group">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn btn-primary" onClick="filter_history() "> <i class="fa fa-filter"></i> Lọc </button>
                    </span>
                </div>
                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                        <div class="full-height-scroll">
                            <div class="table-responsive" style="width:100%;height:600px; overflow: auto;">
                                <table class="table table-striped table-hover" >
                                <tbody>
                                    <tr>
                                        
                                        <th style="30px"></th>
                                        <th>Mã đơn </th>
                                        <th>Ngày đặt</th>
                                        <th>Dịch vụ</th>
                    
                                        <th colspan="2"><center>Hành động</center></th>
                                    </tr>

                                    </tbody>
                                    <tbody id="list_booking_history" >
                                    {{--  <tr>
                                        <th style="30px"></th>
                                        <td>MH 51222366</td>
                                        <td>20/11/2020 9:30</td>
                                        <td>Khám nội tổng quát ...</td>
                                        <td><center><button class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button></center></td>
                                        
                                    </tr>  --}}
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
            <div class="inqbox-content" id="detail_booking_history">
                <div class="tab-content" hidden >
                    <div id="contact-1" class="tab-pane active" >
                        <div class="row m-b-lg">
                        <div class="col-lg-12 text-center">
                            <h2><strong style="color:#10ABFE"> Khám cá nhân </strong></h2>
                        </div>
                        </div>
                        <div class="client-detail">
                        <div class="full-height-scroll">
                            
                           
                            <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                                
                                <table class="total_history">
                                    <tr> 
                                        <td><strong style="color:#000000"> Trạng thái:</strong></td>
                                        <td><strong style="color:#000000"> Hoàn tất</strong></td>
                                    </tr>
                                    <tr> 
                                        <td><strong style="color:#44C13C"> Mã đơn hàng :</strong></td>
                                        <td><strong style="color:#44C13C"> MH 5155656</strong></td>
                                    </tr>
                                  
                                    <tr> 
                                        <td><strong style="color:#10ABFE"> Thời gian hẹn:</strong></td>
                                        <td><strong style="color:#10ABFE"> 29/3/2020 - 10:03</strong></td>
                                    </tr>
                                </table>
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
                                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                                    <td><strong style="color:#10ABFE"> Nam </strong></td>
                                </tr>
                              </table>
                                <p>Tiểu sử(nếu có):</p>
                                <textarea rows="6" cols="50"></textarea>
                            </div>
                           
                            <h3><strong style="color:Black">Thông tin dịch vụ khám: </strong></h3>
                               <table  id="detail_service_packet">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Dịch vụ</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead >
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                        <p>Maria Anders</p>
                                        <p>Maria Anders</p>
                                        </td>
                                        <td>250.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> 
                                        <p>Maria Anders</p>
                                        <p>Maria Anders</p>
                                        </td>
                                        <td>300.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td> 
                                        <p>Maria Anders</p>
                                        <p>Maria Anders</p>
                                        </td>
                                        <td>300.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> 
                                        <p>Maria Anders</p>
                                        <p>Maria Anders</p>
                                        </td>
                                        <td>300.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> 
                                        <p>Maria Anders</p>
                                        <p>Maria Anders</p>
                                        </td>
                                        <td>300.000</td>
                                    </tr>
                                
                                </tbody>
                               </table>

                               <table class="total_history">
                                    <tr> 
                                        <td><strong style="color:#000000"> Thành tiền:</strong></td>
                                        <td><strong style="color:#000000"> 40.000.000 VND</strong></td>
                                    </tr>
                                    <tr> 
                                        <td><strong style="color:#10ABFE"> Người khám :</strong></td>
                                        <td><strong style="color:#10ABFE"> X1</strong></td>
                                    </tr>
                                  
                                    <tr> 
                                        <td><strong style="color:#44C13C"> Tổng tiền dịch vụ ban đầu:</strong></td>
                                        <td><strong style="color:#44C13C"> 40.000.000 VND</strong></td>
                                    </tr>
                                </table>

                            <h3><strong style="color:Black">Các dịch vụ phát sinh: </strong></h3>
                               <table  id="detail_service_packet">
                                <thead>
                                    <tr>
                                        <th>Dịch vụ</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead >
                                <tbody>
                                    <tr>
                                        <td>Khám tư vấn sản phụ từ xa Anders</td>
                                        <td>250.000</td>
                                        <td>3</td>
                                        <td>750.000</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>250.000</td>
                                        <td>3</td>
                                        <td>750.000</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>250.000</td>
                                        <td>3</td>
                                        <td>750.000</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>250.000</td>
                                        <td>3</td>
                                        <td>750.000</td>
                                    </tr>
                                   
                                
                                </tbody>
                               </table>

                               <table class="total_history">
                                    <tr> 
                                        <td><strong style="color:#44C13C"> Tổng phát sinh:</strong></td>
                                        <td><strong style="color:#44C13C"> 40.000.000 VND</strong></td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="total_history">
                                  <tr> 
                                    <td><strong  style="color:#44C13C;font-size: large;">  Tổng tiền:</strong></td>
                                    <td><strong  style="color:#44C13C;font-size: large;"> 80.000.000 VND</h2></strong></td>
                                  </tr>
                                 </table>
                                <hr>
                                  <h3><strong style="color:Black">Phương thức thanh toán </strong></h3>
                                  <h5> <span style="color:blue;"><i><img src="{{asset ('backend/icon/cash in hand.svg')}}"></i> <i><img src="{{asset ('backend/icon/Thanh toán chi phí tại bệnh viện.svg')}}"></i> </span> 

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
{{-----  dialog filter request payment  --}}
            <dialog id="filter_history">
            <form method="dialog">
                <p><label>Lọc trạng thái:</label></p>
                 <select class="form-control" id="status_booking">
                    <option value=''>Tất cả</option>
                    <option value='1'>Chờ xác nhận</option>
                    <option value='2'>Chờ kết quả</option>
                    <option value='4'>Hoàn thành</option>
                </select>
                <p><label>Loại đơn khám:</label></p>
                 <select class="form-control" id="type_customer">
                    <option value=''>Tất cả</option>
                    <option value=1>Đơn cá nhân</option>
                    <option value=2>Đơn khám hộ</option>
                </select>
                <p><label>Thời gian:</label></p>
                <input type="month" class="form-control" id="finish_time_booking"> 
                <center><menu class="menu">
                <button class="btn btn-secondary">Hủy </button>
                <button class="btn btn-danger" onClick="filter_booking_history()">Tìm kiếm</button>
                </menu></center>
            </form>
            </dialog>
         {{-- ---------------------------  --}}
         {{--  modal img  --}}
           <div id="img_result_modal" class="modal fade">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h2 class="modal-title"><strong>Kết quả xét nghiệm</strong></h2></center>
                  </div>
                  <div class="modal-body">
                    <div class="inqbox-content" id="list_img_result" style="width:100%;height:520px; overflow: auto;">


                    </div>
                  </div>
                 </div>
                </div>
               </div>
</body>
    <script src="{{ asset('backend/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    <script src="{{ asset('backend/customer-js/booking_history.js') }}"></script>
@endsection
   