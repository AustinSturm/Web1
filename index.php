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
    for($i = 0; $i < strlen($key); $i++){
      $out .= $input[$i] ^ $key[$i % strlen($key)];
    }
    return $out;
  }

  function xorTest($input, $key){
    $output = '';
    for($i = 0; $i < strlen($key); $i++){
      $output .= $input[$i] ^ $key[$i % strlen($key)];
    }
    return $output;
  }


  $flag = 'Capt_Crunch_Cookies';
  if($_GET['user'] == "Hook"){
    setcookie("user", encrypt(base64_encode($flag)), time()+3600);
    echo "Your flag is in this room Captain.";
  }
  else{
    echo "Who arrrgh ya? To tha plank wit ya!";
  }

  $answer = xorTest("Capt_Crunch_Cookies", "pan");
  echo $answer;

 ?>
</body>
</html>
