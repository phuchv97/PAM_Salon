function validate_signup(){
  var name_value = document.getElementById('name');
  var pass = document.getElementById('password');
  var sdt = document.getElementById('phone');
  var email = document.getElementById('email');
  var err_name = document.getElementById('error_name');
  var err_password = document.getElementById('error_password');
  var err_sdt = document.getElementById('error_phone');
  var err_email = document.getElementById('error_email');
  var flag = true;
  var btn = document.getElementById("btn-signup");

  if(email.value == ""){
    err_email.innerHTML = "Vui lòng nhập email";
    email.focus();
    flag = false;
    btn.style.marginTop = '20px';
  }else{
    err_email.innerHTML = "";
  }
  

  if(pass.value == ""){
    err_password.innerHTML = "Vui lòng nhập mật khẩu";
    pass.focus();
    flag = false;
  }else{
    err_password.innerHTML = "";
  }
  if(sdt.value == "" || sdt.value.length < 6){
    err_sdt.innerHTML = "Vui lòng nhập số điện thoại";
    sdt.focus();
    flag = false;
  }else{
    err_sdt.innerHTML = "";
  }
  if(name_value.value == "" || name_value.value.length < 6 || name_value.value.length > 20){
    err_name.innerHTML = "Tên đăng nhập không được để trống hoặc dưới 6 ký tự";
    name_value.focus();
    flag = false;
  }else{
    err_name.innerHTML = "";
  }

  return flag;
  
}