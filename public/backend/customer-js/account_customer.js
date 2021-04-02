function customer_login()
{
    var username=  $('#username_customer').val();
    var password= $('#password_customer').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect:'user_login',username:username, password:password},
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            console.log(response);
            if(response.success=='false')
            {
                alert(response.message);
            }else{
        
                localStorage.setItem('account_customer', JSON.stringify(response.data[0]));
                var username = JSON.parse(localStorage.getItem('account_customer'));
                $('#username').html(username);
                window.location=urlserver+'customer-cart';
             
            }
            
        }
    });
}
function customer_logout()
{
    localStorage.removeItem('account_customer');
    window.location=urlserver+'login-customer';
}


window.onload = function() {
    capcha()
        //render_quenmk();
};

function capcha() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}


function phoneAuth() {
    //get the number
    var a = await check_phone(document.getElementById('numberrr').value)
    console.log(a);
    if (a == "true") {
        $('#er_phone_used').html('Số điện thoại đã được sử dụng')
    } else {
        var number = document.getElementById('numberrr').value;
        var numberVND = "+84" + document.getElementById('numberrr').value;
        $("#customer_phone").val(number);
        console.log(number);
        //phone number authentication function of firebase
        //it takes two parameter first one is number,,,second one is recaptcha
        firebase.auth().signInWithPhoneNumber(numberVND, window.recaptchaVerifier).then(function(confirmationResult) {
            //s is in lowercase
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            alert("Gửi mã số thành công");
        }).catch(function(error) {
            alert("Gưi mã thất bại");
        });
    }

}

function codeverify() {
    var code = document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function(result) {
        $('#close_modol_phone').click();
        $('#btn_new_cus').click();
    }).catch(function(error) {
        alert("Mã OTP không hợp lệ");

    });
}