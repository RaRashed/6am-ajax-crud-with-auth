<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'admin',
            'email' =>'admin@gmail.com',
            'phone_no' =>'01827801715',
            'role' =>'1',
            'password'=>bcrypt('12345678')

        ]);
        User::create([
            'name' =>'User',
            'email' =>'user@gmail.com',
            'phone_no' =>'01621796596',
            'role' =>'0',
            'password'=>bcrypt('12345678')

        ]);
    }
}
