<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
