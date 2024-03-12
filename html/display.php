<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/c.jpeg" type="image/x-icon">
</head>
<body>
    
</body>
</html>

<?php
include "connection.php";

$query="select * from notes";
$data = mysqli_query($con, $query);
$total=mysqli_num_rows($data);


echo" <h2 align ='center'><mark>Notes</mark></h2>";
if($total!=0)
{
    echo "<table border='1' align ='center' cellspacing='3' width='30%'>
    <tr>
    <th width='2%'>Id</th>
         <th width='4%'>TITLE</th>
         <th width='15%'>CONTENT</th>
        <th width='10%'>Action</th>
    </tr>";

    while($result=mysqli_fetch_array($data))
    {//fields name should be same as db table fields name
        echo "<tr>
        <td>" .$result["id"]." </td>
        <td>" .$result["Title"]." </td>
        <td>" .$result["Content"]." </td>
        <td><a href='update.php?muskan=$result[id]'>
        <input type='submit' value='Update' class='update'>
        </a>
          
        <a href='delete.php?muskan=$result[id]'>
        <input type='submit' value='Delete' class='delete' onclick='return check()'>
        </a></td>
         </tr>";
    }
    echo"</table>";
}
else
{
    echo "No record has found";
}
?> 
<script>
    function check()
    {
        return confirm('Are you sure you want to delete this data ?');
    }
</script>
