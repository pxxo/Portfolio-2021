function login(){
  count = 0;
  $user_elem = document.getElementById("user");
  $pass_elem = document.getElementById("pass");

  if($user_elem.value !== ""){
    count++;
  }
  if($pass_elem.value !== ""){
    count++;
  }
  if(count == 2){
    document.loginform.submit();
  }
}