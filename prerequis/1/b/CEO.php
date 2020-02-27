<?php


class CEO
{
    use AlarmTrait, AlarmBTrait { AlarmTrait::switchAlarm insteadof AlarmBTrait;}

    public function imTheBoss() {
        echo "respect svp";
    }

    // une fonction avec le même que celle dans un trait prend le dessus
    public function switchOffAlarm()
    {

    }

    // si CEO héritait d'une classe Person qui définissait switchOffAlarm,
    // alors c'est le trait qui prendrais le dessus
}