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
                'name' => 'Bài viết được quan tâm',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'bai-viet-duoc-quan-tam'
            ],
            [
                'name' => 'Bài viết gần đây',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'bai-viet-gan-day'
            ],
            [
                'name' => 'Dịch vụ hot nhất',
                'description'=> $faker-> realText($maxNbChars = 255),
                'user_id'=>$faker->numberBetween(1,5),
                'slug'=>'dich-vu-hot-nhat'
            ]
            ];
        DB::table('categories')->insert($categories);
    }
}
