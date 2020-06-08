<?php
$to = 'ignatius.aturinda@gmail.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'ignatius.aturinda@gmail.com';
 
// Sending email
if(isset($_POST['btn'])){
    if(mail($to, $subject, $message)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
}
?>

<html>
<body>
    <form action="" method="POST">
    <button name="btn" type="sumbit"> send</button>
    </form>
</body>
</html>