<?php // Example Send email

$to = 'kk test<kk@gmail.com>';

$subject = 'Feedback from MicorTechNA: ' . $_POST["name"];

$message = "Feedback from MicroTech:\n\n" 
."\n\nName: ". $_POST["name"]
."\n\nCompany Name: ". $_POST["companyName"]
."\n\nEmail: ". $_POST["email"]
."\n\nSubject: ". $_POST["subject"]
."\n\nMessage: ". $_POST["message"]
."\n\n\nthis is a feedback from micortechna.com";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// <<<<<<< HEAD
// $headers .= 'From: <'.$con_email.'>' . "\r\n";
// $headers .= 'Reply-To: <'.$con_email.'>' . "\r\n";
// //$headers .= 'Cc: kk@hotmail.com' . "\r\n";
// //$headers .= 'Bcc: kk@yahoo.com' . "\r\n";

// $mail_sent = mail($to, $con_subject, $message, $headers);


// echo $mail_sent ? "Your message has been sent. <a href='index.html'>click here</a>" : header('location: workwith.html') ;
// exit(0);
// =======
$headers .= 'From: <'.$_POST["name"] . $_POST["email"].'>'."\r\n";
$headers .= 'Reply-To: <'.$_POST["email"].'>' . "\r\n";
if(mail( $to, $subject, $message, $headers ))
{
    //header('location: index.html');
    echo "<script>alert('Mail was sent !');</script>";
    echo "<script>document.location.href='contact.php'</script>";
}
else{
    //echo 'error';
    echo "<script>alert('Mail was not sent. Please try again later');</script>";
}
//echo $mail_sent ? include "index.html" : include "work.html" ;
exit(0);



?>
