<?php session_start();
include ('../localisation.php');
if($_SESSION['matricule']){
    if($_SESSION['type_compte']=='caissier') header('location: ../B_caissier/caissier_N.php');
    if($_SESSION['type_compte']=='admin') header('location: ../B_admin/admin_N.php');
    else header('location: modifier_compte.php');
    }else{?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('header.php');?>
    
    <title>Bienvenu dans Nuru Banque Of Congo</title>
</head>
<body class="text-muted">
    <!-- Haut menu -->
    <div >
        <?php include('../B_menu/hautmenu.php');
              include('../B_menu/secure_menu.php'); 
        ?>
        <div class="container m-auto"  style="background: #011720d3">
            <div class="row " >
                <div class="card col-lg-6" style="background:#0f222b;">
                    <div class="card-body shadow" >
                        <ul class="nav nav-tabs" id="" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="username-log" data-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="true"><?php echo _("Username login");?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="card-log" data-toggle="tab" href="#card-login" role="tab" aria-controls="card-login" aria-selected="false"><?php echo _("Creation compte");?></a>
                                </li>
                        </ul>
                        <div class="tab-content w-75 m-auto" id="">
                            <div class="tab-pane fade show active" id="username" role="tabpanel" aria-labelledby="username-log">
                                        <div class="col-auto">
                                            <p class="text-center" ><span class="icon-user icon-5x"></span></p>
                                            <p class="text-center"><?php echo _("Connetez-vous avec votre compte");?></p>
                                        </div>
                                        <?php if(isset($_GET['error'])=='1'){?>
                                            <div class="alert alert-dismissible fade show bg-dark" role="alert">
                                                <strong><?php echo _("Erreur!");?></strong> <?php echo _("Vos identifiants n'ont pas ete reconnu. Veuillez recommencer!");?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php }
                                    if (isset($_GET['email'])=='2'){
                                        echo '<div class="alert alert-dismissible fade show bg-dark" role="alert">
                                            <strong>';
                                            echo _('Erreur!');
                                            echo '</strong>';
                                            echo 'Vos adresses ont deja ete enregistres! Veuillez recommencer svp!
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                                    }
                                    ?>
                                <form action="../B_config/login_session.php" method="post">
                                    <div class="row">
                                            <input type="text" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="pmail" id="" class="form-control mb-3 pl-0" placeholder="<?php echo _("nom d'utilisateur ou adresse mail");?>" required>
                                            <input type="password" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="psswd" id="" class="form-control pl-0 mb-3" placeholder="password" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-50"><?php echo _("Connection");?></button>
                                    </div>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                                <div class="form-check">
                                                        <input class="form-check-input text-white" type="checkbox" id="check">
                                                        <label class="form-check-label" for="check">
                                                        <?php echo _(" Se souvenir de vous");?>
                                                        </label>
                                                </div>
                                        </li>
                                        <li class="list-inline-item">
                                                <a href="revovery.php" class="nav-link">
                                                <?php echo _("Mot de passe oublie?");?>
                                                </a>
                                        </li>
                                    </ul>
                                </form> 
                                <p class="text-center"><i>Privacy term of visit</i></p>  
                            </div>
                            <div class="tab-pane fade" id="card-login" role="tabpanel" aria-labelledby="card-log">
                                <div class="col-auto">
                                    <p class="text-center" ><span class="icon-user icon-5x"></span></p>
                                    <p class="text-center"><?php echo _("Creer votre compte facilement");?></p>
                                </div>
                                <form action="../B_config/creation_compte.php" method="post">
                                    <input type="text" name="nom" id=""  placeholder="<?php echo _('Votre nom');?>" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="" id="" class="form-control mb-2 pl-0" required>
                                    <input type="text" name="prenom" id=""  placeholder="<?php echo _("Votre prenom");?>" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="" id="" class="form-control mb-2 pl-0" required>
                                    <input type="mail" name="email" id=""  placeholder="<?php echo _("votre adresse mail");?>" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="" id="" class="form-control mb-2 pl-0" required>
                                    <input type="text" name="psswd" id=""  placeholder="******************" style="border: none;outline: none; box-shadow: none; border-bottom: 1px solid black;" name="" id="" class="form-control mb-2 pl-0" required>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                        <?php echo _(" J'ai lu et j'accepte les termes de politiques de confidentialites");?>
                                      </label>
                                    </div>
                                    <div class="text-center">
                                         <button type="submit" class="btn btn-dark w-50 mt-2"><?php echo _("Soumettre");?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-6 align-self-center d-none d-lg-block" style=" background: #0f222b!important;border: 1px solid rgba(2, 2, 2, 0.699);">
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
    <?php include('../B_menu/footer.php');?>
</body>
</html>


<?php } ?>
