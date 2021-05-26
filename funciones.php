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
        		window.location.href='admin.php';
        		</script>";
    } else {
        if (password_verify($pass, $result['pass'])) {
            $_SESSION['user_id'] = $result['id'];
            echo "<script type='text/javascript'>
            alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
            window.location.href='admin.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
        		alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
        		window.location.href='admin.php';
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
					window.location.href='admin.php';
					</script>";
		} else {
			if (password_verify($passlog, $result['pass'])) {
				$_SESSION['user_id'] = $result['id'];
				echo "<script type='text/javascript'>
				alert(¡ENHORABUENA! Te has logueado satisfactoriamente);
				window.location.href='admin.php';
				</script>";
			} else {
				echo "<script type='text/javascript'>
					alert(¡ERROR! Has introducido mal tu E-mail o contraseña);
					window.location.href='admin.php';
					</script>";
			}
		}
	
		}

		

	function hayConexion (){
	$sql = "SELECT * FROM products"; //Traemos los elementos de la base de datos
	$connect = $conexion->query($sql); //La conexión se ejecuta
	
		if($connect->num_rows){ //Con este condicional vamos a comprobar que hay datos en la base de datos
		
			while($fila = $connect->fetch_assoc()){  //El método fetch_assoc trae la información del elemento de cada fila que queramos
				
				if($fila['id_product']==$id_product){
				echo  "Hola ". $fila['id_product'] . '<br />';
				//aquí podemos hacer un require o un include de otra página donde el usuario pueda hacer cosas.
				//O redirigirle a la página de Login
				}
			}	
		}
		else {
			echo 'No hay datos en la base de datos';
		}
	}

	function borrarProducto($id_product){
        $pdo = conexion();
        $sql = "DELETE from products where id_product = '{$_POST["id_product"]}'";
        $stmt = $pdo->prepare($sql);
        $stmt ->bindValue(':id_product',$id_product);
        $stmt->execute();
    }
