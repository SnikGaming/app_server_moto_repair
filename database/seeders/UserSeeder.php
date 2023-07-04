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
        // $user->password = Hash::make('123');
        // $user->save();
        $users = [
            [
                'name' => 'Long Trần',
                'email' => 'long@gmail.com',
                'image' => '2.jpg',
                'password' => Hash::make('123@Long'),
                'address' => 'Đồng Tháp'
            ],
            [
                'name' => 'Trang',
                'email' => 'trang@gmail.com',
                'gender' => 0,
                'image' => '1.jpg',
                'password' => Hash::make('123@Trang'), //0712@Trang
                'address' => 'Bình Phước'

            ],

            [
                'name' => 'Quân',
                'email' => 'quan@gmail.com',
                'password' => Hash::make('123@Quan'),
                // 'address' => 'Tây Ninh'

            ],
            // ...
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
