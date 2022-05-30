<?php

include "servicos/servicoMensagemSessao.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Campeonato</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="script.php" method="post">
    
        <?php
        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro)){
            echo "<script type='text/javascript'>alert('$mensagemDeErro');</script>";
        }   
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso)){
            echo "<script type='text/javascript'>alert('$mensagemDeSucesso');</script>";
        }    
        ?>     
         <div class="box1">
             <br>
    <fieldset>
    
        <br>
                <legend><b>FORMULARIOS PARA COMPETIDORES</b></legend>
    <br><br>
    <div class="divb">    
    <input type="text" name="nome" class="inputUser">  
    <label for="nome" class="labelInput"><b>Nome:</b></label>  
    </div>
    <br>
    <br>
    <div class="divb">    
    <input type="idade" name="idade" class="inputUser">
    <label for="idade" class="labelInput"><b>Idade:</b></label>
    </div>
    <br><br>
    <div class="divb">
    <input type="submit" class="btn btn-primary pakainfo" name="submit" id="submit">
    </div>
    </div>
    
    </fieldset>
    
    </form>
</body>
</html>