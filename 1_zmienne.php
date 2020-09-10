<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name='janusz';
    $surname='nowak';
    echo 'imie: $name <br>';
    echo "imie: $name <br>";
// konkatenacja to: .
    echo "nazwisko: $surname".'<hr>';

// typy danych
//boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic nie wyświetli

//intiger
$bin = 0b1010; //10
$oct = 010; //8
$dec = 20; //20
$hex = 0xB; //11
echo $hex,'<hr>';

//składnia heredoc
$name='krystyna';
$text=<<< ETYKIETA
  imię: $name<br>
ETYKIETA;
echo $text;

echo<<< E
Herdoc 2<br>
  imię: $name<br>

E;

//dkładnia nowdoc
echo<<< 'E'
nowdoc<br>
  imię: $name<br>

E;

$city='poznan';
echo "nazwa zmiennej: \$city, wartość:$city";

     ?>
  </body>
</html>
