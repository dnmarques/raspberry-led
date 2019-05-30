<?php

namespace App\Http\Controllers\Api;

use App\Services\Led;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LedController extends Controller
{
    public function __construct(
        Led $led
    ) {
        $this->led = $led;
    }

    public function status()
    {
        return [
            'data' => [
                'status' => $this->led->getStatus(),
            ],
        ];
    }

    public function setStatus(Request $request)
    {
        switch ($request->status) {
            case 'on':
                $this->led->turnOn();
                break;
            case 'off':
                $this->led->turnOff();
                break;
        }
        return [
            'data' => [
                'status' => $this->led->getStatus(),
            ],
        ];
    }
}
