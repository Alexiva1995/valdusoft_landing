<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Apps',
        ]);
        DB::table('tags')->insert([
            'name' => 'Diseño Web',
        ]);
        DB::table('tags')->insert([
            'name' => 'Desarrollo Web',
        ]);
        DB::table('tags')->insert([
            'name' => 'Diseño Gráfico',
        ]);
    }
}
