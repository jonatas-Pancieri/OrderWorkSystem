<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   
   $idOse= $_POST["N_Ose"];

    // Consulta SQL para buscar todos os clientes
      $sql = "select * from osehorarios where `osehorarios`.`OseId`='".$idOse."'";
 
         
        
        $result = $conn->query($sql);
         $numRows= $result->num_rows;
         
 echo( "<header>Apontamento Hora<br>OSE-".$idOse."</header>");
  echo("<div style='width:120%;max-height:200px;left:10px;top:20px;position:relative;overflow-y:scrool;'><table id='cont_Apon' Name='".$numRows."' class='w3-table' style='overflow-y:scrool;'><thead><tr><th scope='col'>Hora Inicial</th><th scope='col'>Hora Final</th><th >Tipo</th>
  </tr></thead><tbody>");
 
        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
            $count=1;
           
            while($row = $result->fetch_assoc()) {
                    
               
                     echo("<tr id='row_v2".$count."'><td id='idhora_".$count."' style='display:None;'>".$row["Id"]."</td><td style='width:100px;'><input type='time' id='H_I_".$count."' class='form-control form-control-sm'  value='".$row["HoraInicial"]."'></td><td><input type='time' id='H_F_".$count."' style='width:100px;' class='form-control form-control-sm' value='".$row["HoraFinal"]."'></td><td><input type='text' id='T_".$count."' class='form-control form-control-sm'  value='".$row["Atividade"]."' disable></td><td style='height:20px;'><button id='".$count."' onclick='deletar(this)' class='btn btn-primary ' style='padding:2px;'>Excluir</button></td></tr> ");  
               
           // <tr><td style='width:100px;'><input type='time' id='H_I_"+count+"' class='form-control form-control-sm'></td><td><input type='time' id='H_F_"+count+"' style='width:100px;' class='form-control form-control-sm'></td><td><select name='select' id='T_"+count+"' class='listSect'><option value='Gratuito'>Gratuito</option><option value='Treinamento' selected>Treinamento</option><option value='Deslocamento'>Deslocamento</option><option value='Hora Almoço'>Hora Almoço</option></select></td></tr>
           
//<div><tr><td style='width:100px;'><input type='time'  class='form-control form-control-sm' id='H_I_1' value='".$row["HoraInicial"]."'></td><td><input type='time' style='width:100px;' class='form-control form-control-sm' id='H_F_1' value='".$row["HoraFinal"]."'></td><td><select name='select' class='listSect' id='T_1'><option value='Gratuito'>Gratuito</option><option value='Treinamento' selected>".$row["Atividade"]."</option><option value='Deslocamento'>Deslocamento</option><option value='Hora Almoço'>Hora Almoço</option></select></td></tr><tr></tr></tbody></table></div> </div>


$count++;
                    }
                    
                   
                    
            }else {
    echo ("<tr ><td colspan='4' ><div style='width:400px;'><center>Nenhuma  hora encontrada</td></center> </div></tr>
   ");
         
        } 
        
         
        
            
            
         
echo(" 


</tbody>
</table>
<td scope='row' ><B><div style='font-size:108%;' id='cont_btnadd'> <button id='addcamp' onclick='addi_camp()' class='Btn_addHora' >adicionar campo</button></div></B></td></tr><tr><div class='containerBtns'><button onclick='cadastro(this)'  class='Btn_addHora' id='".$idOse."'>Cadastrar +</button><button  class='Btn_closeCard' onclick='closecard()'>Fechar</button></div></td>
 "
);

// Fechar a conexão com o banco de dados
$conn->close();
    
}

    