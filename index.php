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
    return $input;
  }

  $flag = 'CTF{Capt_Crunch_Cookies?}';
  if($_COOKIE['user'] == "Hook"){
    setcookie("user", encrypt($flag), time()+3600);
    echo "Your flag is in this room Captain.";
  }
  else{
    echo "To tha plank wit ya!";
  }


 ?>
 <p>This shows</p>
</body>
</html>
