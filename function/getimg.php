<?php

function getimg_broad($broadid,$token){
	$url = 'https://api.pinterest.com/v1/boards/'.$broadid.'/pins/?access_token='.$token.'&fields=image&limit=100';
	$get_content = file_get_contents($url);

	return $get_content;
}
?>