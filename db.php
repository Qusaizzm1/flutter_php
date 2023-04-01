<?php
$db_name="sql12610139";
$db_server="sql12.freesqldatabase.com";
$db_user="sql12610139";
$db_pass="6iFHMLNfTi";

$db = new PDO("mysql:host={$db_server};dbname={$db_name};charset=utf8", $db_user, $db_pass);
 $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

