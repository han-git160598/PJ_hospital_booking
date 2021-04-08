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
    <div class="row">
        <div class="col-lg-12">
            <div class="inqbox float-e-margins">
            <div class="inqbox-content">
                <h2>Cuộc hẹn & lịch trình</h2>
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
                {{--  <div class="input-group">
                    <input type="text" placeholder="Tìm kiếm " class="input form-control">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn btn-primary" onClick="filter_history() "> <i class="fa fa-filter"></i> Search</button>
                    </span>
                </div>  --}}
                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                        <div class="full-height-scroll">
                            <div class="table-responsive" style="width:100%;height:500px; overflow: auto;">
                                <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        
                                        <th style="30px"></th>
                                        <th>Mã đơn </th>
                                        <th>Ngày đặt</th>
                                      
                                        <th colspan="2"><center>Hành động</center></th>
                                    </tr>
                                    </tbody>
                                    <tbody id="list_billing_billing" >
                                    {{--  <tr>
                                        <th style="30px"></th>
                                        <td>MH 51222366</td>
                                        <td>20/11/2020 9:30</td>
                                       
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
            <div class="inqbox-content" id="detail_booking_appointment">
                <div class="tab-content" hidden>
                    <div id="contact-1" class="tab-pane active">
                        <div class="row m-b-lg">
                        <div class="col-lg-12 text-center">
                            <h2><strong style="color:#10ABFE"> Chi tiết lịch hẹn</strong></h2>
                        </div>
                        </div>
                        <div class="client-detail">
                        <div class="full-height-scroll">
                            
                           
                            <div  class="vertical-container dark-timeline" style="width:100%;height:300px; overflow: auto;">
                                
                            
                            <h3><strong style="color:Black">Nhắc hẹn khám </strong></h3>
                            <img alt="" height="150" width="99%" src="{{ asset('images/slide/204683265.png')}}">
                           
                            <h3><strong style="color:Black">Lịch trình </strong></h3>
                        
                               <table  id="detail_service_packet">
                                <thead>
                                    <tr>
                                        <th>Dịch vụ</th>
                                        <th>Thời gian</th>
                                 
                                    </tr>
                                </thead >
                                <tbody>
                                    <tr>
                                        <td>Khám tư vấn sản phụ từ xa Anders</td>
                                        <td>250.000</td>
                             
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>250.000</td>
                                  
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>250.000</td>
                                     
                                    </tr>

                                </tbody>
                               </table>

        
                               
                                 <hr>

                            </div>
                        
                        <span id="btn_history"><button type="button" class="btn btn-danger btn-sm btn-block">Xem lại đơn hàng này</button></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div> 

</body>
    <script src="{{ asset('backend/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    <script src="{{ asset('backend/customer-js/appointment_schedule.js') }}"></script>
@endsection
   