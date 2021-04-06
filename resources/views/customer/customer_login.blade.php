<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> HOSPITAL BOOKING </title>
      <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('backend/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/css/animate.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">


        <!-- Toastr style -->
        <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
        <!-- Gritter -->
        <link href="{{ asset('backend/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
        <!-- morris -->
        <link href="{{ asset('backend/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">


        <link href="{{ asset('backend/css/forms/kforms.css')}}" rel="stylesheet">
<style>

#Forgot_password {
  position: absolute;
  right: 33px;

}

</style>
   </head>
   <body class="gray-bg">
      <div class="loginColumns animated fadeInDown">
      <hr>
         <div class="row">
            <div class="col-md-6">
             <center> <p><img  alt="" height="200px" width="200px" src="{{ asset('backend/img/logo.png')}}"></p></center>
            <center>  <h3><p><strong style="color:black;">
                CÔNG TY CỔ PHẦN INFORMATICS QTC
              </strong ></p></h3></center>
            </div>
              
            <div class="col-md-6">
               <div class="inqbox-content">
               <h4><center><span style="color: red"> <?php
                              $message=Session::get('message');
                              if($message)
                              {
                                 echo $message;
                                 Session::put('message',null);
                              }
                            ?></span></center> </h4>
                  <form class="m-t" role="form" action="{{URL::to('login-customer')}}">
                     <div class="form-group">
                        <input type="text" class="form-control" id="username_customer" placeholder="Số điện thoại" required="">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" id="password_customer" placeholder="Mật khẩu" required="">
                     </div>
                  <a onClick="type_modal(1)" id="Forgot_password" >Quên mật khẩu ?</a>  
                  
                  <button id="change_password" data-toggle="modal"  hidden data-target="#myModal6"></button>
                  <button id="registration_customer" data-toggle="modal" hidden data-target="#myModal6"></button>
      
                     <hr>
                     <button type="button" onClick="customer_login()" class="btn btn-primary block full-width m-b"> Đăng nhập </button>
                       
                  </form>

                   <p>Bạn không có tài khoản, <a onClick="type_modal(2)"  >Đăng ký</a></p>
                    
               </div>
            </div>
         </div>
      <hr/>  
      </div>
   {{-- ---------------------- modal nhập sdt xác minh ----------------- --}}
      <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h3><strong style="color:black">Số điện thoại của bạn là gì ? </strong></h3>
               </div>
               <div class="modal-body">
                  
            <label>Nhập số điện thoại</label>
            <form>
                <input type="text" id="numberrr" class="form-control"  placeholder="84+">
                <small class="text-danger" id="er_phone_used"></small>

                <div id="recaptcha-container"></div>
                <button class="btn btn-primary btn-sm" type="button" onclick="phoneAuth()">Gửi mã</button>
            </form>
            <br>
            <label>Nhập mã điện thoại (mã được gửi về số điện thoại của bạn)</label>
            <input type="text" id="verificationCode" class="form-control" placeholder="Nhập mã">

               </div>   
               <div class="modal-footer" id="btn_sms">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
                  <button type="button" onClick="codeverify()" class="btn btn-primary" >Tiếp tục</button>
                  <button hidden id="show_modal_info" data-toggle="modal" data-target="#registration_customer">Tiếp tục</button>
               </div>
            </div>
         </div>
      </div>
{{--  -------------------------------------------------------------  --}}
{{--  đăng ký tông tin  --}}
         <div class="modal inmodal fade" id="registration_customer" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h5 class="modal-title"><strong style="color:black"> Nhập thông tin cá nhân</strong></h5>
               </div>
               <div class="modal-body">
                  <form>
                     <strong style="color:#10ABFE">Tên đầy đủ</strong>:<br>
                     <input type="text" id="reg_name" placeholder="Tên đầy đủ" class="form-control" ><br>
                     <strong style="color:#10ABFE">Địa chỉ</strong>:<br>
                     <input type="text" id="reg_address" placeholder="Địa chỉ" class="form-control" >
                     <strong style="color:#10ABFE">Email</strong>:<br>
                     <input type="text" id="reg_email" placeholder="Email" class="form-control" ><br>
                     <strong style="color:#10ABFE">Mật khẩu</strong>:<br>
                     <input type="password"  onkeyup="checkPass()" id="new_password" placeholder="Mật khẩu" class="form-control" >
                     <strong style="color:#10ABFE">Nhập lại mật khẩu</strong>:<br>
                     <input type="password"  onkeyup="checkPass()" id="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control" ><br>
                     <div><strong  id="error-nwl" style="color:red"></strong></div>
                  </form>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Quay lại</button>
                  <button type="button" onClick="registration_customer()" class="btn btn-primary">Đăng ký</button>
               </div>
            </div>
         </div>
      </div>
{{--  -------------------------------------------------------------  --}}
{{--  Quên mật khẩu--}}
   
         <div class="modal inmodal fade" id="Forgot_password_modal" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h3><strong style="color:black">Số điện thoại của bạn là gì ? </strong></h3>
               </div>
               <div class="modal-body">
                  
            <label>Nhập số điện thoại</label>
            <form>
   
                <input type="text" id="numberrr" class="form-control"  placeholder="84+">
                <small class="text-danger" id="er_phone_used"></small>

                <div id="recaptcha-container"></div>
                <button class="btn btn-primary btn-sm" type="button" onclick="phoneAuth()">Gửi mã</button>
            </form>
            <br>
            <label>Nhập mã điện thoại (mã được gửi về số điện thoại của bạn)</label>
            <input type="text" id="verificationCode" class="form-control" placeholder="Nhập mã">

               </div>   
               <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
                  <button type="button" onClick="codeverify()" class="btn btn-primary" >Tiếp tục</button>
                  <button hidden id="show_modal_info" data-toggle="modal" data-target="#registration_customer">Tiếp tục</button>
               </div>
            </div>
         </div>
      </div>
{{--  -------------------------------------------------------------  --}}
{{-- đỏi mật khẩu  --}}
         <div class="modal inmodal fade" id="change_password" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h5 class="modal-title"><strong style="color:black"> Đổi mật khẩu</strong></h5>
               </div>
               <div class="modal-body">
                  <form>
                      <strong style="color:#10ABFE">Mật khẩu</strong>:<br>
                     <input type="password"  onkeyup="checkPass()" id="new_password" placeholder="Mật khẩu" class="form-control" >
                     <strong style="color:#10ABFE">Nhập lại mật khẩu</strong>:<br>
                     <input type="password"  onkeyup="checkPass()" id="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control" ><br>
                     <div><strong  id="error-nwl" style="color:red"></strong></div>
            
                  </form>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Quay lại</button>
                  <button type="button" class="btn btn-primary">Cập nhật</button>
               </div>
            </div>
         </div>
      </div>
{{--  -------------------------------------------------------------  --}}
      

   </body>
 
    <script src="{{ asset('backend/customer-js/customer_local.js') }}"></script>
    <script src="{{ asset('backend/customer-js/account_customer.js') }}"></script>


   <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>



   <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-analytics.js"></script>

   <script>

   var firebaseConfig = {
      apiKey: "AIzaSyD0D5zo0ix6jznGnWFH0NSbS-kSvhzYTC4",
      authDomain: "hospital-booking-6ccc1.firebaseapp.com",
      projectId: "hospital-booking-6ccc1",
      storageBucket: "hospital-booking-6ccc1.appspot.com",
      messagingSenderId: "426700145474",
      appId: "1:426700145474:web:261b2b6e0ed9e6735e3edb",
      measurementId: "G-SJSWKTJ5T3"
   };
   // Initialize Firebase
   firebase.initializeApp(firebaseConfig);
   firebase.analytics();
   </script>


  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="{{ asset('backend/js/jquery-2.1.1.js')}}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
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
  <script src="{{ asset('backend/js/plugins/chartJs/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/js/jquery-3.5.0.min.js') }}"></script>
</html>
