<?php
  if(!isset($_COOKIE['user'])){
    setcookie("user", $_GET['user'], -1);
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
