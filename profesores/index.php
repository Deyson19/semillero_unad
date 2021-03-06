<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso | Docente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: gray;">
    <div class="container">
        <h2>Bienvenido estimado Docente</h2>
        <form class="form-horizontal" action="datos.php" method="POST">
        <div class="form-group">
                <label class="control-label col-sm-2" for="id">Identificación:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" placeholder="Ingresa tu documento" name="documento" maxlength="15" minlength="7" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="control-label col-sm-2" for="id">Dirección Email:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <small id="emailHelp" class="form-text text-muted">Solo usaremos tu correo para fine académicos.</small>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="id">Primer nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" placeholder="Ingresa tu primer nombre" name="firstName" required maxlength="20">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="id">Segundo nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" placeholder="Ingresa tu segundo nombre" name="secondName">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="id">Primer apellido:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" placeholder="Ingresa tu primer apellido" name="firstLastName" required maxlength="15">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="id">Segundo apellido:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" placeholder="Ingresa tu apellido" name="secondLastName" maxlength="20">
                </div>
            </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-danger col-sm-offset-3">Reset</button>
        </div>
    </div>
    </form>
    </div>
    <script>
        function validar(form) {
            var identify = document.getElementsByName('documento');
            if (isNaN(parseInt(identify))) {
                alert('El campo"Identificación" debe ser un número');
                return false;
                location.href(this);
            }
        }
    </script>
</body>

</html>