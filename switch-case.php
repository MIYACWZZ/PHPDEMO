<?php
//年月日 星期

// header("content-type:text/html;charset=utf-8");
// date_default_timezone_set('PRC');// Asia/Shanghai
// echo date("Y年m月d日 H:i:s");

date_default_timezone_set('PRC');
header("content-type:text/html;charset=utf-8");
echo date("Y-m-d H:i:s");
$h=date('h');

if($h>=5&&$h<10){
    echo "早上好";
}elseif($h>=10&&$h<14){
    echo "中午好";
}elseif($h>=14&&$h<18){
    echo "下午好";
}elseif($h>=18&&$h<21){
    echo "晚上好";
}else{
    echo "睡觉时间";
}
 ?>
