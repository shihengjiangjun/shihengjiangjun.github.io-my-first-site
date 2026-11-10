//数据库连接配置
$host = "sql104.infinityfree.com";    
$db_user = "if0_42357252";       
$db_pwd = "YVkeCtgzUGV8Uop"; 
$db_name = "if0_42357252_shmod";

//创建数据库连接
$conn = mysqli_connect($host,$db_user,$db_pwd,$db_name);

//设置字符集为utf‑8，防止中文乱码
mysqli_set_charset($conn,"utf8");

//判断连接失败就提示
if(!$conn){
    exit("数据库连接失败：".mysqli_connect_error());
}
?>
