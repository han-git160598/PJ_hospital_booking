@extends('dashboard_customer')
@section('customer_content') 
<body>     
<div style="clear: both; height: 61px;"></div>
<div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">

                           <div class="input-group">
                              <input type="text" id="key_service_packet" placeholder="Search client " class="input form-control">
                              <span class="input-group-btn">
                              <button type="button" onClick="search_service_packet()" class="btn btn btn-primary"> <i class="fa fa-search"></i> Tìm kiếm</button>
                              </span>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">

            

            
                  <div class="col-lg-4">
                     <div class="contact-box">
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="text-center">
                                 <img alt="image" width="100%" height="100%" class="img-circle m-t-xs img-responsive" src="{{ asset('backend/icon/service service.svg')}}">
                              </div>
                           </div>
                           <div class="col-sm-9">
                              <h3><strong>Dịch vụ tẩm quất thiên đường ABC XYZ</strong></h3>
                              <p><strong style="color:green"><i class="fa fa-money"></i> 2.000.000 </strong><a style="color:red"><i id="cart" class="fa fa-cart-plus"></i></a></p>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-12">
                              <address>
                                 <strong><i class="fa fa-content"></i>Nội dung</strong><br>
                                  <p> Kiểm tra dố lượng bạch cầu, hồng cầu, tiểu cầu,...; đánh giá tình trạng thiếu máu, một số bệnh toàn thân</p>
                              </address>
                           </div>
                        </div>
                           <div class="clearfix"></div>
                    
                     </div>
                  </div>

           
                 


               </div>
            </div>
</body>
@endsection