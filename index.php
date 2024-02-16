<?php
$ip = $_SERVER['REMOTE_ADDR'];

// Log the IP address to a file or database
$logFile = 'ip_log.txt';
file_put_contents($logFile, $ip . PHP_EOL, FILE_APPEND);

// Respond to the user (optional)
echo "Your IP address ($ip) has been logged.";
?>
