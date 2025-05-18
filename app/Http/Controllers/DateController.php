<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Date;

abstract class DateController extends Controller
{
    public static function getCurrentYear():int{
        $date = Date("Y");
        return $date;
    }
}
