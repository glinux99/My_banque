<?php session_start(); 
include ('../localisation.php');
if($_SESSION['matricule']!=''){?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('header.php');?>
    <title><?php echo _("Bienvenu dans Nuru Banque Of Congo");?></title>
</head>
<body>
     <!-- PHP SCRIPT -->
     <?php include('../B_config/modify.php');
     $query=$query->fetch();
         //echo $query['adresse_mail'];
     ?>
     <!-- PHP SCRIPT -->
<div class="container-fluid">
    <div class="row flex-nowrap bg-css2" >
         <!--menu gauche flotable-->
       <?php include ('../B_menu/menug_user.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup_user.php');?>
            <!--Fin menu principale center-->
            <div class="col">
                <!-- Profil User -->
                <div class=" ">
                    <div class="" style="height: 15rem;">
                        <div class="rounded" style="background: url('../B_img/avenir2.jpg') no-repeat;height: 12rem; background-size: cover;">
                        <img src="../B_clients/<?php echo $query['photo'];?>" alt="" class="d-block rounded-circle mx-auto border" width=240 height=240>
                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-lg-5">
                            <p class="text-success pb-0 h4 mb-0" class="text-success"><span class="bi-info-circle-fill"></span><?php echo _("Information basiques");?></p>
                            <div class="list-group">
                                <div class="list-group-item adC-css">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php echo _("Noms complets");?>
                                        </div>
                                        <div class="col-lg-6 text-white-50">
                                            <?php echo $query['nom'];?>&nbsp;<?php echo $query['prenom'];?>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item adC-css">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php echo _("Adresse Email");?>
                                        </div>
                                        <div class="col-lg-6 text-white-50"><?php echo $query['adresse_mail'];?>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item adC-css">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php echo _("Nuru banque ID");?>
                                        </div>
                                        <div class="col-lg-6 text-white-50"><?php echo $query['matricule'];?>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item adC-css">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php echo _("Password");?>
                                        </div>
                                        <div class="col-lg-6 text-white-50">
                                            ***********************
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-success pb-0 h4 mb-0"><span class="bi-gear-fill "></span><?php echo _("Parametre du compte");?></p>
                            <div class="list-group-item adC-css ">
                                <div class="row">
                                    <div class="col-6">
                                        <?php echo _("Langage");?>
                                    </div>
                                    <div class="col-6 text-white-50">
                                        English
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item adC-css mb-lg-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?php echo _("Privacy Settings");?>
                                    </div>
                                    <div class="col-lg-6 text-white-50"><?php echo _("Seuls les administrateurs et les agents de la banque
                                        qui peuvent voir acces a vos donnees pour bien proteger votre compte");?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-success pb-0 h4 mb-0"><span class="bi-info-square-fill"></span>Information supplemenatire</p>
                            <div class="list-group">
                                <div class="list-group-item adC-css ">
                                    <div class="list-group-item adC-css ">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo _("Genre");?>
                                            </div>
                                            <div class="col-6 text-muted"><?php if($query['genre']=='F') echo _("Feminin"); else echo _("Masculin");?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php echo _("Numero de Tel");?>
                                            </div>
                                            <div class="col-lg-6 text-white-50"><?php echo $query['numero_tel'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php echo _("Type de compte");?>
                                            </div>
                                            <div class="col-lg-6 text-white-50"><?php echo $query['type_compte'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php echo _("Adresse");?>
                                            </div>
                                            <div class="col-lg-6 text-white-50"><?php echo $query['quart_av'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo _("Ville");?>
                                            </div>
                                            <div class="col-6 text-white-50"><?php echo $query['ville'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo _("Province");?>
                                            </div>
                                            <div class="col-6 text-white-50"><?php echo $query['province'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo _("Pays");?>
                                            </div>
                                            <div class="col-6 text-white-50"><?php echo $query['pays'];?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item adC-css">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php echo _("Apropos");?>
                                            </div>
                                            <div class="col-lg-6 text-white-50"><?php echo $query['apropos'];?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin profil User -->
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer_user.php');?>
</body>
</html>
<?php }else header('location: ../index.php')?>