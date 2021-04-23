<?php
define("CHAT", "chat.txt");
date_default_timezone_set('Asia/Tokyo');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['message'] . "," . date('m月d日 H時i分s秒') . "\n";
    file_put_contents(CHAT, $text, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易チャット</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .wrap {
            width: 600px;
            margin: 0 auto;
            padding: 20px 0 100px 0;
            background: #f1f1f2;
            min-height: 100vh;
        }

        li {
            position: relative;
            padding: 10px 20px;
            margin: 0 10px 10px 10px;
            background-color: #fff;
            border-radius: 5px;
        }

        span {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            font-size: 12px;
            color: #ccc;
        }

        form {
            position: fixed;
            top: 10%;
            left: 5vw;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <ul>
        </ul>
    </div>
    <form action="chat.php" method="post">
        <input type="text" name="message">
        <button type="submit">送信</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $.ajax({
                    url: 'chat.txt',
                })
                .done(function(data) {
                    data.split('\n').forEach(function(chat) {
                        const post_text = chat.split(',')[0];
                        const post_time = chat.split(',')[1];
                        if (post_text) {
                            const li = `<li>${post_text}<span>${post_time}</span></li>`;
                            $('ul').append(li);
                        }
                    });
                });
        });
    </script>



</body>

</html>