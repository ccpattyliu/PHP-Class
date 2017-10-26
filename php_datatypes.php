<!doctype html>
<html lang="en">
<head>

</head>
<body>
<?php
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>
<?php
$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
?>
<?php
$cars=["Volvo","BMW","SAAB"];
var_dump($cars);
echo"陣列的宣告，取用，修改.印出結果";
$key=["name"=>"BEN","age"=>"20","add"=>"桃園"];
var_dump($key);

?>
</body>
</html>