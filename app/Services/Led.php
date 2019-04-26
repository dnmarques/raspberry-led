<?php

namespace App\Services;

class Led
{
    public function __construct()
    {
        exec('../resources/scripts/configureLed.sh');
    }

    public function getStatus()
    {
        return exec('../resources/scripts/getLedStatus.sh');
    }

    public function turnOn()
    {
        return exec('../resources/scripts/turnLedOn.sh');
    }

    public function turnOff()
    {
        return exec('../resources/scripts/turnLedOff.sh');
    }
}
