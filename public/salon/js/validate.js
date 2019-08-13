function validate_form(){
  var name_value = document.getElementById('name');
  var pass = document.getElementById('password');
  var err_name = document.getElementById('error_name');
  var err_password = document.getElementById('error_password');
  var flag = true;
  var btn = document.getElementById("btn-signup");

  if(pass.value == ""){
    err_password.innerHTML = "Vui lòng nhập mật khẩu";
    pass.focus();
    flag = false;
  }else{
    err_password.innerHTML = "";
  }
  if(name_value.value == "" || name_value.value.length < 6 ){
    err_name.innerHTML = "Tên đăng nhập không được để trống hoặc dưới 6 ký tự";
    name_value.focus();
    flag = false;
  }else{
    err_name.innerHTML = "";
  }


  return flag;
}
function validate_datlich(){
  var full_name = document.getElementById('fullname');
  var date_book = document.getElementById('appointment_date');
  var time_book = document.getElementById('time-picker');
  var err_fullname = document.getElementById('err_fullname');
  var err_timee = document.getElementById('err_time');
  var err_datee = document.getElementById('err_date');
  var flag = true;
  if(date_book.value == ""){
    err_datee.innerHTML = "Vui lòng chọn ngày"; 
    flag = false;
  }
  else{
    err_datee.innerHTML = ""; 
  }
  if(time_book.value == ""){
    err_timee.innerHTML = "Vui lòng chọn khung giờ"; 
    time_book.focus();
    flag = false;
  }
  else{
    err_timee.innerHTML = ""; 
  }
    if(full_name.value == "" || full_name.value.length < 6 || full_name.value.length > 20 || !isNaN(full_name.value)){
    err_fullname.innerHTML = "Tên đăng nhập không được để trống hoặc dưới 6 ký tự";
    full_name.focus();
    flag = false;
  }else{
    err_fullname.innerHTML = "";

  }
  return flag;
 
}
function validate_phonenumber(){
  var flag = true;
  var phonenumber = document.getElementById('phone_number');
   var err_phonenumber = document.getElementById('err_phone');
 if(phonenumber.value == ""){
    err_phonenumber.innerHTML = "Vui lòng nhập số điện thoại"; 
    phonenumber.focus();
    flag = false;
  }
  else{
    err_phonenumber.innerHTML = ""; 
  }
  return flag;
}

