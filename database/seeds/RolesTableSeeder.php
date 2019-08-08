<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\factory::create();
        $role = [
            
            [
                'name' => 'boss',
                'description' => $faker->text(255)
            ],
            [
                'name' => 'payment management',
                'description' => $faker->text(255)
            ],
            [
                'name' => 'admin',
                'description' => $faker->text(255)
            ],
            [
                'name' => 'guest',
                'description' => $faker->text(255)
            ],
            
        ];
        DB::table('roles')->insert($role);
    }
}
