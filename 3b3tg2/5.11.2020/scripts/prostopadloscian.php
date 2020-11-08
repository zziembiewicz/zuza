<?php
if (isset($_POST['a'], $_POST['b'], $_POST['c'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    }

    function Pole_Prosto($a,$b,$c){
        return number_format(round(2*(($a*$b)+($a*$c)+($b*$c)),2),2,'.','');
    }
        function Obje_Prosto($a,$b,$c){
        return number_format(round(($a*$b*$c),2),2,'.','');
    }
        function Dlugo_Prosto($a,$b,$c){
        return number_format(round(sqrt(pow($a,2)+pow($b,2)+pow($c,2)),2),2,'.','');
    }
?>
