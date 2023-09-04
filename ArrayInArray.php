<?php

$users = [
    [
        'name' => 'javad',
        'age' => '27',
    ],
    [
        'name' => 'mohsen',
        'age' => '30',
    ],
    [
        'name' => 'ahmad',
        'age' => '12',
    ],
    [
        'name' => 'asghar',
        'age' => '54',
    ],
];

//بیرون کشیدن تک تک آیتم های لیست
foreach ($users as $user) {
    foreach ($user as $u) {
        echo $u . '<br>';
    }
}

//برگرداندن یک قسمت از آیتم ها
foreach ($users as $user) {
     echo $user['name']. '<br>';
}
//یا
var_dump(array_column($users,'name'));

//فیلتر کردن ایتم در یوزر ها

$filterUser= array_filter($users,fn($user)=>$user['age']>=30);
var_dump($filterUser);


?>

