<?php
header('content-type:text/html;charset=utf-8');
$n=5;//全局变量
function fun1(){
  //引入全局变量
  //1.使用global
  //global $n;
  //2.使用$GLOBALS['n']


  echo "我在函数体中调用全局变量n,它的值是：",$GLOBALS['n'];
  $GLOBALS['n']++;
}
fun1();
echo "<hr>";
echo $n;//6,全局变量可以在函数体内被改变
