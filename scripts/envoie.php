<?php

$t = $_POST;
$test = 12;
include '../mailin-smtp-api-master/Mailin.php';

$mailin = new Mailin('seckbara12@hotmail.com', 'xz6Gknv2VWjmOX7r');
$mailin->
addTo('seckbara12@hotmail.com', 'Bara SECK')->
setFrom('seckbara12@hotmail.com', 'Bara SECK')->
setReplyTo('seckbara12@hotmail.com','Bara SECK')->
setSubject('Entrer le sujet ici')->
setText('Bonjour')->
setHtml('<strong>Bonjour</strong>');
$res = $mailin->send();
$i = $res;

header('Location: ../contact.php');
