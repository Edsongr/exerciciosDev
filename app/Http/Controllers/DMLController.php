<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Employee; 
use App\Models\Info; 

class DMLController extends Controller
{   

    private $employees;
    private $infos;

    public function __construct(Employee $employees, Info $infos)
    {
        $this->employees = $employees;
        $this->infos     = $infos;
    }

    public function index()
    {
        $employees = $this->employees->all();
        $infos = $this->infos->all();

        $infosEmployees = DB::table('employees')
                            ->join('infos','infos.cpf','=', 'employees.cpf')
                            ->where('genero', '=', 'M')
                            ->select('name', 
                                    DB::raw('IF(( YEAR(CURDATE()) - ano_nascimento) > 50, "SIM", "NÃO") as maiorCinquenta')
                            )
                            ->orderBy('maiorCinquenta')
                            ->orderBy('ano_nascimento')
                            ->get();


        return view("dml.index", compact('employees', 'infos', 'infosEmployees'));
    }

}
