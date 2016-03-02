<?php
/*
$date = "2015-15-21";

 if (ereg( "([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})" ,  $date ,  $regs)) {
    echo  " $regs [ 3 ] . $regs [ 2 ] . $regs [ 1 ] " ;
} else {
    echo  "Invalid date format:  $date " ;
}*/

$pwd = "12345";
echo strspn($pwd, "123456789");

echo "<br>";

$pwd2 = "a12345";
echo strcspn($pwd2, "1234567890");

 ?> 