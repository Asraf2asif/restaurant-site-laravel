<?php

namespace Database\Seeders;
use App\Models\Food;

use Illuminate\Database\Seeder;

class FoodMenuSeeder extends Seeder
{
    private $fooddata = [
        ["id"=> 1, "name" => "Mexican Eggrolls", "img" => "assets/images/food1.jpg", 
        "price" => 14.50, "desc" => "Face together given moveth divided form Of Seasons that fruitful."],
        ["id"=> 2, "name" => "chicken burger", "img" => "assets/images/food2.jpg", 
        "price" => 9.10, "desc" => "Together face given divided moveth Seasons form Of that fruitful."],
        ["id"=> 3, "name" => "topu lasange", "img" => "assets/images/food3.jpg", 
        "price" => 12.09, "desc" => "Form face together moveth given divided Of that Seasons fruitful."],
        ["id"=> 4, "name" => "pepper potatoas", "img" => "assets/images/food4.jpg", 
        "price" => 13.20, "desc" => "Given Face together divided moveth form Of that fruitful Seasons."],
        ["id"=> 5, "name" => "bean salad", "img" => "assets/images/food5.jpg", 
        "price" => 8.55, "desc" => "Face together given moveth divided form Of Seasons that fruitful."],
        ["id"=> 6, "name" => "beatball hoagie", "img" => "assets/images/food6.jpg", 
        "price" => 11.80, "desc" => "Together face given divided moveth Seasons form Of that fruitful."],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::whereNotNull('id')->delete();
        foreach ($this->fooddata as $data) {
            Food::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'img' => $data["img"],
                'price' => $data["price"],
                'desc' => $data["desc"],
            ]);
        }
    }
}
