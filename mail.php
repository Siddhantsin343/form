<?php
$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];
$to = "siddhantsin343@gmail.com";
$subject = " Mail from website user";
$txt = "Name =".$name."\r\n 
        Email =".$email."\r\n
        Message =".$message;

    $headers = "From: noreply@yoursite.com" . "\r\n ".
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
        }

    //redirect

    header("Location:thankyou.html");
    

?>