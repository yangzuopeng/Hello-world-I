<?php
require_once 'connect.php';
$sql="SELECT * FROM library";
$temp=mysql_query($con,$sql);
while ($row=mysqli_fetch_assoc($temp))
{
    $data[]=$row;
}
foreach($data as $everyData)
{
    echo $everyData['name'].":".$everyData['price'];
    echo "<br>";
}