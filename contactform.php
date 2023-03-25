<?php

$name = $_POST['name']
$email= $_POST['email']
$subject= $_POST['subject']
$message= $_POST['message']
$header = "Contact form from ".$name."<".$email.">\r\n";
$remail = "abigail.luwawa.university@gmail.com"
mail($remail,$subject,$message,$header)

echo('
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <link rel="stylesheet" href="contact.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Contact Page </title>
    </head>
    <body>
        <header>
            <div class="navbar">
                <a href="index.html">Home Page </a>
                <a href="projects.html"> Projects</a>
                <a class="active" href="contact.html">Contact</a>
        </div>
    
        </div>
        <p class="maintext">
            Thank you for your email. 
            I aim to get back to emails within 2 business days. Thank you for your patience.</p>
        <br>
        <br>
        <hr>
        <p class= "endnote">
        Kind regards,
        <br>
        Abigail Luwawa 
        </p>

')
or die("Something went wrong.")
?>