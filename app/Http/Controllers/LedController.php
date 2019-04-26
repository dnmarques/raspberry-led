<?php

namespace App\Http\Controllers;

use App\Services\Led;
use Illuminate\Http\Request;

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
        $this->led->turnOn();
        return redirect()->route('home')->with(['ledStatus' => $this->led->getStatus()]);
    }

    public function turnOff()
    {
        $this->led->turnOff();
        return redirect()->route('home')->with(['ledStatus' => $this->led->getStatus()]);
    }
}
