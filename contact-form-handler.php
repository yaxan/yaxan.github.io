<?php

    if (issit($_POST['submit'])) {
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message']

        $mailTo = "ymasoud@uwaterloo.ca";
        $headers = "From: ".$visitor_email
        $text = "You have recieved an e-mail from".$name.".\n\n".$message;


        mail($mailTo, $subject, $text, $headers);
        header("Location: index.php?mailsend");

    }
    


?>