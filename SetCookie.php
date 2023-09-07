<?php
setcookie(
    'siteName',
    'mjavadasadi.ir',
    [
        'expires'=>time()+3600,
        'domain'=>'localhost',
        'path'=>'/',
        'httponly'=>true,
        "secure"=>true
    ]
    );



var_dump(isset($_COOKIE['siteName']),$_COOKIE);


//برای پاک کردن کوکی شما باید زمان باطل شدن رو کمتر از زمان حالتون بدید به شکل زیر
// setcookie(
//     'siteName',اسم همون کوکی مد نظر
//     '', مهم نیست چه مقداری باشه
//     [
//         'expires'=>time()-3600, کم کردن زمان حالتون
//     ]
//     );
