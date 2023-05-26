<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Iliminate\Support\Facades\DB;

class AdultoResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        #DB::insert('insert into adulto_responsable (id, name) values (?, ?)', [1, 'Dayle']);
        DB::table('adulto_responsable')->insert([
            "name" => 'Kevin',
            "lastname" => 'Ejecutio',
            "rut" => '12365489',
            "vinculo" => 'ejecutio',
            "obs" => 'ejecutio',
            "direccion" => 'av banco estao esquina colina 1',
            "phone" => 'robao',
            "objetivos" => 'ser el mejor ejecutio',
            "email" => 'kevin_ejecutio@bancoestado.cl',
            "rubro" => 'ejecutio'
        ]);
        
    }
}
