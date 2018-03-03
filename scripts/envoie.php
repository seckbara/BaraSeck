<?php

include '../mailin-smtp-api-master/Mailin.php';

$mailin = new Mailin('seckbara12@hotmail.com', 'xz6Gknv2VWjmOX7r');
$mailin->
addTo('baraseck1208@gmail.com', 'Bara SECK')->
setFrom($_POST['email'], $_POST['name'])->
setSubject($_POST['subject'])->
setText($_POST['content'])->
setHtml('<strong>'.$_POST['content'].'</strong> <br><br><br> Téléphone :'.$_POST['mobile']);
$mailin->send();


