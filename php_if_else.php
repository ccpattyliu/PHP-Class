<?php
$t=date("H");
var_dump($t);

if ($t<"20") {
    echo "Have a good day!";
}
$hour="6";
$t=($hour>=12)?$hour-12:$hour;
var_dump($t);

echo "<br>";
?>

<?php
$t=date("H");

if ($t<"10") {
    echo "Have a good day!";
} elseif ($t<"20"){
    echo "Have a good moring";
}
else {
    echo "Have a good night!";
}
?>
