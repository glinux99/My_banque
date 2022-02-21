<?php session_start();
include ('../localisation.php');
if($_SESSION['type_compte']=='admin'){?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../B_users/header.php');?>
    <title>Bienvenu dans Nuru Banque Of Congo</title>
</head>
<body>
    <!-- PHP SCRIPT -->
    <?php include ('../B_config/modify.php');
    $query=$query->fetch();
        //echo $query['adresse_mail'];
    ?>
    <!-- PHP SCRIPT -->
<div class="container-fluid">
    <div class="row flex-nowrap bg-css2">
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup_user.php');?>
            <!--Fin menu principale center-->
            <div class="col">
                <!--Profil user-->

                <!--Le style display none est a enlenver dans le prochain div , de meme que ce commentaire-->
                <div class="row justify-content-center text-white " >
                    <div class="card col-lg-8 d-flex m-auto " style="background: #1d264aa9!important;">
                        <div class="card-header text-uppercase text-center text-success adC-css">
                        <?php echo _("Creation du compte Agent");?>
                        </div>
                        <div class="">
                            <div class="" >
                                <div class="shadow-lg modif border-5 border-success p-2" style="background:  #0f222b8e!important;">
                                <form action="../B_config/ajouter_caissier.php" method="POST">
                                        <input type="text" name="code_auth" id="" value ="" hidden>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Nom");?></label>
                                                <input type="text" name="nom" id="" class="form-control" placeholder="votre nom" value="" >
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Prenom");?></label>
                                                <input type="text" name="prenom" id="" class="form-control" placeholder="votre prenom" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Adresse e-mail");?></label>
                                                <input type="mail" name="email" id="" class="form-control" placeholder="nurubanque@gmail.com" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Matricule Client");?></label>
                                                <input type="text" name="matricule" id="" class="form-control" placeholder="matricule" disabled value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Password");?></label>
                                                <input type="text" name="psswd" id="" class="form-control" placeholder="password" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Numero Tel:");?> </label>
                                                <input type="mail" name="numero_tel" id="" class="form-control" placeholder="+243970912428" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Type de Compte");?></label>
                                                <select name="type_compte" id="" class="form-control">
                                                    <option value="">--<?php echo _("Select Categorie Agent");?>--</option>
                                                    <option value="caissier"><?php echo _("Caissier");?></option>
                                                    <option value="informaticien"><?php echo _("Informaticien");?></option>
                                                    <option value="securite"><?php echo _("Securite");?></option>
                                                    <option value="autres"><?php echo _("Autres");?></option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" >Genre</label>
                                                <select name="genre" id="" class="form-control">
                                                    <option value="">--<?php echo _("Select Genre");?>--</option>
                                                    <option value="F"><?php echo _("Feminin");?></option>
                                                    <option value="M"><?php echo _("Masculin");?></option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" >Prendre une photo </label>
                                                <input type="button" class="form-control" value="<?php echo "Capture";?>" data-toggle="modal" data-target="#photo">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="nomB" ><?php echo _("Adresse");?></label>
                                                <input type="text" name="quart_av" id="" class="form-control" placeholder="Goma, 22 Box Dego" value="">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB"  ><?php echo _("Ville");?></label>
                                                <input type="text" name="ville" id="" class="form-control" placeholder="Goma" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Province");?></label>
                                                <input type="text" name="province" id="" class="form-control" placeholder="Nord-Kivu" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Pays");?></label>
                                                <input type="mail" name="pays" id="" class="form-control" placeholder="RDC" disabled value="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="apropos"><?php echo _("A propos du Caissier")?>:</label>
                                                <textarea name="apropos" placeholder="A propos de moi" class="form-control"> </textarea>
                                            </div>
                                        </div>
                                        <input type="image" src="" alt="" id="sendimage" class="d-none" name="photo6"> 
                                        <input type="hidden" name="image" class="image_cli">
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-dark  mt-2 mb-lg-2 col-lg-3"><?php echo _("Ajouter Agent");?></button>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex m-auto ">
                         <div class="card-img d-none d-lg-block">
                            <img src="../B_img/default_user.png" alt="" id="img" class="w-100 img-thumbnail" width=320 height=240>
                            <canvas id="canvas" width=350 height=340 style="display: none"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Div prendre photo -->
                <div class="modal fade " tableindex="-1" aria-hidden="true" aria-labelledby="photo" id="photo">
                                <div class="modal-dialog ">
                                    <div class="modal-content text-primary" style="background: #0f222b;">
                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                            <?php echo _("Prendre une photo");?>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="color: rgb(250, 58, 58);">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <video id="video_capture" autoplay class="w-100"></video>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="capture"><?php echo _("Capturer");?></button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirmer" style="display: none"><?php echo _("Confirmer");?></button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin div prendre photo -->
                <!--Fin profil user-->
                <!--Mes commandes-->
              
               
                <!--Fin Mes produits-->
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer_user.php');?>
</body>
</body>
<script src="../vendor/chart.js/Chart.js"></script>
<script>
  const video_capture = document.getElementById('video_capture');
  const canvas = document.getElementById('canvas');
  const sendimage = document.getElementById('sendimage');
  const confir = document.getElementById('confirmer');
  const img_2D = canvas.getContext('2d');
  const button = document.getElementById('capture');


  const constraints = {
    video: true,
  };

  button.addEventListener('click', () => {
    // Draw the video frame to the canvas.
    
    var t=img_2D.drawImage(video_capture, 0, 0, canvas.width, canvas.height);
    var imgurl= canvas.toDataURL();
    document.getElementById('img').src = imgurl;
    $(".image_cli").val(imgurl);
    confir.style="display: ";
    
  });
  

  // Attach the video stream to the video element and autoplay.
  navigator.mediaDevices.getUserMedia(constraints)
    .then((stream) => {
      video_capture.srcObject = stream;
    });
</script>
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
<?php }else header('location: ../');?>