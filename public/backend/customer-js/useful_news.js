var arr_news = [];
$(document).ready(function() {
    // truyen them id account cho thằng sale
    count_cart = localStorage.getItem('total_cart');

    $('#badge').html(count_cart);
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_news',limit: '100' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
    
            let i =0;
            var output=``;
            response.data.forEach(function(item) {
            if(item.home_action == 'Y')
            {
                arr_news.push(item);  
                output+=`
                <tr>
                    <th style="30px"></th>
                    <td>${item.title}</td>
                    <td><img alt="" height="150" width="150" src="${item.image_upload}"></td>
                    <td colspan="2"><center>

                    <button type="button" onClick="detail_news(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></button></center></td>
                </tr>`;
                i++;
            }
            });
            $('#arr_news').html(output);
        }
    });
});
function detail_news(data)
{
    var item  = arr_news[data];
  
    var output=`
    <div class="tab-content">
    <div id="contact-1" class="tab-pane active">
        <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
            <h2><strong style="color:#10ABFE"> ${item.title} </strong></h2>
        </div>
        </div>
        <div class="client-detail">
        <div class="full-height-scroll">
            <div><img alt="" height="200px" width="100%" src="{{ asset('images/slide/204683265.png')}}"></div>
            <hr/>
            
            <div  class="vertical-container dark-timeline" style="width:100%;height:350px; overflow: auto;">
               <strong style="color:#FF5722">1. Nội dung:</strong>
                <p>
                ${item.content}
                </p>
                <hr/>
                </div>
            </div>
            <hr>
            </div>
        </div>
    </div>`;
    $('#detail_news').fadeOut().html(output);
    $('#detail_news').fadeIn().html(output);

}
function search_news()
{
    var key_news = $('#key_news').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'list_news', filter: key_news,limit: '20' },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {

            let i =0;
            var output=``;
            response.data.forEach(function(item) {
            if(item.home_action == 'Y')
            {
                arr_news.push(item);  
                output+=`
                <tr>
                    <th style="30px"></th>
                    <td>${item.title}</td>
                    <td><img alt="" height="150" width="150" src="${item.image_upload}"></td>
                    <td colspan="2"><center>

                    <button type="button" onClick="detail_news(${i})" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></button></center></td>
                </tr>`;
                i++;
            }
            });
            $('#arr_news').html(output);
        }
    });
}