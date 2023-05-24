<?php

function randomPassword(){
     $lunghezzaPassword = $_GET['lunghezzaPassword'];
     $caratteri = 'abcdefghilmnopqrstuvzwyjkxABCDEFGHILMNOPQRSTUVZWYJKX123456789#*';
     $password = '';

     for ($i = 0; $i < $lunghezzaPassword; $i++ ){
          $indiceRandom = rand(0, strlen($caratteri)-1);
          $caratteriRandom = $caratteri[$indiceRandom];
          $password .= $caratteriRandom;
     };
     return $password;

}

?>