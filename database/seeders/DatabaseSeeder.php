<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee; 
use App\Models\Info; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            ['name' => 'Luke Skywalker', 'cpf' => '16798125050'],
            ['name' => 'Bruce Wayne', 'cpf' => '59875804045'],
            ['name' => 'Diane Prince', 'cpf' => '04707649025'],
            ['name' => 'Bruce Banne', 'cpf' => '21142450040'],
            ['name' => 'Harley Quinn', 'cpf' => '83257946074'],
            ['name' => 'Peter Parker', 'cpf' => '07583509025']
        ]);

        Info::insert([
            ['cpf' => '16798125050', 'genero' => 'M', 'ano_nascimento' => 1976],
            ['cpf' => '59875804045', 'genero' => 'M', 'ano_nascimento' => 1960],
            ['cpf' => '04707649025', 'genero' => 'F', 'ano_nascimento' => 1988],
            ['cpf' => '21142450040', 'genero' => 'M', 'ano_nascimento' => 1954],
            ['cpf' => '83257946074', 'genero' => 'F', 'ano_nascimento' => 1970],
            ['cpf' => '07583509025', 'genero' => 'M', 'ano_nascimento' => 1972]
        ]);

    }
}
