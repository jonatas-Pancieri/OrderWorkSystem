<?php
session_start();
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
 $VetHoras = array();

     $iduser=$_SESSION['idUser'];
    $idOse = $_POST["IdOse"];
    $VetHoras = $_POST["VetHoras"];
    
   
    for($i=0;$i<sizeof($VetHoras);$i++){
       
        $H_I=$VetHoras[$i]["H_I"];
        $H_F=$VetHoras[$i]["H_F"];
        $tipo=$VetHoras[$i]["Tipo"];
    $dataAtual= date("Y/m/d"); 
       $sql = "INSERT INTO `osehorarios` (`OseId`, `UsuarioId`, `Data`, `HoraInicial`, `HoraFinal`, `Atividade`, `HorasDesconto`) VALUES ('$idOse', '$iduser', '".$dataAtual." 00:00:00' , '$H_I', '$H_F', '$tipo', '00:00:00');";
       echo($sql);
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
  
 /* $sql = "INSERT INTO `osehorarios` (`OseId`, `UsuarioId`, `Data`, `HoraInicial`, `HoraFinal`, `Atividade`, `HorasDesconto`) VALUES ( '$idOse', '$iduser', \'$VetHoras', \'20:47:59\', \'28:47:59\', \'*\', \'14:47:59\');";*/
        
            
         }                   
  ?>         