<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArrayController extends Controller
{   

    public function index()
    {
        return view("array.index");
    }

    public function runArray()
    {
        $brHR = "<br><hr>";
        
        echo "INICIO";
        echo $brHR;
        /**
         * Criando um Array
         */
        $arrayOne = array();

        /**
         * Populando com 7 numeros randomicos
         */
        for($x=0; $x < 7; $x++)
            $arrayOne[] = rand(1, 999);

        /**
         * Exibindo a Posição 3
         */
        echo "TERCEIRA POSIÇÃO: " .  $arrayOne[2];
        echo $brHR;

        /**
         * e uma variável com todas as posições do array no formato de string separado por vírgula
         */
        $varString = implode(", ", $arrayOne);
        echo "STRING SEPARADO POR VÍRGULA: " .  $varString;
        echo $brHR;

        /**
         * um novo array a partir da variável no formato de string que foi criada e destrua o array anterior
         */
        $newArray = explode(", ", $varString);
        unset($arrayOne);
        echo "NOVO ARRAY: ";
        var_dump($newArray);
        echo $brHR;

        /**
         * condição para verificar se existe o valor 14 no array
         */
        if(in_array(14, $newArray))
            echo 'TEM NUMERO 14';
        else 
            echo 'NÃO TEM NUMERO 14';

        echo $brHR;

        /**
         * uma busca em cada posição. Se o número da posição atual for menor que o da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta posição
         */
        $aux = 0;
        foreach($newArray AS $k => $check) {
           
            if ($aux > 0) {
                if (intval($check) < intval($newArray[$aux-1])) {
                    unset($newArray[$aux]);
                    $newArray = array_values($newArray);
                } else {
                    $aux++;
                }
            } else {
                $aux++;
            }

        }
        echo 'TRATADO PARA EXCLUIR POSIÇÃO MENOR: ';
        var_dump($newArray);
        echo $brHR;

        /**
         * Remova a última posição deste array
         */
        unset($newArray[ (count($newArray) - 1) ]);

        echo 'REMOVIDO A ULTIMA POSIÇÃO: ';
        var_dump($newArray);
        echo $brHR;

        /**
         * Conte quantos elementos tem neste array
         */
        echo "CONTÉM " . count($newArray) . " ELEMENTOS NO ARRAY";
        echo $brHR;
        /**
         * Inverta as posições deste array
         */
        $newArray = array_reverse($newArray);
        echo 'REVERSO DO ARRAY: ';
        var_dump($newArray);
        echo $brHR;

        echo 'FIM';
        echo $brHR;
        exit;
    }


}
