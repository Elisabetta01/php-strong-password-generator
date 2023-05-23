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

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <title>php-strong-password-generator</title>
</head>
<body>
     <div id="sfondo" class="bg-primary p-4 vh-100">

          <div id="titoli" class="text-center text-white">
               <h1>Strong Password Generator</h1>
               <h3>Genera una password sicura</h3>
          </div>

          <div id="form"class="bg-light rounded d-flex justify-content-center p-4 m-4">
               
               <div>
                    <form action="index.php" method="GET">
                         <span>Lunghezza password:</span>
                         <input type="number" name="lunghezzaPsw">

                         <button>Genera</button>
                    </form>
                    
                    <div class="text-center mt-4">
                         <span> La tua password è: <h5> <?php echo randomPsw() ?></h5> </span>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>