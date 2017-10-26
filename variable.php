
<?php
echo "陣列-鍵值對key value<br>";
$keyValue=["name"=>"patty","gender"=>"w","area"=>"桃園"];
var_dump($keyValue);
echo $keyValue['name']."<br>";

echo "陣列<br>";
$a=[1,2,3];
$a=["a","b","c"];
var_dump($a);
echo "$a[0]<br>";
$a[1]="s";
echo "$a[1]<br>";

$x = 100;
echo "$x<br>";
$x = -100;
echo '$x<br>';

$tmp = "hello";
$name="Patty";
echo $tmp."★☆".$name."☆★";
echo "<br>";
$tmp="HELLO";
echo $tmp."☆★".$name."☆★";
?>