<?php
function Pole_Ostro($a,$h){
	return number_format(round((pow($a,2)+3*$a*$h),2),2,'.','');
}
function Obje_Ostro($a,$h){
	return number_format(round((pow($a,2)*$h/3),2),2,'.','');
} ?>
