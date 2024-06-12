<?php 
    session_start();
   
    ?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="imagex/png" href="img/IconePadrao.png ">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					  <img src="assets_2/avatar-2.png" alt=""><?php  echo($_SESSION['NameUser']); ?>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html">
						    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg> <span>Meu Perfil</span>
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

 


<div id='ContainerShowPane' style='display:none;' ></div>


<!--Content Start-->

	<div class="content-start transition">
	  
		<div class="container-fluid dashboard" style="top:10px;position:relative;width:100%;">
		    	
			    <div class="content-header">
				    <h1>Pagina Inicial</h1>
				    <p></p>
			    </div>
		   	
			<div class="row">

				
            <div class="col-12 mb-2">
                  <div class="hero text-white hero-bg-image" style="background-image: url('img/bg.webp');">
                    <div class="hero-inner" style="z-index:0;">
                      <h2 ><?php  echo("Seja bem Vindo,".$_SESSION['NameUser']." !");  ?> </h2>
                      <p class="lead">voce acessou ao sistema  ordem de Serviço (OSE) da supersoft .</p>
                     </div>
                  </div>
                </div>
				

				

				
		
				
				
				
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Ultimos Oses</h4>
						</div>
						<div class="card-body"> 
						    <div class="table-responsive" id='containerLastOses' >
						        
						    </div>
						</div>
					</div>
				</div>

		   </div>
		    </div>
		
	</div>
	
	
	
	
	
	
	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="assets_2/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets_2/jquery.min.js"></script>
	<script src="assets_2/bootstrap.bundle.min.js"></script>
	<script src="assets_2/popper.min.js"></script>

	

    <!-- Template JS File -->
	<script src="assets_2/script.js"></script>
	<script src="assets_2/custom.js"></script>
	<script src="functions/ManagerHoras.js"></script>
	</body>
