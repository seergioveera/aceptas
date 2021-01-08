<?php
$mysqli = new mysqli('localhost', 'root', '', 'ebusca');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link rel="shortcut icon" href="../img/heart.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Formulario: </title>

</head>

<body>
    <form action="data.php" method="post">

        <div class="container" style="margin-top: 120px;">
            <form action="data.php" method="post">
                <div class="form-row col-xs-12 col-md-12 col-lg-12">
                    <h1 style="text-align: center;">Formulario a completar: </h1>
                    <div class="form-group">
                        <hr>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <h3>
                                    <label for="">Lugar: </label>
                                </h3>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <ion-icon name="location-outline"></ion-icon> 
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="lugar" placeholder="Lugar" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col col-xs-12 col-md-12 col-lg-12">
                                    <h3>
                                        <label class="sr-only" for="">Fecha</label>
                                    </h3>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <ion-icon name="calendar-outline"></ion-icon> 
                                            </div>
                                        </div>
                                        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha" required>
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-md-12 col-lg-12">
                                    <h3>
                                        <label class="sr-only" for="">Hora</label>
                                    </h3>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <ion-icon name="time-outline"></ion-icon> 
                                            </div>
                                        </div>
                                        <input type="time" class="form-control" name="hora" id="hora" placeholder="Hora" required>
                                    </div>
                                </div>
                            </div>

                            <div class="container col-12 position-absolute" style="margin-top: 2%; margin-bottom:5%; text-align:center;">
                                <button type="submit" onclick="sendData()" class="btn btn-primary btn-lg">Enviar datos</button>
                            </div>
                        </div>
            </form>
        </div>
</body>

</html>

<style>
    body {
        background: pink;
        background-image: url('../img/heart.svg');
        background-repeat: repeat;
        height: 25px;
        width: 100%;
    }

    .container {
        background: pink;
        border-radius: 15%;
        padding: 2%;
        border-color: white;
        border-style: solid;
    }

    h3,
    label,
    h1,
    .btn {
        font-family: 'Lobster', cursive;
    }
</style>