<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name' => 'Alexis Valera',
        ]);
        DB::table('members')->insert([
            'name' => 'Brayan Arias',
        ]);
        DB::table('members')->insert([
            'name' => 'Carlos Gonzalez',
        ]);
        DB::table('members')->insert([
            'name' => 'Christopher Chirino',
        ]);
        DB::table('members')->insert([
            'name' => 'Crisleivys Gil',
        ]);
        DB::table('members')->insert([
            'name' => 'Eduardo Nava',
        ]);
        DB::table('members')->insert([
            'name' => 'Freddy Millan',
        ]);
        DB::table('members')->insert([
            'name' => 'Joe Rodríguez',
        ]);
        DB::table('members')->insert([
            'name' => 'Luisanaelena Marín',
        ]);
        DB::table('members')->insert([
            'name' => 'Ramón Figuera',
        ]);
        DB::table('members')->insert([
            'name' => 'Pedro Henriquez',
        ]);
        DB::table('members')->insert([
            'name' => 'Pietro Pasqualis',
        ]);
        DB::table('members')->insert([
            'name' => 'Victor Utrera',
        ]);
    }
}
