<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('posts')->insert([
                'user_id' => '1',
                'title' => $faker->title,
                'body' => $faker->paragraph(10),
                'foto' => 'images/post/post.jpg',
                'tanggal' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
