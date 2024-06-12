<?php
include('conectar.php');

//if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter os dados enviados
   
    
    // Consulta SQL para buscar todos os clientes
      $sql = "SELECT `CNPJ`,`Razao social` FROM `ClienteSaldos` limit 40 ";
      
         
        // echo( $sql);
        $result = $conn->query($sql);
echo( '	<table class="table table-striped">
							<thead>
							  <tr>
								<th scope="col">CNPJ</th>
								<th scope="col">Razao Social</th>
								<th scope="col">Saldos de Horas Contratado Remoto</th>
								<th scope="col">Saldos de Horas Contratado Presencial</th>
								
							<th scope="col"> horas Consumidas Presencial</th>
							<th scope="col"> horas Consumidas Remoto</th>
							
								<th scope="col"></th>
							  </tr>
							</thead>
							<tbody>');
        // Verificar se há resultados e exibir os dados
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
                $cnpj=$row["CNPJ"];
               $RazaoSocial=$row["Razao social"];
           //    echo($row["Cliente"]);
               /*********   consumido presencial **************/
               $sql2 = "SELECT SUM(TIME_TO_SEC(HoraFinal)-TIME_TO_SEC(HoraInicial)) AS totalconsumido FROM `osehorarios`,`oses` where `osehorarios`.`Atividade`='Treinamento' and `oses`.Id in (SELECT `oses`.Id  from `oses` where `oses`.`Cliente`='".$cnpj."' ) and (`osehorarios`.`OseId`=`oses`.`Id` and `oses`.`Modalidade`='Presencial' AND `oses`.`TipoAtendimento`='Treinamento/Implantação (abate saldo de horas)');";
               
                $result2 = $conn->query($sql2);
                
                
                
                    if ($result2->num_rows > 0) {
                        
                        while($row2 = $result2->fetch_assoc()) {

                            $ConsHorasPresencial=$row2["totalconsumido"];
                            //$ConsHorasPresencial=$ConsHorasPresencial+1;
                          //$ConsHorasPresencial= floatval($ConsHorasPresencial);
                            //trasformando em segundos
                    
                           
                            
                            if( $ConsHorasPresencial==null){
                                 $ConsHorasPresencial=0;
                            }
                        }
                    }else{
                        $ConsHoras=0;
                    } 
                    
                    
                      $sql2_2 = "SELECT sum(`HISTEXTOS`.`TOTALHORAS`) as totconsPress FROM `HISTEXTOS`  
WHERE `HISTEXTOS`.`NUMEROCLI`='".$cnpj."' and  (`HISTEXTOS`.`DESCRICAO`='Impl.e Treinamento (U)' or `HISTEXTOS`.`DESCRICAO`='Impl.e Treinamento (I)');";

               //echo ("numero linhas query 3".$result3->num_rows);
                    $result2_2 = $conn->query($sql2_2);
                     if ($result2_2->num_rows > 0) {
                        
                        while($row2_2 = $result2_2->fetch_assoc()) {
                                $totconsPress=$row2_2["totconsPress"];
                                if( $totconsPress==null){
                                 $totconsPress=0;
                            }
                                 //trasformando em segundos
                                $totconsPress=$totconsPress*3600;
                               // $horaconsPres1 = new DateTime($totconsPres);
                               
                                $ConsHorasPresencial=$totconsPress+$ConsHorasPresencial;
                                   
                                  $horas=intval($ConsHorasPresencial/3600,10);
                                 $minutos=intval(($ConsHorasPresencial%3600)/60,10);
                                //transformando em horas
                                $ConsHorasPresencial=$horas.":".$minutos;
                                
                                
                               // $horaconsPres2 = new DateTime($ConsHorasPresencial);
                          
                                
                                /*$hora2->add($hora1);
                           $ConsHorasPresencial=$hora2;*/
                          
                            
                            
                            
                        }
                    }else{
                       $ConsHorasPresencial=0;
                        
                    }
                    
                    
                    
                    
                    
          /*********************************************/            
 /****** consumido  Remoto ***********/
                    
                      $sql2 = "SELECT SUM(TIME_TO_SEC(HoraFinal)-TIME_TO_SEC(HoraInicial)) AS totalconsumidoRemo FROM `osehorarios`,`oses` where `osehorarios`.`Atividade`='Treinamento' and `oses`.Id in (SELECT `oses`.Id  from `oses` where `oses`.`Cliente`='".$cnpj."' ) and (`osehorarios`.`OseId`=`oses`.`Id` and `oses`.`Modalidade`='Remoto' AND `oses`.`TipoAtendimento`='Treinamento/Implantação (abate saldo de horas)');";
               
                $result2 = $conn->query($sql2);
                
                
                
                    if ($result2->num_rows > 0) {
                        
                        while($row2 = $result2->fetch_assoc()) {

                            $ConsHorasRemoTo=$row2["totalconsumidoRemo"];
                            //$ConsHorasPresencial=$ConsHorasPresencial+1;
                          //$ConsHorasPresencial= floatval($ConsHorasPresencial);
                            //trasformando em segundos
                    
                           
                            
                            if( $ConsHorasRemoTo==null){
                                 $ConsHorasRemoTo=0;
                            }
                        }
                    }else{
                        $ConsHoras=0;
                    } 
                   
                    
                    $sql2_2 = "SELECT sum(`HISTEXTOS`.`TOTALHORAS`) as totconsRemo FROM `HISTEXTOS`  
WHERE `HISTEXTOS`.`NUMEROCLI`='".$cnpj."' and  (`HISTEXTOS`.`DESCRICAO`='Impl.e Treinamento REMOTO(U)' or `HISTEXTOS`.`DESCRICAO`='Impl.e Treinamento REMOTO(I)');";

               //echo ("numero linhas query 3".$result3->num_rows);
                    $result2_2 = $conn->query($sql2_2);
                     if ($result2_2->num_rows > 0) {
                        
                        while($row2_2 = $result2_2->fetch_assoc()) {
                                $totconsremo=$row2_2["totconsRemo"];
                                if( $totconsremo==null){
                                 $totconsremo=0;
                            }
                                 //trasformando em segundos
                                $totconsremo=$totconsremo*3600;
                               // $horaconsPres1 = new DateTime($totconsPres);
                               
                                $ConsHorasRemoTo=$totconsremo+$ConsHorasRemoTo;
                                 //transformando em horas
                                 
                                 
                                  $horas=intval($ConsHorasRemoTo/3600,10);
                                 $minutos=intval(($ConsHorasRemoTo%3600)/60,10);
                                 
                              
                        
                                $ConsHorasRemoTo=$horas.":".$minutos;
                                 
                               // $horaconsPres2 = new DateTime($ConsHorasPresencial);
                          
                                
                                /*$hora2->add($hora1);
                           $ConsHorasPresencial=$hora2;*/
                          
                            
                            
                            
                        }
                    }else{
                       $ConsHorasRemoTo=0;
                        
                    } 
                    /****************************************/
                    
                    
                    
                    /***** horas adicionada presencial e Remoto    ****/
                    $sql3 = "SELECT SUM(HORASPRESENCIAL) AS totalSaldoAdicionado_Pres,SUM(HORASREMOTO) AS totalSaldoAdicionado_Remo 
                    FROM `EXTRCLIE` where `EXTRCLIE`.`CLIENTE`='".$cnpj."';";
               //echo ("numero linhas query 3".$result3->num_rows);
                    $result3 = $conn->query($sql3);
                     if ($result3->num_rows > 0) {
                        
                        while($row3 = $result3->fetch_assoc()) {
                            
                            $addSaldoPres=$row3["totalSaldoAdicionado_Pres"];
                           
                           
                            $addSaldoRemo=$row3["totalSaldoAdicionado_Remo"];
                            if($addSaldoPres==null){
                                 $addSaldoPres=0;
                            }
                            if($addSaldoRemo==null){
                                $addSaldoRemo=0;
                            }
                             $addSaldoPres=$addSaldoPres.":00";
                                      $addSaldoRemo=$addSaldoRemo.":00";
                            
                        }
                    }else{
                        $addSaldoRemo=0;
                        $addSaldoPres=0;
                        
                    } 
                    /**************************/
                        $form="'".$cnpj."','".$RazaoSocial."'";
                         echo "<tr>
                         <th scope='row' id='col-".$cnpj."'>".$cnpj."</th>
                         <th scope='row' id='RazSoc".$cnpj."'>".$RazaoSocial."</th>
                         <th scope='row'>".$addSaldoRemo."</th>
                         <th scope='row'>".$addSaldoPres."</th>
                         
                          <th scope='row'>".$ConsHorasPresencial."</th>
                          <th scope='row'>".$ConsHorasRemoTo."</th>
                        
                         </tr>
                         ";
    
                    }
                    
                    
                    
            }else {
    echo "<tr><th colspan='4'>Nenhum cliente encontrado</th> </tr>";
         
        } 
            
            
         
echo(" </tbody>
</table>");

// Fechar a conexão com o banco de dados
$conn->close();
    


    
//}


?>