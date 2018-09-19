<?php
//字符连接符 例子
echo 'a'.'abc'.'<br/>';

//随机数 四个不同数字的验证码

echo "<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
echo "<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
echo "<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";
echo "<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(0,9)."</span>";

$a="<span style='color:rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255).")'>".mt_rand(1,9)."</span>";
echo '<h1>'.$a.'</h1>';

 ?>
