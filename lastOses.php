<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   $limit=$_POST["limite"];

    // Consulta SQL para buscar todos os clientes
      $sql = "select oses.Id,oses.Resumo,oses.DataInicio,oses.DataFim from oses ORDER BY `oses`.`Id` DESC limit ".$limit;
 
         
        // echo( $sql);
        $result = $conn->query($sql);
echo('
<table class="table table-striped">
							<thead>
							  <tr>
								<th scope="col">Ose Id</th>
								<th scope="col">Titulo Ose</th>
								<th scope="col">Data/hora Inicio</th>
								<th scope="col">Data/hora Final</th>
								<th scope="col"></th>
							  </tr>
							</thead>
							<tbody>
							
							');
        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
               $num_Ose=$row["Id"];
               $dataInicio=$row["DataInicio"];
               $dataFim=$row["DataFim"];
                $titulo=$row["Resumo"];
                        
                         echo '
                         
                          <tr>
								<td scope="row" >#'.$num_Ose.'</td>
								<td>'.$titulo.'</td>
								<td>'.$dataInicio.'</td>
								<td>'.$dataFim.'</td>
		                        <th><button class="btn btn-primary" id="'.$num_Ose.'" onclick="showPane(this)">Ver detalhes</button></th>
		                        <th><button class="btn btn-primary" id="'.$num_Ose.'" onclick="showPaneAP_Hora(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
</svg></button></th>
		                        
		                        
							
							  </tr>
                         
                         ';
    
                    }
                    
                    
                    
            }else {
    echo "<tr><th colspan='4'>Nenhum Ose  encontrada</th> </tr>";
         
        } 
        
         
        
            
            
         
echo(" </tbody>

						  </table>
						  
"
);

// Fechar a conexão com o banco de dados
$conn->close();
    
}