<!DOCTYPE html>
<html>
  <head>
    <title>Granja San Pablo UFPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
    	body{

          background-image: url(./img/Granja1.png);
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<?php
  		session_start();

  		if(isset($_SESSION['user'])){

  			
  			header("location:./php/dashboard.php");
            

        }
        else{

        	echo "";
            

        }


  		?>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html"><span class="glyphicon glyphicon-leaf"></span> Granja San Pablo UFPS</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			            	<form action="./php/login.php" method="POST">
			                <h6>Ingresar</h6>
			                <input class="form-control" type="text" name="username" id="username" placeholder="Usuario:">
			                <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Contraseña:">
			                <div>
			                	<a href=""><span class="glyphicon glyphicon-question-sign"></span> ¿Olvido su contraseña?</a>
			                </div>
			                <div class="action">
			                    <button class="btn btn-primary signup" type="submit"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</button>
			                </div>
			                </form>                
			            </div>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>