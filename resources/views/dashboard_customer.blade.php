<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CÔNG TY CỔ PHẦN INFORMATICS QTC</title>
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
<style>
#cart {
  font-size:150%;
}
#badge {
  font-size: 130%;
}
</style>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side fixed-menu" role="navigation">
                <div class="sidebar-collapse">
                    <div id="hover-menu"></div>
                    <ul class="nav metismenu" id="side-menu">
                        <li>
                            <div class="logopanel" style="margin-left: 0px; z-index: 99999">
                                <div class="profile-element">
                                    <h2><a href="{{ URL::to('/dashboard') }}">QTC ADMIN</a></h2>
                                </div>
                                <div class="logo-element">

                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- START : Left sidebar -->
                            <div class="nano left-sidebar">
                                <div class="nano-content">
                                    <ul class="nav nav-pills nav-stacked nav-inq" id="list_manage">


                                        <li class="active">
                                            <a href="{{ URL::to('/dashboard-customer') }}"><i class="fa fa-home"></i> <span class="nav-label">Trang chủ</span></a>
                                        </li>
                                       
                                        
                                                    <li >

                                                        <a href="{{ URL::to('customer-service-packet') }}"><img src="#" width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Các gói khám tổng hợp</span></a>
                                                    </li>
                                                    
                                                    <li >

                                                        <a href="{{ URL::to('customer-service-service') }}"><img src="#"  width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Dịch vụ khám tùy chọn</span></a>
                                                       
                                                    </li>
                                                 
                                                    <li >

                                                        <a href="{{ URL::to('customer-booking-history') }}"><img src="#"  width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Lịch sửa đặt khám</span></a>
                                                      
                                                    </li>



                                                    <li >
                                                        <a href="customer-useful-news"><img src="#"  width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Thông tin hữu ích</span></a>
                                                       
                                                    </li>
                                                    
                                                    
                                                    <li>
                                                        <a href="customer-appointment-schedule"><img src="#"  width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Cuộc hẹn & lịch trình</span></a>
                                                      
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="customer-cart"><img src="#"  width="25px" height="25px">&nbsp;&nbsp;<span class="nav-label">Giỏ hàng</span></a>
                                                      
                                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END : Left sidebar -->
                        </li>
                    </ul>
                </div>
            </nav>

            
        <meta name="csrf-token-get-permission-das" content="{{ csrf_token() }}" />

            <div id="page-wrapper" class="gray-bg">
                <!-- BEGIN HEADER -->
                <div id="header">
                    <nav class="navbar navbar-fixed-top white-bg show-menu-full" id="nav" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">

                            <form role="search" class="navbar-form-custom">
                                <div class="form-group">
                                    <div class="kform inq">
                                        <div>
                                            <label class="field append-icon">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown hidden-xs">

                                <ul class="dropdown-menu dropdown-messages">
                                    <li class="divider"></li>
                                    <li>
                                        <div class="text-center link-block">
                                            <a href="mailbox.html" class="animated animated-short fadeInUp">
                                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">

                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="mailbox.html" class="animated animated-short fadeInUp">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i>
                                                <span class="pull-right text-muted small"></span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown pull-right" id="username_ac">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="pl15"><i id="cart" class="fa fa-cart-plus"></i></span><span id="badge" class="badge badge-danger">0</span>
                                    <span class="pl15"><i class="fa fa-user"></i><span id="username"></span></span>
                                </a>
                              
                            </li>
                        </ul>
                    </nav>
                </div>





                @yield('customer_content')



            <div class="footer">
               <div class="pull-right">
                  10GB of <strong>250GB</strong> Free.
               </div>
               <div>
                  <strong>Copyright</strong> Your Company &copy; 2015-2016
               </div>
            </div>    

               



            </div>
           

    </body>
    {{--  -----------   thay đổi tông tin cá nhân --------------  --}}
            <meta name="csrf-token-force-sign" content="{{ csrf_token() }}" />
            <meta name="csrf-token-force-sign2" content="{{ csrf_token() }}" />
            <div id="change_info_customer_modal" class="modal fade">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <center><h2 class="modal-title"><strong>Thay đổi thông tin cá nhân</strong></h2></center>
                  </div>
                  <div class="modal-body">

                    <form id="info_customer">
                    <meta name="csrf-token-change-password-dashboard" content="{{ csrf_token() }}" />
                    <div class="inqbox-content" id="info_persenal">
                    <form>
                        <strong style="color:#10ABFE">1. Số điện thoại liên hệ :</strong><br>
                        <input type="text" placeholder="số điện thoại" class="form-control" ><br>
                        <strong style="color:#10ABFE">2. Họ và tên (*) :</strong><br>
                        <input type="text" placeholder="Họ và tên" class="form-control" ><br>
                        <strong style="color:#10ABFE">3. Giới tính (*) :</strong><br>
                        <input type="text" placeholder="Giới tính" class="form-control" ><br>
                        <strong style="color:#10ABFE">4. Ngày sinh (*) :</strong><br>
                        <input type="date" class="form-control" ><br>
                        <strong style="color:#10ABFE">5. Email :</strong><br>
                        <input type="email" class="form-control" ><br>
                        <strong style="color:#10ABFE">6. Địa  chỉ(*) :</strong><br>
                        <input type="text" class="form-control" ><br>
                        <input type="button" onClick="update_info()" value="Cập nhật" class="btn btn-success btn-sm btn-block" />
                    </form>
                  </div>
                 </div>
                </div>
               </div>
{{--  đổi mật khẩu  --}}
        <meta name="csrf-token-force-sign" content="{{ csrf_token() }}" />
            <meta name="csrf-token-force-sign2" content="{{ csrf_token() }}" />
            <div id="change_password_customer_modal" class="modal fade">
                <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h2 class="modal-title"><strong>Thay đổi thông tin cá nhân</strong></h2>
                  </div>
                  <div class="modal-body">
                    <form id="change_password_dashboard_account_form">
                    <meta name="csrf-token-change-password-dashboard" content="{{ csrf_token() }}" />
                    <div class="inqbox-content">
                        <label>Mật khẩu cũ</label>
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" name="old_password" id="old_password">

                            <div class="input-group-addon">
                                <a onClick="show_old_password()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                            <small id="erold_password" class="text-danger"></small><br /><br />

                            <label>Mật khẩu mới</label>
                            <div class="input-group" id="show_hide_password2">
                            <input class="form-control" onkeyup="checkPass()" type="password" id="new_password" >
                            <br />
                            <div class="input-group-addon">
                                <a onClick="show_new_password()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                            <small id="dasherpassword" class="text-danger"></small>
                            <br /> 
                            <br />
                        <label>Nhập lại mật khẩu</label>
                            <div class="input-group" id="show_hide_password3">
                            <input class="form-control" onkeyup="checkPass()" type="password" id="confirm_password">

                            <div class="input-group-addon">
                                <a onClick="show_confirm_password()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                            <small id="dasherpassword2" class="text-danger"></small>
                            <br />
                            <div><strong  id="error-nwl" style="color:red"></strong></div>
                            <br />
                            
                    <input type="button" onClick="change_password()" name="edit" id="1" value="Cập nhật" class="btn btn-success btn-sm btn-block" />
                    </form>
                  </div>
                 </div>
                </div>
               </div>


            {{--  đăng xuất  --}}

              <div class="modal" id="logout-dasboard" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document" style="background-color: #87CEEB">
                  <div class="modal-content">
                    </div>
                    <div class="modal-body" id="content_alert_das">
                       <h3> Bạn có muốn đăng xuất không</h3>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ URL::to('/page/logout') }}" method="get">
                            <button type="button" onClick="customer_logout()" class="btn btn-secondary">Yes</button>
                            <button type="button"class="btn btn-secondary" data-dismiss="modal">No</button>
                        </form>


                    </div>
                  </div>
                </div>
              </div>

