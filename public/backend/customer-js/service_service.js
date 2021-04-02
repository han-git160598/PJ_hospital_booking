
var count_cart=0;
var arr_cart=[];
arr_service_service=[];
arr_service=[];
$(document).ready(function() {
    
    list_service_service();
    count_cart = localStorage.getItem('total_cart');

    $('#badge').html(count_cart);


});

function list_service_service()
{
    var tam="";
    let i=0;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_service',limit: '100' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            var output=``;
            response.data.forEach(function(item) {
            arr_service_service.push(item);
            output+=`
            <tr>
                <th style="30px"></th>
                <td style="width:30%" >${item.service_title}</td>
                <td style="width:30%" >${item.service_content}</td>
                <td>${formatNumber(item.service_price)} VND</td>
                <td colspan="2"><center>

                <button onClick="add_cart(${i})" class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
            </tr>`;
            i++;
            });
            $('#list_service_service').html(output);
        }
    });
}

function search_service_service()
{
    var key_service = $('#key_service').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_service', filter: key_service,limit: '10' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            var output=``;
            response.data.forEach(function(item) {
            output+=`
            <tr>
                <th style="30px"></th>
                <td style="width:30%" >${item.service_title}</td>
                <td style="width:30%" >${item.service_content}</td>
                <td>${formatNumber(item.service_price)} VND</td>
                <td colspan="2"><center>

                <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i></button></center></td>
            </tr>`;
            });
            $('#list_service_service').html(output);
        }
    });
}
function add_cart(data)
{

    var flag  = 0 ;
    var item  = arr_service_service[data];
    
    var arr_service_json =JSON.parse(localStorage.getItem('service_service'));
    if(arr_service_json == null )
    {
        arr_service.push(item);
        count_cart++;
        localStorage.setItem('service_service', JSON.stringify(arr_service));
        localStorage.setItem('total_cart', JSON.stringify(count_cart));
    }
    else{
        arr_service_json.forEach(function(cart) {
            console.log(cart);
            if(cart.id_service == item.id_service)
            {
                alert('Dịch vụ này đã tốn tại trong giỏ hàng của bạn')
                flag = 1;
            }
        });
        if(flag == 0)
        {
            arr_service_json.forEach(function (service){
                arr_service.push(service);
            });
            arr_service.push(item);   
            
            const key = 'id_service';
    
            const unique = [...new Map(arr_service.map(item =>
            [item[key], item])).values()]
            
            localStorage.setItem('service_service', JSON.stringify(unique));
            count_cart++;
            localStorage.setItem('total_cart', JSON.stringify(count_cart));
        }

       
    
    }

    $('#badge').html(count_cart);

}