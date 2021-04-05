var arr_billing_billing=[];
$(document).ready(function() {
    // truyen them id account cho thằng sale
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    var tam="";
    let i=0;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_booking_history',limit: '100',id_customer:customer.id },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            console.log(response);
           
            var output=``;
            response.data.forEach(function(item) {
            arr_billing_billing.push(item)
            output+=`
            <tr>
            <th style="30px"></th>
            <td>${item.booking_code}</td>
            <td>${item.booking_date} - ${item.booking_time} </td>
            <td colspan="2"><center><button onClick="detail_booking_appointment(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> </button>
            </center></td>
            </tr>`;
            i++;
        });
            $('#list_billing_billing').html(output);
        }
    });
});
function detail_booking_appointment(data)
{
    var item  = arr_billing_billing[data];
    var output =` `;
    output +=` 
    <div class="tab-content">
    <div id="contact-1" class="tab-pane active">
        <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
            <h2><strong style="color:#10ABFE"> Chi tiết lịch hẹn </strong></h2>
        </div>
        </div>
        <div class="client-detail">
        <div class="full-height-scroll">
            
           
            <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                
            
            <h3><strong style="color:Black">Nhắc hẹn khám </strong></h3>
            <img alt="" height="150" width="99%" src="{{ asset('images/slide/204683265.png')}}">
           
            <h3><strong style="color:Black"> Lịch trình </strong></h3>
        
               <table  id="detail_service_packet">
                <thead>
                    <tr>
                        <th>Dịch vụ</th>
                        <th>Thời gian</th>
                    </tr>
                </thead >
              
                <tbody>`;
                item.booking_appointment.forEach(function(param) {
                output+=`
                <tr>
                    <td>${param.service_title}</td>
                    <td>${param.appointment_time}</td>
                </tr>`;
                });
                output+=`
                </tbody>
          
               </table>


               
                 <hr>

            </div>
        
        <button type="button" class="btn btn-danger btn-sm btn-block">Xem lại đơn hàng này</button>
        </div>
        </div>
    </div>
</div>`;
   
    $('#detail_booking_appointment').fadeOut().html(output);
    $('#detail_booking_appointment').fadeIn().html(output);
}
function search_service_service()
{
    var key_service_packet = $('#key_service_packet').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_service_packet', filter: key_service_packet,limit: '20' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            var output=``;
            response.data.forEach(function(item) {
            output+=`
            <tr>
                <th style="30px"></th>
                <td>${item.service_title}</td>
                <td >${item.service_content}</td>
                <td>${formatNumber(item.service_price)} VND</td>
                <td colspan="2"><center>

                <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
            </tr>`;
            });
            $('#list_service_service').html(output);
        }
    });
}