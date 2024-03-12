<?php

$servername="localhost";
$username="root";
$password="";
$database="notes";


$con = mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    echo "Not ".mysqli_connect_error();
}
?>