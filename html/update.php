<?php
include 'connection.php';
$id1= $_GET['muskan'];

$query="select * from notes where id='$id1'";
$data = mysqli_query($con, $query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/styles.css'>
    <link rel="shortcut icon" href="../img/c.jpeg" type="image/x-icon">
    <title>update</title>
    </head>
<body>

<div class="form-container">
    <form id="myForm" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $result['Title'];?>" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" placeholder="Enter content" rows="20" cols="53"><?php echo $result['Content'];?></textarea>
        </div>
        <div class="form-group">
        <input type="submit" value="Update" name="update">
        </div>
    </form>
</div>
</body>
</html>


<?php
if(isset($_POST['update']))
{
    $t = $_POST['title'];
    $c = $_POST['content'];
  

    if($t!='' && $c!='')
    {
        $query ="UPDATE notes set Title='$t',Content='$c' where id='$id1'";
        if(mysqli_query($con, $query))
        {
            echo " <script>alert('Record Updated')</script>";
            ?>
            <meta http-equiv="refresh" content= "0; url = ./add.php"/>
            <?php
        }
        else
        {
            echo "Not Updated";
        }
    }
    else
    {
        echo "<script>alert('You have not filled the form properly');</script>";
    }
   }
?>