<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $posts = [
            [
                'title' => 'Tư vấn chọn kiểu tóc cho từng khuôn mặt',
                'description' => 'Chẳng điều gì tệ hơn là hí hửng chọn cho mình một kiểu tóc để rồi sau 30 phút hì hụi với anh thợ cắt, bạn bàng hoàng nhận ra là nó chẳng ăn nhập gì với khuôn mặt của mình.',
                'detail' => $faker->realText($maxNbChars = 800, $indexSize = 1),
                'user_id' => $faker->numberBetween(1,5),
                'category_id' => $faker->numberBetween(1,4),
                'image' => 'uploaded/image_1.jpg'
            ],
            [
                'title' => '4 Kiểu layer đẹp nhất cho học sinh',
                'description' => 'Layer hay đầu nấm là kiểu tóc chưa bao giờ hết hot đối với giới trẻ bởi sự lãng mạn, ngọt ngào mà kiểu tóc này mang lại.',
                'detail' => $faker->realText($maxNbChars = 800, $indexSize = 1),
                'user_id' => $faker->numberBetween(1,5),
                'category_id' => $faker->numberBetween(1,4),
                'image' => 'uploaded/image_2.jpg'
            ],
            [
                'title' => 'Tác hại của việc không lấy ráy tai – Lấy ráy tai thế nào cho an toàn?',
                'description' => 'Lấy ráy tai là việc chúng ta cần làm để giúp tai sạch sẽ và thông thoáng. Nhưng không lấy ráy tai có sao không và nếu không lấy',
                'detail' => $faker->realText($maxNbChars = 800, $indexSize = 1),
                'user_id' => $faker->numberBetween(1,5),
                'category_id' => $faker->numberBetween(1,4),
                'image' => 'uploaded/image_3.jpg'
            ],
        ];
        DB::table('posts')->insert($posts);

    }
}
