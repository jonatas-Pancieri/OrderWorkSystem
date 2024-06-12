<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   $Analista_Sele=$_POST["Analist"];
    
    // Consulta SQL para buscar todos os clientes
     $sql = "SELECT
    oseanalistas.OseId,
    oseanalistas.UsuarioId,
    useranalist.Nome,
    oses.Cliente,
    oses.ClienteNome,
    usersolicit.Nome as SolicitanteNome,
    oses.DataInicioReal
   
FROM
    oseanalistas
JOIN
    oses ON oseanalistas.OseId = oses.Id    
JOIN
    usuarios as useranalist ON oseanalistas.UsuarioId = useranalist.Id
JOIN
    usuarios as usersolicit ON oses.Solicitante = usersolicit.Id

WHERE
    useranalist.Nome ='".$Analista_Sele."' 
ORDER BY
    oseanalistas.UsuarioId;";
 
 
         
       
        $result = $conn->query($sql);
echo("<h4 >Oses de <b>".$Analista_Sele."</b></h4>
<table class='table' id='tbl'>
  <thead>
    <tr>
      <th scope='col'>Numero Os </th>
      <th scope='col'>id analista</th>
      <th scope='col'>Nome Analista</th>
      <th scope='col'>Razao Social</th>
       <th scope='col'>Solicitante</th>
         <th scope='col'>Data/Hora</th>
    </tr>
  </thead>
  <tbody>");
        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
                $Numero_OS=$row["OseId"];
               $idAnalista=$row["UsuarioId"];
                $NomeAnlistas=$row["Nome"];
               $RazaoSocial=$row["ClienteNome"];
               $Solicitante= $row["SolicitanteNome"];
              $DataInicioReal= $row["DataInicioReal"];
                        
                         echo "<tr id='".$Numero_OS."' onclick='showPane(this)'>
                         <td scope='row' >".$Numero_OS."</td><td scope='row'>".$idAnalista."</td><td scope='row'>".$NomeAnlistas."</td><td scope='row'>".$RazaoSocial."</td><td scope='row'>".$Solicitante."</td><td scope='row'>".$DataInicioReal."</td></tr>";
    
                    }
                    
                    
                    
            }else {
    echo "<tr><th colspan='4'>Nenhuma OSE encontrada </th> </tr>";
         
        } 
            
            
         
echo(" </tbody>
</table>");

// Fechar a conexão com o banco de dados
$conn->close();
    
}

    



?>