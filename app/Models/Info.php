<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
                            'cpf',
                            'genero',
                            'ano_nascimento'
                        ]; 



}