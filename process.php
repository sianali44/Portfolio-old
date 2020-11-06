<?php

    $to = "anais.limousin@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "Vous avez un message de votre portfolio !";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";

    

    $body = "Voici ce qui a été envoyé :\r\n"; 

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    mail($to, $subject, $body, $headers);

?>