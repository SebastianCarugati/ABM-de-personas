<?php
 include './db.php';
  
  $sql = "SELECT * FROM users WHERE dni = " . $_POST['dni'];
  $result = mysqli_query($con, $sql);  
  
  if ($result->num_rows > 0) {
    die("El DNI que intentas registrar ya existe.");
  } 
  else {    
    $insert_sql = "INSERT INTO users (nombre, apellido, dni, fecha_nacimiento, telefono)
                    VALUES ('" . $_POST['nombre'] . "', '" . $_POST['apellido'] . "', '" . $_POST['dni'] . "', '" . $_POST['fecha_nacimiento'] . "', '" . $_POST['telefono'] . "')";

    if (mysqli_query($con, $insert_sql) === TRUE) {
      die("El usuario ha sido creado correctamente");
    } else {
      die("Error: " . $sql . "<br>" . $conn->error);
    }
  }
  
  mysqli_close($con);

  ?>