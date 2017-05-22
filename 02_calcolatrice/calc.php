<?php
  /**
  ** Write here the php script to manage the calculator
  */
?>
<!DOCTYPE html>
<html>
  <head><title>PHP Calculator</title></head>
  <style type="text/css">
    * { box-sizing: border-box; }
    form{
      width:400px;
      padding:10px;
    }
    .result{
      width:380px;
      border:1px solid #222;
      text-align: right;
      padding:3px;
    }
    input[name=number]{
      margin-top:5px;
      width:300px;

    }
    select{
      width:70px;
    }
    .button-group{
      margin-top:10px;
      display: flex;
      width:100%;
      justify-content: space-between;
    }
    .button{
      display: inline-block;
      color: #222;
      cursor: pointer;
      text-decoration: none;
      width:250px;
      height:30px;
      white-space: pre;
      border:1px solid #333;
      background-color: #999;
      text-align: center;
    }
    a.button{
      width:50px;
      align-self: flex-end;
    }
    .button:active{
      background-color: #444;
      border: 1px solid #777;
    }
  </style>
  <body>
    <h1>PHP calculator</h1>
    <form action="" method="post">
      <div class="result"><?php echo "0"; ?></div>
      <input type="text" name="number" />
      <select name="operation">
        <option value="+">+</<option>
        <option value="-">-</<option>
        <option value="*">*</<option>
        <option value="/">/</<option>
      </select>
      <div class="button-group">
        <input class="button"  type="submit" name="Calc" />
        <a class="button" href="?reset=true">CA</a>
      </div>
    </form>
  </body>
</html>
