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

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}
if(empty($idade)){
    echo "A idade não pode ser vazio";
    return;
}
if(strlen($nome) < 3){
    echo "O nome não pode ter menos que 3 caracteres";
    return;
}

if(strlen($nome) > 30){
    echo "O nome não pode ter mais que 30 caracteres";
    return;
}
if(!is_numeric($idade)){
    echo "Campo só aceita números como caracteres!";
    return;
}

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