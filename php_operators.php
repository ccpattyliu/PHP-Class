<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$x=10;
$y=6;
echo ($x + $y)."<br>"; // 输出 16
echo ($x - $y)."<br>"; // 输出 4
echo ($x * $y)."<br>"; // 输出 60
echo ($x / $y)."<br>"; // 输出 1.6666666666667
echo ($x % $y)."<br>"; // 输出 4

$z=10;
echo ++$z."<br>"; // 输出 11

$b=10;
echo $b++."<br>"; // 输出 10

$c=5;
echo --$c."<br>"; // 输出 4

$i=5;
echo $i--."<br>"; // 输出 5
?>
<?php
$x=100;
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
</body>
</html>

