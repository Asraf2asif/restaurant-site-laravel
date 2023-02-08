<?php

namespace Database\Seeders;
use App\Models\Specialdishes;

use Illuminate\Database\Seeder;

class SpecialDishesSeeder extends Seeder
{
    private $spdishesdata = [
        ["id"=> 1, "namepart1" => "Garlic", "namepart2" => "green beans", "img" => "assets/images/deshes1.png", "desc" => "Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.", "price" => 12],
        ["id"=> 2, "namepart1" => "Lemon", "namepart2" => "rosemary chicken", "img" => "assets/images/deshes2.png", "desc" => "Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.", "price" => 26],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialdishes::whereNotNull('id')->delete();
        foreach ($this->spdishesdata as $data) {
            Specialdishes::create([
                'id' => $data["id"],
                'namepart1' => $data["namepart1"],
                'namepart2' => $data["namepart2"],
                'img' => $data["img"],
                'desc' => $data["desc"],
                'price' => $data["price"],
            ]);
        }
    }
}
