<?php session_start(); 
include ('../localisation.php');
if($_SESSION['matricule']==''){?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('header.php');?>
    
    <title><?php echo _("Bienvenu dans Nuru Banque Of Congo");?></title>
</head>
<style>
</style>
<body class="text-muted">
    <!-- Haut menu -->
    <div >
        <?php include('../B_menu/hautmenu.php');
              include('../B_menu/secure_menu.php');  
        ?>
        <div class="container mt-4" style="background: #011720d3">
            <div class="row " >
                <div class="card col-lg-6 m-auto" style="background:#0f222b;">
                    <form action="../B_config/confirm_compte.php" method="post">
                        <div class="col-4 card-img m-auto">
                            <img src="../B_img/logo1.png" class="w-100" alt="..." height="100">
                        </div>
                        <div class="card-body shadow " >
                            <p><?php echo _("Merci de vouloir bien completer votre code d'Authentification");?></p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">NuruBanque</span>
                                  </div>
                                  <input type="number" class="form-control" placeholder="01234" name="authen">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark w-50 mt-2"><?php echo _("Valider");?></button>
                       </div>
                    </form>
                </div>
                <div class="card col-lg-6 align-self-center" style=" background: #0f222b!important;border: 1px solid rgba(2, 2, 2, 0.699);">
                    <div class="card-body shadow h-100" >
                        <div class="">
                            <div class="col-lg-6">
                                <p class="mb-0"><?php echo _("Bienvenu sur");?></p>
                                <p class="h3 mt-0 " style="color: rgb(39, 148, 29);">Nuru Merchant Portail</p>
                            </div>
                            <div class="row ml-1 text-muted">
                                <div class="col-12 border-bottom pb-3">
                                    <div class="row">
                                        <div class="col-1">
                                            <span class="bi bi-hand-index icon-2x"></span>
                                        </div>
                                        <div class="col-11">
                                        <?php echo _(" Vous pouvez vous connecter a notre banque en ligne et faire
                                            des transferts, achetez en ligne etc. juste en vous connectant
                                            sur votre compte sur www.nurubanque.cd");?>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-1">
                                            <span class="bi bi-shield-lock icon-2x"></span>
                                        </div>
                                        <div class="col-11">
                                        <?php echo _(" Avis de ne pas partager ou publier vos identifiants sur internet
                                            /Mobile banking et ATM pin avec d'autres personnes incluant le staff de Nurubanque");?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>  
    <div class="mt-lg-4">
    <?php include('../B_menu/footer_user.php');?>
    </div>
</body>
</html>
<?php }else header('location: ../index.php')?>