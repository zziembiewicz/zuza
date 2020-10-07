<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    poczatek pliku
    <?php
    echo '<br>include<br>';
  	include './3_1file.php'; //wyswirtla dalsza czesc strony pomimo bledu
  	include_once './3_1file.php'; //powoduje ze plik wiecej razy sie nie otworzy
  	echo '<br>require<br>';
  	require './3_1file.php'; // powoduje fatal error i nie wyswietla dalszej czesci strony
  	require_once './3_1file.php';

     ?>
     koniec pliku
  </body>
</html>
