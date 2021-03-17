<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handler\testHandler;

class TestController extends Controller
{
    private $showName;

    // public function __construct(testHandler $test)
    // {
    //     $this->showName = $test->showWakeup();
    // }

    public function index(testHandler $test)
    {

        return '振作國際' . $test->showWakeup();
    }
}
