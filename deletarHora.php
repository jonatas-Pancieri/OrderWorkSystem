 <?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
  $IdOse=$_POST['IdOse'];
   $H_I=$_POST['H_I'];
    $H_F=$_POST['H_F'];
     $Tipo=$_POST['Tipo'];
  
                      
    
    // Consulta SQL para buscar todos os clientes
         $sql = "DELETE FROM osehorarios WHERE `osehorarios`.`OseId`='".$IdOse."' and HoraInicial='".$H_I."' and HoraInicial='".$H_F."' and  Atividade='".$Tipo."'; ";

         echo($sql); 
         
        $result = $conn->query($sql);

        
         
         


// Fechar a conexão com o banco de dados
$conn->close();
    
                          
                          
                          

    
  
} 