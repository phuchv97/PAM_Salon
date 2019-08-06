<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = [
            [
                'name' => 'Trang Chủ',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'home'
            ],
            [
                'name' => 'Dịch vụ',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'service'
            ],
            [
                'name' => 'Bài Viết',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'blog'
            ],
            [
                'name' => 'Album ảnh',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'album'
            ],
            [
                'name' => 'Sản Phẩm',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'produce'
            ],
            [
                'name' => 'Liên hệ',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'contact'
            ],
            [
                'name' => 'Đăng Nhập',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'login'
            ]
            ];
        DB::table('categories')->insert($categories);
    }
}
