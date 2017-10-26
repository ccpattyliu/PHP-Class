<?php
for ($x=0; $x<=10; $x++) {
    echo "数字是：$x <br>";
}
?>

<?php
$colors2 = array("red","green","blue","yellow");
var_dump($colors2);
$colors = array("a"=>"red",2=>"green","blue","yellow");
var_dump($colors);
foreach ($colors as $key=>$value) {
    echo "$value <br>";
}
?>


