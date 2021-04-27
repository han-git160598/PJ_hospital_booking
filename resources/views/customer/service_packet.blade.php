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
 

.total_service_packet strong {
    font-size: large;
}
.total_service_packet{
    width: 100%;
    cel

}
.total_service_packet tr>td:nth-child(2){
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

</style>

<body>     
      
<div style="clear: both; height: 61px;"></div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="inqbox float-e-margins">
            <div class="inqbox-content">
                <h2>Gói khám tổng hợp</h2>
           
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
                    <input type="text" id="key_service_packet" placeholder="Tìm kiếm" class="input form-control">
                    <span class="input-group-btn">
                    <button type="button" onClick="search_service_packet()" class="btn btn btn-primary"> <i class="fa fa-search"></i> Tìm kiếm</button>
                    </span>
                </div>
                <div class="clients-list">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                        <div class="full-height-scroll">
                            <div class="table-responsive" style="width:100%;height:600px; overflow: auto;" >
                                <table style="width:100%">
                                {{--  <table class="table table-striped table-hover" >  --}}
                                <thead>
                                    <tr>
                                        <th style="width:50%">Tên gói khám </th>
                                        <th style="width:20%">Giá tiền</th>
                                        <th style="width:30%" colspan="2"><center>Hành động</center></th>
                                    </tr>
                                </thead>
                                <tbody id="list_service_packet">
                                    {{--  <tr>
                                        <th style="30px"></th>
                                        <td>Anthony Jackson</td>
                                        <td>20.000.000</td>
                                        <td colspan="2"><center><button class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button>
                            
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
                                        
                                    </tr>  --}}
                                    
                                </tbody>
                                </table>
                            </div>
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
            <div class="inqbox-content" id="detail_service_packet_data">
                <div class="tab-content" hidden>
                    <div id="contact-1" class="tab-pane active">
                        <div class="row m-b-lg">
                        <div class="col-lg-12 text-center">
                            <h2><strong style="color:#10ABFE"> Gói khám sức khỏe nâng cao </strong></h2>
                        </div>
                        </div>
                        <div class="client-detail">
                        <div class="full-height-scroll">
                            <strong style="color:#FF5722">1. Tại sao lại chọn gói khám sức khỏe nâng cao:</strong>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <hr/>
                            <strong style="color:#FF5722">2. Chi tiết về gói khám sức khỏe nâng cao:</strong>
                            <div  class="vertical-container dark-timeline" style="width:100%;height:350px; overflow: auto;">
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
                                
                            </div>
                        </div>
                        <hr>
                        
                        <table class="total_service_packet">
                            <tr> 
                                <td><strong style="color:#44C13C"> Tổng tiền:</strong></td>
                                <td><strong style="color:#44C13C"> 40.000.000 VND</strong></td>
                            </tr>
                        </table>
                   
                        </div>
                <hr>
                <button type="button" class="btn btn-danger btn-sm btn-block">Đặt khám</button>
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
    <script src="{{ asset('backend/customer-js/service_packet.js') }}"></script>
@endsection