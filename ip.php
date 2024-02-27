<?php
// Get the visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Log the IP address to a file
$log_file = 'visitor_log.txt';
$log_entry = date('Y-m-d H:i:s') . " - IP: $ip_address\n";
file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// Display a message to the visitor
echo "Hello! Your IP address ($ip_address) has been logged.";
?>
