<!DOCTYPE html>
<html>
  <head>
    <title>Compito 1</title>
  </head>
  <body>
  <?php $sum = 0; ?>
  <?php if(!empty($_GET['sum'])) : ?>
    <?php $sum = $_GET['sum']; ?>
  <?php endif; ?>
  <?php if(! empty($_POST)) : ?>
    <?php $sum+=$_POST['sum']; ?>
  <?php endif; ?>
  <form action="?sum=<?php echo $sum; ?>" method="post">
  <input type="number" name="sum" value="0" />
    <input type="submit" value="Sum" />
    </form>
    <div class="result">
      <?php echo $sum; ?>
    </div>
  </body>
</html>
