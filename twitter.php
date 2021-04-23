<?php
//twitter
$tweet = [
    'user_name' => '山田',
    'text' => '今日のランチはなに食べようか？',
    'created' => '2021-04-14 15:20:23',
];

$tweets = [
    [
        'user_name' => '持田',
        'text' => '初めてのツイートです。',
        'created' => '2021-04-14 15:20:23',
    ],
    [
        'user_name' => '山田',
        'text' => '今日のランチはなに食べようか？',
        'created' => '2021-04-14 15:20:23',
    ],
    [
        'user_name' => '武',
        'text' => 'めっちゃ暑いです。',
        'created' => '2021-04-14 16:10:23',
    ],
    [
        'user_name' => '岡田',
        'text' => 'PHPの勉強してます。',
        'created' => '2021-04-14 18:30:23',
    ],
];

foreach ($tweets as $tweet) {
    echo "@" . $tweet['user_name'] . "<br>";
    echo $tweet['text'] . "<br>";
    echo $tweet['created'] . "<br>";
    echo "--------------------<br>";
}
