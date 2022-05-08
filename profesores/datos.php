<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'academia';
$port = '3306';


$conn = new mysqli($host, $user, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "<h2>Connected successfully </h2>";

?>

<script>
    function newDoc() {
        window.location.assign("index.php")
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $identificacion = $_POST['documento'];
    $correo = $_POST['email'];
    $primerNombre = $_POST['firstName'];
    $segundoNombre = $_POST['secondName'];
    $primerApellido = $_POST['firstLastName'];
    $segundoApellido = $_POST['secondLastName'];

    $sql = "INSERT INTO profesor(identificacion, primerNombre, segundoNombre, primerApellido, segundoApellido, correo) 
   VALUES ('$identificacion','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$correo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully \n"."<br>";
    echo "<script> location.href= 'index.php'; </script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

    echo '<br>';
    ?>

    <br>
    <input type="button" value="Ingresar nuevo dato" onclick="newDoc()">
</body>

</html>
