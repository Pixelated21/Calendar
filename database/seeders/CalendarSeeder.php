<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mouths = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];
        $days = [31,28,31,30,31,30,31,31,30,31,30,31,];
        $day_no = 0;

        foreach ($mouths as $mouth ) {
            Calendar::create([
                'months' => $mouth,
                'days' => $days[$day_no],
            ]);
            ++$day_no;
        }
    }
}
