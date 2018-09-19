<?php
//告诉浏览器以什么样的编码方式解析什么类型的文档，防止中文乱码
header('content-type:text/html;charset=utf-8');



//布尔型变量例子
$bool=true;
var_dump($bool);//boolean true
$bool=TRUE;//跟上面没区别
var_dump($bool);//boolean true

//if语句
$dream=true;
if($dream){
  echo "在深圳宝安中心买一套单身公寓";
}
else {
  echo "老老实实敲代码";
  // code...
}


 ?>
