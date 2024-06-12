<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   
   $Analista=$_POST["Analista"];
   $N_Ose=$_POST["N_Ose"];
   $dataIni=$_POST["dataIni"];
   $dataFim=$_POST["dataFim"];
   $limit=$_POST["limit"];
   
   
   if(isset($_POST["categoria_Orde"])){
       $categoria_Orde=$_POST["categoria_Orde"];
   }else{
       $categoria_Orde="";
   }
   
   if(isset($_POST["tipo_Orde"])){
       $tipo_Orde=$_POST["tipo_Orde"];
   }else{
       $tipo_Orde="";
   }
    
   
   
       
     
   $queryWhere="";
   $queryOrderBy="";
   $vetorFildsFiltred=[];
   
  
   
   if($Analista!="") {
       if($queryWhere!=""){
            $queryWhere=$queryWhere." and useranalist.Nome ='".$Analista."' ";
       }else {
           $queryWhere="WHERE useranalist.Nome ='".$Analista."'";
       }
       
      
     
   }
  
   if($N_Ose!="") {
       if($queryWhere!=""){
            $queryWhere=$queryWhere." and oseanalistas.OseId ='".$N_Ose."'  ";
       }else {
           $queryWhere="WHERE oseanalistas.OseId ='".$N_Ose."'";
       }
       
      
   }
   
   if($dataIni!="") {
       if($queryWhere!=""){
            $queryWhere=$queryWhere." and oses.DataInicio >='".$dataIni." 00:00:00'";
       }else {
           $queryWhere="WHERE oses.DataInicio >='".$dataIni." 00:00:00'";
       }
       
      
   }
   $querylimit="";
   if($limit!="") {
       
            $querylimit=" limit ".$limit;
    }
    
    if($dataFim!="") {
       if($queryWhere!=""){
            $queryWhere=$queryWhere." and oses.DataFim <='".$dataFim." 23:59:59'";
       }else {
           $queryWhere="WHERE oses.DataFim <='".$dataFim." 23:59:59'";
       }
       
      
   }
   $querylimit="";
   if($limit!="") {
       
            $querylimit=" limit ".$limit;
    }
// $queryWhere= $queryWhere." ".$querylimit;
   
    if($categoria_Orde!="") {
       
       if($categoria_Orde=="orde_id"){
           $categoria_Orde="oseanalistas.OseId";//aualiza com nome real da categoria pois nao foi colocada o nome da tabela no id pra nao ficar expostos informaçoes do banco 
       }
       if($tipo_Orde=="crecente"){
           $tipo_Orde="asc";//aualiza com nome real da categoria pois nao foi colocada o nome da tabela no id pra nao ficar expostos informaçoes do banco 
       }else if($tipo_Orde=="decrecente") {
            $tipo_Orde="desc";//aualiza com nome real da categoria pois nao foi colocada o nome da tabela no id pra nao ficar expostos informaçoes do banco 
       }   
       
      
      $queryOrderBy=" order by ". $categoria_Orde." ".$tipo_Orde ;
   }

       
        

    // Consulta SQL para buscar todos os clientes
     $sql = "SELECT
    oseanalistas.OseId,
    oseanalistas.UsuarioId,
    useranalist.Nome,
    oses.Cliente,
    oses.ClienteNome,
    oses.DataInicioReal,
    oses.DataInicio,
    oses.DataFim,
    oses.Resumo
   
FROM
    oseanalistas
JOIN
    oses ON oseanalistas.OseId = oses.Id    
JOIN
    usuarios as useranalist ON oseanalistas.UsuarioId = useranalist.Id
$queryWhere
$queryOrderBy $querylimit";

         
        
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
               $num_Ose=$row["OseId"];
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