<?php
$save_file = "next_data.json";
$msg = "";
//波色号码库
$red_odd  = [1,7,13,19,23,29,35,45];
$red_even = [2,8,12,18,24,30,34,40,46];
$blue_odd = [3,9,15,25,31,37,41,47];
$blue_even= [4,10,14,20,26,36,42,48];
$green_odd= [5,11,17,21,27,33,39,43,49];
$green_even=[6,16,22,28,32,38,44];
//号码‑生肖对照表
$sx_map = [
    1=>"马",2=>"蛇",3=>"龙",4=>"兔",5=>"虎",6=>"牛",
    7=>"鼠",8=>"猪",9=>"狗",10=>"鸡",11=>"猴",12=>"羊",
    13=>"马",14=>"蛇",15=>"龙",16=>"兔",17=>"虎",18=>"牛",
    19=>"鼠",20=>"猪",21=>"狗",22=>"鸡",23=>"猴",24=>"羊",
    25=>"马",26=>"蛇",27=>"龙",28=>"兔",29=>"虎",30=>"牛",
    31=>"鼠",32=>"猪",33=>"狗",34=>"鸡",35=>"猴",36=>"羊",
    37=>"马",38=>"蛇",39=>"龙",40=>"兔",41=>"虎",42=>"牛",
    43=>"鼠",44=>"猪",45=>"狗",46=>"鸡",47=>"猴",48=>"羊",
    49=>"马"
];


function getColor($num,$red_odd,$red_even,$blue_odd,$blue_even,$green_odd,$green_even){
    if(in_array($num,$red_odd)||in_array($num,$red_even)) return "red";
    elseif(in_array($num,$blue_odd)||in_array($num,$blue_even)) return "blue";
    elseif(in_array($num,$green_odd)||in_array($num,$green_even)) return "green";
    else return "grey";
}

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $dataList = [];
    //新增期号
    $qihao = trim($_POST["qihao"]);
    $dataList["qihao"] = $qihao;
    //6个平码
    for($i=1;$i<=6;$i++){
        $num = intval($_POST["p$i"]);
        $color = getColor($num,$red_odd,$red_even,$blue_odd,$blue_even,$green_odd,$green_even);
        $sx = $sx_map[$num];
        $dataList["pingma$i"] = ["num"=>sprintf("%02d",$num),"sx"=>$sx,"color"=>$color];
    }
    //特码
    $teNum = intval($_POST["te"]);
    $teColor = getColor($teNum,$red_odd,$red_even,$blue_odd,$blue_even,$green_odd,$green_even);
    $teSx = $sx_map[$teNum];
    $dataList["temma"] = ["num"=>sprintf("%02d",$teNum),"sx"=>$teSx,"color"=>$teColor];
    $dataList["publish_time"] = $_POST["pub_time"];

    file_put_contents($save_file, json_encode($dataList, JSON_UNESCAPED_UNICODE));
    $msg = "期号+7个号码数据保存完毕，到期自动展示";
}
?>
<!DOCTYPE html>
<html lang="zh‑CN">
<head>
<meta charset="utf‑8">
<title>开奖数据录入后台</title>
</head>
<body>
<h3>填写期号、6个平码+1个特码(1‑49，系统自动配色和生肖)</h3>
<?php if($msg) echo "<p style='color:green'>$msg</p>"; ?>
<form method="post">
    <p>开奖期号：<input type="text" name="qihao" placeholder="例如：188" required></p>
    <p>平码1：<input type="number" min="1" max="49" name="p1" required></p>
    <p>平码2：<input type="number" min="1" max="49" name="p2" required></p>
    <p>平码3：<input type="number" min="1" max="49" name="p3" required></p>
    <p>平码4：<input type="number" min="1" max="49" name="p4" required></p>
    <p>平码5：<input type="number" min="1" max="49" name="p5" required></p>
    <p>平码6：<input type="number" min="1" max="49" name="p6" required></p>
    <p>特码：<input type="number" min="1" max="49" name="te" required></p>
    <p>发布时间：<input type="datetime‑local" name="pub_time" required></p>
    <p><button type="submit">保存数据</button></p>
</form>
</body>
</html>
