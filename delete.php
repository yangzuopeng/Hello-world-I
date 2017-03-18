<?php
require_once 'connect.php';
$name="zhangsan";
$sql="DELETE FROM library WHERE name='$name";
if(mysqli_query($con,$sql))
{
    echo "delete".$name."success!";
}