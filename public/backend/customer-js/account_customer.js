function customer_login() {
    const urlserver = "http://192.168.100.16/PJ_hospital_booking/public/";
    var username = $('#username_customer').val();
    var password = $('#password_customer').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'user_login', username: username, password: password },
        dataType: 'json',
        headers: headers,
        success: function(response) {

            if (response.success == 'false') {
                alert(response.message);
            } else {


                localStorage.setItem('account_customer', JSON.stringify(response.data[0]));
                window.location = urlserver;

            }

        }
    });
}

function customer_logout() {
    localStorage.removeItem('account_customer');
    window.location = urlserver;
}
/// change password

function checkPass() {

    var flag = 0;
    var neutralColor = '#fff'; // 'white';
    var badColor = '#f66'; // 'red';
    var goodColor = '#6f6'; // 'green';

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
        flag = 1;
        //else if passwords do not match
    } else if (password1.indexOf(' ') >= 0) {
        feedback('Mật khẩu không được có kí tự trắng');
        setBGColor('new_password', badColor);
        flag = 1;
    } else if (password2 !== password1) {
        //we now know that pass1 is long enough
        feedback('Mật khẩu không trùng khớp');
        setBGColor('new_password', goodColor);
        //if pass2 is blank, set neutral background
        if (password2.length === 0) {
            setBGColor('confirm_password', neutralColor);
        } else {
            setBGColor('confirm_password', badColor);
        }
        flag = 1;

    } else {
        feedback('Mật khẩu trùng khớp');
        setBGColor('new_password', goodColor);
        setBGColor('confirm_password', goodColor);
        flag = 0;
    }
    return flag;
}
// laays lai mat khau
function checkPass1() {

    var flag = 0;
    var neutralColor = '#fff'; // 'white';
    var badColor = '#f66'; // 'red';
    var goodColor = '#6f6'; // 'green';

    var password1 = getElm('new_password1').value;
    var password2 = getElm('confirm_password1').value;

    //if password length is less than 6
    if (password1.length < 6) {
        feedback1('Mật khẩu tối thiểu 6 kí tự');
        //we do not care about pass2 when pass1 is too short
        setBGColor('confirm_password', neutralColor);
        //if pass1 is blank, set neutral background
        if (password1.length === 0) {
            setBGColor('new_password1', neutralColor);
        } else {
            setBGColor('new_password1', badColor);
        }
        flag = 1;
        //else if passwords do not match
    } else if (password1.indexOf(' ') >= 0) {
        feedback1('Mật khẩu không được có kí tự trắng');
        setBGColor('new_password1', badColor);
        flag = 1;
    } else if (password2 !== password1) {
        //we now know that pass1 is long enough
        feedback1('Mật khẩu không trùng khớp');
        setBGColor('new_password1', goodColor);
        //if pass2 is blank, set neutral background
        if (password2.length === 0) {
            setBGColor('confirm_password1', neutralColor);
        } else {
            setBGColor('confirm_password1', badColor);
        }
        flag = 1;

    } else {
        feedback1('Mật khẩu trùng khớp');
        setBGColor('new_password1', goodColor);
        setBGColor('confirm_password1', goodColor);
        flag = 0;
    }
    return flag;
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
function feedback1(msg) {
    getElm('error-nwl1').innerHTML = msg;
}

function feedback(msg) {
    getElm('error-nwl').innerHTML = msg;
}

function show_modal_change_password() {
    $('#change_password_customer_modal').modal('show');
    $('#old_password').val('');
    $('#new_password').val('');
    $('#confirm_password').val('');
    document.getElementById("old_password").type = "password";
    document.getElementById("new_password").type = "password";
    document.getElementById("confirm_password").type = "password";


}

function change_password() {
    var a = checkPass();
    var old_password = $('#old_password').val();
    var password = $('#new_password').val();
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    if (a == 0) {
        $.ajax({
            url: urlapi,
            type: 'POST',
            data: {
                detect: 'customer_change_info',
                old_password: old_password,
                password: password,
                id_customer: customer.id
            },
            dataType: 'json',
            headers: headers,
            success: function(response) {
                alert('Thay đổi mật khẩu thành công');
                $('#old_password').val('');
                $('#new_password').val('');
                $('#confirm_password').val('');
                getElm('error-nwl').innerHTML = '';

            }
        });
    } else {
        alert('Thay đổi mật khẩu thất bại')
    }
}



// eys
function show_old_password() {
    var x = document.getElementById("old_password");
    if (x.type === "password") { x.type = "text"; } else { x.type = "password"; }
}

function show_new_password() {
    var z = document.getElementById("new_password");
    if (z.type === "password") { z.type = "text"; } else { z.type = "password"; }
}

function show_confirm_password() {
    var y = document.getElementById("confirm_password");
    if (y.type === "password") { y.type = "text"; } else { y.type = "password"; }
}

//thay đổi thông tin cá nhân
function show_modal_profile() {
    //$('#change_info_customer_modal').modal('toggle');
    $('#change_info_customer_modal').modal('show');
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    var output = `
    <form>
        <strong style="color:#10ABFE">1. Số điện thoại liên hệ :</strong><br>`;
    if (customer.phone_number == null || customer.phone_number == '') {
        output += `<input type="text" placeholder="số điện thoại" id="phone_number" value="${customer.phone_active}" class="form-control" ><br>`;
    } else {
        output += `
            <input type="text" placeholder="số điện thoại" id="phone_number" value="${customer.phone_number}" class="form-control" ><br>`;
    }
    output += `
        <strong style="color:#10ABFE">2. Họ và tên (*) :</strong><br>
        <input type="text" placeholder="Họ và tên" id="full_name" value="${customer.full_name}"  class="form-control" ><br>
        <strong style="color:#10ABFE">3. Giới tính (*) :</strong><br>
        <input type="text" readonly placeholder="Giới tính" id="sex" value="${customer_sex(customer.sex)}" class="form-control" ><br>

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

function update_info() {
    var customer = JSON.parse(localStorage.getItem('account_customer'));
    var full_name = $('#full_name').val();
    var address = $('#address').val();
    var birthday = $('#birthday').val();
    var sex = customer_sex_fill_info($('#sex').val());
    var email = $('#email').val();
    var nationality = $('#nationality').val();
    var phone_number = $('#phone_number').val();
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: {
            detect: 'customer_change_info',
            id_customer: customer.id,
            full_name: full_name,
            address: address,
            birthday: birthday,
            phone_number: phone_number,
            email: email,
            nationality: nationality,
            sex: sex
        },
        dataType: 'json',
        headers: headers,
        success: function(response) {
            localStorage.setItem('account_customer', JSON.stringify(response.data[0]));
            alert('Cập nhật thông tin cá nhân thành công');
            var account_customer = JSON.parse(localStorage.getItem('account_customer'));
            var output = `
            <div class="tab-content">
            <div id="contact-1" class="tab-pane active">
                <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <h2><strong style="color:#blue"> Khám cá nhân </strong></h2>
                </div>
                </div>
                <div class="client-detail">
                <div class="full-height-scroll">
                    <div  class="vertical-container dark-timeline" style="width:100%;height:600px; overflow: auto;">
                    <h3><strong style="color:Black">Thông tin cá nhân: <a onClick="show_modal_profile()"><i class="fa fa-edit"></i></a></strong></h3>
                    <div>
                    <table class="total_history">
                         
                        <tr> 
                            <td><strong style="color:#blue"> Họ & Tên</strong></td>
                            <td><strong id="customer_name" style="color:#blue">${account_customer.full_name}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#blue"> Số điện thoại:</strong></td>
                            <td><strong id="customer_phone" style="color:#blue">${account_customer.phone_number}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#blue"> Địa chỉ:</strong></td>
                            <td><strong id="customer_address" style="color:#blue">${account_customer.address}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#blue"> Ngày sinh:</strong></td>
                            <td><strong id="customer_birthday" style="color:#blue">${account_customer.birthday}</strong></td>
                        </tr>
                        <tr> 
                            <td><strong style="color:#blue"> Giới tính:</strong></td>
                            <td><strong id="customer_sex" style="color:#blue">${customer_sex(account_customer.sex)}</strong></td>
                        </tr>
                    </table>
                    
                    <table>
                        <tr> 
                            <td> <strong style="color:#blue">1. Ngày hẹn:</strong></td>
                            <td> <input id="appointment_date" type="date" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td> <strong style="color:#blue">2. Giờ hẹn:</strong></td>
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
        }
    });

}




