<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $comment = [
            [
                'post_id'=> '1',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '2',
                'comment' => $faker->text(255),
                'user_id' => '7'
            ],
            [
                'post_id'=> '3',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '4',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '5',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '1',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '2',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '3',
                'comment' => $faker->text(255),
                'user_id' => '7'
            ],
            [
                'post_id'=> '4',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '6',
                'comment' => $faker->text(255),
                'user_id' => '7'
            ],
            [
                'post_id'=> '1',
                'comment' => $faker->text(255),
                'user_id' => '7'
            ],
            [
                'post_id'=> '2',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '3',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '5',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '1',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '2',
                'comment' => $faker->text(255),
                'user_id' => '6'
            ],
            [
                'post_id'=> '4',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '5',
                'comment' => $faker->text(255),
                'user_id' => '7'
            ],
            [
                'post_id'=> '5',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
            [
                'post_id'=> '6',
                'comment' => $faker->text(255),
                'user_id' => '8'
            ],
        ];
        DB::table('comment')->insert($comment);
    }
}
