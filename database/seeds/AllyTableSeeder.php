<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AllyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allies')->insert([
            'name' => 'Índigo marketing',
            'description' => 'Agencia de Marketing en Córdoba',
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Efranet',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Minka brand',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Bisonte',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Sinergia',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Valdusoft',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
        DB::table('allies')->insert([
            'name' => 'Smartbunny',
            'description' => null,
            'logo' => 'Grupo-106.png',
        ]);
    }
}