window.onload = function() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
};

function capcha() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}




// loai modal
function type_modal(id) {
    var output = ``;
    if (id == 1) // quên mật khẩu
    {
        output = `
        <button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
        <button type="button" onClick="codeverify(1)" class="btn btn-primary" >Tiếp tục</button>
        <button hidden id="btn_forgot_password" data-toggle="modal" data-target="#Forgot_password_modal">Tiếp tục</button>
        `;
        $('#btn_phoneauth').html(`<button class="btn btn-primary btn-sm" type="button" onclick="phoneAuth_forgot()">Gửi mã</button>`)
        $('#btn_sms').html(output);
        $('#btn_change_password').click();


    }
    if (id == 2) // Đăng ký
    {
        output = `
        <button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
        <button type="button" onClick="codeverify(2)" class="btn btn-primary" >Tiếp tục</button>
        <button hidden id="show_modal_info" data-toggle="modal" data-target="#registration_customer">Tiếp tục</button>
        `;
        $('#btn_phoneauth').html(`<button class="btn btn-primary btn-sm" type="button" onclick="phoneAuth()">Gửi mã</button>`)
        $('#btn_sms').html(output);
        $('#btn_registration_customer').click();
    }

}

function phoneAuth() {
    var number = document.getElementById('numberrr').value;
    $.ajax({
        url: urlapi,
        type: 'POST',
        data: { detect: 'customer_phone_exist', phone_active: number },
        dataType: 'json',
        headers: headers,
        success: function(response) {
            if (response.success == 'false') {
                alert(response.message);
            } else {
                var numberVND = "+84" + document.getElementById('numberrr').value;
                $("#customer_phone").val(number);

                firebase.auth().signInWithPhoneNumber(numberVND, window.recaptchaVerifier).then(function(confirmationResult) {
                    //s is in lowercase
                    window.confirmationResult = confirmationResult;
                    coderesult = confirmationResult;
                    console.log(coderesult);
                    alert("Gửi mã PIN thành công, vui lòng đợi trong ít phút");
                }).catch(function(error) {
                    console.log(error)
                    alert("Gưi mã PIN thất bại, thử lại tối đa 5 lần 1 ngày");

                });
            }

        }
    });
}

