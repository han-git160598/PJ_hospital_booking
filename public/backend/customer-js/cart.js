
$(document).ready(function() {
    var output = localStorage.getItem('total_cart');
    $('#badge').html(output);

    
    list_cart();
});
function list_cart()
{
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));

    var output_cart = ``;
    if(arr_cart == null)
    {
        output_cart +=` 
        <tr>
            <td colspan="4"><center><h2 style="color:red">Vui lòng chọn dịch vụ</h2></center></td>
        </tr>`;
   
        $('#list_cart').html(output_cart);
    }else{
        var total_service_price = 0;
        arr_cart.forEach(function(cart) {
        output_cart +=` 
        <tr>
            <th style="30px"></th>
            <td style="width:40%">${cart.service_title}</td>
            <td>${formatNumber(cart.service_price)} VND</td>
            <td colspan="2"><a onClick="remove_service(${cart.id_service})"><center><i class="fa fa-remove"></i> </a></center></td>
        </tr>`;
        total_service_price+=Number(cart.service_price);
        });

    $('#list_cart').html(output_cart);
    $('#total_service_price').html(formatNumber(total_service_price +'  ' + 'VND'));
    }
}
function remove_service(id)
{
    var count_cart =localStorage.getItem('total_cart');
    if(count_cart < 0)
    {
        count_cart=1;
        localStorage.setItem('total_cart', JSON.stringify(count_cart));
    }
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));
    var i = 0;
    arr_cart.forEach(function(item) {
        
        if(item.id_service == id)
        {
            arr_cart.splice(i,1);
        }
        i++;

    });
    localStorage.setItem('service_service', JSON.stringify(arr_cart));
    count_cart--;
    localStorage.setItem('total_cart', JSON.stringify(count_cart));
    $('#badge').html(count_cart);
    list_cart();
    
}
function form_profile_cart()
{
   var a = $('#type_cars').val();
   var count_cart = JSON.parse(localStorage.getItem('service_service'));
   if( count_cart == '' )
   {
       alert('Bạn chưa chọn dịch vụ nào');
   }else{
        if(a == 1)
        {
            var output=`
            <div class="tab-content">
            <div id="contact-1" class="tab-pane active">
                <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <h2><strong style="color:#10ABFE"> Khám cá nhân </strong></h2>
                </div>
                </div>
                <div class="client-detail">
                <div class="full-height-scroll">
                    <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                    <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>
                    <div>
                    <table class="total_history">
                        <tr> 
                            <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                            <td><strong id="customer_name" style="color:#10ABFE"> Ng Gia Hân</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Số điện thoại:</strong></td>
                            <td><strong id="customer_phone" style="color:#10ABFE"> 0123456789 </strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                            <td><strong id="customer_address" style="color:#10ABFE"> D2, Bình Thạch, tp.HCM </strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                            <td><strong id="customer_birthday" style="color:#10ABFE"> 10/11/2021</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                            <td><strong id="customer_sex" style="color:#10ABFE"> Nam </strong></td>
                        </tr>
                    </table>
                    
                    <table>
                        <tr> 
                            <td> <strong style="color:#10ABFE">1. Ngày hẹn:</strong></td>
                            <td> <input id="appointment_date" type="date" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td> <strong style="color:#10ABFE">2. Giờ hẹn:</strong></td>
                            <td> <input id="appointment_time" type="time" class="form-control"></td>
                        </tr>
                    </table>
                        <p>Tiểu sử(nếu có):</p>
                        <textarea id="customer_prehistoric" rows="6" cols="50"></textarea>
                    </div>
                        <hr>
                        <button type="button"  onclick="booking_history_again()" class="btn btn-danger btn-sm btn-block">Xem lại lịch đặt khám</button> 
                    </div>
                </div>
                </div>
            </div>
        </div> `;
        $('#detail_profile').html(output);
        }else{
            var output=`
            <div class="tab-content">
            <div id="contact-1" class="tab-pane active">
                <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <h2><strong style="color:#10ABFE"> Khám hộ </strong></h2>
                </div>
                </div>
                <div class="client-detail">
                <div class="full-height-scroll">
                    <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                    <button type="button" onClick="fill_in_information()" class="btn btn-warning btn-sm btn-block">Thêm người khám hộ</button>
                    <h3><strong style="color:Black">Danh sách khách hàng: </strong></h3>
                    <div>
                    <table class="total_history">
                        <tr> 
                            <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                            <td><strong style="color:#10ABFE"> Ng Gia Hân</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Số điện thoại:</strong></td>
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

                        <p>Tiểu sử(nếu có):</p>
                        <textarea rows="6" cols="50"></textarea>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-danger btn-sm btn-block">Xem lại lịch đặt khám</button> 
                    </div>
                </div>
                </div>
            </div>
        </div>
            `;
            $('#detail_profile').html(output);
        }
    }
}
function fill_in_information()
{
    var output=`
        <div class="tab-content">
        <div id="contact-1" class="tab-pane active">
            <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <h2><strong style="color:#10ABFE"> Khám hộ </strong></h2>
            </div>
            </div>
            <div class="client-detail">
            <div class="full-height-scroll">
                
                <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                <a onclick="form_profile_cart()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>
                <div>
                <form>
                <strong style="color:#10ABFE"> Họ và tên (*) :</strong><br>
                <input type="text" placeholder=" Họ và tên" class="form-control" ><br>
                <strong style="color:#10ABFE"> Ngày sinh (*) : :</strong><br>
                <input type="date" placeholder="Ngày sinh" class="form-control" ><br>
                <strong style="color:#10ABFE"> Giới tính (*) :</strong><br>
                <input type="text" placeholder="Giới tính" class="form-control" ><br>
                <strong style="color:#10ABFE"> Số điện thoại (*): :</strong><br>
                <input type="text" placeholder="Số điện thoại" class="form-control" ><br>
                <strong style="color:#10ABFE"> Địa chỉ(*) :</strong><br>
                <input type="text"  placeholder="Địa chỉ" class="form-control" ><br>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" cols="50" placeholder="Nội dung..."></textarea>
                </form>

                </div>
                <hr>
                <button type="button" class="btn btn-danger btn-sm btn-block">Xem lại lịch đặt khám</button>
                     
                </div>
            </div>
            </div>
        </div>
    </div>
        `;
        $('#detail_profile').html(output);
}
function booking_history_again()
{
    var booking_type = $('#type_cars').val();
    var customer_name = $('#customer_name').html();
    var customer_phone = $('#customer_phone').html();
    var customer_sex = $('#customer_sex').html();
    var customer_birthday = $('#customer_birthday').html();
    var customer_address = $('#customer_address').html();
    var appointment_date = $('#appointment_date').val();
    var appointment_time = $('#appointment_time').val();
    var customer_prehistoric = $('#customer_prehistoric').val();
    var total_service_price = $('total_service_price').html();
    
    var payment_type = $('payment_type').val();
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));
    var id_service=[];
    arr_cart.forEach(function(item) {
        id_service.push(item.id_service)
    });
    console.log(customer_address);
    console.log(booking_type);
    console.log(customer_name);
    console.log(customer_phone);
    console.log(customer_sex);
    console.log(customer_birthday);
    console.log(appointment_date);
    console.log(appointment_time);
    console.log(customer_prehistoric);
    console.log(total_service_price);
    console.log(payment_type);
    console.log(id_service.toString());
    if(appointment_time == '' || appointment_date=='' )
    {
        alert('Bạn chưa chọn thời gian hẹn')
    }
    else{

    var output =` 
    <div class="tab-content">
    <div id="contact-1" class="tab-pane active">
        <div class="row m-b-lg" >
        <div class="col-lg-12 text-center"> 
            <h2><a onclick="form_profile_cart()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><strong style="color:#10ABFE"> ${billing_type(booking_type)}</strong></h2>
        </div>
        </div>
        <div class="client-detail">
        <div class="full-height-scroll">
            
            <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
            <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>
            <div>
              <table class="total_history">
                <tr> 
                    <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                    <td><strong id="customer_name" style="color:#10ABFE"> ${customer_name}</strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> SDT:</strong></td>
                    <td><strong id="customer_phone" style="color:#10ABFE"> ${customer_phone} </strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                    <td><strong id="customer_address" style="color:#10ABFE"> ${customer_address}</strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                    <td><strong id="customer_birthday" style="color:#10ABFE"> 10/11/2021</strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                    <td><strong id="customer_sex" style="color:#10ABFE"> ${customer_sex} </strong></td>
                </tr>
              </table>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" id="customer_prehistoric" readonly cols="50">${customer_prehistoric}</textarea>
            </div>
            <h3><strong style="color:#10ABFE"></strong></h3>
            <table class="total_history">
                <tr> 
                    <td><strong style="color:#889DFC"> Thời gian hẹn </strong></td>
                    <td><strong id="" style="color:#889DFC"> ${appointment_date} - ${appointment_time} 
                    <input type="text" hidden value="${appointment_date}" id="appointment_date">
                    <input type="text" hidden value="${appointment_time}" id="appointment_time">
                    
                    </strong></td>
                </tr>
            </table>

            <h3><strong style="color:Black">Thông tin dịch vụ khám: </strong></h3>
               <table  id="detail_service_packet">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Dịch vụ</th>
                        <th>Giá</th>
                    </tr>
                </thead >
                
                <tbody>`;
                var total_service=0;
                var dem_service=1;
                arr_cart.forEach(function(param) {
                output+=`
                    <tr>
                        <td>${dem_service++}</td>
                        <td style="width:60%"> 
                        <p>${param.service_title}</p>
                        <p>${param.service_content}</p>
                        </td>
                        <td style="width:30%">${formatNumber(param.service_price)} VND</td>
                    </tr>`;
                    total_service +=parseInt(param.service_price);
                    });
                  
                output+=`
                </tbody>
               </table>

               <table class="total_history">
                    <tr> 
                        <td><strong style="color:#000000"> Thành tiền:</strong></td>
                        <td><strong style="color:#000000"> ${formatNumber(total_service)} VND</strong></td>
                    </tr>
                    <tr> 
                        <td><strong style="color:#10ABFE"> Người khám :</strong></td>
                        <td><strong style="color:#10ABFE"> X1 </strong></td>
                    </tr>
                </table>`;
            output+=`      
                <hr>
                <table class="total_history">
                  <tr> 
                    <td><strong  style="color:#44C13C;font-size: large;">  Tổng tiền:</strong></td>
                    <td><strong id="total_service_price"  style="color:#44C13C;font-size: large;"> ${formatNumber(total_service)} VND</h2></strong></td>
                  </tr>
                 </table>
                </div>
            </div>
            </div>
            <h3><strong style="color:Black">Phương thức thanh toán</strong> &nbsp;&nbsp;&nbsp;&nbsp <a data-toggle="modal" data-target="#type_paypal"><i class="fa fa-cc-paypal"></i> Chọn </a></h3>
            <hr>
            <button type="button"  onclick="create_booking()" class="btn btn-danger btn-sm btn-block">Hoàn tất</button>
        </div>
    </div>
    `;
    $('#detail_profile').fadeOut().html(output);
    $('#detail_profile').fadeIn().html(output);
    }
    
    
}
function create_booking()
{
    var booking_type = $('#type_cars').val();
    var customer_name = $('#customer_name').html();
    var customer_phone = $('#customer_phone').html();
    var customer_sex = $('#customer_sex').html();
    var customer_birthday = $('#customer_birthday').html();
    var customer_address = $('#customer_address').html();
    var appointment_date = $('#appointment_date').val();
    var appointment_time = $('#appointment_time').val();
    var customer_prehistoric = $('#customer_prehistoric').val();
    var total_service_price = $('total_service_price').html();
    
    var payment_type = $('payment_type').val();
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));
    var id_service=[];
    arr_cart.forEach(function(item) {
        id_service.push(item.id_service)
    });
    console.log(customer_address);
    console.log(booking_type);
    console.log(customer_name);
    console.log(customer_phone);
    console.log(customer_sex);
    console.log(customer_birthday);
    console.log(appointment_date);
    console.log(appointment_time);
    console.log(customer_prehistoric);
    console.log(total_service_price);
    console.log(payment_type);
    console.log(id_service.toString());
    if(payment_type=='')
    {
        alert('Vui lòng chọn phương thức thanh toán')
    }else{
    // $.ajax({
        //     url: urlapi,
        //     type: 'POST',
        //     data: { detect: 'create_booking',
        //     id_customer:31,booking_type:booking_type ,customer_address:customer_address,
        //     customer_name:customer_name,customer_phone:customer_phone,customer_sex:customer_sex,
        //     customer_birthday:customer_birthday,date_schedule:appointment_date,
        //     time_schedule:appointment_time,customer_prehistoric:customer_prehistoric,
        //     service_price:total_service_price,payment_type:payment_type,
        //     id_service:id_service.toString(),
        //     },
        //     dataType: 'json',
        //     headers: headers,
        //     success: function(response) 
        //     {

        //     }
        // });
    }
   

}