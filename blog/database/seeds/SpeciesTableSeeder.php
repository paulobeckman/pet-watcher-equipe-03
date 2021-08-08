/<?php

use Illuminate\Database\Seeder;

class SpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        DB::table('user_pages')->delete();

        DB::table('species')->delete();

        DB::table('species')->insert([
            'id' => 1,
            'name' => 'cachorro',
        ]);

        DB::table('species')->insert([
            'id' => 2,
            'name' => 'elefante',
        ]);
        DB::table('species')->insert([
            'id' => 3,
            'name' => 'baleia',
        ]);
        DB::table('species')->insert([
            'id' => 4,
            'name' => 'queixada',
        ]);
    }
}
