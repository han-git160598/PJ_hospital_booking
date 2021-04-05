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
                window.history.back();
             
            }
            
        }
    });
}
function customer_logout()
{
    localStorage.removeItem('account_customer');
    window.history.back();
}
/// change password

function checkPass() 
{
    var flag = 0;
    var neutralColor = '#fff'; // 'white';
    var badColor     = '#f66'; // 'red';
    var goodColor    = '#6f6'; // 'green';
    
    var password1 = getElm('new_password').value;
    var password2 = getElm('confirm_password').value;

    //if password length is less than 6
    if (password1.length < 6) {
        feedback('Mật khẩu tối thiểu 6 kí tự');
        //we do not care about pass2 when pass1 is too short
        setBGColor('confirm_password', neutralColor);
        //if pass1 is blank, set neutral background
        if (password1.length === 0) {
        setBGColor('new_password', neutralColor);
        } else {
        setBGColor('new_password', badColor); 
        }
        flag=1;
    //else if passwords do not match
    }else if(password1.indexOf(' ') >= 0){
        feedback('Mật khẩu không được có kí tự trắng');
        setBGColor('new_password', badColor);
        flag =1;
    }
     else if (password2 !== password1) {
        //we now know that pass1 is long enough
        feedback('Mật khẩu không trùng khớp');
        setBGColor('new_password', goodColor);
        //if pass2 is blank, set neutral background
        if (password2.length === 0) {
        setBGColor('confirm_password', neutralColor);
        } else {
        setBGColor('confirm_password', badColor);
        }
        flag =1;
   
    }else {
        feedback('Mật khẩu trùng khớp');
        setBGColor('new_password', goodColor);
        setBGColor('confirm_password', goodColor);
        flag = 0 ;
    }
    return flag;
}
function show_modal_change_password()
{
    $('#change_password_customer_modal').modal('show');
    $('#old_password').val('');
    $('#new_password').val('');
    $('#confirm_password').val('');
    document.getElementById("old_password").type= "password";
    document.getElementById("new_password").type= "password";
    document.getElementById("confirm_password").type= "password";


}
function change_password()
{
    var a = checkPass();
    var old_password= $('#old_password').val();
    var password= $('#new_password').val();
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    if(a == 0)
    {
        $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect:'customer_change_info',old_password:old_password, 
            password:password,id_customer:customer.id},
            dataType: 'json',
            headers: headers,
            success: function(response) 
            {
                alert('Thay đổi mật khẩu thành công');
                $('#old_password').val('');
                $('#new_password').val('');
                $('#confirm_password').val('');
                getElm('error-nwl').innerHTML = '';

            }
        });
    }else{
        alert('Thay đổi mật khẩu không thành công')
    }
}


//helper function for document.getElementById()
function getElm(id) {
return document.getElementById(id);
}

//helper function for setting background color
function setBGColor(id, value) {
getElm(id).style.backgroundColor = value;
}

//helper function for feedback message
function feedback(msg) {
getElm('error-nwl').innerHTML = msg;
}
// eys
    function show_old_password(){
    var x = document.getElementById("old_password");
        if(x.type === "password" ){x.type = "text";} else { x.type = "password";}
    }
    function show_new_password(){
    var z = document.getElementById("new_password");
    if (z.type === "password" ) {z.type = "text";} else {z.type = "password";}
    }
    function show_confirm_password(){
    var y = document.getElementById("confirm_password");
    if (y.type === "password" ) {y.type = "text";} else {y.type = "password";}
    }

//thay đổi thông tin cá nhân
function show_modal_profile()
{
    //$('#change_info_customer_modal').modal('toggle');
    $('#change_info_customer_modal').modal('show');
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    var output =`
    <form>
        <strong style="color:#10ABFE">1. Số điện thoại liên hệ :</strong><br>
        <input type="text" placeholder="số điện thoại" id="phone_number" value="${customer.phone_number}" class="form-control" ><br>
        <strong style="color:#10ABFE">2. Họ và tên (*) :</strong><br>
        <input type="text" placeholder="Họ và tên" id="full_name" value="${customer.full_name}"  class="form-control" ><br>
        <strong style="color:#10ABFE">3. Giới tính (*) :</strong><br>
        <input type="text" placeholder="Giới tính" id="sex" value="${customer.sex}" class="form-control" ><br>
        <strong style="color:#10ABFE">4. Ngày sinh (*) :</strong><br>
        <input type="date" class="form-control" id="birthday" value="${customer.birthday}" ><br>
        <strong style="color:#10ABFE">5. Email :</strong><br>
        <input type="email" class="form-control" id="email" value="${customer.email}"><br>
        <strong style="color:#10ABFE">6. Địa  chỉ(*) :</strong><br>
        <input type="text" class="form-control" id="address" value="${customer.address}"><br>
        <input type="button" onClick="update_info()" value="Cập nhật" class="btn btn-success btn-sm btn-block" />
    </form>
    `;
    $('#info_persenal').html(output);
}

function update_info()
{
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    var full_name = $('#full_name').val() ;
    var address = $('#address').val() ;
    var birthday = $('#birthday').val() ;
    var sex = $('#sex').val() ;
    var email = $('#email').val() ;
    var nationality = $('#nationality').val() ;
    var phone_number = $('#phone_number').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect:'customer_change_info',id_customer:customer.id,
        full_name:full_name,address:address,birthday:birthday,phone_number:phone_number,
        email:email,nationality:nationality,sex:sex },
        dataType: 'json',
        headers: headers,
        success: function(response) 
        {
            localStorage.setItem('account_customer',JSON.stringify(response.data[0]));
            alert('Cập nhật thông tin cá nhân thành công')
        }
    });
}



// window.onload = function() {
//     capcha()
//         //render_quenmk();
// };

// function capcha() {
//     window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
//     recaptchaVerifier.render();
// }


// function phoneAuth() {
//     //get the number
//     var a =  check_phone(document.getElementById('numberrr').value)
//     console.log(a);
//     if (a == "true") {
//         $('#er_phone_used').html('Số điện thoại đã được sử dụng')
//     } else {
//         var number = document.getElementById('numberrr').value;
//         var numberVND = "+84" + document.getElementById('numberrr').value;
//         $("#customer_phone").val(number);
//         console.log(number);
//         //phone number authentication function of firebase
//         //it takes two parameter first one is number,,,second one is recaptcha
//         firebase.auth().signInWithPhoneNumber(numberVND, window.recaptchaVerifier).then(function(confirmationResult) {
//             //s is in lowercase
//             window.confirmationResult = confirmationResult;
//             coderesult = confirmationResult;
//             console.log(coderesult);
//             alert("Gửi mã số thành công");
//         }).catch(function(error) {
//             alert("Gưi mã thất bại");
//         });
//     }

// }

// function codeverify() {
//     var code = document.getElementById('verificationCode').value;
//     coderesult.confirm(code).then(function(result) {
//         $('#close_modol_phone').click();
//         $('#btn_new_cus').click();
//     }).catch(function(error) {
//         alert("Mã OTP không hợp lệ");

//     });
// }