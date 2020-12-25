<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Author null',
                'email' => 'author@dfskld.ee',
                'password' => bcrypt(Str::random(16))
            ],
            [
                'name' => 'Author',
                'email' => 'author@mail.ru',
                'password' => bcrypt('123123'),
            ]
        ];
        DB::table('users')->insert($data);
    }
}
