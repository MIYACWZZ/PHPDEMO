<?php
header('content-type:text/html;charset=utf-8');
//字符串的例子
$username='king';

$email="31248178@qq.com";

$string='';//空字符串

var_dump($string);//string '' (length=0)

var_dump($username);//string 'king' (length=4)

echo "<hr/>";
echo 'this is a test<br/>';
echo "hello world<hr/>";

$username='king';
//多字符串 echo '','',$username;

//放单引号里
echo '$username';//$username
echo '<br/>';
//放双引号里
echo "$username";//king
echo "<hr/>";


echo 'he said "I\'am find"';//使用了转义字符
echo '\n';//单引号只解析 \\ \'

$var=123;
echo '<hr/>';
echo '$var的值为$var<br/>';//$var的值为$var
echo "\$var的值为$var";//$var的值为123

//PHP引擎会尽可能多的向后取合法字符，认为取得越多 变量的含义越明确
$username='king';
// echo "名称$username是我";//不合法 Notice: Undefined variable: username是我
echo "名称{$username}是我<br/>";//使用花括号 让变量扩成一个整体
echo "hahaha${username}是我！<br/>";
