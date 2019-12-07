<?Php 
		$servidor = "18.214.219.22"; 
		$usuario_bd = "dycilcom_mia-drives";  
		$password_bd = "TS4_#FclZW3z";  
		$basedatos = "dycilcom_mia_Drives";

		$name=$_POST["name"];
		$lastNname=$_POST["lastNname"];
		$sex=$_POST["sex"];
		$bornDate=$_POST["bornDate"];
		$docId=$_POST["docId"];
		$profile=$_POST["profile"];
		$emailAdress=$_POST["emailAdress"];
		$celularNumber=$_POST["celularNumber"];
		$password=$_POST["password"];
		
		
		$conexion = mysql_connect($servidor,$usuario_bd,$password_bd); 
		if (!$conexion) 
		{ 
		    echo "Error conectando a la base de datos."; 
		    exit(); 
		} 
		
		$resultado=mysql_select_db($basedatos,$conexion); 
		if (!$resultado) 
		{ 
		    echo "Error seleccionando la base de datos."; 
		    exit(); 
		} 

	

	/*echo "$nomusu","$tele","$emp","$usu","$pwd","$tipouser";-*/
	 //include("conexion.php");
   $crear = ("INSERT INTO  Usuario (NomUsuario, ApeUsuario, IdSexo, FechaNacimiento, CedUsuario, CodigoPostal, EmailUsuario, CelUsuario, Clave) VALUES ( '$name', '$lastNname', $sex, '$bornDate', '$docId', '$profile', '$emailAdress', '$celularNumber', '$password')");

  // echo $crear; 
    $resultado = mysql_query($crear) or die('La creacion de usuario fallo;: ' . mysql_error()); 

	/*$insertar=("INSERT INTO usuarios (nombre, telefon, idEmpresa, usuario, contrasena, idRol) VALUES ( '$nomusu', '$tele', $emp, '$usu', '$pwd', $tipouser)");
	$resultado=$conexion->query($insertar);*/

	if($resultado){?>
						
					<?php
				header('Location: usuarios.php');
				?>
				
					<?php
	}
	 else{?>
				<script type="text/javascript">
  						alert("Listo mijo");
				</script>
		<?php 
	 }
	?>
