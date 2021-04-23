<?php
$omikuji = array('大吉', '中吉', '小吉');
$todays = rand(0, count($omikuji) - 1);
$result = $omikuji[$todays];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コアラおみくじ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="omikuji-box">
        <h1>今日の運勢</h1>
        <p>今日のあなたの運勢は<span><?= $result; ?></span>です。</p>
        <p>今日も1日がんばりましょう。</p>
    </div>
</body>

</html>