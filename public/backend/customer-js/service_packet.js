var arr_service_packet = [];
var count_cart = 0;
var arr_cart = [];
var arr_id_packet = [];
$(document).ready(function() {

    list_service_packet();
    count_cart = localStorage.getItem('total_cart');

    $('#badge').html(count_cart);
});

function list_service_packet() {
    var tam = "";
    let i = 0;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_service_packet', limit: '200' },
        dataType: 'json',
        headers: headers,
        success: function(response) {
            var output = ``;
            response.data.forEach(function(item) {
                arr_service_packet.push(item);
                output += `
                <tr>
                    <td style="width:50%"> <img alt="image" width="18px" height="18px"  src="../backend/icon/service_packet.svg"> ${item.service_packet_title}</td>
                    <td style="width:20%">${formatNumber(item.service_packet_total)} VND</td>
                    <td style="width:30%" colspan="2">
                        <center><a href="#detail_service_packet_data" onClick="detail_service_packet(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </a>
                        <button onClick="add_cart(${i})" class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center>
                    </td>
                </tr> `;
                i++;
            });
            $('#list_service_packet').html(output);
        }
    });
}

function detail_service_packet(data) {
    var item = arr_service_packet[data];
    var output = ` <div class="tab-content">
    <div id="contact-1" class="tab-pane active">
        <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
            <h2><strong style="color:#10ABFE"> ${item.service_packet_title} </strong></h2>
        </div>
        </div>
        <div class="client-detail">
        <div class="full-height-scroll">
            <strong style="color:#FF5722">1. Mô tả:</strong>
                <p>
                ${item.service_packet_content}
                </p>
            <hr/>
            <strong style="color:#FF5722">2. Chi tiết về gói khám sức khỏe nâng cao:</strong>
            <div  class="vertical-container dark-timeline" style="width:100%;height:450px; overflow: auto;">
                <table  id="detail_service_packet">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Dịch vụ</th>
                        <th>Giá</th>
                    </tr>
                </thead >
                <tbody>`;
    var dem = 1;
    item.packet_detail.forEach(function(item1) {
        output += `        
                    <tr>
                        <td>${dem++}</td>
                        <td>
                        <p>${item1.service_title}</p>
                        <p>${item1.service_content} </p>
                        </td>
                        <td>${formatNumber(item1.service_price)}</td>
                    </tr>`;
    });
    output += ` 
                </tbody>
                </table>
                
            </div>
        </div>
        <hr>
        
        <table class="total_service_packet">
            <tr> 
                <td><strong style="color:#44C13C"> Tổng tiền:</strong></td>
                <td><strong style="color:#44C13C"> ${formatNumber(item.service_packet_total)} VND</strong></td>
            </tr>
        </table>
    
        </div>
<hr>
<button type="button" onClick="add_cart(${data})" class="btn btn-danger btn-sm btn-block">Đặt khám</button>
    </div>
</div>`;

    $('#detail_service_packet_data').fadeOut().html(output);
    $('#detail_service_packet_data').fadeIn().html(output);
}

function search_service_packet() {
    let i = 0;
    arr_service_packet = [];
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
                arr_service_packet.push(item);
                output += `
                <tr>
                    <td style="width:50%"> <img alt="image" width="18px" height="18px"  src="../backend/icon/service_packet.svg"> ${item.service_packet_title}</td>
                    <td style="width:20%">${formatNumber(item.service_packet_total)} VND</td>
                    <td style="width:30%" colspan="2">
                        <center><a href="#detail_service_packet_data" onClick="detail_service_packet(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </a>
                        <button onClick="add_cart(${i})" class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center>
                    </td>
                </tr> `;

                i++;
            });
            $('#list_service_packet').html(output);
        }
    });
}

function add_cart(data) {
    var count_cart = 0;
    var flag = 0;
    var item = arr_service_packet[data];
    var arr_service = [JSON.parse(localStorage.getItem('service_service'))];
    var arr_packet = JSON.parse(localStorage.getItem('service_packet'));
    //  arr_id_packet = JSON.parse(localStorage.getItem('service_packet'));



    if (arr_packet == null) {
        item.packet_detail.forEach(function(item1) {
            arr_cart.push(item1);
        });
        arr_id_packet.push(item.service_packet_id);


        localStorage.setItem('service_packet', JSON.stringify(arr_id_packet));
        localStorage.setItem('service_service', JSON.stringify(arr_cart));

        arr_service_count = JSON.parse(localStorage.getItem('service_service'));
        arr_service_count.forEach(function(item1) {
            count_cart++;
        });
        localStorage.setItem('total_cart', JSON.stringify(count_cart));

    } else {
        // arr_packet.forEach(function(cart) {
        //     if(cart == item.service_packet_id)
        //     {
        //         alert('Dịch vụ này đã tốn tại trong giỏ hàng của bạn')
        //         flag = 1;
        //     }
        // });
        if (flag == 0) {
            arr_service[0].forEach(function(service) {
                arr_cart.push(service);
            });
            item.packet_detail.forEach(function(item1) {
                arr_cart.push(item1);
            });
            const key = 'id_service';

            const unique = [...new Map(arr_cart.map(item => [item[key], item])).values()]

            arr_id_packet = JSON.parse(localStorage.getItem('service_packet'));

            arr_id_packet.push(item.service_packet_id);

            localStorage.setItem('service_packet', JSON.stringify(arr_id_packet));
            localStorage.setItem('service_service', JSON.stringify(unique));

        }

        arr_service_count = JSON.parse(localStorage.getItem('service_service'));
        arr_service_count.forEach(function(item1) {
            count_cart++;
        });
        localStorage.setItem('total_cart', JSON.stringify(count_cart));
    }
    $('#badge').html(count_cart);

}