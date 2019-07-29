<?php
header('Content-Type: application/json; charset=UTF-8');

$token = file_get_contents('../token/token.txt');

$broadid = array(
    '711428141075203839'
);

$random_keys = array_rand($broadid, 1);

$url = 'https://api.pinterest.com/v1/boards/' . $broadid[$random_keys] . '/pins/?access_token=' . $token . '&fields=image&limit=100';
//$url = 'https://api.myjson.com/bins/cktc5';
$get_content = file_get_contents($url);

echo $get_content;
?>