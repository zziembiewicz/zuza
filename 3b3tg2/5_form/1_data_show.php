<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dane uzytkownika</title>
  </head>
  <body>
    <h4>dane z formularza</h4>
    <?php
  echo '<pre>',print_r($_GET),'</pre>';
  $pass=$_GET['pass'];
  $color=$_GET['color'];
  switch($color){
case 'r':
$color='czerwony';
break;
case 'g':
$color='zielony';
break;
case 'b':
$color='niebieski';
break;
  }
  if(isset($_GET['regulamin'])){
$reg='regulamin zatwierdzony';
  }
  else{
    $reg='prosze zatwierdzic regulamin';
  }
  echo<<<DATA
  login: $_GET[login]<br>
  hasło: {$_GET['pass']}<br>
  hasło: $pass<br>
  ulubiony kolor: $color<br>
  $reg
  DATA;

     ?>
  </body>
</html>
