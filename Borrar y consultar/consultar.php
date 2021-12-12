<?php
    include './db.php';

    $sql="SELECT * FROM users";
    $resultado= mysqli_query($con,$sql);
    while($r=mysqli_fetch_array($resultado)){
        echo "Nombre: ".$r[0]."<br/>";
        echo "Apellido: ".$r[1]."<br/>";
        echo "DNI: " .$r[2]."<br/>";
        echo "Fecha de nacimiento: ".$r[3]."<br/>";
        echo "Telefono: ".$r[4]."<hr/>";
        
    }
    mysqli_query($con, $sql);
    mysqli_close($con);
?>