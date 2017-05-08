<!DOCTYPE html>
<html>
  <head>
    <title>Compito 1</title>
  </head>
  <body>
    <h1>Compito 1: Calcolo Età</h1>
    <h2>
      Inserire nel seguente form le informazioni che verranno elaborate per
      ottenere il calcolo dell'età e il tempo fino al prossimo compleanno
    </h2>
    <form action="" method="post">
      <label for="name">Nome: <input type="text" name="name" /></label>
      <label for="surname">Cognome: <input type="text" name="surname" format="dd-mm-yyyy"/></label>
      <label for="birthday">Compleanno: <input type="date" name="birthday" /></label>
      <input type="submit" value="Calcola" />
    </form>
    <div class="result">
      <?php if(! empty($_POST)) : ?>
        <p>
          Ciao
          <b><?php echo $_POST['name'] . ' ' . $_POST['surname']; ?></b>
          il tuo compleanno risulta essere il giorno:
            <b><?php echo $_POST['birthday']; ?></b>
          quindi la tua età è:
             <?php
              $diff = time() - strtotime($_POST['birthday']);
              $year = 60 * 60 * 24 * 365;
              $age = floor($diff/$year);
              echo $age;
            ?>
          anni e mancano
          <?php
            $date = explode('-', $_POST['birthday']);
            $date = date('Y', strtotime('+1 year')) . '-' . $date[1] . '-' . $date[2];
            $diff = strtotime($date) - time();
            $days = floor($diff/(60* 60*24));
            echo $days;
          ?>
          giorni al tuo prossimo compleanno
      <?php endif; ?>
    </div>
  </body>
</html>
