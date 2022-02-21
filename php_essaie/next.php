<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/icons/font/bootstrap-icons.css">
    <script src="../vendor/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/carousel.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p class="h3 text-center p-4 text-uppercase">Choississez votre mode de payement pour finaliser votre achat</p>
        <div class="d-flex justify-content-center">
            <div class="card col-lg-6">
                <div class="card-header">
                    Vous avez choisis:
                </div>
                <div class="card-body">
                    <div class="row border-bottom pt-3">
                        <div class="col-lg-5">
                            Marque
                        </div>
                        <div class="col-lg-7 text-center">
                            <?php echo $_SESSION['marque'];?>
                        </div>
                    </div>
                    <div class="row border-bottom pt-3">
                        <div class="col-lg-5">
                            Moteur
                        </div>
                        <div class="col-lg-7 text-center">
                            <?php echo $_SESSION['moteur'];?>
                        </div>
                    </div>
                    <div class="row border-bottom pt-3">
                        <div class="col-lg-5">
                            Couleur
                        </div>
                        <div class="col-lg-7 text-center">
                            <?php echo $_SESSION['couleur'];?>
                        </div>
                    </div>
                    <div class="row border-bottom pt-3">
                        <div class="col-lg-5">
                            Kilometrage
                        </div>
                        <div class="col-lg-7 text-center">
                             <?php echo $_SESSION['kilometre'].'&nbsp; km/h';?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center row pt-4">
            <div class="col-lg-4">
                <img src="png2.png" alt="" height=100>
            </div>
            <div class="col-lg-3">
                <img src="logo1.png" alt="" height=100>
            </div>
            <div class="col-lg-3">
                <img src="png1.png" alt="" height=100>
            </div>
        </div>
    </div>
</body>
</html>