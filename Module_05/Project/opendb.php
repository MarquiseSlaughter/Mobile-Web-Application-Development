<?php
//Create connection
$conn = mysqli_connect($localhost, $fatboyusers,$fatboysdontplay,$mysampledb);
// Check connection
if (!conn) (
die("Connection Failed: " . mysqli_connect_error());
}
?>
