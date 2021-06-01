<?php
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$mensaje=$_POST['mensaje'];

$destinatario="telle.milan@gmail.com";
$asunto="consulta";

$carta="de:$nombre\n";
$carta.="con el mail:  $mail\n";
$carta.=" $mensaje\n";

mail($destinatario, $asunto, $carta);
header('Location:cv.html');

$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO tabla (nombre, mail, mensaje) VALUES ('$nombre', '$mail', '$mensaje')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

