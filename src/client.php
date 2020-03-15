<?php
set_time_limit(0);

$host = "";
$port = ;

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("socket_create fail\n");
$result = socket_connect($socket, $host, $port) or die("socket_connect fail\n");


echo "Established connection";

$message = "Hello Server!";

socket_write($socket, $message, strlen($message)) or die("socket_write fail\n");

$result = socket_read ($socket, 1024) or die("socket_read fail\n");

echo "\n\nResponse: ".$result."\n\n";

socket_close($socket);
?>