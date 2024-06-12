<?php 
    session_start();
   $nameuser=$_SESSION['NameUser'];
    ?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="imagex/png" href="img/IconePadrao.png ">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>OSE</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets_2/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets_2/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets_2/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets_2/boxicons.min.css">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="assets_2/apexcharts.css">
</head>
<body>
   
    <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		<div class="menu">
			 <ul>
				<li class="nav-item dropdown dropdown-list-toggle">
									 
					<!-- <div class="dropdown-menu dropdown-list">
						<div class="dropdown-list-content dropdown-list-icons">
							<!--<div class="custome-list-notif"> 
							<a href="#" class="dropdown-item dropdown-item-unread">
								<div class="dropdown-item-icon bg-primary text-white">
								  <i class="fas fa-code"></i>
								</div>
								<div class="dropdown-item-desc">
									The Atrana template has the latest update!
								  <div class="time text-primary">3 Min Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="far fa-user"></i>
								</div>
								<div class="dropdown-item-desc">
								   Sri asks you for friendship!
								  <div class="time">12 Hours Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-danger text-white">
								  <i class="fas fa-check"></i>
								</div>
								<div class="dropdown-item-desc">
									Storage has been cleared, now you can get back to work!
								  <div class="time">20 Hours Ago</div>
								</div>
							  </a>

						  
							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="fas fa-bell"></i>
								</div>
								<div class="dropdown-item-desc">
								    Welcome to Atrana Template, I hope you enjoy using this template!
								  <div class="time">Yesterday</div>
								</div>
							  </a>
 
							</div>
						</div>

						<div class="dropdown-footer text-center">
						  <a href="#">View All</a>
						</div>-->

					  
				  </li>
			  
				  <li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <img src="assets_2/avatar-2.png" alt=""><?php echo($nameuser); ?>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html">
						    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg> <span>My Profile</span>
                        </a>
						
					</ul>
				  </li>
			</ul>
		</div>
	</div>-->


    
<!--Slide bar-->
<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content"> 
        	<div id="sidebar">
			
			<!-- Logo -->
			<div class="logo">
					<h2 class="mb-0"><img src="assets_2/logo.png"> OSE</h2>
			</div>

            <ul class="side-menu">
                <li>
					<a href="Home.php" class="active">
					    <img width="20" height="20" src="assets_2/img_icons/icons8-ponto-16.png" alt="full-stop--v1"/>
						 Dashboard
					</a>
				</li>

				<!-- Divider-->
                

                <li>
                    <a href="#">
					
						<img width="20" height="20" src="assets_2/img_icons/icons8-ponto-16.png" alt="full-stop--v1"/>
						OSEs 
						
					</a>
                    <ul class="side-dropdown">
                        <li><a href="VerOses.html">Listar Ose</a></li>
                        <li><a href="PageCriarOse.php">Cadastrar Ose</a></li>
                    </ul>
                </li>

                <li>
					<a href="VerOsesAnalistas.html">
					
						<img width="20" height="20" src="assets_2/img_icons/icons8-ponto-16.png" alt="full-stop--v1"/>
						Listar por Analista
					</a>
				</li>

                <li>
                    <a href="VerClientes.html">
					
						<img width="20" height="20" src="assets_2/img_icons/icons8-ponto-16.png" alt="full-stop--v1"/>
						Ver Saldos Clientes
						
					</a>
                    
                </li>

				<!-- Divider-->
                

				

				

				

				

				<!-- Divider-->
				


            </ul>

          
        </div>
    </div>
