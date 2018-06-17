<?php


    $email = "empty";
    $message = "empty";

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    if(isset($_POST['message'])) {
        $message = $_POST['message'];
    }

    
    if ((strlen($email) > 5) &  (strlen($message) > 5)){

        $headers = 'From: '.'info@yourwebdoctor.com'."\r\n".'Reply-To: '.'info@yourwebdoctor.com'."\r\n" .'X-Mailer: PHP/' . phpversion();
        mail('josefslezak@zoho.com', 'yourwebdoctor submit form', $message."\n\n from: ".$email, $headers);  

    }

    header("Location: http://yourwebdoctor.com/thankyou.html");
    exit();
 


    /*Thank you for contacting us. We will be in touch with you very soon.*/
 

 

?>
