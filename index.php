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

  function decrypt($input){
    $key = "";
    $out = $_GET['user'];
    for($i = 0; $i < strlen($input); $i++){
      $key .= $input[$i] ^ $out[$i % strlen($out)]; // Xor each character with char in key
    }
    return $key;
  }

  $flag = 'CaptCrunchCookies';
  if($_GET['user'] == "Hook"){
    setcookie("user", encrypt(json_encode($flag)), time()+3600);
    echo "Your flag is in this room Captain.";
    $fuck =  json_decode(encrypt("Hook"));
    echo $fuck;
  }
  else{
    echo "Who arrrgh ya? To tha plank wit ya!";
  }


 ?>
</body>
</html>
