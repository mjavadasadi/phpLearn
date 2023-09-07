<?php
session_start([
    'save_path'=>__DIR__.'/Sessions',
    'name'=>'mjavadasadi_ir'
    ]
);

$_SESSION['auth']=true;
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
}else{
    $_SESSION['counter']=0;
}

var_dump($_SESSION);


// با فراخوانی کد زیر هرچی که در فایل
//Sessions
//هست پاک میشود 


// session_destroy();

?>