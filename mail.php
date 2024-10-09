<?php
    //$to = 'yauz_pm@protonmail.com';
    $to = 'blackbird1989@tut.by';
    $subject = 'Subject';
    $message = $_POST['name'] . ' ' . $_POST['email'];
    $headers =  'MIME-Version: 1.0' . '\r\n'; 
    $headers .= 'From: Your name <postmaster@gpc.by>'. '\r\n';
    $headers .= 'Content-type: text/html; charset=utf-8'. '\r\n';
    $headers .= 'Location: http://gpc-tv.com'. '\r\n';
    //var_dump($message);
    ?>
    <?php
    /*if (mail($to, $subject, $message, $headers)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>' . $message;
    }*/
    mail($to, $subject, $message, $headers);

    //header('Location: http://gpc-tv.com');
    //header('Location: http://web3softtestpage.liveblog365.com/');
    //header('Location: https://onliner.by/');
?>

