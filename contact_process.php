<?php

    $to = "akshaikumarsk@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subjectt = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Persional website.".$sujectt;

    $txt ="Name =".$name."\r\n Email = ". $from."\r\n Subject =" .$subject."\r\n Message = ". $cmessage;

	  

    $send = mail($to, $subject, $txt, $headers);

	 

?>
