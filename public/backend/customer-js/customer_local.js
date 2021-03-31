const urlapi = "http://localhost/api_hospital/";
const urlserver = "http://diendengiadung.com/";
const urlsocket = "https://exchangekse.herokuapp.com/";
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
  function payment_type(type,item)
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
  