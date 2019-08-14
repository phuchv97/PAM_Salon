<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $reservation = [
            [
                'hair_stylist_id'=>'1',
                'service_id'=>'1',
                'name'=>'Hoàng Nam',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0348012345',
                'reservation_time_id'=> '1',
                'reservation_date'=> '2019-08-22',
            ],
            [
                'hair_stylist_id'=>'2',
                'service_id'=>'2',
                'name'=>'Hoà Vy',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0948019999',
                'reservation_time_id'=> '3',
                'reservation_date'=> '2019-08-21',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'3',
                'name'=>'An Vỹ',
                'status'=>'Đã Thanh Toán',
                'phone_number'=>'0947889999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-13',
            ],
            [
                'hair_stylist_id'=>'2',
                'service_id'=>'1',
                'name'=>'Hải An',
                'status'=>'Đã Thanh Toán',
                'phone_number'=>'0948019999',
                'reservation_time_id'=> '1',
                'reservation_date'=> '2019-08-13',
            ],
            [
                'hair_stylist_id'=>'4',
                'service_id'=>'3',
                'name'=>'trương phi',
                'status'=>'Đã Thanh Toán',
                'phone_number'=>'0948339999',
                'reservation_time_id'=> '1',
                'reservation_date'=> '2019-08-12',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Hoàng Hà',
                'status'=>'Đã Thanh Toán',
                'phone_number'=>'0938889999',
                'reservation_time_id'=> '1',
                'reservation_date'=> '2019-08-12',
            ],
            [
                'hair_stylist_id'=>'4',
                'service_id'=>'1',
                'name'=>'Ánh Nguyệt',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0948779999',
                'reservation_time_id'=> '2',
                'reservation_date'=> '2019-08-21',
            ],
            [
                'hair_stylist_id'=>'4',
                'service_id'=>'1',
                'name'=>'Nguyên Anh',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0998778999',
                'reservation_time_id'=> '2',
                'reservation_date'=> '2019-08-21',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Thái Thịnh',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0958779999',
                'reservation_time_id'=> '3',
                'reservation_date'=> '2019-08-15',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Văn Trường',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0933449999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-15',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Tú Mỡ',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0952244999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-15',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Thiên An',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0955566999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-14',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Hoàng Hợi',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0944779999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-14',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Thư Hoài ',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0955579999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-14',
            ],
            [
                'hair_stylist_id'=>'3',
                'service_id'=>'1',
                'name'=>'Ánh Tuyết',
                'status'=>'Chưa Sử Dụng',
                'phone_number'=>'0933877999',
                'reservation_time_id'=> '7',
                'reservation_date'=> '2019-08-14',
            ],


        ];
        DB::table('reservation')->insert($reservation);
    }
}
