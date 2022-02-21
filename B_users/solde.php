<?php session_start(); if($_SESSION['matricule']!=''){?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('B_menu/header.php');?>
    <title>Bienvenu dans Nuru Banque Of Congo</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap bg-success">
         <!--menu gauche flotable-->
       <?php include ('B_menu/menug.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('B_menu/menup.php');?>
            <!--Fin menu principale center-->
            <div class="col">
                <!--Profil user-->

                <!--Le style display none est a enlenver dans le prochain div , de meme que ce commentaire-->
                <div class="row justify-content-center" >
                    
                    <!--Details users -->
                    <div class="card col-lg-3 m-auto">
                        <div class="card-img">
                            <img src="../img/port01.jpg" class="w-100 img-thumbnail">
                        </div>
                        <div class="card-text text-center">
                            <h4 class="title">Daniel Kikimba<br />
                                <small>gVente32</small>
                            </h4>
                            <h6>petit meno a propos de moi</h6>
                        </div>
                        <div class="card-footer text-center">
                            <span class="icon-facebook m-2"></span><span class="icon-instagram m-2"></span><span class="icon-github-sign m-2"></span>
                        </div>
                    </div>
                    <!--Fin detail users-->
                </div>
                <!--Fin profil user-->
                <!--Mes commandes-->
              
               
                <!--Fin Mes produits-->
            </div>
        </div>

    </div>
</div>
</body>
<script src="../vendor/chart.js/Chart.js"></script>
<style>
    .mhl:hover {
        color: black;
        opacity: 0.4;
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
    }

    .nav-item border-bottom w-100 mhl {}
</style>
</html>
<?php }else header('location: ../index.php')?>