<?php

$x=isset($_POST['x']);
$y=isset($_POST['y']);

if (isset($_POST["option"])){
   switch ($option){
        case'sum':
            function sum($x, $y):string{
                $result = $x + $y;
                return $result;
              }
        break;

        case'min':
            function min($x, $y):string{
                $result = $x - $y;
                return $result;
              }
        break;

        case'mul':
            function mul($x, $y):string{
                $result = $x * $y;
                return $result;
              }
        break;

        case'div':
            function div($x, $y):string{
              if(y==0)
              {
                echo "Do not divide by 0";
              }
              else
              {
                $result = $x / $y;
                return $result;

              }
            }
        break;

        default:
          echo "command not found";
    }
}

?>
