<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

// print_r($categorias)

@$nome = $_POST['nome']; 
@$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);
// return 0;


if($idade >= 6 and $idade <= 12 ){
   echo "a href='windows.open" . "<b>" . "O competidor " . $nome . " faz parte da categoria " .  $categorias[0] . "!";
}
elseif($idade >= 13 and $idade <= 18){
    echo "<b>" . "O competidor " . $nome . " faz parte da categoria " .  $categorias[1] . "!";
}
else{
    echo "<b>" . "O competidor " . $nome . " faz parte da categoria " .  $categorias[2] . "!";
}

?>