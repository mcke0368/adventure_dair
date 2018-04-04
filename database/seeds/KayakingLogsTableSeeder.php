<?php

use Illuminate\Database\Seeder;
use App\Models\KayakingLog;
use App\Models\User;
use App\Models\BaseLog;

use Illuminate\Support\Carbon;
class KayakingLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* get a user */
        $user = User::where('email', '=', 'brennan@brennan.com')->firstOrFail();

        /* construct the base log */
        $base = new BaseLog();
        $base->title = '1st kayak log';
        $base->location = 'Algonquin College';
        $base->position = 'Guide';
        $base->company = 'ABC Inc';
        $base->start_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 09:00');
        $base->start_time = Carbon::createFromFormat('Y-m-d H:i', '2017-12-31 09:00');
        $base->incident = false;
        $base->number_participants = 10;
        $base->group_size = 10;
        $base->other_leaders = 'John Smith; Peter Jackson';
        $base->weather_conditions = 'Snow';
        $base->weather_temp = '20.5 C';
        $base->weather_notes = 'it was a beautiful snowy day';
        $base->notes = 'had a great time';
        $base->html_text = '<div><p> This is some sample text </p></div>';
        $base->user_id = $user->id;
        //$base->save();


        $log = new KayakingLog();
        $log->rapid_class = 'V';
        $log->flow_level = 'high';
        $log->trip_type = 'Sport';
        $log->trip_number = 12;
        $log->save();
        $log->baselogs()->save($base);


    }
}