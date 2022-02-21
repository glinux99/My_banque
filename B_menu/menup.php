
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom" style="background: #0f222b!important; color: #666;line-height: 24px;
font-family: 'Source Sans Pro', sans-serif;">
    <div class="navbar-brand">
    <img src="../B_img/logo1.png" class="d-block" height="40" width="60">
    </div>
    <div class="navbar-toggler" style="color:rgb(30, 255, 0);"><span class="icon-facebook m-2"></span><span class="icon-instagram m-2"></span><span class="icon-github-sign m-2"></span></div>
    <button class="navbar-toggler" data-toggle="collapse" data-target=".coll">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse coll justify-content-center">
        <ul class="nav nav-pills" role="tablist">
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="../index.php" role="tab" aria-selected="true"><span class="icon-home"></span><?php echo _(" Acceuil");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="#" data-toggle="modal" data-target="#retrait2"><span class="icon-user"></span><?php echo _("Retrait");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="../B_users/message.php" role="tab" aria-selected="true"><span class="icon-laptop"></span><?php echo _("Message");?></a>
            </li>
            <li class="navbar-item mr-3">
                <div class="dropdown">
                    <a class="nav-link green" href="#" id="drop" data-toggle="dropdown">
                        <i class="bi-people"></i><?php echo _("Partenaires");?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="drop">
                        <a class="dropdown-item" href="#">BCC</a>
                        <a class="dropdown-item" href="#">Tmb</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><?php echo _("Autres");?></a>
                    </div>
                </div>
            </li>

            <li class="navbar-item mr-3">
                <a class="nav-link green" href="#" role="tab" aria-selected="true"><span class="icon-cogs"></span><?php echo _("Info Alert");?></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Modal pour retrait -->

<form action="../B_config/data_send.php" method="post">
    <div class="modal fade" id="retrait2" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" >
        <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success" style="background: #0f222b!important;">
            <h5 class="modal-title  text-success" id="retrait"><?php echo _("RETRAIT ARGENT");?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="compte"><?php echo _("Nom du Compte");?></label>
                        <input type="text" name="ncompte" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="compte"><?php echo _("N* Compte");?></label>
                        <input type="text" name="compte" id="" class="form-control">
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo _("Envoyer");?></button>
            <button type="reset" class="btn btn-secondary" ><?php echo _("Annuler");?></button>
            
            </div>
            </form>
        </div>
        </div>
    </div>
</form>
<!-- compte -->
<?php session_start();
if(($_SESSION['ret'])=='ret') {
    if(($_SESSION['retrEror'])=='success') {
        echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-success" role="alert">
        <strong>Success!</strong>&nbsp;';
        echo _("Traitement execute avec success");
        echo '<br>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
    }
    if(($_SESSION['retrEror'])=='erreur5') {
        echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
        <strong>Erreur!</strong>&nbsp;';
        echo _("Nous n\'avions pas pu satisfaire a votre demande!");
        echo '<br>';
        echo _("Vous ne pouvez pas tout retrirer! Votre solde minimal doit etre de 5usd");
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
    }
    if(($_SESSION['retrEror'])=='soldeIns') {
        echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
        <strong>Erreur!</strong>&nbsp;';
        echo _("Nous n\'avions pas pu satisfaire a votre demande!");
        echo '<br>';
        echo _("Solde Insufissante du client!");
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
    }
    $_SESSION['retrEror']='';
}
if(($_SESSION['solde_vue'])=='solde'){
    include('../B_config/data_send.php');
    $trans2=$solV->fetch();
    echo "<script>
    window.onload=function(){
        document.getElementById('send').click();
    }
</script>";
$_SESSION['solde_vue']='';
}
if($_SESSION['depotError']){
    if($_SESSION['depotError']=='error'){
        echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
        <strong>Erreur!</strong>&nbsp;';
        echo _("Nous n\'avions pas pu satisfaire a votre demande!");
        echo '<br>';
        echo _("Verifier si ce compte existe! Cette erreur empeche de vs satisfaire");
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
    }else{
        echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible z-index-2 fade show bg-success" role="alert" >
        <strong>Success!</strong>&nbsp;';
        echo _("Traitement execute avec success");
        echo '<br>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
    }
    $_SESSION['depotError']='';
}
if(isset($_GET['modif'])){
    echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible z-index-2 fade show bg-success" role="alert" >
        <strong>Success!</strong>&nbsp;';
        echo _("Traitement execute avec success");
        echo '<br>';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
}
?>
<script src="../vendor/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
});
</script>
<a data-toggle="modal" data-target="#retraitx" id='send' type="hidden"></a>
<form action="../B_config/retrait.php" method="post">
    <div class="modal fade " id="retraitx" tabindex="-1"  role="dialog" data-show="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success" style="background: #0f222b!important;">
                <h5 class="modal-title text-center  text-success" id="retrait"><?php echo _("RETRAIT ARGENT");?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
                </button>
            </div>

                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-group">
                                <div class="list-group-item adC-css">
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
                                <div class="list-group-item adC-css" >
                                    <label for="sortie"><?php echo _("Montant");?>: </label>
                                    <div class="input-group">
                                        <input type="tel" id="" class="form-control" name="retrait">
                                        <select name="" id="">
                                            <option value="">--<?php echo _("Select Devise");?>--</option>
                                            <option value="">USD</option>
                                            <option value="">CDF</option>
                                        </select>
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
                        <button type="submit" class="btn btn-primary"><?php echo _("Confirmer");?></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><?php echo _("Annuler");?></button>
                
                    </div>
            </form>
            </div>
        </div>
    </div>
</form>
<!-- fin modal pour retrait -->
<style>
    html, body {
    overflow-x: hidden;
}
</style>