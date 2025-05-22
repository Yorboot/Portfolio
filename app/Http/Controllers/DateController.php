<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Date;

class DateController extends Controller
{

    public function About()
    {

        $currentYear = Date("Y");
        if(Date("n")>=10 && Date("d")>=04){
            $date = Date("Y")-2007;
        }else{
            $date = Date("Y")-2007-1;
        }

        return view('AboutMe')
            ->with('date', $date)
            ->with('currentYear', $currentYear);
    }
}
