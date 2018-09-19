<?php
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$op=$_POST['op'];
$sum;
switch($op){
  case '+':$sum=$num1+$num2;break;
  case '-':$sum=$num1-$num2;break;
  case '*':$sum=$num1*$num2;break;
  case '/':$sum=$num1/$num2;break;
  case '%':$sum=$num1%$num2;break;
}
echo $num1.$op.$num2."=".$sum."<br/>";

 ?>
