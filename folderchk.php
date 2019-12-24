<?php

// set up basic connection
$conn_id = ftp_connect('69.114.34.40');

// login with username and password
$login_result = ftp_login($conn_id, 'chris', '14752369Cb');

// get contents of the current directory
$contents = ftp_mlsd($conn_id, ".");

// output $contents
var_dump($contents);

echo ' Here ';

?>