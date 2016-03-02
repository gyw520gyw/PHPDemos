<?php
$int = "1234";
$option_int = array(
    "options"=>array(
        "min_range"=>1,
        "max_range"=>260
    )
);

if(!filter_var($int, FILTER_VALIDATE_INT, $option_int))
{
    echo("Integer is not valid");
}
else
{
    echo("Integer is valid");
}
?>