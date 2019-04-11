<?php

namespace App\Http\Controllers;

use PiPHP\GPIO\GPIO;
use Illuminate\Http\Request;
use PiPHP\GPIO\Pin\PinInterface;

class LedController extends Controller
{
    public function __construct(
        GPIO $gpio
    ) {
        $this->gpio = $gpio;
    }
    public function toggle()
    {
        return redirect()->route('home');
        $pin = $gpio->getOutputPin(17);
        $pin->setValue(PinInterface::VALUE_HIGH);
    }
}
