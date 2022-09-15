@extends('layouts.app')
@section('title')
    <h1><i class="fas fa-chalkboard-teacher"></i> | Trata Array</h1>
@endsection
@section('content')
<div class="card container">

    <div class="card-body code">
    <pre>
        <code>
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
            echo $arrayOne[2];

            /**
            * e uma variável com todas as posições do array no formato de string separado por vírgula
            */
            $varString = implode(", ", $arrayOne);

            /**
            * um novo array a partir da variável no formato de string que foi criada e destrua o array anterior
            */
            $newArray = explode(", ", $varString);
            unset($arrayOne);

            /**
            * condição para verificar se existe o valor 14 no array
            */
            if(in_array(14, $newArray)) {
                echo 'Tem o valor 14';
            }

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

            /**
            * Remova a última posição deste array
            */
            unset($newArray[ (count($newArray) - 1) ]);

            /**
            * Conte quantos elementos tem neste array
            */
            echo "Contém " . count($newArray) . " Elementos no Array";

            /**
            * Inverta as posições deste array
            */
            array_reverse($newArray);
        </code>
        </pre>
        <a href="/array/runArray" target="_blank" class="exemploArray">ABRIR EXEMPLO</a>
    </div>
</div>
@endsection

