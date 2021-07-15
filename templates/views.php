<?php
if ($_POST && in_array('mail', $_POST)){
    $from = $_POST['email'];
    $to = 'NikReich@yandex.ru';
    $message = $_POST['message'];
    $name = $_POST['name'];
    $message_title = 'Site message';
    $message_title = "=?utf-8?8?".base64_encode($message_title).'?=';
    $headers = "From: $from\r\nReply-to: $to\r\nContent-type: text/plain; charset: utf-8\r\n";
    mail($to, $message_title, $message, $headers);
}
