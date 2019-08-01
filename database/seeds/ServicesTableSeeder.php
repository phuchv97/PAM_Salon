<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();

        $services=[
            [
               'name'=>'Haircuts & Styling',
               'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                'price'=>'50000',
                'icon'=>$faker->imageUrl(300,300),
                'user_id'=> '2'
            ],
            [
                'name'=>'Beard Treatment',
                'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                 'price'=>'100000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '1'
             ],
             [
                'name'=>'Coloring Services',
                'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                 'price'=>'150000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '3'
             ],
             [
                'name'=>'Beard Waxing',
                'description' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                 'price'=>'30000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '4'
             ],
        ];
        DB::table('services')->insert($services);
    }
}
