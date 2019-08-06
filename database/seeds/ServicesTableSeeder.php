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
               'name'=>'Cắt tóc & Tạo kiểu',
               'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                'price'=>'50000',
                'icon'=>$faker->imageUrl(300,300),
                'user_id'=> '2'
            ],
            [
                'name'=>'Cạo râu',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                 'price'=>'100000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '1'
             ],
             [
                'name'=>'Nhuộm',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                 'price'=>'150000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '3'
             ],
             [
                'name'=>'Tẩy lông',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                 'price'=>'30000',
                 'icon'=>$faker->imageUrl(300,300),
                 'user_id'=> '4'
             ],
        ];
        DB::table('services')->insert($services);
    }
}
