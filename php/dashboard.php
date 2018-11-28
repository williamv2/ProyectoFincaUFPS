<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Granja San Pablo UFPS</title>

    <!-- Favicon -->
    <link href='../img/logofinca.ico' rel='Shortcut icon'>

    <!-- Bootstrap core CSS-->
    <link href="../bootstrap/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../bootstrap/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link type="text/css" rel="stylesheet" href="../bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Page level plugin CSS-->
    <link href="../bootstrap/dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../bootstrap/dashboard/css/sb-admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body id="page-top">
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
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-color: #D90A1D !important">

      <a class="navbar-brand mr-1" href="dashboard2.php"><i class="fa fa-leaf" aria-hidden="true"></i></span> Granja San Pablo UFPS</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $user ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class=" fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="visitantes">
            <i class="fas fa-fw fa fa-calendar"></i>
            <span>Visitantes</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="practicantes">
            <i class="fas fa-fw fa fa-briefcase"></i>
            <span>Practicantes</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa fa-list-alt"></i>
            <span>Áreas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#" id="unidades"><i class="fa fa-list-ul" aria-hidden="true"></i>Unidades</a>
            <a class="dropdown-item" href="#" id="animales"><i class="fa fa-home" aria-hidden="true"></i>Animales</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="proyectos">
            <i class="fas fa-fw fa fa-tasks"></i>
            <span>Proyectos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="producciones">
            <i class="fas fa-fw fa fa-cubes"></i>
            <span>Producción</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="informes">
            <i class="fas fa-fw fa fa-file-text-o"></i>
            <span>Informes</span></a>
        </li>
      </ul>

      <div id="content-wrapper" title="dashboard">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Inicio</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <?php 
                    include("conexion.php");

                      $con = new conexion;
                      $consulta = "SELECT * FROM unidad";
                      
                      $numberunidad = $con->contador($consulta);

                      $numberani = $con->contador("SELECT * FROM animal");
                      $numbervisi = $con->contador("SELECT * FROM visitante");
                      $numberproy = $con->contador("SELECT * FROM proyecto");

                    ?>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa fa-list-ul"></i>
                  </div>
                  <div class="mr-5"><strong style="font-size: 150%"><?php echo $numberunidad ?></strong> Unidades!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa fa-home"></i>
                  </div>
                  <div class="mr-5"><strong style="font-size: 150%"><?php echo $numberani ?></strong> Animales!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa fa-calendar"></i>
                  </div>
                  <div class="mr-5"><strong style="font-size: 150%"><?php echo $numbervisi ?></strong> Visitantes!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-tasks"></i>
                  </div>
                  <div class="mr-5"><strong style="font-size: 150%"><?php echo $numberproy ?></strong> Proyectos!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Producción</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper visitante -->
      <div id="content-wrapper" style="display: none;" title="visitante">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Visitantes</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Visitantes
              <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrevisi"><span class="fa fa-plus"></span> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Fecha Ingreso</th>
                      <th>Motivo</th>
                      <th>Placa</th>
                      <th>Nombres</th>
                      <th>Institución</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Fecha Ingreso</th>
                      <th>Motivo</th>
                      <th>Placa</th>
                      <th>Nombres</th>
                      <th>Institución</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php

                      

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
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalvisi" onclick="modificarvisi('<?php echo $numero; ?>','<?php echo $fechaIngreso; ?>','<?php echo $motivo; ?>', '<?php echo $placa; ?>','<?php echo $nombres; ?>','<?php echo $institucion; ?>');"><span class="fa fa-pencil-square-o"></span></button></td>
                            
                          </tr>
                            <?php
                    }
                      ?>
                    
                  </tbody>
                </table>

                <!-- Modvisi Modal-->
                  <div class="modal fade" id="myModalvisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Visitante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modificarvisi.php">
                            <div class="form-group">
                              <input type="text" id="num_vis" name="num_vis" class="form-control" style="display: none;">
                              N°: <input type="text" id="numero_vis" name="numero_vis" class="form-control" disabled="true">
                              <br>
                              Fecha Ingreso: <input type="date" id="mfechaing_visi" name="mfechaing_visi" class="form-control" required="true" min="2018-01-01">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


                <!-- Agrevisi Modal-->
                  <div class="modal fade" id="myModalAgrevisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Visitante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarvisi.php">
                            <div class="form-group">
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
                              <button class="btn btn-danger" data-toggle="modal" data-target="#myModalper">Registrar Persona</button>
                              </div>
                              </div>
                              <br>
                              Fecha de Ingreso: <input type="date" id="fecha_visi" name="fecha_visi" class="form-control" required="true" min="2018-01-01">
                              <br>
                              Placa: <input type="text" id="placa_visi" name="placa_visi" class="form-control">
                              <br>
                              Institucion: <input id="inst_visi" name="inst_visi" class="form-control" required="true">
                              <br>
                              Motivo: <textarea type="text" id="motivo_visi" name="motivo_visi" class="form-control"></textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- Agrepersona Modal-->
                  <div class="modal fade" id="myModalper" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarpersona.php">
                            <div class="form-group">
                              DNI: <input type="text" id="dni_per" name="dni_per" class="form-control" required="true">
                              <br>
                              Nombres: <input type="text" id="nombre_per" name="nombre_per" class="form-control" required="true">
                              <br>
                              Apellidos: <input type="text" id="apellido_per" name="apellido_per" class="form-control" required="true">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


              </div>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper practicante -->
      <div id="content-wrapper" style="display: none;" title="practicante">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Practicantes</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Practicantes
              <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrepract"><span class="fa fa-plus"></span> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <tfoot>
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
                  </tfoot>
                  <tbody>
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
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalpract" onclick="modificarpracti('<?php echo $numero; ?>','<?php echo $fechaInicio; ?>','<?php echo $fechaFinal; ?>','<?php echo $nombres; ?>','<?php echo $nombrepro; ?>', '<?php echo $semestre; ?>','<?php echo $institucion; ?>');"><span class="fa fa-pencil-square-o"></span></button></td>
                            
                          </tr>
                            <?php
                    }
                      ?>
                    
                  </tbody>
                </table>

                <!-- Modpract Modal-->
                  <div class="modal fade" id="myModalpract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Practicante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modificarpract.php">
                            <div class="form-group">
                              <input type="text" id="num_pract" name="num_pract" class="form-control" style="display: none;">
                              N°: <input type="text" id="numero_pract" name="numero_pract" class="form-control" disabled="true">
                              <br>
                              Fecha Inicio: <input type="date" id="mfechaini_pract" name="mfechaini_pract" class="form-control" required="true" min="2018-01-01">
                              <br>
                              Fecha Final: <input type="date" id="mfechafin_pract" name="mfechafin_pract" class="form-control" required="true" min="2018-01-01">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


                <!-- Agrepract Modal-->
                  <div class="modal fade" id="myModalAgrepract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Practicante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarpract.php">
                            <div class="form-group">
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
                                Fecha de Inicio: <input type="date" id="fechaini_pract" name="fechaini_pract" class="form-control" required="true" min="2018-01-01">
                                <br>
                                Fecha de Final: <input type="date" id="fechafin_pract" name="fechafin_pract" class="form-control" required="true" min="2018-01-01">
                                <br>                                          
                                Semestre: <select type="number" id="sem_pract" name="sem_pract" class="form-control">
                                  <option value="1">Primer Semestre</option>
                            <option value="2">Segundo Semestre</option>
                                </select>
                                <br>
                                Institucion: <input type="text" id="inst_pract" name="inst_pract" class="form-control" required="true">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- Agrepersonapract Modal-->
                  <div class="modal fade" id="myModalperpract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarpersona.php">
                            <div class="form-group">
                              DNI: <input type="text" id="dni_per" name="dni_per" class="form-control" required="true">
                              <br>
                              Nombres: <input type="text" id="nombre_per" name="nombre_per" class="form-control" required="true">
                              <br>
                              Apellidos: <input type="text" id="apellido_per" name="apellido_per" class="form-control" required="true">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- Agrepropract Modal-->
                  <div class="modal fade" id="myModalpropract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarproyecto.php">
                            <div class="form-group">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


              </div>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper unidad -->
      <div id="content-wrapper" style="display: none;" title="unidad">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Unidad</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Unidades
              <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgreuni"><span class="fa fa-plus"></span> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nombre</th>
                      <th>N° Animales</th>
                      <th>Descripción</th>
                      <th>Área</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Código</th>
                      <th>Nombre</th>
                      <th>N° Animales</th>
                      <th>Descripción</th>
                      <th>Área</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
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
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModaluni" onclick="modificaruni('<?php echo $codigo; ?>','<?php echo $nombre; ?>','<?php echo $numAnimales; ?>', '<?php echo $descripcion; ?>','<?php echo $area; ?>');"><span class="fa fa-pencil-square-o"></span></button></td>
                            
                          </tr>
                            <?php
                    }
                      ?>
                    
                  </tbody>
                </table>

                <!-- Moduni Modal-->
                  <div class="modal fade" id="myModaluni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Unidad</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modificaruni.php">
                            <div class="form-group">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


                <!-- Agreuni Modal-->
                  <div class="modal fade" id="myModalAgreuni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Unidad</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registraruni.php">
                            <div class="form-group">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


              </div>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper animales -->
      <div id="content-wrapper" style="display: none;" title="animal">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Animal</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Animales
              <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgreani"><span class="fa fa-plus"></span> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Fecha Ingreso</th>
                      <th>Unidad</th>
                      <th data-toggle="tooltip" title="M: Masculino, F: Femenino">Genero</th>
                      <th data-toggle="tooltip" title="G: Grande, M: Mediano, P: Pequeño">Tamaño</th>
                      <th>Especie</th>
                      <th>Cantidad Alimento /Kg</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Código</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Fecha Ingreso</th>
                      <th>Unidad</th>
                      <th data-toggle="tooltip" title="M: Masculino, F: Femenino">Genero</th>
                      <th data-toggle="tooltip" title="G: Grande, M: Mediano, P: Pequeño">Tamaño</th>
                      <th>Especie</th>
                      <th>Cantidad Alimento /Kg</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
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
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalani" onclick="modificarani('<?php echo $codigo; ?>','<?php echo $nombre; ?>','<?php echo $desc; ?>', '<?php echo $fechaing; ?>','<?php echo $unidad; ?>','<?php echo $genero; ?>','<?php echo $tama; ?>','<?php echo $especie; ?>','<?php echo $cantidadelimento; ?>');"><span class="fa fa-pencil-square-o"></span></button></td>
                            
                          </tr>
                            <?php
                    }
                      ?>
                    
                  </tbody>
                </table>

                <!-- Modani Modal-->
                  <div class="modal fade" id="myModalani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Animal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modificarani.php">
                            <div class="form-group">
                              <input type="text" id="cod_ani" name="cod_ani" class="form-control" style="display: none;">
                              Codigo: <input type="text" id="codigo_ani" name="codigo_ani" class="form-control" disabled="true">
                              <br>
                              Nombre: <input type="text" id="mnombres_ani" name="mnombres_ani" class="form-control" required="true">
                              <br>
                              Descripcion: <textarea id="mdesc_ani" name="mdesc_ani" class="form-control"></textarea>
                              <br>
                              Fecha Ingreso: <input type="date" id="mfechaing_ani" name="mfechaing_ani" class="form-control" required="true" min="2018-01-01">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


                <!-- Agreani Modal-->
                  <div class="modal fade" id="myModalAgreani" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Animal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarani.php">
                            <div class="form-group">
                              Nombre: <input type="text" id="nombres_ani" name="nombres_ani" class="form-control" required="true">
                              <br>
                              Descripcion: <textarea id="desc_ani" name="desc_ani" class="form-control"></textarea>
                              <br>
                              Fecha Ingreso: <input type="date" id="fechaing_ani" name="fechaing_ani" class="form-control" required="true" min="2018-01-01">
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


              </div>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper proyectos -->
      <div id="content-wrapper" style="display: none;" title="proyecto">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Proyecto</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Proyectos
              <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#myModalAgrepro"><span class="fa fa-plus"></span> Agregar</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Unidad</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Unidad</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
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
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalproye" onclick="modificarpro('<?php echo $numero; ?>','<?php echo $nombre; ?>','<?php echo $descr; ?>','<?php echo $unidad; ?>');"><span class="fa fa-pencil-square-o"></span></button></td>                          
                          </tr>
                            <?php
                    }
                      ?>
                    
                  </tbody>
                </table>

                <!-- Modproye Modal-->
                  <div class="modal fade" id="myModalproye" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modificarpro.php">
                            <div class="form-group">
                              <input type="text" id="mnum_pro" name="mnum_pro" class="form-control" style="display:none;">
                              Numero: <input type="text" id="numero_pro" name="numero_pro" class="form-control" disabled="true">
                              <br>
                              Nombre: <input type="text" id="mnombre_pro" name="mnombre_pro" class="form-control" required="true">
                              <br>
                              Descripción: <textarea  type="text" id="mdesc_pro" name="mdesc_pro" class="form-control" required="true"></textarea>
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


                <!-- Agreproye Modal-->
                  <div class="modal fade" id="myModalAgrepro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./registrarproyecto.php">
                            <div class="form-group">
                              Numero de Proyecto: <input type="number" id="num_pro" name="num_pro" class="form-control" required="true">
                              <br>
                              Nombre: <input type="text" id="nombre_pro" name="nombre_pro" class="form-control" required="true">
                              <br>
                              Descripción: <textarea  type="text" id="desc_pro" name="desc_pro" class="form-control" required="true"></textarea>
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
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>


              </div>
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper informes -->
      <div id="content-wrapper" style="display: none;" title="informe">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Informes</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Informes
            </div>
            <div class="card-body">
             <form class="form-group" method="POST" action="generarinformevisi.php" target="_blank">
                <h4>Generar Informe de:</h4>
                <div class="input-group">
                    <label class="form-control">Visitantes</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><span class="fa fa-cloud-download"></span> Generar</button>
                </div>
                </div>
                
              </form>
              <form class="form-group" method="POST" action="generarinformeprac.php" target="_blank">
                <div class="input-group">
                    <label class="form-control">Practicantes</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><span class="fa fa-cloud-download"></span> Generar</button>
                </div>
                </div>
                
              </form>
              <form class="form-group" method="POST" action="generarinformeuni.php" target="_blank">
                <div class="input-group">
                    <label class="form-control">Unidades</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><span class="fa fa-cloud-download"></span> Generar</button>
                </div>
                </div>
                
              </form>
              <form class="form-group" method="POST" action="generarinformeani.php" target="_blank">
                <div class="input-group">
                    <label class="form-control">Animales</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><span class="fa fa-cloud-download"></span> Generar</button>
                </div>
                </div>
                
              </form>
              <form class="form-group" method="POST" action="generarinformepro.php" target="_blank">
                <div class="input-group">
                    <label class="form-control">Proyectos</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><span class="fa fa-cloud-download"></span> Generar</button>
                </div>
                </div>
                
              </form>
              
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

      <!-- content-wrapper produccion -->
      <div id="content-wrapper" style="display: none;" title="produccion">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Producciones</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Producciones
            </div>
            <div class="card-body">
              
            </div>
            <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Finca San Pablo UFPS 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger" href="logout.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../bootstrap/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../bootstrap/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../bootstrap/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../bootstrap/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../bootstrap/dashboard/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../bootstrap/dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../bootstrap/dashboard/js/sb-admin.min.js"></script>
    <script src="../js/main_dash.js"></script>
    <script src="../js/modificar.js"></script>

    <!-- Demo scripts for this page-->
    <!--<script src="../bootstrap/dashboard/js/demo/datatables-demo.js"></script>-->
    <script src="../bootstrap/dashboard/js/demo/chart-area-demo.js"></script>

  </body>

</html>
