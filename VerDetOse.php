<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   
   $idOse= $_POST["N_Ose"];

    // Consulta SQL para buscar todos os clientes
      $sql = "select * from oses where `oses`.`Id`='".$idOse."'";
 
         
        // echo( $sql);
        $result = $conn->query($sql);

        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
               
               $RazaoSoc=$row["ClienteNome"];
               $Status=$row["Status"];
                $Modalidade=$row["Modalidade"];
                 $Periodo=$row["Periodo"];
                  $Modulos=$row["Modulos"];
                   $Instalacao=$row["Instalacao"];
                    $Participantes=$row["Participantes"];
                     $dataEmitida=$row["DataSolicitacao"];
                     $CNPJm=$row["Cliente"];
                      $DataPreviComeco=$row["DataInicio"];
                       $DataPreviFim=$row["DataFim"];
                       $obj=$row["Objetivo"];
                       $motivo=$row["Motivo"];
                        $TipoAtendimento=$row["TipoAtendimento"];
                        
                        
                        $Logradouro=$row["Logradouro"];
                        $Complemento=$row["Complemento"];
                         $Bairro=$row["Bairro"];
                         $Cidade=$row["Cidade"];
                          $Estado=$row["Estado"];
                         
                         $Cep=$row["Cep"];
                         $DataInicioReal=$row["DataInicioReal"];
                         $DataFechamento=$row["DataFechamento"];
                         $Resumo=$row["Resumo"];
                         $Participantes=$row["Participantes"];
                         $Descricao=$row["Descricao"];
                        
               
            echo("<header>
<center><div style='font-size:140%;'>Detalhes OSE </h3> </div></center>
</header>
<div style='left:10px;position:absolute;'>
<table  class='w3-table'>
  <thead>
    <tr>
      <th scope='col'></th>
      <th scope='col'></th>
     </tr>
  </thead>
  <tbody>");
                        
                         echo "<tr >
                         <td scope='row' ><B><div style='font-size:108%;'>Código OSE :</div></B>
</td><td scope='row'>".$idOse."</td></tr>";
echo "<tr  >
                         <td scope='row' ><B>Previsão de Início:</div>
</B>
</td><td scope='row'>".$DataPreviComeco."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Previsão de Finalização:
</B>
</td><td scope='row'>".$DataPreviFim."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>ClienteNome:
</B>
</td><td scope='row'>".$RazaoSoc."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Data Cadastro:

</B>
</td><td scope='row'>".$dataEmitida."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Modalidade:
</B>
</td><td scope='row'>".$Modalidade."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Período:
</B>
</td><td scope='row'>".$Periodo."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Módulos:
</B>
</td><td scope='row'>".$Modulos."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Instalação: 
</B>
</td><td scope='row'>".$Instalacao."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Objetivo:
</B>
</td><td scope='row'>".$obj."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Motivo:
</B>
</td><td scope='row'>".$motivo."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Modo de Atendimento:
</B>
</td><td scope='row'>".$TipoAtendimento."</td></tr>";

echo "<tr >
                         <td scope='row' ><B>Logradouro:

</B>
</td><td scope='row'>".$Logradouro."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Complemento:

</B>
</td><td scope='row'>".$Complemento."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Bairro:

</B>
</td><td scope='row'>".$Bairro."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Cidade:

</B>
</td><td scope='row'>".$Cidade."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Estado:

</B>
</td><td scope='row'>".$Estado."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Cep:

</B>
</td><td scope='row'>".$Cep."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Data Inicio Real:


</B>
</td><td scope='row'>".$DataInicioReal."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Data Fechamento:


</B>
</td><td scope='row'>".$DataFechamento."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Resumo:

</B>
</td><td scope='row'>".$Resumo."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Participantes:

</B>
</td><td scope='row'>".$Participantes."</td></tr>";
echo "<tr >
                         <td scope='row' ><B>Descricao:

</B>
</td><td scope='row'>".$Descricao."</td></tr>";



    break;
                    }
                    
                    
                    
            }else {
    echo "<tr><td colspan='4'>Nenhum Ose  encontrada</td> </tr>";
         
        } 
        
         
        
            
            
         
echo(" </tbody>
</table>

 <br><bottom  class='Btn_closeCard' onclick='closecard()'>Fechar</bottom></div>"
);

// Fechar a conexão com o banco de dados
$conn->close();
    
}

    