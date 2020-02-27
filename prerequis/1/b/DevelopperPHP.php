<?php


final class DevelopperPHP extends Developper
{
    // override / surcharge
    // appel des méthodes dans les classes mères avec le mot-clé "parent"
    // suivi de ::

    // on peut changer de visibilité mais il faut que la nouvelle
    // visibilité soit au moins aussi permissive
    public function code() {
        $binaryCode  = parent::code();
        echo "echo 'coucou'";
    }
}

$dev = new DevelopperPHP();
$dev->code();