<?php
    $categorias= [];
    $categorias[]= 'infantil';
    $categorias[]= 'adolescente';
    $categorias[]= 'adulto';

    $nome = 'Clayce';
    $idade = 12;
    
    // var_dump($categorias);
    if($idade >= 6 && $idade <= 12 )
    {
        for($i = 0; $i < count($categorias); $i++)
        {
           if($categorias[$i] == 'infantil') 
            echo $nome . ' compete na categoria infantil';//mostra info na tela, se true
        }
    }

    elseif($idade >= 13 && $idade<= 18)
    {
        for($i = 0; $i < count($categorias); $i++)
        {
           if($categorias[$i] == 'adolescente') 
            echo $nome.' compete na categoria adolescente';//mostra info na tela, se true
        }
    }

    else
    {
        echo $nome . ' compete na categoria adulto';//mostra info na tela, se true
    }
    
?>