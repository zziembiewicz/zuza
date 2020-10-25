<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$imp=[empty($_POST['FN']), empty($_POST['LN']),
empty($_POST['Ad1']), empty($_POST['State']),
empty($_POST['City']), empty($_POST['PC']),
empty($_POST['Phone']) ];

if(in_array(true, $imp)){
?>
<h4>Nie wypełniłeś wymaganych pól</h4>
<button onclick="goBack()">Powró do formularza</button>

<?php
}

else{

switch($_POST['account']){
    case'Personal':
    $Account='Personal Account';
    break;

    case'Business':
    $Account='Business Account';
    break;
}

 $name=$_POST['FN'];
 $surname=$_POST['LN'];

 $country=$_POST['country'];
 switch ($country){
     case'p':
         $country='Polska';
     break;

     case'u':
         $country='USA';
     break;

     case'g':
         $country='Grecja';
     break;
 }

 $Add1=$_POST['Ad1'];
 $Add2=$_POST['Ad2'];

 $city=$_POST['City'];
 $PC=$_POST['PC'];

 $state=$_POST['State'];
 switch ($state){
     case'w':
         $country='Wielkopolskie';
     break;

     case'z':
         $country='Zachodniopomorskie';
     break;

     case'm':
         $country='Małopolskie';
     break;
 }

        $ph=$_POST['Phone'];
        $PC = preg_replace('/^([0-9]{2})([0-9]{3})$/', '$1-$2', $PC);
        $name2=ucwords(strtolower(trim("$name")));
        $surname2=ucwords(strtolower(trim("$surname")));

        echo<<<DATA
        <h4>Dane użytkownika</h4>
        Account Type: $Account<br>
        First name and Last name: $name2 $surname2 <br>
        Coutry: $country <br>
        Adrress 1: $Add1<br>
        Adrress 2: $Add2<br>
        Postal Code and City: $PC $city <br>
        State: $state <br>
        Phone Number: $ph<br>
    DATA;
    }
?>
<script>
function goBack() {
  history.back();
}
</script>
</body>
</html>
