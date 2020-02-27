<?php


class Developper extends Employee implements ServerAdminInterface
{
    public function code() {
        $binaryCode = "0100011100";
        echo $binaryCode;
        return $binaryCode;
    }

    public function cough() {
        echo "heumheum";
    }

    final public function drinkCoffee() {
        echo "ssssp";
    }

    public function reboot($server) {
        echo "reboot du serveur ".$server;
    }
}
