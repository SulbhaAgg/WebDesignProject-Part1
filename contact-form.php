<?php

if(isset($_POST['submit']))
{
    $first = $_POST['first'] ;
    $last = $_POST['last'] ;
    $mailFrom = $_POST['email'] ;
    $subject = $_POST['subject'] ;
    $message = $_POST['message'] ;

    $mailTo = "sulbha.aggarwal19@qmail.cuny.edu" ;
    $headers = "From: ".#mailFrom ;
    $txt = "You have received an email from ".$first."."\n\n".$message ;

    mail($mailTo, $subject, $txt, $headers ) ;
    header("Location: index.php?mailsend") ;
}