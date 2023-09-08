<?php

// با زدن پسورد اشتباه میتونید خطا رو ببینید
$connect =mysqli_connect('localhost:3306','root','');

if (!$connect) {
    echo'CONNECT ERR : '.mysqli_connect_error();
    exit;
}

echo('CONNECTED ');
mysqli_close($connect);

// var_dump($connect);

?>