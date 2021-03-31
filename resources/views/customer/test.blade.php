<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> HOSPITAL BOOKING </title>
     
        <!--  -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <!-- Toastr style -->
        <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
        <!-- Gritter -->
        <link href="{{ asset('backend/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
        <!-- morris -->
        <link href="{{ asset('backend/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
        <link href="{{ asset('backend/css/animate.css')}}" rel="stylesheet">
        <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('backend/css/forms/kforms.css')}}" rel="stylesheet">
        <!-- Summernote CSS  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/plugins/summernote/summernote.css')}}">
        
   </head>
   <body>
     
      
            <div style="clear: both; height: 61px;"></div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
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
               </div>
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
                                       <div class="table-responsive">
                                          <table class="table table-striped table-hover">
                                          <tbody>
                                                <tr>
                                                  
                                                   <th style="30px"></th>
                                                   <th>Tên gói khám </th>
                                                   <th>Giá tiền</th>
                                
                                                   <th colspan="2"><center>Hành động</center></th>
                                                </tr>
        
                                             </tbody>
                                             <tbody>
                                                <tr>
                                                   <th style="30px"></th>
                                                   <td>Anthony Jackson</td>
                                                   <td>20.000.000</td>
                                                   <td colspan="2"><center><button class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button>
                                        
                                                   <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
                                                   
                                                </tr>
                                                
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
                        <div class="inqbox-content">
                           <div class="tab-content">
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
                                       <strong style="color:#FF5722">2. Những giá trị khi bạn chọn gói khám sức khỏe nâng cao:</strong>
                                       <p>
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua.
                                       </p>
                                       <hr/>
                                       <strong style="color:#FF5722">3. Chi tiết về gói khám sức khỏe nâng cao:</strong>
                                       <div id="vertical-timeline" class="vertical-container dark-timeline">

                                          <div class="vertical-timeline-block">
                                             <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-coffee"></i>
                                             </div>
                                             <div class="vertical-timeline-content">
                                                <p>Conference on the sales results for the previous year.
                                                </p>
                                                <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2015 </span>
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
               </div>
            </div>

            
        
      <!-- Mainly scripts -->
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="{{ asset('backend/js/laravel_echo.js') }}"></script>
            <script src="{{ asset('backend/js/socket.js') }}"></script>

            <script src="{{ asset('backend/js/jquery-2.1.1.js')}}"></script>
            <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
            <script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
            <script src="{{ asset('backend/js/main/admin_local.js') }}"></script>
            <script src="{{ asset('backend/js/main/admin_dashboard.js') }}"></script>
            <!-- Morris -->

            <script src="{{ asset('backend/js/plugins/morris/morris.js')}}"></script>
            <!-- Chartist -->

            <!-- Custom and plugin javascript -->
            <script src="{{ asset('backend/js/main.js')}}"></script>
            <script src="{{ asset('backend/js/plugins/pace/pace.min.js')}}"></script>
            <!-- Jvectormap -->
            <script src="{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
            <script src="{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
            <!-- Sparkline -->
            <script src="{{ asset('backend/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
            <!-- Sparkline demo data  -->
            <script src="{{ asset('backend/js/demo/sparkline-demo.js')}}"></script>
      <script>
         $(document).ready(function () {
             "use strict";
             // Add slimscroll to element
             $('.full-height-scroll').slimscroll({
                 height: '100%'
             });
         });
      </script>
   </body>
</html>
