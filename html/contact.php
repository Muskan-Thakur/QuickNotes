<?php
include 'connection.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="shortcut icon" href="c.jpeg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
    </head>
    <body >
        <div class="container">
            <div class="map">
                <!-- Google Maps iframe code goes here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109744.22709340513!2d76.68831206468506!3d30.732254422013508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1707824848647!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p>Phone: +1 234 567 890</p>
                <!-- Add more contact information as needed -->
        
            <div class="contact-form">
                <h3>Get in Touch</h3>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" name='submit'>Submit</button>
                </form>
            </div></div>
        </div> <a href="../index.php">DREAM NOTES</a>
    </body>
    </html>
   
    <?php
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($name!='' && $email!='' && $message!='')
    {
$query= "INSERT INTO contact (name,email,msg)VALUES('$name','$email','$message')";

        if(mysqli_query($con, $query))
        {
            echo "<script>alert('We will revert you very soon');</script>";
        }
        else
        {
            echo '<script>window.alert("Not inserted")</script>';
        }
    }
    else
    {
        echo "<script>alert('Please fill your correct data');</script>";
    }
}
?>
