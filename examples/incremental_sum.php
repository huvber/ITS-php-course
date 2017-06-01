<!DOCTYPE html>
<html>
  <head>
    <title>Compito 1</title>
  </head>
  <body>
    <?php echo "GET <br />"; ?>
    <?php var_dump($_GET); ?>
    <?php echo "<br />POST <br />"; ?>
    <?php var_dump($_POST); ?>
    <form action="?sum=<?php echo $sum; ?>" method="poat">
      <input type="number" name="sum" value="0" />
      <input name="hidden_input" type="hidden" value="value" />
      <input type="submit" value="Sum" />
    </form>
    <div class="result">
      <?php echo $sum; ?>
    </div>
  </body>
</html>
