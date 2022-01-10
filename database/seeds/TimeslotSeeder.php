<?php

use App\Timeslot;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timeslot = [
            /*   [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays()->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays()->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays()->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays()->format('Y-m-d'),
               ],
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(2)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(2)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(2)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(2)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(3)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(3)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(3)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(3)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(4)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(4)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(4)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(4)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
               ],*/
               [
                   'time_slot' => '08:00 AM - 09:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
                   'seats' => '350'
               ],
               [
                   'time_slot' => '09:00 AM - 10:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
                   'seats' => '350'
               ],
               [
                   'time_slot' =>'10:00 AM - 11:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
                   'seats' => '350'
               ],
               [
                   'time_slot' =>'11:00 AM - 12:00 AM',
                   'book_date' => Carbon::now()->addDays(6)->format('Y-m-d'),
                   'seats' => '350'
               ],
           ];
           Timeslot::insert($timeslot);
    }
}
