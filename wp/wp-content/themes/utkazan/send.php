<?php

$contact = $_POST['contact'];
$text = $_POST['text'];

$message = "Имя/Телефон: ".$contact."\n".$text;
$headers = 'From: kazansrm@mail.ru' . "\r\n" .
           'Reply-To: kazansrm@mail.ru' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('kazansrm@mail.ru', "Вопрос с сайта", $message, $headers);
//mail('albertgaifullin@gmail.com', "Вопрос с сайта", $message, $headers);
//mail('sales@vividoil.ru', "Вопрос с сайта", $message, $headers);
//mail('pkorchagin@vividoil.ru', "Вопрос с сайта", $message, $headers);
