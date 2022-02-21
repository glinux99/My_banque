<?php session_start();
include ('../localisation.php');if($_SESSION['type_compte']=='caissier'){?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../B_users/header.php');?>
    <title><?php echo _("Bienvenu cher Caissier");?></title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap bg-css">
         <!--menu gauche flotable-->
       <?php include ('../B_menu/menug.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup.php');?>
            <!--Fin menu principale center-->
            <div class="row d-flex mx-auto ml-1">
                <div class="card col-lg-6 mx-auto d-flex" style="background:#0f222bd2;">
                    <div class="card-header text-success text-uppercase text-center">
                        Nuru Banque <?php echo _("Caissier Administation");?>
                    </div>
                    
                    <div class="card-group mb-1 ml-1 mr-1 mt-1 shadow">
                        <div class="card adC-css">
                            <a href="caissier_N.php" class="nav-link text-center">
                                <span class="icon-user icon-5x text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Menu principal");?></small>
                            </a>
                        </div>
                        <div class="card adC-css ml-1">
                            <a href="../B_users/ajout_cli.php" class="nav-link text-center">
                                <span class="bi-person-plus-fill icon-5x"></span><br>
                                <small class="text-center text-muted"><?php echo _("Ajouter Clients");?></small>
                            </a>
                        </div>
                    </div>
                    <div class="card-group mb-1 ml-1 mr-1 shadow">
                        <div class="card text-center adC-css">
                            <a href="caissier_N.php?client=solde" class="nav-link">
                            <span class="bi-bank2 icon-5x"></span><br>
                            <small class="text-center text-muted"><?php echo _("Solde courant de la banque");?></small>
                            </a>
                        </div>
                        <div class="card adC-css ml-1">
                            <a href="caissier_N.php?client=all" class="nav-link text-center">
                                <span class="icon-user icon-5x text-center"></span><br>
                                <small class="text-center text-muted"><?php echo _("Comptes Clients");?></small>
                            </a>
                        </div>
                    </div>
                    <div class="card-group mb-1 ml-1 mr-1 shadow">
                        <div class="card text-center adC-css">
                            <a href="" class="nav-link text-center">
                                <span class="bi-currency-exchange icon-5x"></span><br>
                                <small class="text-center text-muted"><?php echo _("Verifier les payements");?></small>
                            </a>
                        </div>
                        <div class="card adC-css ml-1">
                            <a href="" class="nav-link text-center">
                                <span class="bi-arrow-counterclockwise text-center icon-5x"></span><br>
                                <small class="text-center text-muted"><?php echo _("Annuler la derniere ordre");?></small>
                            </a>
                        </div>
                    </div>
                </div>

                <?php if(($_GET['client'])=='all'){
                            echo '<div class="col-lg-6 m-auto d-flex overflow-auto"><div class="card col-sm-12 adC-css">
                            <div class="card-header text-success text-uppercase text-center adC-css">';
                            echo _('INFORMATION SUR LES CLIENTS');
                            echo '</div>';
                            include('../B_config/client_all.php');
                            echo "<table class='table table-striped table-hover table-bordered tbale-sm table-card text-primary'>
                                    <thead>
                                        <tr>
                                            <td >"; 
                                            echo _("Nom"); 
                                            echo"</td>
                                            <td>";
                                            echo _("Prenom");
                                             echo "</td>
                                            <td>"; 
                                            
                                            echo _("Matricule"); echo "</td>
                                            <td>"; 
                                            echo _("Solde"); 
                                            echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody style=''>";
                                    while($clients=$client->fetch()){
                                        echo "<tr>
                                                <td>".$clients['nom']."
                                                </td><td>".$clients['prenom']."
                                                </td><td><small>".$clients['matricule']."</small>
                                                </td><td>".$clients['solde']."
                                            </tr>";}
                                            echo "</tbody></table></div></div>";
                                }else if($_GET['client']=='solde'){
                                    include('../B_config/client_all.php');
                                    while($clients=$client->fetch()){
                                        $solde+=$clients['solde'];
                                    }
                                    echo "<div class='card col-sm-6 m-auto d-flex adC-css'>
                                    <div class='carousel slide m-auto d-flex' data-ride='carousel' id='soldeC'>
                                          <div class='carousel-inner text-success'>
                                              <div class='carousel-item active'>
                                                  <span class='bi-currency-dollar icon-5x'><span>
                                              </div>
                                              <div class='carousel-item'>
                                                  <span class='bi-currency-bitcoin icon-5x'><span>
                                              </div>
                                          </div>
                                    </div>
                              <span class='text-muted'>"; echo _("Le solde du compte principale de la banque s'eleve a un montant de"); echo "</pan><span class='text-danger' style='font-weight: bolder'> ".$solde."</span> USD </div></div>";
                          }?>
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer.php');?>
</body>
</html>
<?php }else header('location: ../');?>