    <?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = [
            [
                'name'=>'vanphuc',
                'email'=>'hovanphuc97t10@gmail.com',
                'password'=>Hash::make('vanphuc123456'),
                'phone_number'=>'0348078097',
                'role_id'=>'1',
                'address'=>'Quynh Tam - Quynh Luu - Nghe An',
                'image'=>'uploaded/users/vanphuc.jpg',
                'gender'=>'nam'
            ],
            [
                'name'=>'admin1',
                'email'=>'admin1@gmail.com',
                'password'=>Hash::make('admin1123456'),
                'phone_number'=>'0348899999',
                'role_id'=>'2',
                'address'=>'Thanh Hoa',
                'image'=>$faker->imageUrl(300,300),
                'gender'=>'nam'
            ],
            [
                'name'=>'admin2',
                'email'=>'admin2@gmail.com',
                'password'=>Hash::make('admin2123456'),
                'phone_number'=>'0347788999',
                'role_id'=>'3',
                'address'=>'Quynh Tam - Quynh Luu - Nghe An',
                'image'=>'uploaded/users/vanphuc.jpg',
                'gender'=>'nam'
            ],
            [
                'name'=>'guest1',
                'email'=>'guest1@gmail.com',
                'password'=>Hash::make('123456'),
                'phone_number'=>'0347788999',
                'role_id'=>'4',
                'address'=>'Quynh Tam - Quynh Luu - Nghe An',
                'image'=>$faker->imageUrl(300,300),
                'gender'=>'nam'
            ],
            [
                'name'=>'guest2',
                'email'=>'guest2@gmail.com',
                'password'=>Hash::make('123456'),
                'phone_number'=>'0347788999',
                'role_id'=>'4',
                'address'=>'Quynh Tam - Quynh Luu - Nghe An',
                'image'=>$faker->imageUrl(300,300),
                'gender'=>'nam'
            ],
        ];
        DB::table('users')->insert($users);
    }
}
