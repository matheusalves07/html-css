<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = 18;

if($idade >= 6 && $idade <= 12)
{
    for($i =0; $i <= cout($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
     for($i =0; $i <= cout($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome. " compete na categoria adolescente";
    }
} 
else
{
     for($i =0; $i <= cout($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria adulto";
    }
}