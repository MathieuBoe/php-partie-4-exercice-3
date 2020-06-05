<?php 
$var1 = "Super";
$var2 = "Test";
$title = 'Exercice3';

include 'header.php';

function concatenate($var1,$var2){
    $var3=$var1 . $var2;
    return $var3;
}
$var4 = concatenate($var1,$var2);
echo $var4;

include 'footer.php';?>