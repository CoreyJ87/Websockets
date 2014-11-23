<?php
/**
 * Created by PhpStorm.
 * User: cjones
 * Date: 11/19/2014
 * Time: 9:03 AM
 */
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use MyApp\Chat;

require '/root/websockets/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8085
);

$server->run();