<?php
header("content-type:text/html;charset=utf-8");
$id=2;
$username="king";
$email="3799@qq.com";
//字符串写法
$str="<table border='1' width=80% bgcolor=\"pink\">
  <tr>
    <td>编号</td>
    <td>姓名</td>
    <td>邮箱</td>
  </tr>
  <tr>
    <td>{$id}</td>
    <td>{$username}</td>
    <td>{$email}</td>
  </tr>
</table>
";
// echo $str,"<hr/>";

//通过heredoc写法
$string=<<<EOF
  this is a test.
  <h1 align="center">Hello world.<small>power by king</small></h1>
EOF;
//echo $string;
$string=<<<TABLE
<table border='1' width=80% bgcolor="pink">
  <tr>
    <td>编号</td>
    <td>姓名</td>
    <td>邮箱</td>
  </tr>
  <tr>
    <td>{$id}</td>
    <td>{$username}</td>
    <td>{$email}</td>
  </tr>
</table>
TABLE;
//echo $string;

//nowdoc例子 相当于单引号，所以变量不解析
$str2=<<<'tb'
<table border='1' width=80% bgcolor="pink">
  <tr>
    <td>编号</td>
    <td>姓名</td>
    <td>邮箱</td>
  </tr>
  <tr>
    <td>{$id}</td>
    <td>{$username}</td>
    <td>{$email}</td>
  </tr>
</table>
tb;
//echo $str2;

//随堂测试
$str3=<<<EOF
<table width=300px height=300px>
<tr>
  <td bgcolor="pink"></td>
  <td bgcolor="pink"></td>
  <td bgcolor="green"></td>
</tr>
<tr>
  <td bgcolor="yellow"></td>
  <td></td>
  <td bgcolor="green"></td>
</tr>
<tr>
  <td bgcolor="yellow"></td>
  <td bgcolor="black"></td>
  <td bgcolor="black"></td>
</tr>
</table>
EOF;
echo $str3;
