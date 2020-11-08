<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
     margin: auto;
     border: 2px solid black;
}
.baner{
    font-weight: 900;
    font-size: 19px
}
hr{
    border: 1px solid black;
}
</style>
</head>
<body>
    <table>
    <form method="POST">
    <tr>
    <td><div class="baner">Sześcian<div></td>
    </tr>
    <tr>
    <td><img src=szescian.jpg></td>
    </tr>
    <tr>
    <td>
    <hr>
    </td>
    </tr>
    <tr>
    <td><div class="baner">Dane<div></td>
    </tr>
    <tr>
    <td><input type="number" name="a"  value="<?php echo$_POST['a']?>" placeholder="a" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    <tr>
    <td>
    <?php
    echo szesc()
    ?>
    </td>
    </tr>
    <tr>
    <td><a href="3_zadanie_formularz_geometria.php">Powrót do strony głównej</a></td>
    </tr>
    <form>
    </table>
    <?php
    function szesc(){
      if (isset($_POST['a'])){
          if (($_POST['a']=='')){
              echo "<br><h4>Podane dane muszą być liczbami!</h4>";
          }
          else if($_POST['a']<=0){
            echo "<br><h4>Podane liczby powinny być dodatnie</h4>";
        }
        else{
            require_once('./scripts/szescian.php');
        echo '<ul>';
        echo '<li>Pole:'. Pole_szesc($a).'cm<sup>2</sup></li>';
        echo '<li>Objętość:'.Obj_szesc($a).'cm<sup>3</sup></li>';
        echo '<li>Długość przekątnej:'.przek_szesc($a).'cm</li>';
        echo '<li>Promień kuli wisanej w sześcian: '.r_mal_kul($a).'cm</li>';
        echo '<li>Promień kuli opisaenej w sześcian: '.r_du_kul($a).'cm</li>';
        echo '</ul>';
        }
    }}
    ?>
</body>
</html>
