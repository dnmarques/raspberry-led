<?php

namespace App\Http\Controllers;

use App\Services\Led;
// use PiPHP\GPIO\GPIO;
use Illuminate\Http\Request;
// use PiPHP\GPIO\Pin\PinInterface;

class LedController extends Controller
{
    public function __construct(
        Led $led
    ) {
        $this->led = $led;
    }

    public function home()
    {
        return view('welcome')->with(['ledStatus' => $this->led->getStatus()]);
    }

    public function turnOn()
    {

        return redirect()->route('home')->with(['ledStatus' => $this->led->getStatus()]);
    }

    public function turnOff()
    {

        return redirect()->route('home')->with(['ledStatus' => $this->led->getStatus()]);
    }
}
