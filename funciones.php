<?php


	function existeEmail ($email){
	$sql = "SELECT * FROM practica5 WHERE email=:email";
	$query = $connect->query($sql); //La conexión se ejecuta
	$query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
	$result = $query->fetch(PDO::FETCH_ASSOC);
	
	if (!$result) {
        echo "<script type='text/javascript'>
        		alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
        		window.location.href='login.php';
        		</script>";
    } else {
        if (password_verify($pass, $result['pass'])) {
            $_SESSION['user_id'] = $result['id'];
            echo "<script type='text/javascript'>
            alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
            window.location.href='login.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
        		alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
        		window.location.href='login.php';
        		</script>";
        }
    }

	}


	function existeEmailLog ($emailog){
		$sql = "SELECT * FROM practica5 WHERE email=:email";
		$query = $connect->query($sql); //La conexión se ejecuta
		$query->bindParam("email", $emailog, PDO::PARAM_STR);
		$query->execute();
	 
		$result = $query->fetch(PDO::FETCH_ASSOC);
		
		if (!$result) {
			echo "<script type='text/javascript'>
					alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
					window.location.href='login.php';
					</script>";
		} else {
			if (password_verify($passlog, $result['pass'])) {
				$_SESSION['user_id'] = $result['id'];
				echo "<script type='text/javascript'>
				alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
				window.location.href='login.php';
				</script>";
			} else {
				echo "<script type='text/javascript'>
					alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
					window.location.href='login.php';
					</script>";
			}
		}
	
		}

		

	function hayConexion (){
	$sql = "SELECT * FROM practica5"; //Traemos los elementos de la base de datos
	$connect = $conexion->query($sql); //La conexión se ejecuta
	
		if($connect->num_rows){ //Con este condicional vamos a comprobar que hay datos en la base de datos
		
			while($fila = $connect->fetch_assoc()){  //El método fetch_assoc trae la información del elemento de cada fila que queramos
				
				if($fila['nombre']==$nombre){
				echo  "Hola ". $fila['nombre'] . '<br />';
				//aquí podemos hacer un require o un include de otra página donde el usuario pueda hacer cosas.
				//O redirigirle a la página de Login
				}
			}	
		}
		else {
			echo 'No hay datos en la base de datos';
		}
	}
?>