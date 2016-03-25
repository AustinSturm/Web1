<html>
<head><title></title></head>
<body>

<!--
  Create user with permision to this challenge that can only read and not write
  add flag.txt in folder.
-->
<form action ="" method="get">
    <p>Whatcha lookin for, matey?</p>
    <input type="text" name="cmd" id="cmd" />
    <label>
    <input type="submit" name="submit" id="submit" value="Submit" />
    </label>
</form>
<?php
  echo exec('ls ' . $_GET['cmd']);
?>
</body>
</html>
