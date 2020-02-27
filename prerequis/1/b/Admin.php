<?php


class Admin extends Employee implements ServerAdminInterface
{
    public function cough()
    {
       echo "tchou";
    }

    public function reboot($server)
    {
        echo "reboute du serveur ".$server;
    }

    public function switchAlarm() {
        echo "alarme activé";
    }
}