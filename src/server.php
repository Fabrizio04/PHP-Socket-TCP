<?php
set_time_limit(0);
ob_implicit_flush();

$host = "";
$port = ;

set_time_limit(1110);

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("socket_create fail\n");

if (!socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
    echo socket_strerror(socket_last_error($socket));
    exit;
}

$result = socket_bind($socket, $host, $port) or die("socket_bind fail\n");

$result = socket_listen($socket, 3) or die("socket_listen fail\n");

echo "Socket listen . . .";

$spawn = socket_accept($socket) or die("socket_accept fail\n");

$input = socket_read($spawn, 1024) or die("socket_read fail\n");
$input = trim($input);

echo "\n\nClient message: ".$input."\n\n";

$output = "Hello Client! :)";
		
socket_write($spawn, $output, strlen ($output)) or die("socket_write fail\n");

socket_close($spawn);
socket_close($socket);
?>