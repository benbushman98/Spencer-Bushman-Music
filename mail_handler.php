<?php 
if(isset($_POST['submit'])){
    $to = "bbspenc@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $subject = "Website Submission";
    $subject2 = "Copy of your Contact Request";
    $message = $first_name . " " . $last_name . " | " . $number . " | " . " wrote the following message:" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for submitting a contact request. We will contact you shortly." . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Spencer Bushman Music</title>
</head>

<body>
    <header class="containerheader">
        <nav class="navbar">
            <h1>Spencer Bushman Music</h1>
            <ul>
                <li><a href="../../index.html">About</a></li>
                <li><a href="./music.html">Music</a></li>
                <li><a href="./contact.html">Contact</a>
                <li>
            </ul>
        </nav>
    </header>

    <section class="container">
       <p>Thank you for your Submission</p>
    </section>
</body>

</html>