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



var_dump(isset($_COOKIE['siteName']),$_COOKIE)





?>