<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,intial-scale=1.0">
  <meta http-equiv="X-UA-Comatible" content="ie-edge">
  <title>Document</title>
</head>
<body>
  <h1>简易计算器</h1>
  <form action="onetest.php" method="post">
    a:<input type="text" name="num1" placeholder="请输入第一个数字">
    op:<select class="" name="op">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="%">%</option>
    </select>
    b:<input type="text" name="num2" placeholder="请输入第二个数字">
    <input type="submit" name="click" value="计算">
  </form>
</body>
</html>
<?php
error_reporting(E_ALL&~E_NOTICE);
if($_POST['click']){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['op'];
    if(is_numeric($num1)&&is_numeric($num2)){
        switch($op){
            case '+':echo "{$num1}{$op}{$num2}=".$num1+$num2."<br/>";break;
            case '-':echo "{$num1}{$op}{$num2}=".$num1-$num2."<br/>";break;
            case '*':echo "{$num1}{$op}{$num2}=".$num1*$num2."<br/>";break;
            case '/':
                if($num2)
                    echo "{$num1}{$op}{$num2}=".$num1/$num2."<br/>";
                else{ exit("0不能当做除数");}
                break;
            case '%':echo $num1%$num2."<br/>";break;
            default:
                echo "非法操作";
                break;
        }
    }
}
?>
