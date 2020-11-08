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
    <td><div class="baner">Walec<div></td>
    </tr>
    <tr>
    <td><img src=walec.jpg></td>
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
    <td><input type="number" name="r"  placeholder="r"value="<?php echo$_POST['r']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="number" name="h"  placeholder="h" value="<?php echo$_POST['h']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    <tr>
    <td>
    <?php
    echo walec()
    ?>
    </td>
    </tr>
    <tr>
    <td><a href="3_zadanie_formularz_geometria.php">Powrót do strony głównej</a></td>
    </tr>
    </form>
    </table>
    <?php
    function walec(){
    if (isset($_POST['r'],$_POST['h'])){
      if (($_POST['r']==''||$_POST['h']=='')){
        echo "<br><h4>Dane podane w formularzu muszą być liczbami!</h4>";
    }
    else if($_POST['r']<=0 || $_POST['h']<=0){
            echo "<br><h4>Liczby podane w polach powinny być dodatnei</h4>";
        }
        else{
        require_once('./scripts/walec.php');
        echo '<ul>';
        echo '<li>Pole podstawy:'.P_Wal($r).'cm<sup>3</sup></li>';
        echo '<li>Pole powierzchni bocznej:'.Pb_Wal($r,$h).'cm<sup>3</sup></li>';
        echo '<li>Pole powierzchni całkwitej:'.Pc_Wal($r,$h).'cm<sup>3</sup></li>';
        echo '<li>Objętość:'.Obj_Wal($h,$r).'cm<sup>3</sup></li>';
        echo '</ul>';
        }
    }
    }
    ?>
</body>
</html>
