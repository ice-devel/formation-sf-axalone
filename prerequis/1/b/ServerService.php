<?php

require 'Employee.php';
require 'ServerAdminInterface.php';
require 'Developper.php';


class ServerService
{
    public function rebootServer($server, ServerAdminInterface $someone) {
        echo "Début procédure";
        $someone->reboot($server);
        file_put_contents("server.txt",
            "reboot $server".date('d/m/Y H:i'));
    }
}

$server = "ServerA";
$dev = new Developper();
$serverService = new ServerService();
$serverService->rebootServer($server, $dev);