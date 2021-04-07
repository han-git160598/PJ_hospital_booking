var arr_booking_history = [];
var customer = JSON.parse(localStorage.getItem('account_customer'));
$(document).ready(function() {
    count_cart = localStorage.getItem('total_cart');
    $('#badge').html(count_cart);

    if (customer == null) {
        var r = confirm('Vui lòng đăng nhập để xem lịch sử khám của bạn');
        if (r == true) {
            window.location = urlserver + 'login-customer';
        }

    } else {
        let i = 0;
        $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect: 'list_booking_history', limit: '100', id_customer: customer.id },
            dataType: 'json',
            headers: headers,
            success: function(response) {

                if (response.data == '') {
                    alert('Chưa có lịch sử khám')
                } else {
                    var output = ``;
                    response.data.forEach(function(item) {
                        arr_booking_history.push(item);

                        output += `
                        <tr>
                        <th style="30px"></th>
                        <td>${item.booking_code}</  td>
                        <td>${item.booking_date}</td>
                        <td>${item.booking_service[0].service_title}...</td>
                        <td colspan="2">
                            <center><button onClick="detail_booking_history(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button></center>
                        </td>
                        </tr>`;
                        i++;
                    });
                }

                $('#list_booking_history').html(output);
            }
        });
    }
});

function detail_booking_history(data) {
    var item = arr_booking_history[data];
    var output = ` 
    <div class="tab-content">
    <div id="contact-1" class="tab-pane active">
        <div class="row m-b-lg" >
        <div class="col-lg-12 text-center">
            <h2><strong style="color:#10ABFE"> ${billing_type(item.booking_type)}</strong></h2>
        </div>
        </div>
        <div class="client-detail">
        <div class="full-height-scroll">
            
           
            <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                
                <table class="total_history">
                    <tr> 
                        <td><strong style="color:#000000"> Trạng thái:</strong></td>
                        <td><strong style="color:#000000"> ${booking_status_number(item.booking_status)}</strong></td>
                    </tr>
                    <tr> 
                        <td><strong style="color:#44C13C"> Mã đơn hàng :</strong></td>
                        <td><strong style="color:#44C13C"> ${item.booking_code}</strong></td>
                    </tr>
                  
                    <tr> 
                        <td><strong style="color:#10ABFE"> Thời gian hẹn:</strong></td>
                        <td><strong style="color:#10ABFE"> ${item.booking_date} - ${item.booking_time}</strong></td>
                    </tr>
                </table>
                <h3><strong style="color:Black">Kết quả xét nghiệm: </strong></h3>`;
    if (item.booking_type == 4) {
        // img resutl
        var img = ``;
        item.booking_result.forEach(function(param) {
            img += `
    <img alt="" height="200" width="99%" src="../${param.image_upload}">
    <hr>
    `;
        });
        $('#list_img_result').html(img);

        output += `
                <div id="img_result">
                <a data-toggle="modal" data-target="#img_result_modal" ><img alt="" height="150" width="99%" src="../${item.booking_result[0].image_upload}">
                <span> + ${item.booking_result.length}</span></a>
                </div>
                `;
    } else {
        output += `<center><h4><strong style="color:red">Chưa có kết quả </strong></h4></center>`;
    }
    item.booking_customer.forEach(function(param) {

        output += `
            <h3><strong style="color:Black">Thông tin cá nhân: </strong></h3>
            <div>
              <table class="total_history">
                <tr> 
                    <td><strong style="color:#10ABFE"> Họ & Tên</strong></td>
                    <td><strong style="color:#10ABFE"> ${param.customer_name}</strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> SDT:</strong></td>
                    <td><strong style="color:#10ABFE"> ${param.customer_phone} </strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Địa chỉ:</strong></td>
                    <td><strong style="color:#10ABFE"> ${param.customer_address}</strong></td>
                </tr>
                <tr> 
                    <td><strong style="color:#10ABFE"> Giới tính:</strong></td>
                    <td><strong style="color:#10ABFE"> ${customer_sex(param.customer_sex)} </strong></td>
                </tr>
              </table>
                <p>Tiểu sử(nếu có):</p>
                <textarea rows="6" cols="50">${param.customer_prehistoric}</textarea>
            </div>`;
    });
    output += ` <h3><strong style="color:Black">Thông tin dịch vụ khám: </strong></h3>
               <table  id="detail_service_packet">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Dịch vụ</th>
                        <th>Giá</th>
                    </tr>
                </thead >
                
                <tbody>`;

    var total_service = 0;
    var dem_service = 1;
    item.booking_service.forEach(function(param) {
        output += `
                    <tr>
                        <td>${dem_service++}</td>
                        <td> 
                        <p>${param.service_title}</p>
                        <p>${param.service_content}</p>
                        </td>
                        <td>${(param.service_price)} VND</td>
                    </tr>`;
        total_service += parseInt(param.service_price);
    });

    output += `
                </tbody>
               </table>

               <table class="total_history">
                    <tr> 
                        <td><strong style="color:#000000"> Thành tiền:</strong></td>
                        <td><strong style="color:#000000"> ${(total_service)} VND</strong></td>
                    </tr>
                    <tr> 
                        <td><strong style="color:#10ABFE"> Người khám :</strong></td>
                        <td><strong style="color:#10ABFE"> X1 </strong></td>
                    </tr>
                  
                    <tr> 
                        <td><strong style="color:#44C13C"> Tổng tiền dịch vụ ban đầu:</strong></td>
                        <td><strong style="color:#44C13C"> ${(total_service)} VND</strong></td>
                    </tr>
                </table>`;
    var total_actually = 0;
    var into_money_service = 0;
    if (item.booking_actually != '') {
        output += `
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
                <tbody>`;


        item.booking_actually.forEach(function(param) {
            into_money_service += parseInt(param.service_price);
            total_actually += into_money_service;
            output += `
                    <tr>
                        <td>${param.service_title}</td>
                        <td>${param.service_price}</td>
                        <td>${param.service_quantity}</td>
                        <td>${into_money_service}</td>
                    </tr>`;
        });
        output += `      
                </tbody>
               </table>

               <table class="total_history">
                    <tr> 
                        <td><strong style="color:#44C13C"> Tổng phát sinh:</strong></td>
                        <td><strong style="color:#44C13C"> ${(total_actually)} VND</strong></td>
                    </tr>
                </table>`;
    }
    output += `      
                <hr>
                <table class="total_history">
                  <tr> 
                    <td><strong  style="color:#44C13C;font-size: large;">  Tổng tiền:</strong></td>
                    <td><strong  style="color:#44C13C;font-size: large;"> ${(total_actually+total_service)} VND</h2></strong></td>
                  </tr>
                 </table>
                <hr>
                  <h3><strong style="color:Black">Phương thức thanh toán </strong></h3>`;
    if (item.payment_type == 1) {
        output += `<h5> <span style="color:blue;"><i><img src="../backend/icon/cash in hand.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí tại bệnh viện.svg"></i> </span></h5>    `;
    } else {
        output += `<h5> <span style="color:blue;"><i><img src="../backend/icon/online payment.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí qua chuyển khoản.svg"></i> </span></h5>
                <img alt="" height="200px" width="99%" src="${item.payment_image}">    `;
    }
    output += `
                </div>
            </div>
            </div>
        </div>
    </div>
    `;
    $('#detail_booking_history').fadeOut().html(output);
    $('#detail_booking_history').fadeIn().html(output);
}

