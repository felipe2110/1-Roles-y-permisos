<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> hash::make('password'),
        ]);
        $user -> assignRole('admin');

        $user = User::create([
            'name'=>'employe',
            'email'=>'employe@gmail.com',
            'password'=> hash::make('password'),
        ]);
        $user -> assignRole('employe');
    }
}
