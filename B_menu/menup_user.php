<?php if($_SESSION['type_compte']=='caissier'){
    include('menup.php');
}else{?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom " style="background: #0f222b!important; color: rgb(39, 148, 29);line-height: 24px;
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
                <a class="nav-link green" href="../" role="tab" aria-selected="true"><span class="icon-home "></span><?php echo _(" Acceuil");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="#" data-toggle="modal" data-target="#transfert"><span class="bi bi-currency-exchange"></span><?php echo _("Virement");?></a>
            </li>
            <li class="navbar-item mr-3">
                <a class="nav-link green" href="../B_users/message.php" role="tab" aria-selected="true"><span class="bi-chat-text"></span><?php echo _("Message");?></a>
            </li>
            <li class="navbar-item mr-3">
                <div class="dropdown">
                    <a class="nav-link green" href="#" id="drop" data-toggle="dropdown">
                        <span class="bi-person-plus"></span><?php echo _("Partenaires");?>
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
    <div class="modal fade" id="transfert" tabindex="-1" aria-labelledby="transfert" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success " style="background: #0f222b!important;">
              <h5 class="modal-title text-success" id="retrait"><?php echo _("Virement d'argent");?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="compte"><?php echo _("Nom du Compte Beneficiaire");?></label>
                        <input type="text" name="ncompte" id="ncompte" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="compte"><?php echo _("N* Compte du Compte Beneficiaire");?></label>
                        <input type="text" name="compte" id="compte" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text table-card text-white" id="basic-addon1" ><?php echo _("Montant a envoyer");?></span>
                          </div>
                        <input type="number" name="montant" id="montant" class="form-control" min="0" required>
                        <div class="input-group-append ">
                            <select name="dollars" id="basic-addon1" class="form-control table-card text-white">
                                <option value="USD">USD</option>
                                <option value="CDF">CDF</option>
                            </select>
                          </div>
                    </div>
                
            </div>
            <div class="modal-footer border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirm_pass" onclick="confirm_pass()"><?php echo _("Envoyer");?></button>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo _("Annuler");?></button>
              
            </div>
          </div>
        </div>
    </div>
    <!-- Confirm passe envant d envoyer -->
    <form method="post" action="../B_config/transfert.php">
     <div class="modal fade" id="confirm_pass" tabindex="-1" aria-labelledby="confirm_pass" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content adC-css table-card text-white">
            <div class="modal-header border-success" style="background: #0f222b!important;">
              <h5 class="modal-title text-success" id="retrait"><?php echo _("Virement d'argent| Confirmation");?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p>
                        <?php echo _("Tranfert d'argent sur le compte de");?> <span id="nom"></span> , <?php echo _("numero");?> <span id="numero"></span>
                        <?php echo _("un montant de");?> <span id="montant2"></span>&nbsp;<span id="dollars2"></span>. <?php echo _("Confirmez par votre mot de passe");?>
                    </p>
                    <input type="text" name="compte2" id="comptex" class="form-control" hidden>
                    <input type="text" name="montant3" id="montant3" class="form-control" hidden>
                    <input type="password" name="psswd" id="psswd" class="form-control" required >
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" ><?php echo _("Confimez l'envoie");?></button>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal" onclick="denied_pass()"><?php echo _("Annuler");?></button>
              
            </div>
          </div>
        </div>
    </div>
</form>
<script>
    function reset(){
        document.getElementById('numero').innerHTML='';
        document.getElementById('nom').innerHTML='';
        document.getElementById('montant2').innerHTML='';
        document.getElementById('dollars2').innerHTML='';
    }
    reset();
    function confirm_pass(){
        reset();
        document.getElementById('transfert').style.display="none";
        var ncompte = document.getElementById('ncompte').value;
        document.getElementById('nom').innerHTML+=ncompte;
        var ncompte = document.getElementById('compte').value;
        var x=document.getElementById('comptex').value+=ncompte;
        alert(x);
        document.getElementById('numero').innerHTML+=ncompte;
        var ncompte = document.getElementById('montant').value;
        ncompte=ncompte.replace('-','');
        document.getElementById('montant2').innerHTML+=ncompte;
        document.getElementById('montant3').value+=ncompte;
    }
    function denied_pass(){
       document.getElementById('transfert').style.display='block';
    }
</script>

<style>
    html, body {
    overflow-x: hidden;
}
.green{
    color: #28a745 !important;
}
</style>
<?php if($_SESSION['error']=='solde'){
    echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
        <strong>Erreur!</strong>&nbsp;';
        echo _("Nous n\'avions pas pu satisfaire a votre demande!");
        echo '<br>';
        echo _("Solde Insufissante!");
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
        $_SESSION['error']='';
}
if($_SESSION['error']=='psswd'){
    echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
        <strong>Erreur!</strong>&nbsp;';
        echo _("Nous n\'avions pas pu satisfaire a votre demande!");
        echo '<br>';
        echo _("Password Incorrect!");
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>';
        $_SESSION['error']='';
}
if(($_SESSION['error'])=='success') {
    echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-success" role="alert">
    <strong>Success!</strong>&nbsp;';
    echo _("Traitement execute avec success");
    echo '<br>';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>';
$_SESSION['error']='';
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
<?php }?>