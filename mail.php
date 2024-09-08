<?php
    $to = "address@site.com";
    $subject = "Тема сообщения";
    $message = "Message";
    $headers = "Content-type: text/plain; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
?>