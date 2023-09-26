<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Smartphone', 'Laptop', 'Voucher Game'];
        $logos = ['smartphone.png', 'laptop.png', 'voucher_game.png'];

        foreach (array_combine($names, $logos) as $name => $logo) {
            Category::create([
                'name' => $name,
                'slug' => strtolower(str_replace(' ', '-', $name)),
                'logo' => $logo
            ]);
        }
    }
}
