<?php

use Illuminate\Database\Seeder;

class HairStylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hairStylist = [
            [
                'name' => 'Nguyễn Hải Nam',
                'gender' => 'nam',
                'address' => 'sdgfshfhfdhdfh',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                'avatar' => 'uploaded/person_1.jpg',
                'feedback' => '100'
            ],
            [
                'name' => 'Đỗ Hồng Dũng',
                'gender' => 'nam',
                'address' => 'sdgfshfhfdhdfh',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                'avatar' => 'uploaded/person_2.jpg',
                'feedback' => '100'
            ],
            [
                'name' => 'Lữ Hải Hoàng',
                'gender' => 'nam',
                'address' => 'sdgfshfhfdhdfh',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                'avatar' => 'uploaded/person_3.jpg',
                'feedback' => '100'
            ],
            [
                'name' => 'Lăng Tiểu Hà',
                'gender' => 'nam',
                'address' => 'sdgfshfhfdhdfh',
                'description' => 'Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.',
                'avatar' => 'uploaded/person_4.jpg',
                'feedback' => '100'
            ],
        ];
        DB::table('hair_stylist')->insert($hairStylist);
    }
}
