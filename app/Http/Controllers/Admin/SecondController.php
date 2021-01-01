<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
         $this -> middleware ('auth')-> expect('ShowString1');
    }
    public function ShowString0 ()
    {
        return 'ShowString0';
    }

    public function ShowString1 ()
    {
        return 'ShowString1';
    }
    public function ShowString2 ()
    {
        return 'ShowString2';
    }
}
