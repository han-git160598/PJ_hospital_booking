var count_cart=0;
var arr_cart=[];
arr_service_service=[];
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
    var item  = arr_service_service[data];
    
    var arr_service =[JSON.parse(localStorage.getItem('service_service'))];
    if(arr_service[0] == null )
    {
        console.log(item);
    
        // arr_service.push(item1);
        // count_cart++;
        // localStorage.setItem('service_service', JSON.stringify(arr_cart));
        // localStorage.setItem('total_cart', JSON.stringify(count_cart));
    }
    else{
        arr_service[0].forEach(function (service){
            arr_cart.push(service);
        });
        item.packet_detail.forEach(function(item1) {
            arr_cart.push(item1);   
        });
        const key = 'id_service';

        const unique = [...new Map(arr_cart.map(item =>
        [item[key], item])).values()]
        
        localStorage.setItem('service_service', JSON.stringify(unique));
        count_cart++;
        localStorage.setItem('total_cart', JSON.stringify(count_cart));
    
    }

    $('#badge').html(count_cart);

}