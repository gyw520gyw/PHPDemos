<?php
if(!file_exists("welcome.txt"))
{
    die("File not found hahaha");
}
else
{
    $file=fopen("welcome.txt","r");
}
?>