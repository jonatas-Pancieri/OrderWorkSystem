<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   
   $CNPJ= $_POST["CNPJ"];
  $RazaoSocial=$_POST["RazaoSocial"];
    // Consulta SQL para buscar todos os clientes
      $sql = "select oses.Id,oses.DataInicio,oses.DataFim from oses where oses.Cliente='".$CNPJ."'";
 
         
        // echo( $sql);
        $result = $conn->query($sql);
echo("<header>
<center><div style='font-size:140%;'>Extrato Saldos Debitos e Creditos </div></center><BR><b>Cliente:</b>".$RazaoSocial."<br><b>CNPJ:</b>".$CNPJ."
</header>
<table  class='w3-table'>
  <thead>
    <tr>
      <th scope='col'>Numero Ose</th>
      <th scope='col'>Data Inicio</th>
      <th scope='col'>Data Final</th>
      
      
    </tr>
  </thead>
  <tbody>");
        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
               $num_Ose=$row["Id"];
               $dataInicio=$row["DataInicio"];
               $dataFim=$row["DataFim"];
            
                        
                         echo "<tr >
                         <td scope='row' >".$num_Ose."...................</td><td scope='row'>".$dataInicio."</td><td scope='row'>".$dataFim."</td></tr>";
    
                    }
                    
                    
                    
            }else {
    echo "<tr><th colspan='4'>Nenhum Ose  encontrada</th> </tr>";
         
        } 
        
         
        
            
            
         
echo(" </tbody>
</table>
 <br><bottom  class='Btn_closeCard' onclick='closecard()'>Fechar</bottom>"
);

// Fechar a conexão com o banco de dados
$conn->close();
    
}

    