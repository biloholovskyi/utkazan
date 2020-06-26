<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$name = $_POST['text'];
$tel = $_POST['contact'];

$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $tel,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$multiple_to_recipients = array(
  ''
);

wp_mail($multiple_to_recipients, "Новая заявка", "Имя: ".$name." | Номер: ".$tel);

