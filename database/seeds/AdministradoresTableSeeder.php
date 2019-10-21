<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BUHWAR\Admin\Administrador::create([
            'nombre_completo' => 'Jesus Ramirez Vargas',
            'telefono' => '4991058737',
            'estado'=>1,
            'user_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
