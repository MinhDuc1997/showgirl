<?php
header('Content-Type: application/json; charset=UTF-8');

if(isset($_GET['next_url'])) {
    $url = base64_decode($_GET['next_url']);
    //echo $url;
    $get_content = file_get_contents($url);
    echo $get_content;
}
