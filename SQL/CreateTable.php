<?php

// با زدن پسورد اشتباه میتونید خطا رو ببینید
$link =mysqli_connect('localhost:3306','root','');

if (!$link) {
    echo'CONNECT ERR : '.mysqli_connect_error();
    exit;
}
//حذف دیتا بیس
// $SQL='DROP DATABASE mjavadasadi';
// ساخت دیتابیس
// $SQL='CREATE DATABASE mjavadasadi';
//فراخوانی دیتابیس
mysqli_select_db($link,'mjavadasadi');
//ساخت جدول
$SQL="create table users(id int AUTO_INCREMENT ,email VARCHAR(100) NOT NULL ,password VARCHAR(100) NOT NULL ,primary key (id))";

$result=mysqli_query($link,$SQL);
if ($result) {
   echo"query run";
   var_dump($result);
}else{
    
    echo'query Err :'.mysqli_error($link);
}
echo('CONNECTED ');
mysqli_close($link);



?>