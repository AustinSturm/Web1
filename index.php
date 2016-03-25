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

  function encrypt($input){ // input CaptCrunchCookies
    $key = "pan";
    $out = "";
    for($i = 0; $i < strlen($input); $i++){ // iterates through all of the input string
      $out .= $input[$i] ^ $key[$i % strlen($key)]; // Xor each character with char in key
    }
    return $out;
  }

  function decrypt($input, $output){ // take username
    $key = "";
    $out = $output;  // grab encrypted base64 data and decode | aka encrypted data
    for($i = 0; $i < strlen($input); $i++){
      $key .= $input[$i] ^ $out[$i % strlen($out)]; // Xor each character with char in key
    }
    return $key;
  }

  $flag = 'CaptCrunchCookies';
  if($_GET['user'] == "Hook"){
    echo "Your flag is in this room Captain.";
  }
  else{
    echo "Who arrrgh ya? To tha plank wit ya!";
    $user = Alex
    $encrypted = encrypt($user)
    $decrypted = decrypt($user, $encrypted)
  }


 ?>
</body>
</html>
