<html>
<head><title></title></head>
<body>



    <form action ="" method="get">
      <input type="text" name="cmd" id="cmd" value="Whatcha looking for?"/>
      <input type="submit" name="submit" id="submit" value="Submit" />
      </label>
    </form>

    <?php
      $query = "ls" + $_GET['cmd'];
      $results = exec($query);
      echo $results;
     ?>
</body>
</html>