</div>
<!-- conteiner form  -->
<div class="content-start transition">
	  
		<div class="container-fluid dashboard">
		    	
			    <div class="content-header">
				    <h1>Emitir Ose</h1>
				    <p>_____________________________________</p>
			    </div>
		   	
			<div class="row" >
	            <!-- card selecionar tipo   -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h6>Selecionar tipo:</h6>
						</div>
						<div class="card-body"> 
						
						    <select id="tipoatendi" class="inputOption">
			                    <option value="Nenhum Selecionado">selecionar  </option>
                                <option value="Analise de Aderencia">Analise de Aderencia</option>
                                <option value="Demonstraçao">Demonstraçao</option>
                                <option value="Instalação">Instalação</option>
		                	    <option value="Treinamento/Implantação (abate saldo de horas)">Treinamento/Implantação (abate saldo de horas)</option>
			                    <option value="Treinamento/Implantação (gerar cobrança)">Treinamento/Implantação (gerar cobrança)</option>
			                 
			                  </select><br>
			                  
			                  
						</div>
					</div>
				</div>
				
				
				<!-- card selecionar cliente   -->
                
                <div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h6>Selecionar Empresa:</h6>
						</div>
						<div class="card-body"> 
						    <div class="col-md-8">
						       
						            <input type="text" id="CNPJ_CPF" class='form-control form-control-sm' style='width:400px;'placeholder="Informe o saldo da CNPJ ou CPF">
						            
                                    <button id="buscar" class="btn btn-primary">buscar</button>
                                       
                            </div>
        
                            <label><strong>Cliente:</strong></label>
                            <select id="ContainerClientes" class='form-control form-control-sm'>
                                <option>Nenhum Cliente Selecionado</option>
                            </select>
                            
                             

			                  
			                  
						</div>
					</div>
				</div>
                
                
                 <div class="col-md-12" >
                        <div class='card' >
                            <div class='card-body' id='Container' >
                               
                            </div>
                        </div>
                     </div>
                 <button id="btnCriarOse" style='width:10%;' class="btn btn-primary">Criar</button>
                
		   </div>
		    </div>
		
	</div>



	<!-- General JS Scripts -->
	<script src="assets_2/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets_2/jquery.min.js"></script>
	<script src="assets_2/bootstrap.bundle.min.js"></script>
	<script src="assets_2/popper.min.js"></script>

	

    <!-- Template JS File -->
	<script src="assets_2/script.js"></script>
	<script src="assets_2/custom.js"></script>
		<script src="functions/ManagerFuctions.js"></script>
	</body>
