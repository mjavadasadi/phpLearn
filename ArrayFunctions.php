

<?php
$list = [
    'name' => 'mjavad',
    'family' => 'asadi',
];
$list2 = [
    'age' => 27,
    'web' => 'mjavadasadi.ir'
];
$list4=[1,2,3,4,5,6,7,8,9,10,10,13,2,5,4,3,2];

//طول یک لیست
echo count($list) . '<br>';
echo sizeof($list) . '<br>';


//آرایه بودن یک مقدار
echo is_array($list) . '<br>';


//بودن یک مقدار در آرایه
echo in_array('asadi', $list) . '<br>';


//اتصال دو آرایه به هم
$list3 = array_merge($list, $list2);


//گرفتن فقط 
//هاkey
print_r(array_keys($list3)).'<br>';


//گرفتن فقط 
// هاvalue
print_r(array_values($list3));


// چک کردن یک key در یک لیست
var_dump(array_key_exists('name',$list3));


//اضافه کردن به اخر لیست
array_push($list3,'nickName');
var_dump($list3);


//حذف کردن از اخر لیست
array_pop($list3);
var_dump($list3);


//حذف کردن از اول لیست
array_shift($list3);
var_dump($list3);


//عملیات
// بروی لیست map
print_r( array_map(fn($item)=>$item+2,$list4));


//استفاده رندوم از دیتای یک لیست
print_r(array_rand($list4));


//جا به جا کردن 
//key و value
var_dump(array_flip($list3));


// برعکس کردن آرایه
print_r($list4);
print_r(array_reverse($list4));


//و یکی کردن یک لیست و حذف مقادیر تکراری unic
var_dump(array_unique($list4));


//گرفتن یک مقدار از یک لیست
// var_dump(array_slice(list , az shomare index , tol aadadi ke lazeme));
var_dump(array_slice($list4,2,1));

















?>