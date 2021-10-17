<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

//    public function calendar($date = null)
//    {
//        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
//        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(CarbonInterface::SUNDAY);
//        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(CarbonInterface::SATURDAY);
//
//        $html = '';
//        while($startOfCalendar <= $endOfCalendar)
//        {
//            $html .= $startOfCalendar->format('j');
//            $startOfCalendar->addDay();
//        }
//        return view('calendar',compact('html'));
//    }



    public function calendar($date = null)
    {




        $months = Calendar::all();
        foreach ($months as $month){
            $current = new Carbon(date('Y').'-'.$month->months.'-'.$month->days);



            $today = $current;

            echo '<h1 class="w3-text-teal"><center>' . $today->format('F Y') . '</center></h1>';

            $tempDate = Carbon::createFromDate($today->year, $today->month, 1);



            echo '<table border="1" class = "w3-table w3-boarder w3-striped">
           <thead><tr class="w3-theme">
           <th>Sun</th>
           <th>Mon</th>
           <th>Tue</th>
           <th>Wed</th>
           <th>Thu</th>
           <th>Fri</th>
           <th>Sat</th>
           </tr></thead>';

            $skip = $tempDate->dayOfWeek;


            for($i = 0; $i < $skip; $i++)
            {
                $tempDate->subDay();
            }


            //loops through month
            do
            {
                echo '<tr>';
                //loops through each week
                for($i=0; $i < 7; $i++)
                {
                    echo '<td><span class="date">';

                    echo $tempDate->day;

                    echo '</span></td>';

                    $tempDate->addDay();
                }
                echo '</tr>';

            }while($tempDate->month == $today->month);

            echo '</table>';




        }
        return view('calendar');
    }
}
