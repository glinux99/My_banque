<?php session_start();
include ('localisation.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('B_menu/header.php');?>
    <title><?php echo _('Bienvenu dans Nuru Banque Of Congo');?></title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('B_menu/haut.php');?>
            <!--Fin menu principale center-->
            <!-- corps de cette page -->
            <div class="">
                <div style="position: fixed; margin-top: -60px; margin-left: 30px;">
                    <img src="B_img/logo1.png" alt="" class="ms-1 d-none d-sm-inline" height=100>
                </div>
                <div class="parallax-window" data-parallax="scroll" data-image-src="B_img/3.JPG">
                    <div>
                        <ul class="nav nav-tabs justify-content-center">
                             <li class="nav-item">
                                 <a href="B_users/loginsecure.php" class="nav-link"><?php echo _('Mon compte');?></a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link"><?php echo _('Mes payements');?></a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link"><?php echo _('Mon epargne');?></a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link"><?php echo _('Mes credits');?></a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link"><?php echo _('intermediaire Financiers');?></a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link"><?php echo _('Statistiques');?></a>
                             </li>
                             <li class="nav-item">
                                 <select name="langue" id="" class="form-control text-success border-0" style="background: #1D264A!important;">
                                     <option value="">Francais</option>
                                     <option value="">Anglais</option>
                                 </select>
                             </li>
                        </ul>
                                 
                       
                    </div>  
                    <div class="container-fluid" >
                        <!-- carousel -->
                        <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div  class="carousel-item active" style="background: url('B_img/banque_img.jpg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-white text-center h-100 pt-5" >
                                            <p class="col-lg-4 mt-5 " >
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning" style="font-weight: 200; color: rgb(255, 102, 0)"><span style="color: rgb(39, 148, 29);"><span style="color: rgb(39, 148, 29);"><?php echo _("Nuru Banque");?></span></span><?php echo _(" avec plus d'avantages");?></h3>
                                                    <h6 class="mb-lg-3 text-white"style="font-weight: 100;"><?php echo _('Beneficiez de nombreux produits et services lie a votre compte');?></h6>
                                                    <div class="col">
                                                        <a class="border pl-4 pr-4 pt-2 pb-2 text-warning" href="B_users/loginsecure.php" ><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background: url('B_img/mission.jpeg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-center text-white pt-5">
                                            <p class="col-lg-4 mt-5">
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning"><span style="color: rgb(39, 148, 29);"><?php echo _("Nuru Banque");?></span> <?php echo _("avec plus de facilite");?></h3>
                                                    <h6 class="mb-lg-3"><?php echo _("Epargnez avec Nuru Merchant Bank et realisez vos projets avec facilite");?></h6>
                                                    <div class="col">
                                                        <a class="border p-2 text-white" href="B_users/loginsecure.php"><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background: url('B_img/avenir.jpg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-center text-white pt-5">
                                            <p class="col-lg-4 mt-5">
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning"><span style="color: rgb(39, 148, 29);">Nuru Banque</span> <?php echo _("pour suivre votre avenir");?></h3>
                                                    <h6 class="mb-lg-3 text-dark"><?php echo _("Economisez plus d'argent en epargnant pour le prochain venu");?></h6>
                                                    <div class="col">
                                                        <a class="border p-2" href="B_users/loginsecure.php"><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background: url('B_img/famille.jpg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-center text-white pt-5">
                                            <p class="col-lg-4 mt-5">
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning"><span style="color: rgb(39, 148, 29);">Nuru Banque</span><?php echo _(" avec plus d'oportunites");?></h3>
                                                    <h6 class="mb-lg-3"><?php echo _("Effectuez toutes vos operations quotidiennes en toutes securite avec votre compte sur Nuru Merchant Bank");?></h6>
                                                    <div class="col">
                                                        <a class="border p-2" href="B_users/loginsecure.php"><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background: url('B_img/essaie3.jpg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-center text-white pt-5">
                                            <p class="col-lg-4 mt-5">
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning"><span style="color: rgb(39, 148, 29);">Nuru Banque</span><?php echo _(" avec plus simplicite");?></h3>
                                                    <h6 class="mb-lg-3"><?php echo _("effectuez vos retraits en USD ou CDF avec nos cartes bancaires et continuez vos achats");?></h6>
                                                    <div class="col">
                                                        <a class="border p-2" href="B_users/loginsecure.php"><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="background: url('B_img/save-money.jpg') no-repeat; height: 500px; background-size: cover;">
                                        <div class="text-center text-white pt-5">
                                            <p class="col-lg-4 mt-5">
                                                    <h3 class="text-uppercase mt-5 pt-5 text-warning "><span style="color: rgb(39, 148, 29);">Nuru Banque</span>,<?php echo _("toujours a vos cotes et prete a vous servir");?></h3>
                                                    <h6 class="mb-lg-3"><?php echo _("Nous respectons nos clients, c'est notre premiere regle, qui nous oblige a bien securiser votre argent");?></h6>
                                                    <div class="col">
                                                        <a class="border p-2" href="B_users/loginsecure.php"><?php echo _("Debuter avec nous");?></a>
                                                    </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- fin carousel -->
                        <div class="card row" style="background: linear-gradient(
                            rgba(30, 255, 0, 0.45),
                            rgba(31, 4, 128, 0.45)
                        ), url('B_img/logo1.png') repeat">
                            <div class="navbar  navbar-dark col-auto text-white">
                                  <div class="m-auto">
                                    <h4 class="text-center"><?php echo _("POUR UN ACCES RAPIDE, DITES-NOUS QUI VOUS ETES ");?>
                                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".coll2">
                                        <span class="navbar-toggler-icon "></span>
                                    </button></h4>
                                </div>
                                <div class="collapse navbar-collapse coll2 border-top pt-2 acces">
                                    <ul class="text-center list-inline">
                                        <li class="mr-4 list-inline-item ml-4">
                                            <a href="B_users/loginsecure.php" class="nav-link text-white">
                                                <div class="row">
                                                    <div class="col-">
                                                        <span class="bi-person-rolodex icon-2x mr-1"></span>
                                                    </div>
                                                    <di class="col-auto pt-1 pl-0">
                                                    <?php echo _("Un particulier");?>
                                                    </di>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-4 list-inline-item ml-4">
                                            <a href="B_users/loginsecure.php" class="nav-link text-white">
                                                <div class="row">
                                                    <div class="col-">
                                                        <span class="bi-people-fill icon-2x mr-1"></span>
                                                    </div>
                                                    <di class="col-auto pt-1 pl-0">
                                                    <?php echo _("Actionnaire/Investisseur");?>
                                                    </di>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-4 list-inline-item ml-4">
                                            <a href="B_users/loginsecure.php" class="nav-link text-white">
                                                <div class="row">
                                                    <div class="col-">
                                                        <span class="bi-person-workspace icon-2x mr-1"></span>
                                                    </div>
                                                    <di class="col-auto pt-1 pl-0">
                                                    <?php echo _("Un candidat a l'emploi");?>
                                                    </di>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mr-4 list-inline-item ml-4">
                                            <a href="B_users/loginsecure.php" class="nav-link text-white">
                                                <div class="row">
                                                    <div class="col-">
                                                        <span class="bi-person-workspace icon-2x mr-1"></span>
                                                    </div>
                                                    <di class="col-auto pt-1 pl-0">
                                                    <?php echo _(" Une PME");?>
                                                    </di>
                                                </div>
                                            </a>
                                        </li><li class="mr-4 list-inline-item ml-4">
                                            <a href="B_users/loginsecure.php" class="nav-link text-white">
                                                <div class="row">
                                                    <div class="col-">
                                                        <span class="bi-wallet-fill icon-2x mr-1"></span>
                                                    </div>
                                                    <di class="col-auto pt-1 pl-0">
                                                    <?php echo _("Une entreprise");?>
                                                    </di>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-group" >
                            <div class="card m-auto" style="background: #1D264A!important; color: #666;line-height: 24px; border: 1px solid green;">
                                <div class="row">
                                    <div class="col-4 card-img m-auto">
                                        <img src="B_img/essaie.jpg" class="w-100" alt="..." >
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><span style="color: rgb(39, 148, 29);">Nuru Banque</span></h5>
                                            <p class="card-text"><?php echo _("Nous tenons a remercier l'ensemble de nos clients de nous avoir fait confiance durant toutes ces annees
                                                . Nous serons toujours la pour vous servire. Heureuse annee 2022 a vous.");?>
                                            </p>
                                            <p class="card-text"><small class="text-muted"><?php echo _("_STAFF Group");?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mt-2 mb-2 shadow" style="background: #1D264A!important; color: #666;line-height: 24px; border: 1px solid green;" >
                                    <div class="row">
                                        <div class="col-4 m-auto">
                                            <img src="B_img/nuru8.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><span style="color: rgb(39, 148, 29);">Nuru Banque</span> - RDC</h5>
                                                <p class="card-text"><?php echo _("Liste parmi les meilleurs banques du pays");?></p>
                                                <p class="card-text"><small class="text-muted">_Nuru Merchant Bank</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2 mb-2 shadow" style="background: #1D264A!important; color: #666;line-height: 24px; border: 1px solid green;" >
                                    <div class="row">
                                        <div class="col-4 m-auto ">
                                            <img src="B_img/nuru8.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><span style="color: rgb(39, 148, 29);">Nuru Banque</span> - RDC</h5>
                                                <p class="card-text"><?php echo _("Liste parmi les meilleurs banques du pays");?></p>
                                                <p class="card-text"><small class="text-muted">_Nuru Merchant Bank</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>    
                </div>
            </div> 
            <!-- fin du corps de cette page -->
        </div>

    </div>
</div>
</body>
<script src="../vendor/chart.js/Chart.js"></script>
<style>
    .parallax-window {
    min-height: 600px;
    background: #1D264A!important; color: #666;line-height: 24px;
font-family: 'Source Sans Pro', sans-serif;


}
    .mhl:hover {
        color: black;
        opacity: 0.4;
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
    }
    a, .carou{
        color: rgb(39, 148, 29);line-height: 24px;
font-family: 'Source Sans Pro', sans-serif;
        font-weight: bolder;
    }
</style>
</html>