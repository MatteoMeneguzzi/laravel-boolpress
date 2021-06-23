<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Front End', 'Back End', 'Design', 'UX', 'Laravel'];

        foreach ($tags as $tag) {
            // 1 Importare App\Tag
            $new_tag = new Tag();

            // 2 popolazione Tag
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($tag, '-');

            // 3 salvare
            $new_tag->save();
        }
    }
}
