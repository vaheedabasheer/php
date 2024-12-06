<?php
$t=date("H");
if($t<10)
{
    echo "Good Morning ".$t."<br>";
}
$l=date("l");
if($l=="Tuesday")
{
    echo "today is ".$l;
}
else{
    echo "invalid day";
}
?>