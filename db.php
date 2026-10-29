<?php
$mysqli = new mysqli("localhost","studentid","password","dbnumber");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>
