<?php
$jsonFile = "next_data.json";
$htmlBlock = "";
$titleText = "新港彩开奖号码";
if(file_exists($jsonFile)){
    $data = json_decode(file_get_contents($jsonFile),true);
    $serverTime = time();
    $publishTime = strtotime($data["publish_time"]);
    //读取期号
    $qihao = $data["qihao"];
    $titleText = "新港彩开奖号码".$qihao;

    if($serverTime >= $publishTime){
        $colorArr = [
            "red"=>"#e6212a",
            "blue"=>"#2978e5",
            "green"=>"#28b946",
            "grey"=>"#cccccc"
        ];
        $htmlBlock .= '<div class="num-row">';
        //输出6个平码
        for($i=1;$i<=6;$i++){
            $key = "pingma$i";
            $num = $data[$key]["num"];
            $sx = $data[$key]["sx"];
            $bg = $colorArr[$data[$key]["color"]];
            $htmlBlock .= <<<HTML
            <div class="num-box" style="background:{$bg}">
                <div class="num-text">{$num}</div>
                <div class="sx-text">{$sx}</div>
            </div>
HTML;
        }
        $htmlBlock .= '<span class="plus-sign">+</span>';
        //输出特码
        $teNum = $data["temma"]["num"];
        $teSx = $data["temma"]["sx"];
        $teBg = $colorArr[$data["temma"]["color"]];
        $htmlBlock .= <<<HTML
            <div class="num-box" style="background:{$teBg}">
                <div class="num-text">{$teNum}</div>
                <div class="sx-text">{$teSx}</div>
            </div>
            <div class="line-divider"></div>
HTML;
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum‑scale=1.0">
<title>94552网</title>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: "Microsoft Yahei", sans-serif;
    background-color: #ffffff;
    color: #000000;
    min-height: 100vh;
    overflow-y: auto;
}
.top-banner {
    width: 100%;
    height: 120px;
    background: url("SHMOD.jpg") center/cover no-repeat;
    position: sticky;
    top: 0;
    z-index: 99;
}
.container {
    width: 100%;
    max-width:750px;
    margin: 0 auto;
    padding: 10px;
}
.red-title {
    background-color: #e6212a;
    color: #ffffff;
    text-align: center;
    padding:12px 0;
    font-size: 22px;
    font-weight: bold;
    margin:10px 0;
    border-radius:4px;
}
.content-box {
    padding: 0 5px 10px 5px;
    line-height:2;
    font-size:18px;
}
.line-divider{
    height:1px;
    background: #ccc;
    margin:6px 0;
}
.period-blue {
    color: #0044cc;
    font-weight: bold;
}
.num-row{
    display:flex;
    align-items:center;
    flex-flow: row nowrap;
    gap:3px;
    overflow-x:auto;
}
.num-box{
    width:72px;
    height:90px;
    border-radius:6px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    flex‑shrink:0;
}
.num-text{
    font-size:28px;
    color:#fff;
    font-weight:bold;
    line-height:1;
}
.sx-text{
    font-size:12px;
    color:#fff;
    margin-top:4px;
    line-height:1;
}
.plus-sign{
    font-size:30px;
    padding:0 4px;
    flex‑shrink:0;
}
</style>
</head>
<body>
<div class="top-banner"></div>
    <div class="container">
        <div class="red-title"><?php echo $titleText; ?></div>
        <div class="content-box">
            <?php echo $htmlBlock; ?>
        </div>

        <div class="red-title">澳门失恒♈五肖五码♈</div>
        <div class="content-box">
            <div><span class="period-blue">185期【五肖五码】</span>？00准</div>
            <div class="line-divider"> </div>
            <div>龙15-兔04-狗09-猴23-马37</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">184期【五肖五码】</span>01【马】错</div>
            <div class="line-divider"></div>
            <div>蛇02-龙15-鸡10-羊24-兔16</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">183期【五肖五码】</span>开24【羊】准</div>
            <div class="line-divider"></div>
            <div>蛇14-鼠31-猴23-羊24-马01</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">182期【五肖五码】</span>开41【虎】准</div>
            <div class="line-divider"></div>
            <div>蛇02-兔04-鼠19-猪08-虎41</div>
            <div class="line-divider"></div>
        </div>
       
         <div class="red-title">澳门失恒♈每日降赔♈</div>
        <div class="content-box">
            <div><span class="period-blue">185期【每日降赔】</span>0000准</div>
            <div class="line-divider"></div>
            <div>正在更新中……</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">184期【每日降赔】</span>01【马】错</div>
            <div class="line-divider"></div>
            <div>14.15.18.19.21.41</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">183期【每日降赔】</span>24【羊】错</div>
            <div class="line-divider"></div>
            <div>10.14.15.18.19.21.26</div>
            <div class="line-divider"></div>
            <div><span class="period-blue">182期【每日降赔】</span>开