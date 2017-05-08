<!DOCTYPE html>
<html>
  <head>
    <title>Compito 1</title>
  </head>
  <body>
    <?php $sum = 0; ?>
    <?php if(!empty($_POST['prevsum'])) : ?>
      <?php $sum = $_POST['prevsum']; ?>
    <?php endif; ?>
    <?php if(!empty($_POST['sum'])) : ?>
      <?php $sum+=$_POST['sum']; ?>
    <?php endif; ?>
    <form action="" method="post">
      <input type="number" name="sum" value="0" />
      <input type="hidden" name="prevsum" value="<?php echo $sum; ?>" />
      <input type="submit" value="Sum" />
    </form>
    <div class="result">
      <?php echo $sum; ?>
    </div>
  </body>
</html>