</html>
<script>
    document.getElementById("buscar").addEventListener("click", function() {
		      
		buscar();     
		     
		     
		 });
		 
    function buscar(){

 $.ajax({
                type: "POST",
                url: "functions/BuscarCliente.php ",
                data: {
                CNPJ:$('#CNPJ_CPF').val(),
       
                },
                 
                success: function(response){
                    //Se a solicitação for feita com sucesso, a resposta representará os dados
                $('#ContainerClientes').html(response);
               $('#Container').html("");
                     /*<label><strong>Cliente:</strong></label>
                            <select class="form-select" id="ContainerClientes" class='form-control form-control-sm'>
                                <option>Nenhum Cliente Selecionado</option>
                            </select> */
                 container= document.createElement("div");
                 container2=document.createElement("div");
                   card= document.createElement("div");
                   card_body=document.createElement("div");
                   card2= document.createElement("div");
                   card_body2=document.createElement("div");
                   
                   label= document.createElement("label");
                   inputSelect=document.createElement("select");
                   inputDate=document.createElement("input");
                   inputtext=document.createElement("input");
                    
                   card.setAttribute("class", "card");
                   card_body.setAttribute("class", "card-body");
                   
                    card2.setAttribute("class", "card");
                   card_body2.setAttribute("class", "card-body");
                   
                   inputSelect.setAttribute("class", "form-control form-control-sm");
                   inputSelect.setAttribute("id", "selectInst");
                   
                   inputtext.setAttribute("type", "text");
                   
                   inputDate.setAttribute("type", "date");
                    inputDate.setAttribute("class", "form-control form-control-sm");
                     inputDate.setAttribute("aria-label", "default input example");
                  
                 
                   
                   //id="ContainerClientes" class='form-control form-control-sm'
                   
                  
                   
                  // inputSelect.innerHTML("<option>Local</option>");
                    $('#Container').append("<table><th></th><th></th>");
                 $('#Container').append("<tr><td><h6 >Instalação: </h6></td><td><select id='inst' class='form-control form-control-sm'><option>Selecione &#8595</option><option>Local</option><option>Nooven</option></select><br></td></tr>");
                  $('#Container').append("<tr><td><h6>Analistas: </h6></td><td><select id='analist' class='form-control form-control-sm'><option>Selecione &#8595</option><option>Raphael</option> <option>Sergio</option><option value='Leone'>Leone</option><option value='Jose Souza'>Jose Souza</option><option value='Jose Souza'>Jonathan</option><option>Giovana.Maia</option><option value='Jaziel'>Jaziel</option><option value='Jarbas'>Jarbas</option><option value='Alyson'>Alyson</option><option value='Daniel'>Daniel</option></select> </td></tr>");
                  
                     $('#Container').append('<tr><td><h6>Período: </h6></td><td><input id="Period" class="form-control form-control-sm" type="date" placeholder=".form-control-sm" aria-label=".form-control-sm example"><br></td></tr>');
                  $('#Container').append('<tr><td><h6>Previsão de Início: </h6></td><td><input id="PrevInic" class="form-control form-control-sm" type="date" placeholder=".form-control-sm" aria-label=".form-control-sm example"></td></tr>');
                    $('#Container').append('<tr><td><h6>Previsão de finalização: </h6></td><td><input id="PrevFim"  class="form-control form-control-sm" type="date" placeholder=".form-control-sm" aria-label=".form-control-sm example"></td></tr>');
                    $('#Container').append('<tr><td><h6>Modalidade: </h6></td><td><select id="Modalid" class="form-control form-control-sm"><option>Selecione &#8595</option><option>Presencial</option><option>Remoto</option></select></td></tr>');
                    $('#Container').append('<tr><td><h6>Modulos: </h6></td><td ><div id="Mods" class="form-control"   ONCLICK="toggleOptions()">Modulos &#8595 </div> <div id="options" class="optionModu" style="display:none;"></div></td></tr></table>');
                                    
                                 $('#options').append('<tr>  <td><label> <input type="checkbox" id="AE" onclick="InserirVetorModulos(this)" ></td><td><strong><h6>AE</h6></strong></label></td></tr>');
       $('#options').append('<tr>  <td><label>  <input type="checkbox" id="AP" onclick="InserirVetorModulos(this)"></td><td><strong><h6>AP</h6></strong></label></td></tr>');
        $('#options').append('<tr>  <td><label>  <input type="checkbox" id="AT" onclick="InserirVetorModulos(this)"></td><td><strong><h6>AT</h6></strong></label></td></tr>');
         $('#options').append('<tr>  <td><label>  <input type="checkbox" id="AT" onclick="InserirVetorModulos(this)"></td><td><strong><h6>CB</h6></strong></label></td></tr>');
         $('#options').append('<tr>  <td><label>  <input type="checkbox" id="AU"onclick="InserirVetorModulos(this)"></td><td><strong><h6>AU</h6></strong></label></td></tr>');
          $('#options').append('<tr>  <td><label>  <input type="checkbox" id="BX"onclick="InserirVetorModulos(this)"></td><td><strong><h6>BX</h6></strong></label></td></tr>');
           $('#options').append('<tr>  <td><label>  <input type="checkbox" id="CC"onclick="InserirVetorModulos(this)"></td><td><strong><h6>CC</h6></strong></label></td></tr>');
            $('#options').append('<tr>  <td><label>  <input type="checkbox" id="CF"onclick="InserirVetorModulos(this)"></td><td><strong><h6>CF</h6></strong></label></td></tr>');
             $('#options').append('<tr>  <td><label>  <input type="checkbox" id="CP"onclick="InserirVetorModulos(this)"></td><td><strong><h6>CP</h6></strong></label></td></tr>');
              $('#options').append('<tr>  <td><label>  <input type="checkbox" id="FN"onclick="InserirVetorModulos(this)"></td><td><strong><h6>FN</h6></strong></label></td></tr>');
               $('#options').append('<tr>  <td><label>  <input type="checkbox" id="CE"onclick="InserirVetorModulos(this)"></td><td><strong><h6>CE</h6></strong></label></td></tr>');
    
         $('#options').append("<tr>  <td><label><input type='checkBox' id='FP' onclick='InserirVetorModulos(this)'></td><td><strong><h6>FP</h6></strong></label></td></tr>");
          $('#options').append("<tr>  <td><label><input type='checkBox' id='LF' onclick='InserirVetorModulos(this)'></td><td><strong><h6>LF</h6></strong></label></td></tr>");
           $('#options').append("<tr>  <td><label><input type='checkBox' id='NE' onclick='InserirVetorModulos(this)'></td><td><strong><h6>NE</h6></strong></label></td></tr>");
            $('#options').append("<tr>  <td><label><input type='checkBox' id='PP' onclick='InserirVetorModulos(this)'></td><td><strong><h6>PP</h6></strong></label></td></tr>");
             $('#options').append("<tr>  <td><label><input type='checkBox' id='QL' onclick='InserirVetorModulos(this)'></td><td><strong><h6>QL</h6></strong></label></td></tr>");
              $('#options').append("<tr>  <td><label><input type='checkBox' id='VD' onclick='InserirVetorModulos(this)'></td><td><strong><h6>VD</h6></strong></label></td></tr>");
              
                      /* $('#ModList').append('AT</option> ');
                        $('#ModList').append('<option>AU</option> ');
                         $('#ModList').append('<option>BX</option> ');
                          $('#ModList').append('<option>CB</option> ');
                           $('#ModList').append('<option>CC</option> ');
                             $('#ModList').append('<option>CE</option> ');
                     $('#ModList').append('<option>CF</option> ');
                      $('#ModList').append('<option>CP</option> ');
                       $('#ModList').append('<option>FN</option> ');
                        $('#ModList').append('<option>FP</option> ');
                         $('#ModList').append('<option>LF</option> ');
                          $('#ModList').append('<option>NE</option> ');
                           $('#ModList').append('<option>PP</option> ');
                            $('#ModList').append('<option>QL</option> ');
                             $('#ModList').append('<option>VD</option> ');
                    */
                    
                    $('#Container').append('<h6>Motivo de Agendamento: </h6><input id="Motiv" class="form-control form-control-sm" type="text" style="width:280px;height:100px;" placeholder=".form-control-sm" aria-label=".form-control-sm example">');
                     $('#Container').append('<h6>Nome do contato </h6><input id="NameCont" class="form-control form-control-sm" type="text" style="width:280px;height:40px;" placeholder=".form-control-sm" aria-label=".form-control-sm example">');
                    $('#Container').append('<h6>Telefone/E-mail/Outros </h6><input id="email" class="form-control form-control-sm" type="text" style="width:280px;height:100px;" placeholder=".form-control-sm" aria-label=".form-control-sm example">');
                      $('#Container').append('<h6>Assunto </h6><input id="assunt" class="form-control form-control-sm" type="text" style="width:280px;height:40px;" placeholder=".form-control-sm" aria-label=".form-control-sm example">');
                       
                       $('#Container').append('<p><div id="infoOse"></div></p>');
                     
                      document.getElementById("btnCriarOse").style.display='block';
                   
                  // inputSelect.innerHTML("<option>Local</option>");
                  
                     
                 // $('#Container').append(container.innerHTML);
                       /*******************/
                    /*  label.innerHTML="Período";
                   inputSelect.innerHTML="<option>Meio_Manhã</option> <option>Meio_tarde</option> <option>integral</option>";
                    card_body.append(label);
                    card_body.append(inputSelect);
                  // inputSelect.innerHTML("<option>Local</option>");
                    console.log("1"+card_body.innerHTML);
                   
                    
                  card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                //  $('#Container').append(container.innerHTML);
                  /*******************/
                      //label.innerHTML="Previsão de Início";
                  // card_body.innerHTML="";
                   //card.innerHTML="";
                  // inputSelect.innerHTML("<option>Local</option>");
                   /* console.log("1"+card_body.innerHTML);
                   card_body.append(label);
                  
                    card_body.append(inputDate);
                    
                  card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                    
                    $('#Container').append(container.innerHTML);
                  */
                    /*******************/
                  /*    label.innerHTML="Previsão de finalização";
                   inputSelect.innerHTML="<option>Raphael</option> <option>Sergio</option>";
                  //  card_body.innerHTML="";
                  // card.innerHTML="";
                  // inputSelect.innerHTML("<option>Local</option>");
                    console.log("1"+card_body.innerHTML);
                   card_body.append(label);
                    card_body.append(inputDate);
                    
                   card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                //  $('#Container').append(container.innerHTML);
                  
                  /*******************/
                    /*  label.innerHTML="Modalidade";
                   inputSelect.innerHTML="<option>Raphael</option> <option>Sergio</option>";
                    card_body.innerHTML="";
                   card.innerHTML="";
                  // inputSelect.innerHTML("<option>Local</option>");
                    console.log("1"+card_body.innerHTML);
                   card_body.append(label);
                    card_body.append(inputSelect);
                    
                   card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                  $('#Container').append(container.innerHTML);
                  /*******************/
                    /*  label.innerHTML="Modulos";
                   inputSelect.innerHTML="<option>Raphael</option> <option>Sergio</option>";
                   
                   card_body.innerHTML="";
                   card.innerHTML="";
                   
                  // inputSelect.innerHTML("<option>Local</option>");
                    console.log("1"+card_body.innerHTML);
                   card_body.append(label);
                    card_body.append(inputSelect);
                    
                   card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                  $('#Container').append(container.innerHTML);
                        /*******************/
                      // label.innerHTML="Motivo de Agendamento";
                   //inputSelect.innerHTML="<option>Raphael</option> <option>Sergio</option>";
                  // inputSelect.innerHTML("<option>Local</option>");
                   
                  // card_body.innerHTML="";
                  // card.innerHTML="";*/
                  /* 
                   card_body.append(label);
                    card_body.append(inputtext);
                    
                    card.append(card_body);
                    container.append(card);
                    console.log("2"+card_body.innerHTML);
                  $('#Container').append(container.innerHTML);*/
                      
                       // document.getElementById('selectInst').innerHTML="<option>Local</option><option>Nooven</option>";
                }
            });

}

        function cadastrarOse(){
            console.log("cnpj"+$('#CNPJ_CPF').val());
            console.log("rz"+$('#ContainerClientes').val());
            $.ajax({
                type: "POST",
                url: "functions/CadastrarOse.php ",
                data: {     
                            tipoatendi:$('#tipoatendi').val(),
                            cnpj:$('#CNPJ_CPF').val(),
                            Razao:$('#ContainerClientes').val(),
                			Instalacao:$('#inst').val(),
                            Analista:$('#analist').val(),
                            Periodo:$('#Period').val(),
                            Prev_In:$('#PrevInic').val(),
                            Prev_term:$('#PrevFim').val(),
                            Modalidade:$('#Modalid').val(),
                            Modulos:vetorModulos,
                            Motivos:$('#Motiv').val(),
                            Nome_Contato:$('#NameCont').val(),
                            Email:$('#email').val(),
                            Assunto:$('#assunt').val(),
                            
                },
                 
                success: function(response){
                console.log(response);
                }
                
            });
            
        }



