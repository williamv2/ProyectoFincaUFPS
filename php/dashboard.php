<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Granja San Pablo UFPS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<?php
  		session_start();

  		if(isset($_SESSION['user'])){

  			$user = strtoupper($_SESSION['user']);

            echo "";

        }
        else{

        	
            header("location:../login.php");

        }


  		?>
  	<div class="header" style="background-color: #D90A1D">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="../index.html"><span class="glyphicon glyphicon-leaf"></span> Granja San Pablo UFPS</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Buscar...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Buscar</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $user ?></a></li>
	                          <li><a href="logout.php" class="button"><span class="glyphicon glyphicon-log-out"></span>Cerrar Sesion</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="#" role="button" id="dashboard"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                    <li><a href="#" role="button" id="visitantes"><i class="glyphicon glyphicon-calendar"></i> Visitantes</a></li>
                    <li><a href="#" role="button" id="practicantes"><i class="glyphicon glyphicon-briefcase"></i> Practicantes</a></li>
                    <li class="submenu">
                    	<a href="#">
                    		<i class="glyphicon glyphicon-list"></i> Areas
                    		<span class="caret pull-right"></span>
                    	</a>
                    	<ul>
                    		<li>
                    			<a href="#" role="button" id="unidades">
                    				<i class="glyphicon glyphicon-list-alt"></i> Unidades
                    			</a>
                    		</li>
                    		<li><a href="#" role="button" id="animales"><i class="glyphicon glyphicon-home"></i> Animales</a></li>
                    	</ul>
                    </li>
                    <li><a href="#" role="button" id="proyectos"><i class="glyphicon glyphicon-tasks"></i> Proyectos</a></li>
                </ul>
             </div>

		  </div>
		  <div class="col-md-10" id="dash">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-4">
		  							
		  						
		  						<br /><br />
				  			
		  						</div>
		  						<div class="col-md-4">
		  							Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  						</div>
		  						<div class="col-md-4">
		  							Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  						</div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>

		  	

		  </div>
		  <div class="col-md-10" id="visi" style="display:none;">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-calendar"></i> Visitantes</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-12 table-responsive">
					            <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrevisi"><span class="glyphicon glyphicon-plus"></span>Agregar</button>
					            <h2 class="sub-header">Listado de Visitantes</h2>
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th>N°</th>
					                    <th>Fecha Ingreso</th>
					                    <th>Motivo</th>
					                    <th>Placa</th>
					                    <th>Nombres</th>
					                    <th>Institucion</th>
					                    <th colspan="2">Operaciones</th>
					                  </tr>
					                </thead>
					                <?php

            					include("conexion.php");

            					$consulta = "SELECT v.numero, v.fechaIngreso, v.motivo, v.placa, concat(p.nombres,' ',p.apellidos) AS nombres, v.institucion FROM visitante v INNER JOIN persona p ON p.dni=v.dni ORDER BY numero";

            					$con = new conexion;
            					$resultado = $con->consulta($consulta);

            					while ($row = $resultado->fetch_assoc()) {
            					
            					?>
					                <tr>
					                  <td><?php echo $row['numero']; $numero = $row['numero']; ?></td>
					                  <td><?php echo $row['fechaIngreso']; $fechaIngreso = $row['fechaIngreso']; ?></td>
					                  <td><?php echo $row['motivo']; $motivo = $row['motivo']; ?></td>
					                  <td><?php echo $row['placa']; $placa = $row['placa']; ?></td>
					                  <td><?php echo $row['nombres']; $nombres = $row['nombres']; ?></td>
					                  <td><?php echo $row['institucion']; $institucion = $row['institucion']; ?></td>
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalvisi" onclick="modificarvisi('<?php echo $numero; ?>','<?php echo $fechaIngreso; ?>','<?php echo $motivo; ?>', '<?php echo $placa; ?>','<?php echo $nombres; ?>','<?php echo $institucion; ?>');"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModalvisi" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="modificarvisi.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Visitante</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="num_vis" name="num_vis" class="form-control" style="display: none;">
					                                N°: <input type="text" id="numero_vis" name="numero_vis" class="form-control" disabled="true">
					                                <br>
					                                Fecha Ingreso: <input type="date" id="mfechaing_visi" name="mfechaing_visi" class="form-control" required="true">
					                                <br>
					                                Placa: <input type="text" id="mplaca_visi" name="mplaca_visi" class="form-control">
					                                <br>
					                                Nombres: <input type="text" id="mnombres" name="mnombres" class="form-control" required="true" disabled="true">
					                                <br>
					                                Institucion: <input type="text" id="minst_visi" name="minst_visi" class="form-control" required="true">
					                                <br>
					                                Motivo: <textarea id="mmotivo_visi" name="mmotivo_visi" class="form-control" required="true"></textarea> 
					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Actualizar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>


					                    <div id="myModalAgrevisi" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarvisi.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Visitante</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	    Seleccione el DNI de la Persona: 
					                          	    <div class="input-group">
					                          	    <select name="dni_persona" id="dni_persona" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT dni FROM persona";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['dni']?>"> <?php echo $row['dni'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                              </select>
							                        <div class="input-group-btn">
							                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModalper">Registrar Persona</button>
							                        </div>
							                        </div>
							                        <br>
					                                Fecha de Ingreso: <input type="date" id="fecha_visi" name="fecha_visi" class="form-control" required="true">
					                                <br>
					                                Placa: <input type="text" id="placa_visi" name="placa_visi" class="form-control">
					                                <br>
					                                Institucion: <input id="inst_visi" name="inst_visi" class="form-control" required="true">
					                                <br>
					                                Motivo: <textarea type="text" id="motivo_visi" name="motivo_visi" class="form-control"></textarea>	
					                                				                                
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>

					                    <div id="myModalper" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarpersona.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Persona</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	    
					                                DNI: <input type="text" id="dni_per" name="dni_per" class="form-control" required="true">
					                                <br>
					                                Nombres: <input type="text" id="nombre_per" name="nombre_per" class="form-control" required="true">
					                                <br>
					                                Apellidos: <input type="text" id="apellido_per" name="apellido_per" class="form-control" required="true">
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>
					          </div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>


		  </div>

		  <div class="col-md-10" id="practi" style="display:none;">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-briefcase"></i> Practicantes</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-12 table-responsive">
					            <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrepract"><span class="glyphicon glyphicon-plus"></span>Agregar</button>
					            <h2 class="sub-header">Listado de Practicantes</h2>
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th>N°</th>
					                    <th>Fecha Inicio</th>
					                    <th>Fecha Final</th>
					                    <th>Nombres</th>
					                    <th>Proyecto</th>
					                    <th>Semestre</th>
					                    <th>Institucion</th>
					                    <th colspan="2">Operaciones</th>
					                  </tr>
					                </thead>
					                <?php

            					

            					$consulta = "SELECT p.numero, p.fechaInicio, p.fechaFinal, concat(pe.nombres,' ',pe.apellidos) AS nombres, pr.nombre AS nombrepro, p.semestre, p.institucion FROM practicante p INNER JOIN persona pe ON pe.dni=p.dni INNER JOIN proyecto pr ON pr.numero=p.numeroProyecto ORDER BY p.numero";

            					$con = new conexion;
            					$resultado = $con->consulta($consulta);

            					while ($row = $resultado->fetch_assoc()) {
            					
            					?>
					                <tr>
					                  <td><?php echo $row['numero']; $numero = $row['numero']; ?></td>
					                  <td><?php echo $row['fechaInicio']; $fechaInicio = $row['fechaInicio']; ?></td>
					                  <td><?php echo $row['fechaFinal']; $fechaFinal = $row['fechaFinal']; ?></td>
					                  <td><?php echo $row['nombres']; $nombres = $row['nombres']; ?></td>
					                  <td><?php echo $row['nombrepro']; $nombrepro = $row['nombrepro']; ?></td>
					                  <td><?php echo $row['semestre']; $semestre = $row['semestre']; ?></td>
					                  <td><?php echo $row['institucion']; $institucion = $row['institucion']; ?></td>
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalpract" onclick="modificarpracti('<?php echo $numero; ?>','<?php echo $fechaInicio; ?>','<?php echo $fechaFinal; ?>','<?php echo $nombres; ?>','<?php echo $nombrepro; ?>', '<?php echo $semestre; ?>','<?php echo $institucion; ?>');"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModalpract" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="modificarpract.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Practicante</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="num_pract" name="num_pract" class="form-control" style="display: none;">
					                                N°: <input type="text" id="numero_pract" name="numero_pract" class="form-control" disabled="true">
					                                <br>
					                                Fecha Inicio: <input type="date" id="mfechaini_pract" name="mfechaini_pract" class="form-control" required="true">
					                                <br>
					                                Fecha Final: <input type="date" id="mfechafin_pract" name="mfechafin_pract" class="form-control" required="true">
					                                <br>
					                                Nombres: <input type="text" id="mnombres_pract" name="mnombres_pract" class="form-control" required="true" disabled="true">
					                                <br>
					                                Nombre del Proyecto: <input type="text" id="mnombrepro_pract" name="mnombrepro_pract" class="form-control" required="true" disabled="true">
					                                <br>
					                                Semestre: <select type="number" id="msem_pract" name="msem_pract" class="form-control">
					                                	<option value="1">Primer Semestre</option>
	                    								<option value="2">Segundo Semestre</option>
					                                </select>
					                                <br>
					                                Institucion: <input type="text" id="minst_pract" name="minst_pract" class="form-control" required="true">
					                                				                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Actualizar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>


					                    <div id="myModalAgrepract" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarpract.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Practicante</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	
					                          		Seleccione el DNI de la Persona:
					                          		<div class="input-group">
					                          		<select name="dni_persona_pract" id="dni_persona_pract" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT dni FROM persona";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['dni']?>"> <?php echo $row['dni'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                              </select>
							                        
							                        <div class="input-group-btn">
							                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModalperpract">Registrar Persona</button>
							                        </div>
							                        </div>
							                    	<br> 

							                        Seleccione el Proyecto: 
							                        <div class="input-group">
							                        <select name="numero_proyecto" id="numero_proyecto" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT numero,nombre FROM proyecto";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['numero']?>"> <?php echo $row['nombre'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                            </select>
							                            
							                            <div class="input-group-btn">
							                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModalpropract">Registrar Proyecto</button>
							                            </div>
							                        </div>    
							                        <br>						                        
					                                Fecha de Inicio: <input type="date" id="fechaini_pract" name="fechaini_pract" class="form-control" required="true">
					                                <br>
					                                Fecha de Final: <input type="date" id="fechafin_pract" name="fechafin_pract" class="form-control" required="true">
					                                <br>					                                
					                                Semestre: <select type="number" id="sem_pract" name="sem_pract" class="form-control">
					                                	<option value="1">Primer Semestre</option>
	                    								<option value="2">Segundo Semestre</option>
					                                </select>
					                                <br>
					                                Institucion: <input type="text" id="inst_pract" name="inst_pract" class="form-control" required="true">
					                                				                                				                                
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>

					                    <div id="myModalperpract" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarpersona.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content -->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Persona</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	    
					                                DNI: <input type="text" id="dni_per" name="dni_per" class="form-control" required="true">
					                                <br>
					                                Nombres: <input type="text" id="nombre_per" name="nombre_per" class="form-control" required="true">
					                                <br>
					                                Apellidos: <input type="text" id="apellido_per" name="apellido_per" class="form-control" required="true">
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div> 

					                    <div id="myModalpropract" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarproyecto.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content -->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Proyecto</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	    
					                                Numero de Proyecto: <input type="number" id="num_pro" name="num_pro" class="form-control" required="true">
					                                <br>
					                                Nombre: <input type="text" id="nombre_pro" name="nombre_pro" class="form-control" required="true">
					                                <br>
					                                Descripcion: <textarea  type="text" id="desc_pro" name="desc_pro" class="form-control" required="true"></textarea>
					                                <br>
					                                Seleccione el Unidad:
					                                <select name="num_unidad" id="num_unidad" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM unidad";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                            </select>

					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div> 

					          </div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>


		  </div>
		  <div class="col-md-10" id="uni" style="display:none;">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Unidades</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-12 table-responsive">
					            <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgreuni"><span class="glyphicon glyphicon-plus"></span>Agregar</button>
					            <h2 class="sub-header">Listado de Unidades</h2>
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th>Codigo</th>
					                    <th>Nombre</th>
					                    <th>N° Animales</th>
					                    <th>Descripcion</th>
					                    <th>Area</th>
					                    <th colspan="2">Operaciones</th>
					                  </tr>
					                </thead>
					                <?php

            					

            					$consulta = "SELECT u.codigo,u.nombre,u.numAnimales,u.descripcion, u.codArea, a.descripcion AS area FROM unidad u INNER JOIN area a ON a.codigo=u.codArea ORDER BY u.codigo";

            					$con = new conexion;
            					$resultado = $con->consulta($consulta);

            					while ($row = $resultado->fetch_assoc()) {
            					
            					?>
					                <tr>
					                  <td><?php echo $row['codigo']; $codigo = $row['codigo']; ?></td>
					                  <td><?php echo $row['nombre']; $nombre = $row['nombre']; ?></td>
					                  <td><?php echo $row['numAnimales']; $numAnimales = $row['numAnimales']; ?></td>
					                  <td><?php echo $row['descripcion']; $descripcion = $row['descripcion']; ?></td>
					                  <td><?php echo $row['area']; $area = $row['codArea']; ?></td>
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModaluni" onclick="modificaruni('<?php echo $codigo; ?>','<?php echo $nombre; ?>','<?php echo $numAnimales; ?>', '<?php echo $descripcion; ?>','<?php echo $area; ?>');"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModaluni" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="modificaruni.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Unidad</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="cod_uni" name="cod_uni" class="form-control" style="display: none;">
					                                Codigo: <input type="text" id="codigo_uni" name="codigo_uni" class="form-control" disabled="true">
					                                <br>
					                                Nombre: <input type="text" id="mnombres_uni" name="mnombres_uni" class="form-control" required="true">
					                                <br>
					                                N° Animales: <input type="number" id="mnumani_uni" name="mnumani_uni" class="form-control">
					                                <br>
					                                Descripcion: <textarea id="mdesc_uni" name="mdesc_uni" class="form-control" required="true"></textarea> 
					                                <br>
					                                Seleccione Area:
					                                <select name="marea_uni" id="marea_uni" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM area";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                              </select>
					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Actualizar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>


					                    <div id="myModalAgreuni" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registraruni.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Unidad</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                
					                                Codigo: <input type="text" id="codigo_uni" name="codigo_uni" class="form-control">
					                                <br>
					                                Nombre: <input type="text" id="nombres_uni" name="nombres_uni" class="form-control" required="true">
					                                <br>
					                                N° Animales: <input type="number" id="numani_uni" name="numani_uni" class="form-control">
					                                <br>
					                                Descripcion: <textarea id="desc_uni" name="desc_uni" class="form-control" required="true"></textarea> 
					                                <br>
					                                Seleccione Area:
					                                <select name="area_uni" id="area_uni" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM area";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php 
							                                } 
							                            ?>  
							                              </select>
					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>

					                </div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>


		  </div>

		  <div class="col-md-10" id="ani" style="display:none;">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-home"></i> Animales</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-12 table-responsive">
					            <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgreani"><span class="glyphicon glyphicon-plus"></span>Agregar</button>
					            <h2 class="sub-header">Listado de Animales</h2>
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th>Codigo</th>
					                    <th>Nombre</th>
					                    <th>Descripcion</th>
					                    <th>Fecha Ingreso</th>
					                    <th>Unidad</th>
					                    <th>Genero</th>
					                    <th>Tamaño</th>
					                    <th>Especie</th>
					                    <th>Cantidad Alimento /Kg</th>
					                    <th colspan="2">Operaciones</th>
					                  </tr>
					                </thead>
					                <?php

            					

            					$consulta = "SELECT a.codigo, a.nombre, a.descripcion, a.fechaIngreso, u.codigo AS coduni, u.descripcion AS unidad, a.genero, a.tamano, a.especie, a.cantidadelimento FROM animal a INNER JOIN unidad u ON u.codigo= a.codUnidad";

            					$con = new conexion;
            					$resultado = $con->consulta($consulta);

            					while ($row = $resultado->fetch_assoc()) {
            					
            					?>
					                <tr>
					                  <td><?php echo $row['codigo']; $codigo = $row['codigo']; ?></td>
					                  <td><?php echo $row['nombre']; $nombre = $row['nombre']; ?></td>
					                  <td><?php echo $row['descripcion']; $desc = $row['descripcion']; ?></td>
					                  <td><?php echo $row['fechaIngreso']; $fechaing = $row['fechaIngreso']; ?></td>
					                  <td><?php echo $row['unidad']; $unidad = $row['coduni']; ?></td>
					                  <td><?php echo $row['genero']; $genero = $row['genero']; ?></td>
					                  <td><?php echo $row['tamano']; $tama = $row['tamano']; ?></td>
					                  <td><?php echo $row['especie']; $especie = $row['especie']; ?></td>
					                  <td><?php echo $row['cantidadelimento']; $cantidadelimento = $row['cantidadelimento']; ?></td>
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalani" onclick="modificarani('<?php echo $codigo; ?>','<?php echo $nombre; ?>','<?php echo $desc; ?>', '<?php echo $fechaing; ?>','<?php echo $unidad; ?>','<?php echo $genero; ?>','<?php echo $tama; ?>','<?php echo $especie; ?>','<?php echo $cantidadelimento; ?>');"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModalani" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="modificarani.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Animal</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="cod_ani" name="cod_ani" class="form-control" style="display: none;">
					                                Codigo: <input type="text" id="codigo_ani" name="codigo_ani" class="form-control" disabled="true">
					                                <br>
					                                Nombre: <input type="text" id="mnombres_ani" name="mnombres_ani" class="form-control" required="true">
					                                <br>
					                                Descripcion: <textarea id="mdesc_ani" name="mdesc_ani" class="form-control"></textarea>
					                                <br>
					                                Fecha Ingreso: <input type="date" id="mfechaing_ani" name="mfechaing_ani" class="form-control" required="true">
					                                <br>
					                                 Seleccione Unidad:
					                                <select name="muni_ani" id="muni_ani" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM unidad";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                              </select>
							                        <br>
					                                Genero: <select id="mgenero_ani" name="mgenero_ani" class="form-control" required="true">
					                                <option>M</option>
					                                <option>F</option>
					                                </select>
					                                <br>
					                                Tamaño: <select id="mtam_ani" name="mtam_ani" class="form-control" required="true">
					                                <option>G</option>
					                                <option>M</option>
					                                <option>P</option>
					                                </select>
					                                <br>
					                                Especie: <input type="text" name="mesp_ani" id="mesp_ani" class="form-control" required="true">
					                                <br>
					                                Cantidad Alimento: <input type="number" name="mali_ani" id="mali_ani" class="form-control" placeholder="Kg">
					                                					                                					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Actualizar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>


					                    <div id="myModalAgreani" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarani.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Animal</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                
					                                Nombre: <input type="text" id="nombres_ani" name="nombres_ani" class="form-control" required="true">
					                                <br>
					                                Descripcion: <textarea id="desc_ani" name="desc_ani" class="form-control"></textarea>
					                                <br>
					                                Fecha Ingreso: <input type="date" id="fechaing_ani" name="fechaing_ani" class="form-control" required="true">
					                                <br>
					                                 Seleccione Unidad:
					                                <select name="uni_ani" id="uni_ani" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM unidad";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                              </select>
							                        <br>
					                                Genero: <select id="genero_ani" name="genero_ani" class="form-control" required="true">
					                                <option>M</option>
					                                <option>F</option>
					                                </select>
					                                <br>
					                                Tamaño: <select id="tam_ani" name="tam_ani" class="form-control" required="true">
					                                <option>G</option>
					                                <option>M</option>
					                                <option>P</option>
					                                </select>
					                                <br>
					                                Especie: <input type="text" name="esp_ani" id="esp_ani" class="form-control" required="true">
					                                <br>
					                                Cantidad Alimento: <input type="number" name="ali_ani" id="ali_ani" class="form-control" placeholder="Kg">
					                                					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>

					                </div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>


		  </div>

		  <div class="col-md-10" id="proyec" style="display:none;">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header">
		  				
							<div class="panel-title"><i class="glyphicon glyphicon-home"></i> Proyectos</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
					</div>	
						<div class="content-box-large box-with-header">
		  				
		  					<div class="row">
		  						<div class="col-md-12 table-responsive">
					            <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrepro"><span class="glyphicon glyphicon-plus"></span>Agregar</button>
					            <h2 class="sub-header">Listado de Proyectos</h2>
					              <table class="table table-striped">
					                <thead>
					                  <tr>
					                    <th>N°</th>
					                    <th>Nombre</th>
					                    <th>Descripcion</th>
					                    <th>Unidad</th>
					                    <th colspan="2">Operaciones</th>
					                  </tr>
					                </thead>
					                <?php

            					

            					$consulta = "SELECT p.numero, p.descripcion, p.nombre, u.codigo, u.descripcion AS unidad FROM proyecto p INNER JOIN unidad u ON u.codigo=p.numeroUnidad";

            					$con = new conexion;
            					$resultado = $con->consulta($consulta);

            					while ($row = $resultado->fetch_assoc()) {
            					
            					?>
					                <tr>
					                  <td><?php echo $row['numero']; $numero = $row['numero']; ?></td>
					                  <td><?php echo $row['nombre']; $nombre = $row['nombre']; ?></td>
					                  <td><?php echo $row['descripcion']; $descr = $row['descripcion']; ?></td>
					                  <td><?php echo $row['unidad']; $unidad = $row['codigo']; ?></td>
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalproye" onclick="modificarpro('<?php echo $numero; ?>','<?php echo $nombre; ?>','<?php echo $descr; ?>','<?php echo $unidad; ?>');"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModalproye" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="modificarpro.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Proyecto</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="mnum_pro" name="mnum_pro" class="form-control" style="display:none;">
					                                Numero: <input type="text" id="numero_pro" name="numero_pro" class="form-control" disabled="true">
					                                <br>
					                                Nombre: <input type="text" id="mnombre_pro" name="mnombre_pro" class="form-control" required="true">
					                                <br>
					                                Descripcion: <textarea  type="text" id="mdesc_pro" name="mdesc_pro" class="form-control" required="true"></textarea>
					                                <br>
					                                Seleccione el Unidad:
					                                <select name="mnum_unidad" id="mnum_unidad" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM unidad";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                            </select>
					                                					                                					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Actualizar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>


					                    <div id="myModalAgrepro" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="registrarproyecto.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Proyecto</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                
					                                Numero de Proyecto: <input type="number" id="num_pro" name="num_pro" class="form-control" required="true">
					                                <br>
					                                Nombre: <input type="text" id="nombre_pro" name="nombre_pro" class="form-control" required="true">
					                                <br>
					                                Descripcion: <textarea  type="text" id="desc_pro" name="desc_pro" class="form-control" required="true"></textarea>
					                                <br>
					                                Seleccione el Unidad:
					                                <select name="num_unidad" id="num_unidad" class="form-control">
							                            <?php 
							                           
							                          $consulta = "SELECT codigo,descripcion FROM unidad";

							            					$con = new conexion;
							            					$resultado = $con->consulta($consulta);

							            					while ($row = $resultado->fetch_assoc()) {
							            					
							            					?>

							                            <option value="<?php echo $row['codigo']?>"> <?php echo $row['descripcion'];?></option>
							                            <?php    
							                                } 
							                            ?>  
							                            </select>
					                                					                           
					                          </div>
					                          <div class="modal-footer">
					                            <button type="submit" class="btn btn-success" >Registrar</button>
					                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                          </div>

					                        </div>

					                      </div>
					                      </form>
					                    </div>

					                </div>
		  					</div>
		  					
				  			
		  				
		  				</div>
		  			
		  		</div>

		  		
		  	</div>


		  </div>

		  
		  <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Informes</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
						<br /><br />
					</div>
		  		</div>
		  	</div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
            	<h3>Universidad Francisco de Paula Santander</h3>
          		<p>Programa Ingeniería de Sistemas</p>
          		<p>Desarrollado por:William Velandia y Erick Guevara</p>
               
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/main_dash.js"></script>
    <script src="../js/modificar.js"></script>
  </body>
</html>