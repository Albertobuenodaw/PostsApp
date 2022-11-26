<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->insert([
			'nombre' => 'Arte',
		]);
        DB::table('temas')->insert([
			'nombre' => 'Alimentacion',
		]);
        DB::table('temas')->insert([
			'nombre' => 'Informática',
		]);
        DB::table('temas')->insert([
			'nombre' => 'Coches',
		]);
        DB::table('temas')->insert([
			'nombre' => 'Surf',
		]);
    }
}