document.getElementById("btnCriarOse").addEventListener("click", function() {
                         
                           //document.getElementById("Container").innerHTML("<h2>"+vetorModulos[2]+"</h2>");
                           infos= document.createElement("div");
                           infos.setAttribute("id", "infos");
                          // $('#infoOse').val("a");
                     
                     if(document.getElementById("btnCriarOse").innerHTML=='confirmar'){
                            $('#infoOse').append("<div class='p-6 my-6 bg-success text-white' style='width:25%;padding:4px;'>Cadastrado com sucesso !</div>");
                            
                             document.getElementById("btnCriarOse").style.display='none';
                            cadastrarOse();
                       }else{
                           
                       
                         //console.log($('#infoOse').val());
                            
                            $('#infoOse').append("<h6><b>Instalação:</b> "+$('#inst').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Modulos:</b> "+vetorModulos+"</h6>");
                            $('#infoOse').append("<h6><b>Analista</b >"+$('#analist').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Periodo</b> "+$('#Period').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Prev In:</b> "+$('#PrevInic').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Prev ter:</b> "+$('#PrevFim').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Modalidade:</b> "+$('#Modalid').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Modulos:</b> "+vetorModulos+"</h6>");
                            $('#infoOse').append("<h6><b>Motivos:</b> "+$('#Motiv').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Nome Contato:</b> "+$('#NameCont').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Email:</b> "+$('#email').val()+"</h6>");
                            $('#infoOse').append("<h6><b>Assunto:</b> "+$('#assunt').val()+"</h6>");
                            //$('#infoOse').append("<h6><b>Assunto:</b> "+$('#assunt').val()+"</h6>");
                       
                       console.log(document.getElementById("btnCriarOse").innerHTML);
                       //console.log($('#btnCriarOse').innerHTML;
                     
                       $('#btnCriarOse').html('confirmar');
                      
                          
                    }
                        /* $.ajax({
                            type: "POST",
                            data:{
                            N_Ose:idOse
                            
                            },
                            url: "CadastrarOse.php",
                
                 
                            success: function(response){
                            OBJConteinerPane.innerHTML=response;
                  
                        //console.log(response);  
                        
                        
                            }
                });*/
                         
       /* $('#Container').append('<p><div class="card text-white bg-success mb-3" style="width: 40rem;padding:20px;">OSE Criada com Sucesso !</div></p>');*/
        //$('#Container').append('test');
    });





let vetorModulos=[];
		function InserirVetorModulos(checkbox) {
         var idDoCheckbox = checkbox.id;
        console.log("ID da checkbox: " + idDoCheckbox);
        if (vetorModulos.includes(idDoCheckbox)) {
        //significa que temos que tirar pois ela ja esta no vetor 
      
        //pegando o index na posiçao 
        var indice = vetorModulos.indexOf(idDoCheckbox);
                    if (indice !== -1) {
                    // Usar o método splice para remover o elemento do vetor
                    vetorModulos.splice(indice, 1);
                    console.log("Elemento excluído:", idDoCheckbox);
                    } 
 
            }else{
      //se nao tiver incluir no vetor 
      vetorModulos.push(idDoCheckbox);
     
            }     
  
  // listar 
  
			    
			 
  
  
        }
   function toggleOptions() {
    const optionsContainer = document.querySelector('#options');
    optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
  }
    
</script>
<style>
    .optionModu{
    width:auto;
    height:140px;
    position:relative;
        overflow-y:auto;
    }
    #btnCriarOse{
        display:none;
    }
    </style>

    