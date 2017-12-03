<?php
session_start();
?>
<html>
<head></head>

<body>
	<?php 
		require_once('../login/pinterest-api-settings.php');
		require_once('../login/pinterest-login-api.php');
	?>
	<?php 
		if(isset($_GET['code'])){
			$pinterest_ob = new PinterestApi();
			
			// Get the access token 
			$access_token = $pinterest_ob->GetAccessToken(PINTEREST_APPLICATION_ID, PINTEREST_REDIRECT_URI, PINTEREST_APPLICATION_SECRET, $_GET['code']);
			
			echo $access_token;
			// Get user information
			$user_info = $pinterest_ob->GetUserProfileInfo($access_token);

			$fopen = fopen('../token/token.json', 'w');
			fwrite($fopen, $access_token);
			fclose($fopen);
		}
	 ?>
	<?php echo $access_token; ?>
</body>

</html>
