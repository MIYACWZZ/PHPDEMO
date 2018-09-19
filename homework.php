<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  <meta http-equiv="X-UA-Comatible" content="ie-edge">
  <title>Document</title>
</head>
<form action="homework.php" method="post">
  <input type="text" name="hang" placeholder="请输入要打印的行数">
  <br/>
  <input type="submit" name="jinzita" value="金字塔">
  <input type="submit" name="ling" value="空心菱形">
</form>
</html>

<?php

echo "<hr/>";
// error_reporting(E_ALL&~E_NOTICE);
//金字塔 h：行数; 变量使用前用isset检查变量是否存在
if(isset($_POST['jinzita'])){
  $h=$_POST['hang'];
  if($h<0){
    exit("非法行数");
  }
  //i：行号
  for($i=1;$i<=$h;$i++){
    for($k=$h-$i;$k>=1;$k--){
      //echo "&nbsp;";
      echo "<span style='color:#fff;'>*</span>";
    }
    for($j=1;$j<=2*$i-1;$j++){
      echo "*";
    }
    echo "<br/>";
  }
}
//空心菱形 h：行数
if(isset($_POST['ling'])){
  $h=$_POST['hang'];
  if($h<0){
    exit("非法行数");
  }
  // i：行号
  //上半部分
  for($i=1;$i<=$h;$i++){
    for($k=$h-$i;$k>=1;$k--){
      echo "&nbsp;";
    }
    for($j=1;$j<=2*$i-1;$j++){
      if($j==1||$j==2*$i-1){
        echo "*";
      }
      else {
        echo "&nbsp;";
      }
    }
    echo "<br/>";
  }
  //下半部分
  for($i=$h;$i>0;$i--){
    for($k=$h-$i;$k>=1;$k--){
      echo "&nbsp;";
    }
    for($j=1;$j<=2*$i-1;$j++){
      if($j==1||$j==2*$i-1){
        echo "*";
      }
      else {
        echo "&nbsp;";
      }
    }
    echo "<br/>";
  }
}
?>
