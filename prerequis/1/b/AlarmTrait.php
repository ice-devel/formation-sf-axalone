<?php


trait AlarmTrait
{
    // un trait peut utiliser un autre trait
    // use AlarmBTrait;

    public function switchAlarm() {
        echo "Alarme activée par " .$this->getName();
    }

    public function switchOffAlarm() {
        echo "Alarme désactivée par " .$this->getName();
    }
}