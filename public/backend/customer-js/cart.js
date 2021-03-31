$(document).ready(function() {
    var output = localStorage.getItem('total_cart');
    $('#badge').html(output);

    var arr_cart = localStorage.getItem('cart');
    var  arr_cart_local_json =  JSON.parse(arr_cart);
    
    var output_cart = ``;
    arr_cart_local_json.forEach(function(cart) {
        output_cart +=` 
        <tr>
            <th style="30px"></th>
            <td>Anthony Jackson</td>
            <td>20.000.000</td>
            <td colspan="2"><a><center><i class="fa fa-remove"></i> </a></center></td>
        </tr>`;
    });
    $('#list_cart').html(output_cart);
});


