<?php
    $to = 'simatovic.lucie@gmail.com';
    
    $message = $_POST['message'];
    $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    // On envoie le mail et on stocke le résultat
    $result = mail($to, $message, $headers);
    // Le contenu sera renvoyé au format JSON
    header('Content-Type: application/json');
    echo json_encode([
        'result' => $result
    ]);