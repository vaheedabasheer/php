<?php
function pass(&$value){
    $value+=5;
}
$num=5;
pass($num);
echo "pass by reference=".$num;
?>