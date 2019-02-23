<?php 
     

     if(isset($_POST['submit']))

     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom = $_POST['mail'];
     $message = $_POST['message'];

     $mailTo = "contact@kenanjunior";
     $headers = "From: ".$mailFrom;
     $text = "Recieved email from ".$name.".\n\n".$message;

     mail($mailTo, $subject, $text, $headers);
     header("Location: index.html");
     

     ?>