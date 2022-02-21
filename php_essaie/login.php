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
<style>

  .animation_texto
{
  background-image: linear-gradient(
    -225deg,
    #b1ce96 0%,
    #1d2511 29%,
    #fffb13 67%,
    #00ff15 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: animation_text 2s linear infinite;
}

@keyframes animation_text {
  to {
    background-position: 200% center;
  }
}

</style>
<body class="container">
    <p class="text-center p-4 h3 animation_texto">Bienvenu sur Goma Shop</p>
    <?php if($_SESSION['error']=='1'){
        include('error.php');
        session_destroy();
    }?>
    <div class="row">
        <div class="col-lg-6 card">
            <div class="card-header bg-success text-white text-uppercase">
                Choississez les parametres de recherche:
            </div>
            <div class="card-body">
                <form action="Voiture.php" method="post">
                    <div class="input-group row pt-2">
                    <div class="col-lg-5">
                        <label for="">Marque</label>
                    </div>
                        <div class="col-lg-7">
                            <select name="marque" id="" class="form-control" required>
                            <option value="">----select one----</option>
                                <option value="MERCEDES">MERCEDES</option>
                                <option value="PORSCHE">PORSCHE</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="BMW">BMW</option>
                                <option value="FORD">FORD</option>
                                <option value="BUGATTI">BUGATTI</option>
                                <option value="FERRARI">FERRARI</option>
                                <option value="LAMBORGHINI">LAMBORGHINI</option>
                                <option value="LEXUS">LEXUS</option>
                                <option value="JAGUAR">JAGUAR</option>
                                <option value="JEEP">JEEP</option>
                                <option value="VOLVO">VOLVO</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                <option value="TOYOTA">TOYOTA</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group row pt-2">
                        <div class="col-lg-5">
                            <label for="">Type Moteur</label>
                        </div>
                        <div class="col-lg-7">
                            <select name="moteur" id="" class="form-control" required>
                                <option value="">----select one----</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Essence">Essence</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group row pt-2">
                            <div class="col-lg-5">
                                <label for="">Couleur</label>
                            </div>
                            <div class="col-lg-7">
                                <select name="couleur" id="" class="form-control" required>
                                <option value="">----select one----</option>
                                    <option value="Noire">Noire</option>
                                    <option value="Verte">Verte</option>
                                    <option value="Jaune">Jaune</option>
                                    <option value="Cyan">Cyan</option>
                                    <option value="Blanche">Blanche</option>
                                </select>
                            </div>
                    </div>
                    <div class="input-group row pt-2">
                        <div class="col-lg-5">
                            <label for="">Kilometrage(max)</label>
                        </div>
                        <div class="col-lg-7 ">
                            <input type="number" name="kilometre" id="" min=0 class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-success col-lg-4">Valider</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card col-lg-6 ">
            <div class="card-header bg-success text-white text-uppercase">
                Photos de vehicules du stocks
            </div>
            <div class="card-body">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background: url('bugatti.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('bwm.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('ferrari.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('ford.webp') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('jaguar.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('jeep.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('lambordhini.webp') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('lexus.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('mercedes-noire.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('nissan.jpeg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('suzuki.jpg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('porsche.jpeg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('volswagen.jpeg') no-repeat; height: 300px; background-size: cover;">
                        </div>
                        <div class="carousel-item" style="background: url('volvo.webp') no-repeat; height: 300px; background-size: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>