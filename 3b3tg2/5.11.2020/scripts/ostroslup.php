<?php
if (isset($_POST['a'], $_POST['h'])){
    $a=$_POST['a'];
    $b=$_POST['h'];
    }
function P_Ostro($a,$h){
	return number_format(round((pow($a,2)+3*$a*$h),2),2,'.','');
}
function O_Ostro($a,$h){
	return number_format(round((pow($a,2)*$h/3),2),2,'.','');
} ?>
