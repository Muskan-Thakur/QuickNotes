<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
    <link rel="shortcut icon" href="../img/lo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href='../css/feedback.css'>
</head>
<body>
<div class="sideimage">
        <img src="../img/lo.png" alt="logoimage"> </div>

<div class="container">
   
    <div class="brand-logo"></div>
    <div class="brand-title">FEEDBACK FORM</div>

    <div class="inputs">
<form action="#" method="post">
      <label>EMAIL</label>
      <input type="email" name="email" placeholder="example@test.com" />

      <label>FEEDBACK</label>
      <textarea placeholder="your feedback matter" name="message"></textarea>
     
      <button type="submit" name="submit">SUBMIT</button>
    </div>
    <a href="../index.php">DREAM NOTES</a>
  </div>
  </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $message = $_POST['message'];

    if( $email!='' && $message!='')
    {
$query= "INSERT INTO feedback (email,msg)VALUES('$email','$message')";

        if(mysqli_query($con, $query))
        {
            echo "<script>alert('We receive your feedback');</script>";
        }
        else
        {
            echo "Not inserted";
        }
    }
    else
    {
        echo "<script>alert('Some field are required');</script>";
    }
}
?>