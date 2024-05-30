<?php

    header('Access-Control-Allow-Origin: localhost');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');

    $email          = $_REQUEST['email'];
    $name           = $_REQUEST['name'];
    $subject        = $_REQUEST['subject'];
    $msg            = $_REQUEST['message'];

    $to             = "info@paptech.com.pk";
    //$to             = "valeednaeem@gmail.com";
    //$subject        = "Client Query from ".$name." - Paptech IT Solutions";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '.$name.'<'.$email.'>' . "\r\n";
    $headers .= 'Cc: valeednaeem@gmail.com' . "\r\n";
    $headers .= 'ReplyTo: '.$email."\r\n";

    $message = "
<html>
<body>
<div>
<h2>Consultancy Inquery - Paptech IT Solutions</h2>

<h3>Visitor Name <Email></h3>
<p>".$name." - <<a href='mailto:".$email."'>".$email."</a>></p>

<h3>Subject</h3>
<p>".$subject."</p>

<h3>Short Message</h3>
<p>".$msg."</p>
</div>
<small style='color: red;'>This email is auto generated from online contact form on PAPTECH.COM.PK</small>
</body>
</html>
";

    if(mail($to,$subject,$message,$headers))
    {
        return true;
    }
    else
    {
        return false;
    }

?>