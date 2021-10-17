<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar($date = null)
    {
        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::SUNDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SATURDAY);

        $html = '';
        while($startOfCalendar <= $endOfCalendar)
        {
            $html .= $startOfCalendar->format('j');
            $startOfCalendar->addDay();
        }
        return $html;
    }
}
