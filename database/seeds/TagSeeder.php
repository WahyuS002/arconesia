<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = collect(['Technology', 'Nature', 'Education', 'Travel', 'Lifestyle']);
        $tag->each(function ($t) {
            \App\Tag::create([
                'nama_tag' => $t,
            ]);
        });
    }
}