</html>
<script>
let idOse;
        VisualizarlastOses(20);
 function VisualizarlastOses(limit) {
		       
		      $.ajax({
                type: "POST",
                url: "lastOses.php",
                 data:{
                    limite:limit
                    
                },
                 
                success: function(response){
                  document.getElementById("containerLastOses").innerHTML=response;
                  
                        console.log(response);  
                        
                        
                }
           
            });
		}
	
	/*	let loadEvento=0;
		 function showPaneAP_Hora(obj_This){
		    vethoraDele=[];//reseta o vetor deletar
		   //funçao responsavel por contruir o display do container de apontamento de horas consumidas em uma ose especifica 
		   loadEvento++;
		   let idOse= obj_This.id;//<-- id da ose pra apontar !
		   console.log("ose apontada ! "+idOse);
		   
       ViewHoras(idOse);
    
     /*  OBJConteinerPane.innerHTML="<header>Apontamento Hora<br>OSE-"+idOse+"</header><div style='width:120%;height:200px;left:10px;top:20px;position:relative;overflow-y:scrool;'><table id='cont_Apon'  class='w3-table'><thead><tr><th scope='col'>Hora Inicial</th><th scope='col'>Hora Final</th><th scope='col'>Tipo</th></tr></thead><tbody><div><tr' ><td style='width:100px;'><input type='time'  class='form-control form-control-sm' id='H_I_1'></td><td><input type='time' style='width:100px;' class='form-control form-control-sm' id='H_F_1'></td><td><select name='select' class='listSect' id='T_1'><option value='Gratuito'>Gratuito</option><option value='Treinamento' selected>Treinamento</option><option value='Deslocamento'>Deslocamento</option><option value='Hora Almoço'>Hora Almoço</option></select></td></tr><tr></tr></tbody></table></div> </div><td scope='row' ><B><div style='font-size:108%;'> <button id='addcamp' onclick='addi_camp()' class='Btn_addHora' >adionar campo</button></div></B></td></tr><tr><div class='containerBtns'><button onclick='cadastro(this)'  class='Btn_addHora' id='"+idOse+"'>Cadastrar +</button><button  class='Btn_closeCard' onclick='closecard()'>Fechar</button></div>";
		     
		   
		 }
		 
		 let count=0;
		  function ViewHoras(idOse){
		       let OBJConteinerPane= document.getElementById("ContainerShowPane");  
       OBJConteinerPane.setAttribute("Style", "Display:block;Position:absolute;left:33%;top:20%;z-index:1;background:#1F202D;height:600px; width:600px;overflow:auto; border-radius:8px;color:white;");
       
		      $.ajax({
                type: "POST",
                 data:{
                    N_Ose:idOse
                    
                },
                url: "VerHoras.php",
                
                 
                success: function(response){
                  OBJConteinerPane.innerHTML=response;
                   let quant=document.getElementById("cont_Apon").getAttribute("name");
                   quant++;
		             count=quant;
		             console.log("valor"+count);
                        //console.log(response);  
                        
                        
                            }
                });
		  }
		 
		 function addi_Hora(){
		           
		            
		             
                      console.log("load");
		                  
		              
		              
		               
		              
		           
           
		 
		 }
		 
		 function addi_camp(){
		           
		            	
		             
                      let tr=document.createElement("tr");
                      tr.setAttribute("id", "row_v2"+count);
                      //<tr id='row_v2"+count+"'>
                      tr.innerHTML="<td style='width:100px;'><input type='time' id='H_I_"+count+"' class='form-control form-control-sm'></td><td><input type='time' id='H_F_"+count+"' style='width:100px;' class='form-control form-control-sm'></td><td><select name='select' id='T_"+count+"' class='listSect'><option value='Gratuito'>Gratuito</option><option value='Treinamento' selected>Treinamento</option><option value='Deslocamento'>Deslocamento</option><option value='Hora Almoço'>Hora Almoço</option></select></td><td style='height:20px;'><button id='"+count+"' onclick='deletar(this)' class='btn btn-primary ' style='padding:2px;'>Excluir</button></td>";
                     
                          document.getElementById("cont_Apon").append(tr);
                      
                          
                      count++;
                      
		                  
		            
		             
		           
           
		 
		 } 
		 */
    function showPane(obj_This){
     console.log(obj_This.id);
    let idOse= obj_This.id;
 // let razaoSocial= obj_This.class;
  //console.log("Razao Social"+razaoSocial);
     
         
        let OBJConteinerPane= document.getElementById("ContainerShowPane");  
       OBJConteinerPane.setAttribute("Style", "Display:block;Position:absolute;left:33%;top:20%;z-index:1;background:#1F202D;height:600px; width:600px;overflow:auto; border-radius:8px;color:white;");
      


/****************/
                $.ajax({
                type: "POST",
                 data:{
                    N_Ose:idOse
                    
                },
                url: "VerDetOse.php",
                
                 
                success: function(response){
                  OBJConteinerPane.innerHTML=response;
                  
                        //console.log(response);  
                        
                        
                            }
                });


          /*  document.addEventListener("click", show);

            function show(e) {
                  const element_tbl = document.getElementById("tbl");
  const rect = element_tbl.getBoundingClientRect();
            
          
          
           
            
            OBJConteinerPane.innerHTML="<center><h4>Extrato Saldos Debitos e Creditos </h4></center><BR>Cliente:"+top+"<br>_________________";
            document.removeEventListener("click", show);

            }*/
            
            


 }
 /*
  let vetidrowsDel=[];
function  deletar(obj){
    let idrow=obj.id;
    document.getElementById("row_v2"+idrow).style.display='none';
    console.log("name"+document.getElementById("cont_Apon").getAttribute("Name"));
    console.log("idrow"+idrow);
    if(parseInt(idrow)<=parseInt(document.getElementById("cont_Apon").getAttribute("Name"))){
      //  console.log(document.getElementById("idhora_"+idrow).innerHTML);
          console.log('delet');
                     idOse=document.getElementById("idhora_"+idrow).innerHTML;
                     H_I =document.getElementById("H_I_"+idrow).value;
                     H_F =document.getElementById("H_F_"+idrow).value;
                     Tipo =document.getElementById("T_"+idrow).value;
          console.log(H_I);
          console.log(H_F);
          console.log(Tipo);
        $.ajax({
                    type: "POST",
                    data:{
                        IdOse:idOse,
                        H_I:H_I,
                        H_F:H_F,
                        Tipo:Tipo
                        
                },
                url: "deletarHora.php",
                
                 
                success: function(response){
              //    OBJConteinerPane.innerHTML=response;
                  console.log(response);
                       
                         //atualiza o novo quantidade de cadastrado
                        
                            }
                });
    }else{
        console.log('n delet');
    }
   
    vetidrowsDel.push(parseInt(idrow));
    console.log(vetidrowsDel);
}
 function horas_Estr(H_I, H_F, Tipo) {
  this.H_I = H_I;
  this.H_F = H_F;
  this.Tipo = Tipo;
  
}

 function cadastro(objbuttom){
   idOse= objbuttom.id;
  
 let quant= document.getElementById("cont_Apon").getAttribute("Name");

 console.log(quant);
 console.log(count-1);
let range=(count-1)-quant;//6-4 
        if(range>0){
                let vetorHoras = [];
                let H_I,H_f,Tipo=0;
                console.log(vetidrowsDel);
            for(let i=1;i<=range;i++){
                console.log(range);
                let p=parseInt(i)+parseInt(quant);
                ;
                //console.log(p);
             
               //vetidrowsDel.includes(p)=="false";
               //console.log("'+p+"'");
                  //  console.log(vetidrowsDel.includes(x));
                  console.log("posiçao"+p);
                  
                    console.log(vetidrowsDel.filter((id) => id == parseInt(p)).length);
                if(vetidrowsDel.filter((id) => id == parseInt(p)).length==0){
                     H_I =document.getElementById("H_I_"+p).value;
                     H_F =document.getElementById("H_F_"+p).value;
                     Tipo =document.getElementById("T_"+p).value;
      
                let hora_reg =new horas_Estr(H_I,H_F, Tipo);
                vetorHoras.push(hora_reg);
                }
                    
                

              
               
            }
        console.log(vetorHoras);
                $.ajax({
                    type: "POST",
                    data:{
                        IdOse:idOse,
                        VetHoras:vetorHoras,
                        
                },
                url: "CadastrarHora.php",
                
                 
                success: function(response){
              //    OBJConteinerPane.innerHTML=response;
                  
                        console.log(response);  
                         document.getElementById("cont_btnadd").innerHTML="<button id='addcamp' onclick='addi_camp()' class='Btn_addHora' >adicionar campo</button><BR><BR><p class='badge bg-success'> Hora Cadastrado com sucesso !!!!</p>";
                         document.getElementById("cont_Apon").setAttribute("Name",count-1);
                         //atualiza o novo quantidade de cadastrado
                        
                            }
                });
    
  
        }else{
            let objhtml=document.createElement("div");
            objhtml.innerHTML="<p class='badge bg-danger'>nenhuma nova hora foi adicionada</p>";
          document.getElementById("cont_btnadd").innerHTML="<button id='addcamp' onclick='addi_camp()' class='Btn_addHora' >adicionar campo</button><BR><BR><p class='badge bg-danger'>nenhuma nova hora foi adicionada</p>";           
          // document.getElementById("cont_Apon").append(objhtml); 
          
        }

   
   
 }
   */
function closecard(){
  let bottom =document.getElementById("ContainerShowPane")
    bottom.setAttribute("Style", "Display:none;");//faz com que o card suma
    bottom.innerHTML=""; //reseta o conteudo do card 
}
</script>
<style>
 .Btn_closeCard{
        background-color: #282A41;
        position:relative;
        top:20px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   }
   .Btn_addHora{
        background-color: rgba(34,63,107,1);
        position:relative;
        top:20px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   }
    header {
          background:#363638;

            color: #fff;
            text-align: center;
            padding: 20px;
			 position:relative;
             width:100%;
             z-index:1;
         
     }
 .containerBtns{
     top:400px;
     position:absolute;
     width:300px;
 }
 #addcamp{
     top:20px;
     position:relative;
 }
 th {
     color:white;
 }
 .listSect{
     height:32px;
     background:#DCE7F1;
     border-radius:5px;
     width:200px;
 }
 .w3-table{
    
    
    overFlow-y:scrool;
    max-height:100px;
 }
#containerLastOses{
    height:400px;
    overflow-y:auto;
}
</style>