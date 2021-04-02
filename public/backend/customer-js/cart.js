
$(document).ready(function() {
    var output = localStorage.getItem('total_cart');
    $('#badge').html(output);

    
    list_cart();
});
function list_cart()
{
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));

    var output_cart = ``;
    if(arr_cart == null || arr_cart =='')
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
   var account_customer = JSON.parse(localStorage.getItem('account_customer'));

   if(account_customer == null || account_customer == '')
   {
        alert('Vui lòng đăng nhập để đặt lịch');
        window.location=urlserver+'login-customer';

   }
   else if( count_cart == '' || count_cart == null )
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
                            <td><strong id="customer_name" style="color:#10ABFE">${account_customer.full_name}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Số điện thoại:</strong></td>
                            <td><strong id="customer_phone" style="color:#10ABFE">${account_customer.phone_number}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                            <td><strong id="customer_address" style="color:#10ABFE">${account_customer.address}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                            <td><strong id="customer_birthday" style="color:#10ABFE">${account_customer.birthday}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                            <td><strong id="customer_sex" style="color:#10ABFE">${account_customer.sex}</strong></td>
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
            var arr_customer= JSON.parse(localStorage.getItem('customer_customer'));
            if(arr_customer == null || arr_customer == '')
            {
            output+=`

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
                    <br>
                    <br>
                    <center><h3><strong style="color:Black"> Danh sách trống </strong></h3></center>
                    </div>
                </div>
                </div>    
            </div>
            </div> `;    
            }else{
             output+=`
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
                    `;
                    arr_customer.forEach(function (item){
                    output+=`
                    <div> 

                    <table class="total_history">
                        <tr> 
                            <td><strong style="color:#10ABFE"></strong></td>
                            <td><strong ><a onClick="remove_customer(${item.id_customer})" style="color:red"><i class="fa fa-close"></i></a></strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE">Họ & Tên</strong></td>
                            <td><strong style="color:#10ABFE">${item.customer_name}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE">Số điện thoại:</strong></td>
                            <td><strong style="color:#10ABFE">${item.customer_phone}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE">Địa chỉ:</strong></td>
                            <td><strong style="color:#10ABFE">${item.customer_address}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE">Ngày sinh:</strong></td>
                            <td><strong style="color:#10ABFE">${item.customer_birthday}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#10ABFE">Giới tính:</strong></td>
                            <td><strong style="color:#10ABFE">${item.customer_sex}</strong></td>
                        </tr>
                    </table>
                        <p>Tiểu sử(nếu có):</p>
                        <textarea rows="3" readonly cols="50">${item.customer_prehistoric}</textarea>
                    </div>
                    <hr>`;
                });
                    output+=`

                    <button type="button" onClick="help_booking_history_again()" class="btn btn-danger btn-sm btn-block">Xem lại lịch đặt khám</button> 
                    </div>
                </div>
                </div>
            </div>
        </div>`;
            }
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
                <h2><a onclick="form_profile_cart()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><strong style="color:#10ABFE"> Khám hộ </strong></h2>
            </div>
            </div>
            <div class="client-detail">
            <div class="full-height-scroll">
                
                <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                
                <h3><strong style="color:Black">Thông tin người đặt </strong></h3>
                <div>
                <form>
                <strong style="color:#10ABFE"> Họ và tên (*):</strong><br>
                <input type="text" id="customer_name_form" placeholder=" Họ và tên" class="form-control" ><br>
                <strong style="color:#10ABFE"> Ngày sinh (*):</strong><br>
                <input type="date" id="customer_birdth_form" placeholder="Ngày sinh" class="form-control" ><br>
                <strong style="color:#10ABFE"> Giới tính (*):</strong><br>
                <select id="customer_sex_form" class="form-control" >
                    <option value='male'>Nam</option>
                    <option value='female'>Nữ</option>
                </select>
                <br>
                <strong style="color:#10ABFE"> Số điện thoại (*):</strong><br>
                <input type="text" id="customer_phone_form" placeholder="Số điện thoại" class="form-control" ><br>
                <strong style="color:#10ABFE"> Địa chỉ(*):</strong><br>
                <input type="text"  id="customer_address_form" placeholder="Địa chỉ" class="form-control" ><br>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" id="customer_prehistoric_form" cols="50" placeholder="Nội dung..."></textarea>
                </form>

                </div>
                <hr>
                <button type="button" onClick="add_customer_booking()" class="btn btn-danger btn-sm btn-block"> Hoàn tất</button>
                     
                </div>
            </div>
            </div>
        </div>
    </div>
        `;
        $('#detail_profile').html(output);
}

// thêm người khám hộ
function add_customer_booking()
{
    
    var customer_name = $('#customer_name_form').val();
    var customer_phone = $('#customer_phone_form').val();   
    var customer_sex = $('#customer_sex_form').val();
    var customer_birthday = $('#customer_birdth_form').val();
    var customer_address = $('#customer_address_form').val();
    var customer_prehistoric = $('#customer_prehistoric_form').val();
    var arr_customer_localStorage = JSON.parse(localStorage.getItem('customer_customer'));
    
    
    var arr_customer = [];
    if(customer_name== '' ||customer_phone=='' ||customer_sex==''|| customer_birthday=='' ||customer_address=='' )
    {
        alert('Vui lòng điền thông tin vào trường có kí hiệu (*) để tiếp tục');
    }else{
        if(arr_customer_localStorage == null )
        {
            arr_customer.push({
            id_customer:0,
            customer_name:customer_name,customer_phone:customer_phone,customer_birthday:customer_birthday,
            customer_address:customer_address,customer_sex:customer_sex,customer_prehistoric:customer_prehistoric
            });
            
        }else{
            var count_customer = arr_customer_localStorage.length;
            
            arr_customer_localStorage.forEach(function (item){
                arr_customer.push(item);
            });
            arr_customer.push({
            id_customer:count_customer,
            customer_name:customer_name,customer_phone:customer_phone,customer_birthday:customer_birthday,
            customer_address:customer_address,customer_sex:customer_sex,customer_prehistoric:customer_prehistoric
            });
        }
       
        localStorage.setItem('customer_customer', JSON.stringify(arr_customer));
    
        form_profile_cart();
    }
    

}
function remove_customer(id)
{
    var arr_customer= JSON.parse(localStorage.getItem('customer_customer'));
    
    var i = 0;
    arr_customer.forEach(function(item) {
        if(item.id_customer == id)
        {
            arr_customer.splice(i,1);
        }
        i++;
    });
    localStorage.setItem('customer_customer', JSON.stringify(arr_customer));
    form_profile_cart();


}
// khám cá nhân xem lại đơn khám
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
                    <td><strong style="color:#10ABFE">${customer_name}</strong></td>
                    <input type="text" hidden id="customer_name" value="${customer_name}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> SDT:</strong></td>
                    <td><strong  style="color:#10ABFE">${customer_phone} </strong></td>
                    <input type="text" hidden id="customer_phone" value="${customer_phone}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                    <td><strong  style="color:#10ABFE">${customer_address}</strong></td>
                    <input type="text" hidden id="customer_address" value="${customer_address}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                    <td><strong style="color:#10ABFE">${customer_birthday}</strong></td>
                    <input type="text" hidden id="customer_birthday" value="${customer_birthday}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                    <td><strong style="color:#10ABFE">${customer_sex} </strong></td>
                    <input type="text" hidden id="customer_sex" value="${customer_sex}" >
                </tr>
              </table>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" id="customer_prehistoric" readonly cols="50">${customer_prehistoric}</textarea>
            </div>
            <h3><strong style="color:#10ABFE"></strong></h3>
            <table class="total_history">
                <tr> 
                    <td><strong style="color:#889DFC"> Thời gian hẹn </strong></td>
                    <td><strong id="" style="color:#889DFC">${appointment_date} - ${appointment_time} 
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
                    <td><strong   style="color:#44C13C;font-size: large;">
                    <input type="text" hidden id="total_service" value="${total_service}" >
                    ${formatNumber(total_service)} VND</strong></td>
                  </tr>
                 </table>
                </div>
            </div>
            </div>
            <h3><strong style="color:Black">Phương thức thanh toán</strong> &nbsp;&nbsp;&nbsp;&nbsp <a data-toggle="modal" data-target="#type_paypal"><i class="fa fa-cc-paypal"></i> Chọn </a></h3>
            <h4 id="type_payment"></h4>
            <hr>
            <button type="button"  onclick="create_booking()" class="btn btn-danger btn-sm btn-block">Hoàn tất</button>
        </div>
    </div>
    `;
    $('#detail_profile').fadeOut().html(output);
    $('#detail_profile').fadeIn().html(output);
    }
    
    
}
// khám hộ xem lại đơn khám
function help_booking_history_again()
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
    var arr_customer = JSON.parse(localStorage.getItem('customer_customer'));
    var id_service=[];
    var id_customer=[];

    arr_customer.forEach(function(item) {
        id_customer.push(item.id_customer)
    });

    arr_cart.forEach(function(item) {
        id_service.push(item.id_service)
    });

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
            <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>`;
            var count_customer= 0;
            arr_customer.forEach(function(item) {
                count_customer++;
            output+=`
            <div>
              <table class="total_history">
                <tr> 
                    <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                    <td><strong style="color:#10ABFE">${item.customer_name}</strong></td>
                    <input type="text" hidden id="customer_name" value="${item.customer_name}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> SDT:</strong></td>
                    <td><strong  style="color:#10ABFE">${item.customer_phone} </strong></td>
                    <input type="text" hidden id="customer_phone" value="${item.customer_phone}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                    <td><strong  style="color:#10ABFE">${item.customer_address}</strong></td>
                    <input type="text" hidden id="customer_address" value="${item.customer_address}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Ngày sinh:</strong></td>
                    <td><strong style="color:#10ABFE">${item.customer_birthday}</strong></td>
                    <input type="text" hidden id="customer_birthday" value="${item.customer_birthday}" >
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                    <td><strong style="color:#10ABFE">${item.customer_sex} </strong></td>
                    <input type="text" hidden id="customer_sex" value="${item.customer_sex}" >
                </tr>
              </table>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" id="customer_prehistoric" readonly cols="50">${item.customer_prehistoric}</textarea>
            </div>`;
            });
            output+=`
            <h3><strong style="color:#10ABFE"></strong></h3>
            <table class="total_history">
                <tr> 
                    <td><strong style="color:#889DFC"> Thời gian hẹn </strong></td>
                    <td><strong id="" style="color:#889DFC">${appointment_date} - ${appointment_time} 
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
                        <td><strong style="color:#10ABFE"> X ${count_customer} </strong></td>
                    </tr>
                </table>`;
            output+=`      
                <hr>
                <table class="total_history">
                  <tr> 
                    <td><strong  style="color:#44C13C;font-size: large;">  Tổng tiền:</strong></td>
                    <td><strong   style="color:#44C13C;font-size: large;">
                    <input type="text" hidden id="total_service" value="${total_service}" >
                    ${formatNumber(total_service * count_customer )} VND</strong></td>
                  </tr>
                 </table>
                </div>
            </div>
            </div>
            <h3><strong style="color:Black">Phương thức thanh toán</strong> &nbsp;&nbsp;&nbsp;&nbsp <a data-toggle="modal" data-target="#type_paypal"><i class="fa fa-cc-paypal"></i> Chọn </a></h3>
            <h4 id="type_payment"></h4>
            <hr>
            <button type="button"  onclick="help_create_booking()" class="btn btn-danger btn-sm btn-block">Hoàn tất</button>
        </div>
    </div>
    `;
    $('#detail_profile').fadeOut().html(output);
    $('#detail_profile').fadeIn().html(output);
    }
}
// khám hộ đặt lịch
function help_create_booking()
{

    // var customer_name = $('#customer_name').val();
    // var customer_phone = $('#customer_phone').val();
    // var customer_sex = customer_sex_fill_info($('#customer_sex').val());
    // var customer_birthday = $('#customer_birthday').val();
    // var customer_prehistoric = $('#customer_prehistoric').val();
    // var customer_address = $('#customer_address').val();
    var customer_name=[];
    var customer_phone=[];
    var customer_sex=[];
    var customer_birthday=[];
    var customer_prehistoric=[];
    var customer_address=[];

    var appointment_date = $('#appointment_date').val();
    var appointment_time = $('#appointment_time').val();
    var booking_type = $('#type_cars').val();
    var payment_type = $('#payment_type').val();
    
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));
    

    var arr_customer = JSON.parse(localStorage.getItem('customer_customer'));

    var id_service=[]; 
    var service_price = []; // lấy ra list dịch vụ 

    arr_cart.forEach(function(item) {
        id_service.push(item.id_service);
        service_price.push(item.service_price);
    });

    var customer_address_string='';
    var dem = 0;
    arr_customer.forEach(function(item) {
        dem++
        if(dem == 1)
        {
          customer_address_string = item.customer_address;
        }
        customer_name.push(item.customer_name);
        customer_phone.push(item.customer_phone);
        customer_sex.push(item.customer_sex);
        customer_birthday.push(item.customer_birthday);
        customer_prehistoric.push(item.customer_prehistoric);
        customer_address_string+='|'+item.customer_address;
    });
    // console.log(customer_name.toString());
    // console.log(customer_phone.toString());
    // console.log(customer_sex.toString());
    // console.log(customer_birthday.toString());
    // console.log(customer_prehistoric.toString());
    // console.log(customer_address_string);
    // console.log('---------------------------------------');
    // console.log(id_service.toString());
    // console.log(payment_type);
    // console.log(service_price.toString());
    // console.log(appointment_date);
    // console.log(appointment_time);

    if(typeof payment_type=='undefined')
    {
        alert('Vui lòng chọn phương thức thanh toán')
    }else{
    $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect: 'create_booking',booking_code:'',
            id_customer:31,booking_type:booking_type ,customer_address:customer_address_string,
            customer_birthday:customer_birthday.toString(),customer_prehistoric:customer_prehistoric.toString(),
            customer_sex:customer_sex.toString(),customer_name:customer_name.toString(),customer_phone:customer_phone.toString(),
            date_schedule:appointment_date,time_schedule:appointment_time,payment_type:payment_type,
            service_price:service_price.toString(),id_service:id_service.toString(),
            },
            dataType: 'json',
            headers: headers,
            success: function(response) 
            {
                alert(response.message);
            }
        });

    }
   
}
//khám cá nhân
function create_booking()
{

    var booking_type = $('#type_cars').val();
    var customer_name = $('#customer_name').val();
    var customer_phone = $('#customer_phone').val();
    var customer_sex = customer_sex_fill_info($('#customer_sex').val());
    var customer_birthday = $('#customer_birthday').val();
    var customer_address = $('#customer_address').val();
    var appointment_date = $('#appointment_date').val();
    var appointment_time = $('#appointment_time').val();
    var customer_prehistoric = $('#customer_prehistoric').val();
    var payment_type = $('#payment_type').val();
    var arr_cart = JSON.parse(localStorage.getItem('service_service'));
    var id_service=[];

    var service_price = [];

    arr_cart.forEach(function(item) {
        id_service.push(item.id_service);
        service_price.push(item.service_price);
    });
    
    if(typeof payment_type=='undefined')
    {
        alert('Vui lòng chọn phương thức thanh toán')
    }else{
    $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect: 'create_booking',booking_code:'',
            id_customer:31,booking_type:booking_type ,customer_address:customer_address,
            customer_name:customer_name,customer_phone:customer_phone,customer_sex:customer_sex,
            customer_birthday:customer_birthday,date_schedule:appointment_date,
            time_schedule:appointment_time,customer_prehistoric:customer_prehistoric,
            service_price:service_price.toString(),payment_type:payment_type,
            id_service:id_service.toString(),
            },
            dataType: 'json',
            headers: headers,
            success: function(response) 
            {
                alert(response.message);
            }
        });

        // console.log(customer_address);
        // console.log(booking_type);
        // console.log(customer_name);
        // console.log(customer_phone);
        // console.log(customer_sex);
        // console.log(customer_birthday);  
        // console.log(appointment_date);
        // console.log(appointment_time);
        // console.log(customer_prehistoric);
        // console.log(service_price.toString());
        // console.log(payment_type);
        // console.log(id_service.toString());
    }
   

}
function cash_in_hand()
{
    var output= `
    <center><img alt="" height="250px" width="230px" src="../backend/icon/img_paypal.svg"> </center>
    <center><h2><strong style="color:orange"> Lưu ý :</strong></h2></center>
    <input type="text" hidden value="1">
    <p style="color:black">Đối với khách hàng thanh toán trực tiếp tại bệnh viện chúng tôi sẽ hỗ trợ đặt lịch khám cho khách hàng. Tuy nhiên số thứ tự khám bệnh sẽ được cấp sau khi khách hàng thanh toán chi phí khám cho bệnh viện. </p>
    `;
    $('#img_type_pay').html(output);
    var btn =`<button type="button" data-dismiss="modal" id="insert_service" onClick="select_type_payment(1)" class="btn btn-danger">Chọn ngay</button>
    <button type="button" class="btn btn-default" data-dismiss="modal"> Đóng </button>`;
    $('.modal-footer').html(btn);
}
function online_payment()
{
    var output= ``;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'get_bank_transfer_info' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            output += `
            <center><img alt="" height="250px" width="230px" src="../backend/icon/img_paypal.svg"> </center>
            <center><h2><strong style="color:orange"> Lưu ý :</strong></h2></center>
            <p style="color:black">Đối với khách hàng thanh toán chuyển khoản trước, chúng tôi sẽ hỗ trợ thanh toán với bệnh viện và hỗ trợ quý khách nhận số thứ tự ưu tiên trước, khách hàng chỉ việc đến và khám theo lịch trình. ( Lưu ý bên công ty không thu thêm bất kỳ khoản nào của khách hàng. Các khoản tiền đều sẽ có biên lai rõ ràng của bệnh viện. ) </p>
            <br>
            <h3><strong style="color:black"> Thông tin chuyển khoản :</strong></h3>
            <input type="text" hidden value="2">
            <p style="color:black">- ${response.data[0].account_bankname} </p>
            <p style="color:black">- Số tài khoản ${response.data[0].account_no}</p>
            <p style="color:black">- Tên tài khoản ${response.data[0].account_holder}</p>
            `;
            $('#img_type_pay').html(output);
            var btn =`<button type="button" data-dismiss="modal" id="insert_service" onClick="select_type_payment(2)" class="btn btn-danger">Chọn ngay</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> Đóng </button>`;
            $('.modal-footer').html(btn);
        }
        
    });
    
    
}
function select_type_payment(id)
{
    var output = select_payment_type(id);
    $('#type_payment').html(output);
}