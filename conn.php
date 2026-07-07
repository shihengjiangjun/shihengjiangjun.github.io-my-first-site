<?php
//数据库连接配置
$host = "127.0.0.1";     //数据库地址，本地数据库填127.0.0.1；远程库填写对方服务器公网IP
$db_user = "root";       //数据库用户名，默认root
$db_pwd = "填写你的MySQL密码"; //自己安装数据库设置的密码
$db_name = "lottery_data";//之前创建的数据库名称，固定lottery_data

//创建数据库连接
$conn = mysqli_connect($host,$db_user,$db_pwd,$db_name);

//设置字符集为utf‑8，防止中文乱码
mysqli_set_charset($conn,"utf8");

//判断连接失败就提示
if(!$conn){
    exit("数据库连接失败：".mysqli_connect_error());
}
?>
