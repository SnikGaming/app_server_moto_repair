<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $user = new User;
        // $user->name = 'Long Trần';
        // $user->email = 'long@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();
        $users = [
            [
                'name' => 'Long Trần',
                'email' => 'long@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Nam Nguyễn',
                'email' => 'nam@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Hải Đào',
                'email' => 'hai@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Phong',
                'email' => 'phong@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Quân',
                'email' => 'quan@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            // ...
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
