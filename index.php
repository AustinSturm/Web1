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
  $key = 'deadbeef';

 ?>
 <p>This shows</p>
</body>
</html>
