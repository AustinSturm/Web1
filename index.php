<!--
  Capt Hook hid his flag with the cookies.
-->

<?php
  setcookie('user', '', time()-300);
  if(!isset($_COOKIE['user'])){
    setcookie("user", $_GET['user'], time()+3600);
  }
 ?>

<html>
<head><title></title></head>
<body>
<?php

  function encrypt($input){
    $key = "pan";
    $out = "";
    for($i = 0; $i < strlen($input); $i++){
      $out .= $input[$i] ^ $key[$i % strlen($key)]; // Xor each character with char in key
    }
    return $out;
  }


  $flag = 'Capt_Crunch_Cookies';
  if($_GET['user'] == "Hook"){
    setcookie("user", base64_encode(encrypt($flag)), time()+3600);
    echo "Your flag is in this room Captain.";
    echo encrypt(base64_decode($_GET['user']));
  }
  else{
    echo "Who arrrgh ya? To tha plank wit ya!";
  }


 ?>
</body>
</html>
