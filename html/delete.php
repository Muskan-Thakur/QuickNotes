<?php
include 'connection.php';

$id1=$_GET['muskan'];
$query="DELETE FROM notes where id='$id1'";
$data= mysqli_query($con, $query);
if($data)
{
    echo " <script>alert('Record Delete')</script>";
    ?>

<meta http-equiv="refresh" content= "0; url = ./add.php"/>
<?php
}
else
{
    echo "Record Not deleted";
}
?>

