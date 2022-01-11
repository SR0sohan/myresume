

<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$to = "fi304134@gmail.com";

$txt ="Name = ". $name . "\r\n  Email = " . $email .  "\r\n subject =". $subject. "\r\n Message =" . $message ;
$headers = "From: noreply@sr0sohan.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("location:index.html");
?>