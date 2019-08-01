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
                'user_id'=>$faker->numberBetween(1,5)
            ],
            [
                'name' => 'Dịch vụ',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5)
            ],
            [
                'name' => 'Bài Viết',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5)
            ],
            [
                'name' => 'Album ảnh',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5)
            ],
            [
                'name' => 'Sản Phẩm',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5)
            ],
            [
                'name' => 'Liên hệ',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5)
            ]
            ];
        DB::table('categories')->insert($categories);
    }
}
