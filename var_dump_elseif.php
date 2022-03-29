<?php
    $categorias= [];
    $categorias[]= 'infantil';
    $categorias[]= 'adolescente';
    $categorias[]= 'adulto';

    print_r($categorias); //mostra na tela o que está armazenado na var

    $nome= 'Clayce';
    $idade= '30';

    var_dump($nome, $idade);//info sobre o dado inserido na var
    
    if($idade >= 6 && $idade <= 12 )
    {
        echo 'infantil';//mostra info na tela, se true
    }

    elseif($idade >= 13 && $idade<= 18)
    {
        echo 'adolescente';
    }

    else
    {
        echo 'adulto';
    }
?>