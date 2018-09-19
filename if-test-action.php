<?php
header("content-type:text/html;charset=utf-8");
$number=$_POST['number'];
if($number%2==1){
  echo "{$number}是奇数"."<br/>";
}else {
  echo "{$number}是偶数"."<br/>";
}


 ?>
