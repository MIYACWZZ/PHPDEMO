<?php
header("content-type:text/html;charset=utf-8");
if(!$_POST):

?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="test.php" method="post">
            <table>
    <tr>
        <td>
           名称：
        </td>
        <td>
            <input type="text" name="username" id="" placeholder="请输入合法用户名...">
        </td>
    </tr>
    <tr>
        <td>
            密码：
        </td>
        <td>
            <input type="text" name="password" >
        </td>
    </tr>
    <tr>
      <td>
          邮箱：
      </td>
      <td>
          <input type="text" name="email" >
      </td>
    </tr>
    <tr>
      <td>
        <input colspan="2" type="submit" value="立即注册">
      </td>
    </tr>
</table>
        </form>
    </body>
</html>
<?php
else:
  echo "名称：",$_POST["username"],"<br/>";
  echo "名称：",$_POST["password"],"<br/>";
  echo "名称：",$_POST["email"],"<br/>";
endif;
?>
