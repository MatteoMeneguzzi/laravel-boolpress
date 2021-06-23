<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['HTML', 'CSS', 'JavaScript', 'PHP'];

        foreach ($categories as $category) {
            // 1 Instanziare
            $new_category = new Category();

            // 2 
            $new_category->name = $category;
            $new_category->slug = Str::slug($category, '-');

            //3
            $new_category->save();
        }
    }
}
