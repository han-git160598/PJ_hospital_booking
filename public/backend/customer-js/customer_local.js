const urlapi = "http://192.168.1.17/api_hospital/";
const urlserver="http://192.168.1.17/PJ_hospital_booking/public/";
//const urlsocket = "https://exchangekse.herokuapp.com/";
const headers = {"Authorization": "Basic YWRtaW46cXRjdGVrQDEyMwx=="};
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}
  function booking_status(status)
  {
      if(status == 'waiting_confirm')
      {
          return 'Chờ xác nhận';
      }
      if(status =='schedule')
      {
          return 'Đã đặt lịch';
      }
      if(status == 'wait_result')
      {
          return 'Hoàn tất';
      }
  }
  function booking_status_number(status)
  {
      if(status == '1')
      {
          return 'Chờ xác nhận';
      }
      if(status =='2')
      {
          return 'Đã đặt lịch';
      }
      if(status =='3')
      {
          return 'Chờ kết quả';
      }
      if(status == '4')
      {
          return 'Hoàn tất';
      }
      if(status == '5')
      {
          return 'Hủy bỏ';
      }
  }
  function billing_type(type)
  {
    if(type == 1)
    {
        return 'Khám cá nhân';
    }
    if(type == 2)
    {
        return 'Khám hộ';
    }
  }
  function customer_sex(sex)
  {
    if(sex == "female")
    {
        return 'Nữ';
    }
    else
    {
        return 'Nam';
    }
  }
  function customer_sex_fill_info(sex)
  {
    if(sex == 'Nam')
    {
        return 'male';
    }
    else
    {
        return 'female';
    }
  }

  function payment_type(type)
  {
      if(type==1)
      {
        return `<h5> <span style="color:blue;"><i><img src="../backend/icon/cash in hand.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí tại bệnh viện.svg"></i> </span></h5> `;
      }else{
        return `<h5> <span style="color:blue;"><i><img src="../backend/icon/online payment.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí qua chuyển khoản.svg"></i> </span></h5>
        <img alt="" height="200px" width="99%" src="#">
        `;
      }
  }
  function select_payment_type(type)
  {
      if(type==1)
      {
        return `
        <input type="text" hidden id="payment_type" value="1">
        <span style="color:blue;"><i><img src="../backend/icon/cash in hand.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí tại bệnh viện.svg"></i> </span> `;
      }else{
        return `
        <input type="text" hidden id="payment_type" value="2">
        <span style="color:blue;"><i><img src="../backend/icon/online payment.svg"></i> <i><img src="../backend/icon/Thanh toán chi phí qua chuyển khoản.svg"></i> </span>
        `;
      }
  }
  