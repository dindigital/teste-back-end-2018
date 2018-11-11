<?php

use Illuminate\Database\Seeder;
use MarcusTeste\Especialidades;
class seeder_especialidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('especialidades')->truncate();

        Especialidades::create(['especialidade' => 'Pediatria']);
        Especialidades::create(['especialidade' => 'Ortopedista']);
        Especialidades::create(['especialidade' => 'Clínico geral']);
        Especialidades::create(['especialidade' => 'Dermatologista']);
        Especialidades::create(['especialidade' => 'Cardiologista']);
    }
}
