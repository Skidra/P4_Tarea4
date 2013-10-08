
<html>
  <head>
  <title>Confirmacion</title>
  </head>
  <body>

    <?php
    // obtiene los datos de entrada del formulario
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
    // utiliza los datos de entrada del formulario
   
	
	if($Codigo == 100 and $Pass == "udg"){
	
	echo "<h1>Bienvenido</ h1>";
	}else{
	
	echo "<h1>Error</ h1>";
	
	}
    ?>
   
<a href="entrarDatos.php"><h6>Intentar de nuevo</h6></a>
	
</body>
</html>