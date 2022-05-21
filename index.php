<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Campeonato</title>
    <style>
        body{
            background-color: gray;
        }
       
       .box1{
        position: absolute;
        color: black;
        left: 23%;
        top: 15%;
        transform: translate(-50/-50);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 1px 10px 10px;
        border-radius: 10px;
        width: 50%;
       }
       fieldset{
        border: 3px solid black;
        border-radius: 20px;
        padding: 10px;
       }
       legend{
           border: 3px solid black;
           position: relative;
           text-align: center;
           padding: 10px;
           border-radius: 10px;
           color: black;

       }
       .divb{
           position: relative;
           text-align: center;
              
      }
      .labelInput{
          position: absolute;
          pointer-events: none;
          top: 0;
          left: 0;
          
      }
      .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 20px;
        width: 100%;
        letter-spacing: 2px;
      }
      .inputUser:focus ~ .labelInput,
      .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: black;
        }
      #submit{
        background-image: linear-gradient(to right,rgb(211, 211, 211), rgb(0, 0, 0));
        width: 60%;
        border: none;
        padding: 10px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        text-align: center;
        }
       #submit:hover{
        background-image: linear-gradient(to right,rgb(0, 0, 0), rgb(211, 211, 211));
        }
       
       
    </style>
</head>
<body>
    <form action="script.php" method="post">
         <div class="box1">
             <br>
    <fieldset>
    
        <br>
                <legend><b>FORMULARIOS PARA COMPETIDORES</b></legend>
    <br><br>
    <div class="divb">    
    <input type="text" name="nome" class="inputUser" required>  
    <label for="nome" class="labelInput"><b>Nome:</b></label>  
    </div>
    <br>
    <br>
    <div class="divb">    
    <input type="idade" name="idade" class="inputUser" required>
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