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
                    <li class="current"><a href="dashboard.php"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i> Visitantes</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Practicantes</a></li>
                    <li class="submenu">
                    	<a href="#">
                    		<i class="glyphicon glyphicon-list"></i> Areas
                    		<span class="caret pull-right"></span>
                    	</a>
                    	<ul>
                    		<li>
                    			<a href="#">
                    				<i class="glyphicon glyphicon-list-alt"></i> Unidades
                    			</a>
                    		</li>
                    		<li><a href="#"><i class="glyphicon glyphicon-home"></i> Animales</a></li>
                    	</ul>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Proyectos</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10" style="display: none;">
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
		  							Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
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
		  <div class="col-md-10" style="display:">
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
					                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalvis" ng-click="selectadm(a)"><span class="glyphicon glyphicon-eye-open"></span></button></td>
					                  <!--<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectemp(usuario)"><span class="glyphicon glyphicon-trash"></span></button></td>-->
					                  
					                </tr>
					                	<?php
            				}
            					?>
					              </table>
					              <div id="myModalvisi" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="./php/modificaradm.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Administrador</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                                <input type="text" id="a_dni" name="a_dni" class="form-control" ng-model=clickadm.DNI style="display: none;">
					                                DNI: <input type="text" class="form-control" disabled="true" ng-model="clickadm.DNI">
					                                Nombres: <input type="text" id="a_nombres" name="a_nombres" class="form-control" required="true" ng-model="clickadm.Nombre">
					                                Apellidos: <input type="text" id="a_apellidos" name="a_apellidos" class="form-control" required="true" ng-model="clickadm.Apellido">
					                                Direccion: <input type="text" id="a_direccion" name="a_direccion" class="form-control" required="true" ng-model="clickadm.Direccion">
					                                Telefono: <input type="text" id="a_telefono" name="a_telefono" class="form-control" required="true" ng-model="clickadm.Telefono">
					                                Email: <input type="text" id="a_email" name="a_email" class="form-control" required="true" ng-model="clickadm.Email">
					                                Sexo: <select id="a_sexo" name="a_sexo" class="form-control" required="true" ng-model="clickadm.Sexo">
					                                <option>M</option>
					                                <option>F</option>
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


					                    <div id="myModalAgrevisi" class="modal fade" role="dialog">
					                    <form class="form-group" method="POST" action="./php/registrarvisi.php">
					                    <div class="modal-dialog">

					                        <!-- Modal content-->
					                        <div class="modal-content">

					                          <div class="modal-header">
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
					                            <h4 class="modal-title">Visitante</h4>
					                          </div>
					                          <div class="modal-body form-group" >
					                          	    Seleccione el DNI de la Persona: <select name="dni_persona" id="dni_persona" class="form-control">
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
							                        
							                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModalper">Registrar Persona</button>
							                        <br>
					                                Fecha de Ingreso: <input type="text" id="agradm_direccion" name="agradm_direccion" class="form-control" required="true">
					                                Motivo: <input type="text" id="agradm_telefono" name="agradm_telefono" class="form-control" required="true">
					                                Placa: <input type="text" id="agradm_email" name="agradm_email" class="form-control" required="true">
					                                Institucion: <select id="agradm_sexo" name="agradm_sexo" class="form-control" required="true">
					                                <option>M</option>
					                                <option>F</option>
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
					                                Nombres: <input type="text" id="nombre_per" name="nombre_per" class="form-control" required="true">
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
  </body>
</html>