{{--  --------------------------------  --}}

<!-- Mainly scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    <script src="{{ asset('backend/customer-js/account_customer.js') }}"></script>


    <script src="{{ asset('backend/js/jquery-2.1.1.js')}}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    {{--  <script src="{{ asset('backend/js/main/admin_dashboard.js') }}"></script>  --}}
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
    $( document ).ready(function() {
        var username = JSON.parse(localStorage.getItem('account_customer'));
        //$('#username').html(username.full_name);
           var output = `
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span class="pl15"><i id="cart" class="fa fa-cart-plus"></i></span><span id="badge" class="badge badge-danger">0</span>
                <span class="pl15"><i class="fa fa-user"></i><span id="username">${username.full_name}</span></span>
                <span class="caret caret-tp"></span>
            </a>
            <ul class="dropdown-menu animated m-t-xs">
                <li><a  class="animated animated-short fadeInUp"  onClick="show_modal_profile()">Thay đổi thông tin cá nhân</a></li>
                <li class="divider"></li>
                <li><a  class="animated animated-short fadeInUp" onClick="show_modal_change_password()">Đổi mật khẩu</a></li>
                <li class="divider"></li>
                <li><a href="#" class="animated animated-short fadeInUp" data-toggle="modal" data-target="#logout-dasboard"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
            </ul>`;
            $('#username_ac').html(output);
                    
        
    });
        
    </script>

</html>
