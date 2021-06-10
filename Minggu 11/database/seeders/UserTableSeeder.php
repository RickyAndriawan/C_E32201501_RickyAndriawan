<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'ricky',
            'email' => 'ricky@gmail.com',
            'password' => bcrypt(11111111),
        ]);
    }
}