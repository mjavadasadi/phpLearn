<?php  

 $name="m Javad Asadi       ";
 $Url="www.mjavadasadi.ir";
 $List_Url=['www','mjavad','asadi','ir'];
 $Tag_Url='<div><p>hi javad</p> <a href="https://mjavadasadi.ir/">your web site</a></div>';
//طول رشته
echo strlen($name)."<br>";
// تعداد کلمه
echo str_word_count($name)."<br>";
//پیدا کردن کلمه خاص در رشته
echo strpos($name,"javad")."<br>";
//جایگزینی کلمه ای به جای کلمه دیگر 
echo str_replace("m","Mohammad",$name)."<br>";
// کوچک کردن حروف
echo strtolower($name)."<br>";
// بزرگ کردن حروف
echo strtoupper($name)."<br>";
// تکرار یک رشته
echo str_repeat($name,10)."<br>";
// جداکردن یک مقدار از یک رشته خاص
echo substr($name,2,4)."<br>";
// پاک کردن فاصله از اول و آخر یک رشته
echo trim($name)."<br>";
// تبدیل آرایه به رشته
echo implode("_",$List_Url)."<br>";
// تبدیل رشته به آرایه
var_dump(explode(".",$Url)).'<br>';
// حذف تگ از یک رشته
var_dump(strip_tags($Tag_Url, "<a>,<p>" ))."<br>";










?>