function search_service_service() {
    var key_service_packet = $('#key_service_packet').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_service_packet', filter: key_service_packet, limit: '20' },
        dataType: 'json',
        headers: headers,
        success: function(response) {
            var output = ``;
            response.data.forEach(function(item) {
                output += `
            <tr>
                <th style="30px"></th>
                <td>${item.service_title}</td>
                <td >${item.service_content}</td>
                <td>${(item.service_price)} VND</td>
                <td colspan="2"><center>

                <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
            </tr>`;
            });
            $('#list_service_service').html(output);
        }
    });
}

function filter_history() {
    var favDialog = document.getElementById('filter_history');
    favDialog.showModal();
}

function filter_booking_history() {
    var status_booking = $('#status_booking').val();
    var type_customer = $('#type_customer').val();
    var finish_time_booking = $('#finish_time_booking').val();


    let i = 0;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: {
            detect: 'list_booking_history',
            date_option: '',
            booking_status: status_booking,
            booking_type: type_customer,
            limit: '20',
            id_customer: customer.id
        },
        dataType: 'json',
        headers: headers,
        success: function(response) {

            if (response.data == '') {
                alert('Không tìm thấy yêu cầu')
            } else {
                var output = ``;
                response.data.forEach(function(item) {
                    arr_booking_history.push(item);
                    output += `
                    <tr>
                    <th style="30px"></th>
                    <td>${item.booking_code}</  td>
                    <td>${item.booking_date}</td>
                    <td>${item.booking_service[0].service_title}...</td>
                    <td colspan="2">
                        <center><button onClick="detail_booking_history(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button></center>
                    </td>
                    </tr>`;
                    i++;
                });
            }

            $('#list_booking_history').html(output);
        }
    });

}