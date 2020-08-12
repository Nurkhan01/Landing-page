<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$subject = "=?utf-8?B?" . base64_encode("Сообщение с сайта "."Номер телефона: ". $phone) . "?=";
$headers = "From: zhaksylyk.nurkhan@gmail.com\r\nReply-to: zhaksylyk.nurkhan@gmail.com\r\n\Content-type: text/html; charset=utf-8\r\n";

$success = mail("zhaksylyk.nurkhan@gmail.com", $subject, $name, $headers); 

echo "$name!";
