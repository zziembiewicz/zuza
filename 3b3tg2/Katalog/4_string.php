<?php
$text =<<<T
zsl - Zespół
Szkół
Łączności<br>
T;
echo $text;
echo nl2br($text);

$name = 'jaNUsZ';
//zmiana na małe litery (sanityzacja kodu)
$name = strtolower($name);
echo $name;   //janusz

 $name = 'KrysTYna';
echo strtoupper($name);     //KRYSTYNA

$name= 'aNNa nOWak';
echo ucfirst($name);    //ANNa nOWak

$name= 'aNNa nOWak';
echo ucwords($name);    //ANNa nOWak

echo ucwords(strtolower($name)); //Anna nOWak

//lorem ipsum
$lorem =<<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;
echo $lorem;
$col = wordwrap($lorem, 40, '<br>');
echo $col

//czyszczenie zawarosci bufora
ob_clean();

//usuwanie bialych znakow
$name='anna';
$name1=' anna  ';
echo 'dlugosc $name: ',strlen($name); //4
echo 'dlugosc $name1: ',strlen($name); //7

echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)); //4

echo strlen($name1);//7
$name1=trim($name1);
echo strlen($name1);//4

//przeszukiwanie ciągów znaków
$address="Poznań, ul. Polna 2, tel. (61)123-45-67";
$search=strstr($address, 'tel');
echo "<br>$search<br>"; //tel. (61)123-45-67

$address="Poznań, ul. Polna 2, tel. (61)123-45-67";
$search=strstr($address, 'tel', true);
echo '<br>dlugosc zmiennej $search: ',strlen($search); //22 znaki, polskie znaki liczy jak 2
echo "<br>$search<br>"; //Poznań ul. Polna 2

$address="Poznań, ul. Polna 2, tel. (61)123-45-67";
$search=stristr($address, 'Tel');
echo "<br>$search<br>"; //tel. (61)123-45-67

echo strstr('zsl@gmail.com','@'); //@gmail.com
echo strstr('zsl@gmail.com',64); //@gmail.com

$domain=substr(strstr('zsl@gmail.com','@',1));
echo $domain; //gmail.com
?>