// lấy lại mật khẩu
function phoneAuth_forgot() {
    var number = document.getElementById('numberrr').value;

    var numberVND = "+84" + document.getElementById('numberrr').value;
    $("#customer_phone").val(number);
    firebase.auth().signInWithPhoneNumber(numberVND, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Gửi mã PIN thành công, vui lòng đợi trong ít phút");
    }).catch(function(error) {
        console.log(error)
        alert("Gưi mã PIN thất bại, thử lại tối đa 5 lần 1 ngày");
    });


}

function codeverify(id) {

    if (id == 2) {
        var code = $('#verificationCode').val();
        coderesult.confirm(code).then(function(result) {
            $('#show_modal_info').click();
        }).catch(function(error) {

            alert("Mã OTP không hợp lệ");

        });
    }
    if (id == 1) // quên mật khẩu
    {
        var code = $('#verificationCode').val();
        coderesult.confirm(code).then(function(result) {
            $('#btn_forgot_password').click();
        }).catch(function(error) {
            console.log(error);
            alert("Mã OTP không hợp lệ");

        });
    }



}

function check_text_registration_customer() {
    flag = 0;
    var full_name = $('#reg_name').val();
    var password = $('#reg_password').val();
    var phone_active = $('#numberrr').val();
    var address = $('#reg_address').val();
    if (full_name == '' || password == '' || phone_active == '' || address == '') {
        flag = 1;
    }
    return flag;
}

function registration_customer() {
    var full_name = $('#reg_name').val();
    var password = $('#new_password').val();
    var phone_active = $('#numberrr').val();
    var address = $('#reg_address').val();
    var email = $('#reg_email').val();
    var check = check_text_registration_customer();
    var a = checkPass();

    if (check == 1) {
        alert('Vui lòng điền đầy đủ thông tin')
    } else if (a == 1) {
        alert('Mật khẩu không trùng khớp')
    } else {
        $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect: 'customer_register', full_name: full_name, password: password, phone_active: phone_active, address: address, email: email },
            dataType: 'json',
            headers: headers,
            success: function(response) {
                alert('Đăng ký thành công');
            }
        });
    }

}

function forgot_password_customer() {
    var phone_active = $('#numberrr').val();
    var new_password = $('#new_password1').val();
    var a = checkPass1();
    if (a == 0) {
        $.ajax({
            url: urlapi,
            type: 'POST',
            data: { detect: 'customer_forgot_pw', phone_active: phone_active, new_password: new_password },
            dataType: 'json',
            headers: headers,
            success: function(response) {
                alert('Khôi phục mật khẩu thành công');
            }
        });
    } else { alert('Vui lòng điền đúng trường theo định dạng') }
}