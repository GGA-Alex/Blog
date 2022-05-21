<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Diseño web',
                'slug' => Str::slug('Diseño web')
            ],
            [
                'name' => 'Desarrollo web',
                'slug' => Str::slug('Desarrollo web')
            ],
            [
                'name' => 'Programación',
                'slug' => Str::slug('Programación')
            ],

        ];

        foreach ($categories as $category)
        {
            Category::create($category);
        }
    }
}
