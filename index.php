<?php

include_once('viacepcurl.php');



?>

<html>
    <head>
        <title>CONSUMINDO API VIACURL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      
    
        
        <form action="." method="post">
            <p>Digite o CEP para encontrar o endereço</p>
            <input type="text" placeholder="Digite o CEP" name="cep" value="<?php echo $endereco->cep ?>"/>
            <input type="submit"/>
         
            </br></br>
            
            <input type="text" placeholder="rua" name="rua" value="<?php  echo $endereco->logradouro ?>">

<br><br>

<input type="text" placeholder="localidade" name="localidade" value="<?php echo $endereco->localidade ?>">
            

    
                                                                         
        </form>
        
        
        
        
        
    </body>
</html>

