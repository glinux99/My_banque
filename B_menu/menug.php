
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark border-right" style="background: #0f222b!important; color: #666;line-height: 24px;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
       
        <div class="mb-3">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi-outlet icon-2x"></i> <span class="fs-5 d-none d-sm-inline">Bonjour </span>
            </a>
        </div>
        <div class="">
            <ul class="nav nav-pills flex-column mb-sm-auto border-top mb-0 align-items-center align-items-sm-start">
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="#" class="nav-link align-middle px-0 mhl  h-50" data-toggle="collapse" data-target="#coll">
                        <i class="icon-user"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Client");?></span>
                    </a>
                    <div class="collapse" id="coll">
                        <ul class="list-unstyled ml-4">
                            <li class="mb-2">
                                <a href="../B_users/ajout_cli.php">
                                    <i class="bi-person-plus-fill"></i><?php echo _("Nouveau Client");?>
                                </a>
                            </li>
                            <li class="">
                                <a href="" data-toggle="modal" data-target="#modalmodif">
                                   <i class="bi-pencil-square"></i> <?php echo _("Modifier Client");?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                        <div class="dropdown">
                            <a href="#" class="nav-link align-middle px-0 mhl  h-50 " data-toggle="modal" data-target="#solde2">
                            <i class="bi-safe-fill"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Verifier Solde");?></span></a>
                        </div>
                  
                </li>
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="../B_users/transaction.php" class="nav-link align-middle px-0 mhl  h-50 ">
                        <i class="bi-bank2"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Transaction");?></span>
                    </a>
                </li>
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="#" class="nav-link align-middle px-0 mhl  h-50" data-toggle="modal" data-target="#rapcli">
                        <i class="bi-calendar-check-fill"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Rapports Clients");?></span>
                    </a>
                </li>
                <li class="nav-item border-bottom w-100  pt-2 pb-2">
                    <a href=" #" class="nav-link align-middle px-0 mhl  h-50" data-toggle="modal" data-target="#modalBanque2">
                        <i class="bi-stack"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Depot");?></span>
                    </a>
                </li>
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="#" class="nav-link align-middle px-0 mhl  h-50 ">
                        <i class="bi-plus-square"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Autres");?></span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="../B_config/deconnection.php" class="nav-link align-middle px-0 mhl  h-50 ">
                        <i class="bi-box-arrow-in-right icon-2x"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Deconnection");?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</div>

<!-- Modal pour le depot d argent -->
 <form action="../B_config/depot.php" method="post">
    <div class="modal fade" id="modalBanque2" tabindex="-1" aria-labelledby="modalBanque" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title  text-success" id="modalBanque"><?php echo _("DEPOT ARGENT");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="compte"><?php echo _("Nom du Compte");?></label>
                        <input type="text" name="ncompte" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="compte"><?php echo _("N* Compte");?></label>
                        <input type="text" name="compte" id="" class="form-control">
                    </div>
                    <div class="input-group">
                        <input type="text" name="mount" id="" class="form-control">
                        <select name="devise" id="" class="" data-live-search="true" data-size="7">
                            <option value="">---<?php echo _("Select devise");?>--</option>
                            <option value="">USD</option>
                            <option value="">CDF</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><?php echo _("Enregistrer");?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo _("Fermer");?></button>
                    
                </div>
            </form>
            
        </div>
        </div>
    </div>
 </form>
<!-- Fin modal retrait argent -->
<!-- Modal pour verifiction solde-->
<form action="../B_config/data_send.php?soldeR=1" method="post">
<div class="modal fade" id="solde2" tabindex="-1" aria-labelledby="solde" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title   text-success text-center" id="retrait"><?php echo _("VERIFICATION DU SOLDE");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="#" method="post">
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("Nom du Compte");?></label>
                                <input type="text" name="ncompte" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="compte"><?php echo _("N* Compte");?></label>
                                <input type="text" name="compte" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="submit" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary" ><?php echo _("Fermer");?></button>
            
                </div>
          </form>
        </div>
      </div>
</div>
</form>
<!-- Fin modal verificaTion solde -->

<!-- Modal verification solde 2 -->
<?php 
if($_SESSION['solde_vue']=='soldeR'){
    include('../B_config/data_send.php');
    $trans2=$solV->fetch();
    echo "<script>
    window.onload=function(){
        document.getElementById('solx').click();
    }
</script>";
$_SESSION['solde_vue']='';
}?>
    <a data-toggle="modal" data-target="#soldex" id='solx' type="hidden"></a>
    <div class="modal fade " id="soldex" tabindex="-1"  role="dialog" data-show="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success" style="background: #0f222b!important;">
                <h5 class="modal-title  text-success text-center" id="retrait"><?php echo _("SOLDE DU COMPTE CLIENT");?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group">
                                        <label for="compte"><?php echo _("Nom du Compte");?></label>
                                        <input type="text" value="<?php echo $trans2['nom'].'&nbsp;'.$trans2['prenom'];?>" id="" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="compte"><?php echo _("N* Compte");?></label>
                                        <input type="text" value="<?php echo $trans2['matricule']; ?>" id="" class="form-control" disabled>
                                        <input type="text" name="compteR" value="<?php echo $trans2['matricule']; ?>" id="" class="form-control" hidden>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><?php echo _("Solde");?></span>
                                        </div>
                                        <input type="text" value="<?php echo $trans2['solde']; ?>" id="" class="form-control" disabled>
                                        <input type="text" name="soldeV" value="<?php echo $trans2['solde']; ?>" id="" class="form-control" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="../B_clients/<?php echo $trans2['photo'] ?>" alt="client" sizes="" srcset="" class="card-img-top">
                                <small class="text-muted"><?php echo _("Cette image est une propriete prive de Nuru Banque");?> ©2022</small>
                            </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><?php echo _("Confirmer");?></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><?php echo _("Annuler");?></button>
                
                    </div>
      
            </div>
        </div>
    </div>
</form>
<!-- Fin Modal verification solde2 -->
  <!-- Modal modifier le compte client -->
  <form action="../B_users/modifier_compteCli.php" method="post">
  <div class="modal fade" id="modalmodif" tabindex="-1" aria-labelledby="modalmodif" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title  text-success text-center" id="retrait"><?php echo _("MODIFICATION DU COMPTE CLIENT");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="#" method="post">
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("Nom du Compte");?></label>
                                <input type="text" name="ncompte" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="compte"><?php echo _("N* Compte");?></label>
                                <input type="text" name="compte" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="submit" class="btn btn-primary" ><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><?php echo _("Fermer");?></button>
            
                </div>
          </form>
        </div>
      </div>
    </div>
  </form>
  <!-- Fin de modal modifier le compte client -->
  <!-- Rapport CLients -->

  <div class="modal fade" id="rapcli" tabindex="-1" aria-labelledby="rapcli" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title  text-success text-center" id="retrait"><?php echo _("RAPPORTS DU COMPTE CLIENT");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="../B_users/rapports.php" method="post">
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("Nom du Compte");?></label>
                                <input type="text" name="ncompte" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="compte"><?php echo _("N* Compte");?></label>
                                <input type="text" name="compte" id="" class="form-control">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon1">
                                        Durant les 
                                    </span>
                                </div>
                                <input type="numero" name="jours" id="" value="30" min="0" class="form-control">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        dernier(s) jour(s)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="submit" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" ><?php echo _("Fermer");?></button>
            
                </div>
          </form>
        </div>
      </div>
    </div>
  <!-- Fin Rapports Clients -->