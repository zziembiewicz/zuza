<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>dane uzytkownika</h4>
    <?php
    $sex=$_GET['sex'];
    switch($sex){
  case 'm':
  $color='male';
  break;
  case 'f':
  $color='female';
  break;}
  if(isset($_GET['height'])){ //skońcyc
$reg='regulamin zatwierdzony';
  }
  else{
    $reg='prosze zatwierdzic regulamin';
  }
  ?>
  </body>
</html>
