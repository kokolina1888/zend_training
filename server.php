<?php  
//include "http://phparch.com";

$socket = stream_socket_server("tcp://0.0.0.0:1037");
while($conn = stream_socket_accept($socket)){
	fwrite($conn, 'Hello World');
	fclose($conn);
}
fclose($socket);