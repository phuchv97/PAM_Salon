<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = [
            [
                'image'=>'uploaded/gallery-1.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-2.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-1.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-3.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-4.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-5.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-6.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-7.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
            [
                'image'=>'uploaded/gallery-8.jpg',
                'description'=>'dfhdhgdjgjgfjf',
                'user_id'=>'2'
            ],
        ];
        DB::table('gallery')->insert($gallery);
    }
}
