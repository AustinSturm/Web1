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


  $flag = 'CaptCrunchCookies';
  if($_GET['user'] == "Hook"){
    setcookie("user", encrypt(json_encode($flag)), time()+3600);
    echo "Your flag is in this room Captain.";
    echo json_decode(encrypt($_GET['user']));
  }
  else{
    echo "Who arrrgh ya? To tha plank wit ya!";
  }


 ?>
</body>
</html>
