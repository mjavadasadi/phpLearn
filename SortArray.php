<?php

$list=[1,6,7,8,4,5,9,10,2,3];
$name_list=['javad','mohsen','ali','akbar'];
$keyANDvalue=[
    'javad'=>20,
    'mohsen'=>19,
    'ali'=>10,
    'akbar'=>0
];

//مرتب سازی صعودی
sort($list);
var_dump($list);

//مرتب سازی نزولی
rsort($list);
var_dump($list);


//  value مرتب سازی صعودی لیست برحسب
//دلخواه خود زبان key و وجود 
sort($keyANDvalue);
var_dump($keyANDvalue);


//  value مرتب سازی صعودی لیست برحسب
//لیست key و وجود 
asort($keyANDvalue);
var_dump($keyANDvalue);


//  value مرتب سازی صعودی لیست برحسب
ksort($keyANDvalue);
var_dump($keyANDvalue);


//  value مرتب سازی نزولی لیست برحسب
//لیست key و وجود 
arsort($keyANDvalue);
var_dump($keyANDvalue);


//  value مرتب سازی نزولی لیست برحسب
krsort($keyANDvalue);
var_dump($keyANDvalue);





















?>