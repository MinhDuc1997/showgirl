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
if (isset($_GET['code'])) {
    $pinterest_ob = new PinterestApi();

    // Get the access token
    $access_token = $pinterest_ob->GetAccessToken(PINTEREST_APPLICATION_ID, PINTEREST_REDIRECT_URI, PINTEREST_APPLICATION_SECRET, $_GET['code']);
    echo $access_token;

    $fopen = fopen('../token/token.txt', 'w');
    fwrite($fopen, $access_token);
    fclose($fopen);

    // Get user information
    //$user_info = $pinterest_ob->GetUserProfileInfo($access_token);

    if (trim($access_token) != '')
        echo '<br><a href="'.HOME.'">Go back</a>';
}
?>
</body>

</html>
