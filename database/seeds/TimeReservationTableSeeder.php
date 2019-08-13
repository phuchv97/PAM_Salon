<?php

use Illuminate\Database\Seeder;

class TimeReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timeReservation = [
            [
                'time_reservation'=>'8:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'8:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'9:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'9:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'10:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'10:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'11:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'11:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'12:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'12:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'13:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'13:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'14:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'14:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'15:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'15:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'16:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'16:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'17:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'17:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'18:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'18:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'19:00',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'19:30',
                'seat_number' => '5'
            ],
            [
                'time_reservation'=>'20:00',
                'seat_number' => '5'
            ],
        ];
        DB::table('time_reservation')->insert($timeReservation);
    }
}
