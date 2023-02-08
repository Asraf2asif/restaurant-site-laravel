<?php

namespace Database\Seeders;
use App\Models\Testimonial;

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    private $testimonialdata = [
        ["id"=> 1, "name" => "adame nesane", "bio" => "Chief Customer", "img" => "assets/images/customer1.png", "review" => "You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.", "rating" => "4.5"],
        ["id"=> 2, "name" => "adame nesane", "bio" => "Chief Customer", "img" => "assets/images/customer1.png", "review" => "You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.", "rating" => "4"],
        ["id"=> 3, "name" => "adam nahan", "bio" => "Chief Customer", "img" => "assets/images/customer2.png", "review" => "You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.", "rating" => "3.5"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */  
    public function run()
    {
        Testimonial::whereNotNull('id')->delete();
        foreach ($this->testimonialdata as $data) {
            Testimonial::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'bio' => $data["bio"],
                'review' => $data["review"],
                'rating' => $data["rating"],
                'img' => $data["img"],
            ]);
        }
    }
}
