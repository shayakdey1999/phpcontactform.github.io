<?php
    // let's get all form values
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $website = $_POST['website'];
    $msg     = $_POST['message'];

     if(!empty($email)&&!empty($msg)){    // if email & message field is not empty
        
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){ // if user entered email is vaild
            $receiver="shayakdey50@gmail.com";  // email receiver email address
            $subject="From: $name <$email>";
            $body="Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:$message\n\nRegards,\n$name";
            $sender="From:$eamil"; // sender email
            if(mail($receiver,$subject,$body,$sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, failed to send your message!";
            }
        }else{
            echo"Enter a vaild email address!";
        }

     }else{
         echo "Email & Password field is required!";
     }
?>