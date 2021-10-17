<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function calendar($date = null)
    {
        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(CarbonInterface::SUNDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(CarbonInterface::SATURDAY);

        $html = '';
        while($startOfCalendar <= $endOfCalendar)
        {
            $html .= $startOfCalendar->format('j');
            $startOfCalendar->addDay();
        }
        return view('calendar',compact('html'));
    }
}
