<?php

//function getAddress ()                      {


$endereco = (object) [
    
    'cep' => '',
    'logradouro' => '',
    'localidade' => '',
    'bairro' => '',
    'uf' => '',
    'ddd' => '',
    
    
    
];

//CEP e ser consultado
if (isset ($_POST['cep'])) {      

  $cep = $_POST['cep'] ?? '18135300';   
    
// $cep = "45680000";
 
 //Link do webservice com a variável $cep
 $link = "https://viacep.com.br/ws/$cep/json";
 
 //Chama a biblioteca passando o link
 $ch = curl_init($link);
 
 /* Passamos a biblioteca ($ch), esperando um retorno (CURLOPT_RETURNTRANSFER), 
 esperando uma resposta (1) */
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
 //Não verifica o SSL, já que os dados trafegados não são sensíveis (0)
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
 //Executa
 $response = curl_exec($ch);
 
 
 
 //Fecha conexão
 curl_close($ch);
 
 //Converte o JSON em array
 $endereco = json_decode($response);
 
//var_dump($endereco->localidade);
 
}
//} 

//return $address;  

?>