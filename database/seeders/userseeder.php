<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')

            ],
            [
                'name'=>'Keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('123456')

            ],
            [
                'name'=>'Marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
