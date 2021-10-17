<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function calendar($date = null)
    {

        $html = Carbon::get;

//        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
//
//        $startOfCalendar = $date->copy()->firstOfMonth();
//        $endOfCalendar = $date->copy()->lastOfMonth();
//
//        $html = '';
//        while($startOfCalendar <= $endOfCalendar)
//        {
//            $html .= $startOfCalendar->format('j');
//            $startOfCalendar->addDay();
//        }
        return view('calendar',compact('html'));
    }
}
