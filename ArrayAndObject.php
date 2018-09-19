<?php
//设置错误级别，显示所有错误（E_ALL）除了NOTICE。因为它不是错误。
error_reporting(E_ALL&~E_NOTICE);//&~:并且 除了



//测试复合类型
//声明一个数组
$arr=array();
var_dump($arr);//array (size=0) empty
$arr=array(123,'king',12.12,true);
var_dump($arr);/*
array (size=4)
  0 => int 123
  1 => string 'king' (length=4)
  2 => float 12.12
  3 => boolean true
*/

//声明一个对象
$obj=new StdClass();
var_dump($obj);//object(stdClass)[1]

//声明Resource
$handle=fopen('./test.html','r');//打开test.html，以读的方式
var_dump($handle);//resource(3, stream)

//测试 空

//未声明的变量直接使用
var_dump($notExistsVar);/*
null
*/

//将一个变量赋值为null
$var=NULL;
var_dump($var);//null

//用unset()销毁的变量也是null
$var2=123;
unset($var2);
var_dump($var2);//NULL

//unset 多个变量
echo '<hr/>';
$a=$b=$c='king';
unset($a,$b,$c);
var_dump($a,$b,$c);

//
echo '<hr/>';
echo true;
//
echo '<hr/>';
