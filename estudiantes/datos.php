<?php 
/*$host = 'localhost';
$user = 'academiaUnad';
//^VEEA)?m3}U0+Owx
$password = '14E$)4LUU9=o';
$database = 'academiaAlpha';
$port = '3306';*/

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
        window.location.assign("index.html")
    }
</script>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>

<body style="background-color: gray;">
    <div class="container">
        <?php
        $identificacion = $_POST['documento'];
        $correo = $_POST['email'];
        $primerNombre = $_POST['firstName'];
        $segundoNombre = $_POST['secondName'];
        $primerApellido = $_POST['firstLastName'];
        $segundoApellido = $_POST['secondLastName'];
        $cursosDisponibles  = array("HTML5", "CSS3", "JAVA", "C++", "PHP");
        $x = 0;
        $curso = $_POST['curso']; //Html5, css3, java, c++ y php

        switch ($curso) {
            case '1':
                $x = 1;
                $saltoDeLinea;
                break;
            case '2':
                $x = 2;
                $saltoDeLinea;
                break;
            case '3':
                $x = 3;
                $saltoDeLinea;
                break;
            case '4':
                $x = 4;
                $saltoDeLinea;
                break;
            case '5':
                $x = 5; 
                $saltoDeLinea;
                break;
            default:
                echo "El estudiante no ha seleccionado ningún curso";
                echo  "Nada";
                break;
        }
        $sql = "INSERT INTO alumno(codigo, primerNombre, segundoNombre, primerApellido, segundoApellido, correo, id_curso) 
        VALUES ('$identificacion','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$correo','$x')";

        echo '<br>';
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully \n"."<br>";
            echo "<script> alert('Se han guardado los datos');
            location.href= 'index.html';  
            </script>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();

        ?>

        <br>
        <input type="button" value="Ingresar nuevo dato" onclick="newDoc()">
    </div>
</body>

</html>