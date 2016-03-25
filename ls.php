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
      $query = 'ls ' + $_GET['cmd'];
      echo exec($query);
     ?>
</body>
</html>
