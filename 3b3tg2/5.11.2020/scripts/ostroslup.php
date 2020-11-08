<?php
if (isset($_POST['a'],$_POST['h'])){
    $a=$_POST['a'];
    $h=$_POST['h'];
    }
function Pole_O($a,$h){
	return number_format(round((pow($a,2)+3*$a*$h),2),2,'.','');
}
function Obj_O($a,$h){
	return number_format(round((pow($a,2)*$h/3),2),2,'.','');
}
?>
