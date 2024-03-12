<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add</title>
    
    <link rel="shortcut icon" href="../img/c.jpeg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href='../css/s.css'>
    </head>
<body >
  
<div class="background">
<div class="form-container">


    <form id="myForm" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" placeholder="Enter content" rows="10" cols="53"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Add" name='add'>
        </div>
    </form>
</div>

<br>

<?php
if(isset($_POST['add']))
{

    $t = $_POST['title'];
    $c = $_POST['content'];

    if($t!='' && $c!='')
    {
$query= "INSERT INTO notes (Title,Content)VALUES('$t','$c')";

        if(mysqli_query($con, $query))
        {
            echo "<script>alert('Note Added');</script>";
        }
        else
        {
            echo "Not inserted";
        }
    }
    else
    {
        echo "<script>alert('You have not filled');</script>";
    }
}
?>



<?php
include "connection.php";

$query="select * from notes";
$data = mysqli_query($con, $query);
$total=mysqli_num_rows($data);


echo" <h2 align ='center'><mark>Unleash your intellect: All notes, one hub</mark></h2>";
if($total!=0)
{
    echo "<table border='1' align ='center' cellspacing='3' width='50%'>
    <tr>
    <th width='2%'>Id</th>
         <th width='10%'>TITLE</th>
         <th width='30%'>CONTENT</th>
        <th width='40%'>Action</th>
    </tr>";

    while($result=mysqli_fetch_array($data))
    {//fields name should be same as db table fields name
        echo "<tr>
        <td><h5>" .$result["id"]." </h5></td>
        <td><h5>" .$result["Title"]." </h5></td>
        <td><h5>" .$result["Content"]." </h5></td>

        <td><h5>
        
        <!-- Update button -->
        <div class='button-container'>
        <a href='update.php?muskan=$result[id]' class='update'>
            <span>Update</span>
        </a>
    </div>
    
    <div class='button-container'>
        <a href='delete.php?muskan=$result[id]' class='delete' onclick='return check()'>
            <span>Delete</span>
        </a>
    </div>
    

        
        </h5></td>
         </tr>";
    }
    echo"</table>";
}
else
{
    echo " ";
}
?> 
<script>
    function check()
    {
        return confirm('Are you sure you want to delete this data ?');
    }
</script>


</div>
<div class="access"><a href="../index.php">DREAM NOTES</a></div>

</body>
</html>