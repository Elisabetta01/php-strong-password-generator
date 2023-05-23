<?php

function randomPsw(){
     $lunghezzaPsw = $_GET['lunghezzaPsw'];
     $caratteri = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!?£$%&/()=^*+';
     $password = '';

     for ($i = 0; $i < $lunghezzaPsw; $i++ ){
          $indiceRandom = rand(0, strlen($caratteri)-1);
          $caratteriRandom = $caratteri[$indiceRandom];
          $password .= $caratteriRandom;
     };
     return $password;

}

?>