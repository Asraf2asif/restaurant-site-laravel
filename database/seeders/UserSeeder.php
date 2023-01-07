<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder; 

class UserSeeder extends Seeder
{
    private $userdata = [
        ["id"=> 1, "name" => "Asif", "usertype" => "0", "email" => "asraf2asif@gmail.com", "password" => "$2y$10$8kKRUltG9ihGZp9mwTjZ7uRL9m9E1k1IpqWqjP5BAnrX03KlMMRYO"],
       ["id"=> 2, "name" => "Admin-Asif", "usertype" => "1", "email" => "client.asraf2asif@gmail.com", "password" => "$2y$10\$OS4EB7GlRYGbaWgDTu/AO.ZULmRAS20ARf/4pqxNVK4CNYBPhMVam"],
       ["id"=> 3, "name" => "Asif4", "usertype" => "0", "email" => "asraf2asif45@gmail.com", "password" => "$2y$10\$CD6.8SlR0jf1/PJoA08xgeAfIYCa8u2nMrj/eh9waSdiGU3nQM9VG"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::whereNotNull('id')->delete();
        foreach ($this->userdata as $data) {
            User::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'usertype' => $data["usertype"],
                'email' => $data["email"],
                'password' => $data["password"],
            ]);
        }
    }
}
