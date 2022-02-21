<?php if($_SESSION['type_compte']=='caissier'){
    include('menug.php');
}else{?>
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background: #0f222b;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-4 pt-2 text-white min-vh-100">
       
        <div class="mb-3">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi-outlet icon-2x pr-4"></i> <span class="fs-5 d-none d-sm-inline"><?php echo _("Bonjour");?></span>
            </a>
        </div>
        <div class="">
            <ul class="nav nav-pills flex-column mb-sm-auto border-top mb-0 align-items-center align-items-sm-start">
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="#" class="nav-link align-middle px-0 mhl  h-50" data-toggle="collapse" data-target="#coll">
                        <i class="bi-person-circle"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Profil");?></span>
                    </a>
                    <div class="collapse" id="coll">
                        <ul class="list-unstyled ml-4">
                            <li class="mb-2">
                                <a href="../B_users/modifier_compte.php">
                                    <i class="bi-pencil-square"></i><?php echo _("Modifier");?>
                                </a>
                            </li>
                            <li class="">
                                <a href="../B_users/profil_user.php" >
                                    <i class="bi-person-check-fill"></i><?php echo _("Afficher profil");?>
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
                    <a href="transaction.php" class="nav-link align-middle px-0 mhl  h-50 ">
                        <i class="bi-bank2"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Transaction");?></span>
                    </a>
                </li>
                <li class="nav-item border-bottom w-100 pt-2 pb-2">
                    <a href="rapports.php" class="nav-link align-middle px-0 mhl  h-50" data-toggle="modal" data-target="#rapport">
                        <i class="bi-stack"></i> <span class="ms-1 d-none d-sm-inline"><?php echo _("Rapports");?></span>
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
                <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="B_img/2.jpg" alt="profil" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Daniel Kikimba</span>
                    </a>
                </div> -->
                
            </ul>
        </div>
    </div>
    
</div>
<!-- Modal pour verifiction solde-->
<div class="modal fade" id="solde2" tabindex="-1" aria-labelledby="solde" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title text-success" id="retrait"><?php echo _("VERIFICATION DU SOLDE");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="#" method="post">
                <div class="modal-body">
                    <div class="list-group adC-css">
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("N* Compte");?></label>
                                <input type="text" name="compte" id="" class="form-control" value="<?php echo $_SESSION['matricule'];?>">
                            </div>
                        </div>
                        <div class="list-group-item adC-css">
                        <?php echo _("Votre Solde est de");?> <span><?php include('../B_config/solde.php');echo $solde_C['solde'];?>&nbsp;USD</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary"  data-dismiss="modal" >Back</button>
            
                </div>
          </form>
        </div>
      </div>
</div>
<!-- Fin modal verificaTion solde -->

<!-- Modal verification solde 2 -->
<div class="modal fade" id="solde2" tabindex="-1" aria-labelledby="solde" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title text-success" id="retrait"><?php echo _("VERIFICATION DU SOLDE");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="#" method="post">
                <div class="modal-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="list-group">
                            <div class="list-group-item adC-css">
                                <div class="form-group">
                                    <label for="compte"><?php echo _("Nom du Compte");?></label>
                                    <input type="text" name="ncompte" id="" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="compte"><?php echo _("N* Compte");?></label>
                                    <input type="text" name="compte" id="" class="form-control" disabled >
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><?php echo _("Solde");?></span>
                                      </div>
                                    <input type="text" name="compte" id="" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                          <img src="B_img/2.JPG" alt="client" sizes="" srcset="" class="card-img-top">
                            <small class="text-muted"><?php echo _("Cette image est une propriete prive de Nuru Banque");?> ©2022</small>
                        </div>
                  </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary" >Back</button>
            
                </div>
          </form>
        </div>
      </div>
</div>
<!-- Fin Modal verification solde2 -->
<!-- Rapport code -->
<div class="modal fade" id="rapport" tabindex="-1" aria-labelledby="rapport" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content adC-css table-card text-white">
          <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title text-center  text-success" id="retrait"><?php echo _("IMPRESSION DU RAPPORT HEBDOMADAIRE");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
          </div>
          <form action="../B_users/rapports.php" method="post">
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("N* Compte");?></label>
                                <input type="text" name="compte" id="" class="form-control" value="<?php echo $_SESSION['matricule'];?>">
                            </div>
                        </div>
                        <div class="list-group-item adC-css">
                            <div class="form-group">
                                <label for="compte"><?php echo _("Password");?></label>
                                <input type="password" name="psswd2" id="" class="form-control" placeholder="********************">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="submit" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                     <button type="reset" class="btn btn-secondary"  data-dismiss="modal" >Back</button>
            
                </div>
          </form>
        </div>
      </div>
</div>
<!-- Fin rapport code -->
<?php }?>