<?php
$mysqli = new mysqli("localhost","2507610","20vr7h","db2507610");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>