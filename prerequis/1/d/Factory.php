<?php


class Factory
{
    static private $service1;
    public function __construct($service1)
    {
        self::$service1 = $service1;
    }

    static public function getNewUser() {
        //$user = new User(self::service1, $service2, $entity1);
        //return $user;
    }
}

$user = Factory::getNewUser();
//$user = new User();
//$user = new User();