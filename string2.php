<?php
header('content-type:text/html;charset=utf-8');
//对字符串做增删改查操作
$string = "abcdefg";
//查找
echo $string{0},"<br/>";
//修改  只能一个字符替换一个字符
$string{1}="a";
echo $string,"<br/>";//aacdefg

$string="abc";
$string{0}="hello";
echo $string,"<br/>";//hbc ,只会修改到一个字符

$string="你好";
var_dump($string);//每个汉字三个字节，所以“你好”是6个字节。length=6

//删除
//相当于拿空字符串替换
$string="abcd";
$string{2}='';//空字符串
echo '<hr/>',$string,'<br/>';//abd
var_dump($string);//ab?d (length=4)

//添加
$string="abc";//0 1 2
$string{4}='e';
echo "<br/>",$string;//abc e
echo '<br/>';
var_dump($string);//abc e (length=5)
echo '<hr>','随堂练习';

//test
$string ='king';
//1.输出首字母
echo $string{0},"<br/>";
//2.将字符串中n变成o
$string{2}='o';
echo $string,"<br/>";
//3.将字符串中i删除掉
$string{1}='';
echo $string,"<br/>";
//4.在字符串末尾添加一个！
$string{4}='!';
echo $string,"<br/>";
var_dump($string);//k?og! (length=5)
