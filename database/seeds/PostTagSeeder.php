<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostTagSeeder extends Seeder
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
            DB::table('post_tag')->insert([
                'post_id' => $i,
                'tag_id' => $i,
            ]);
        }
    }
}
