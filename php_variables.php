<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!---->
<!--</head>-->
<!--<body>-->
<?php


function myTest() {
    static $x=0;
    echo $x."<br>";
    $x++;
}

myTest();
myTest();
myTest();




//$x=5; // 全局作用域
//    echo "x=$x<br>";
//function myTest() {
//    $y=10; // 局部作用域
//    global $x;
//    echo "<p>测试函数内部的变量：</p>";
//    echo "变量 x 是：$x";
//    echo "<br>";
//    echo "变量 y 是：$y<br>";
//}
//myTest();
//function myTest1() {
//    $y=100;
//    echo "变量 x 是：".$GLOBALS["x"]."<br>";
//    echo "<p>测试函数之外的变量：</p>";
//    echo "变量 y 是：$y";
//    echo "<br>";
//
//}
//
//myTest1();
//


?>

<!--</body>-->
<!--</html>-->