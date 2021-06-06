<?php
// set with Apache setting in vhost file or .htaccess:
// SetEnv HTTP_DEPLOY_TOKEN "mytoken" 

$deploytoken = getenv('HTTP_DEPLOY_TOKEN');
$senttoken = $_GET['token'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST' OR !$deploytoken OR !$senttoken) {
  die();
}

if ($deploytoken !== $senttoken) {
  die();
}

echo shell_exec('/usr/bin/git pull 2>&1');
?>
