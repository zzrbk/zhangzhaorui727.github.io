<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
		<title>张钊睿的博客</title>
	<link rel="stylesheet" href="template">
</head>
<body>
<!-- 开源的你想看就看吧 -->
	<div class="bg-img"></div>
	<main>
		<h1>欢迎来到我的博客！</h1>
        <p>站内文章</p>
        <a href="https://zzrbk.rth2.xyz/zzrwz">文章</a>
        <p>站内工具</p>
        <a href="https://zzrbk.rth2.xyz/time.html">时钟</a> 
        <a href="https://zzrbk.rth2.xyz/404.html">跳转404页面</a> 
        <a href="https://zzrbk.rth2.xyz/cesu.html">测试延迟</a> 
		<a href="https://zzrbk.rth2.xyz/codemaoji.html">编程猫记</a>
        <a href="https://zzrbk.rth2.xyz/calls.html">远程流</a>
        <a href="https://zzrbk.rth2.xyz/datashangchuan.html">文件上传(已烂尾)</a>
		<a href="https://zzrbk.rth2.xyz/picture/index.html">图片下载</a>
		<a href="https://zzrbk.rth2.xyz/mp4/微软我真的好喜欢你啊！！！.mp4">小视频下载</a>
       <p>站外链接</p>
	    <a href="https://www.locyanfrp.cn/#home">乐青映射</a>
		  <a href="https://zzrbk.rth2.xyz/calls-huiyi.html">公共会议室</a>
	    <a href="https://lieri.rth2.xyz/Software">winver的软件下载专区</a>
		<a href="https://baidu.com">百度一下</a>
        <a href="https://zzrbk.rth2.xyz/rili.html">日历</a>
        <a href="https://qq.com">腾讯新闻</a>   
		<a href="https://lieri.rth2.xyz">友情链接（winver的小破站）</a>

		<!-- 嵌入 tongji.php -->
    <?php
const DATA_FILENAME = "md5.json";

// 获取设备信息（浏览器类型和操作系统）
$device = $_SERVER['HTTP_USER_AGENT'];

// 生成唯一的用户标识符（设备信息）
$user_id = md5($device);

// 读取数据库
if (file_exists(DATA_FILENAME)) {
    $data = json_decode(file_get_contents(DATA_FILENAME), true);
    if (!is_array($data)) {
        // 如果文件内容不是有效的 JSON 格式，初始化为空数组
        $data = [];
    }
} else {
    // 如果文件不存在，初始化为空数组
    $data = [];
}

// 如果用户不存在于数据库中，初始化为 0
if (!isset($data[$user_id])) {
    $data[$user_id] = ['name' => '您', 'visits' => 0];
}

// 更新数据库的值
$data[$user_id]['visits']++;

// 写入数据库
file_put_contents(DATA_FILENAME, json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
?>
    <p>欢迎<?php echo htmlspecialchars($data[$user_id]['name']); ?>！您使用此设备访问了本站 <?php echo $data[$user_id]['visits']; ?> 次。</p>
			
<p>你可以使用以下的必应搜索框，用微软必应的引擎搜索，最终点击必应搜索会跳转到必应的搜索页面</p> 

<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center; /* 使搜索框居中显示 */
            margin-top: 50px; /* 顶部留白 */
        }
        .search-container {
            display: flex;
            justify-content: center; /* 使输入框和按钮在一行上并居中 */
            align-items: center; /* 垂直居中 */
        }
        input[type="text"] {
            width: 300px;
            padding: 10px;
            margin-right: 5px; /* 与按钮之间留有间隔 */
        }
        input[type="submit"] {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

	<!-- 必应搜索框 -->
<div class="search-container">
    <form action="https://www.bing.com/search" method="get" target="_blank">
        <input type="text" name="q" placeholder="请输入搜索内容">
        <input type="submit" value="必应搜索">
    </form>
</div>
<div id=\"footer\">
<p>网站管理员微信号: ZHANGZHANRUI111</p>
	<a href="https://b23.tv/X7rttZz">网站备案号:哔 - 114514号</a>
    <a href="https://zzrbk.rth2.xyz/moe.html">萌备20250666/20250527</a>
<p>&copy 2022-2025 张钊睿</p>
</div>
	</main>
</body>
</html>
