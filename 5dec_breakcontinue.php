<?php
echo "break:<br>";
for($x=1;$x<=10;$x++){
    if($x==4)break;
    echo "the number is $x"."<br>";

}
echo "<br>continue<br><br>";

for($x=1;$x<=10;$x++){
    if($x==3)continue;
    echo "the number is $x"."<br>";
}
?>