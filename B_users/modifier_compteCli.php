<?php session_start();
include ('../localisation.php');
 if($_SESSION['matricule']!=''){?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('header.php');?>
    <title><?php echo _("modification de votre compte");?></title>
</head>
<body>
    <!-- PHP SCRIPT -->
    <?php include('../B_config/modify.php');
    $query=$query->fetch();
    
        //echo $query['adresse_mail'];
    ?>
    <!-- PHP SCRIPT -->
<div class="container-fluid">
    <div class="row flex-nowrap bg-css2">
         <!--menu gauche flotable-->
       <?php include ('../B_menu/menug_user.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup_user.php');?>
            <!--Fin menu principale center-->
            <div class="col">
                <!--Profil user-->

                <!--Le style display none est a enlenver dans le prochain div , de meme que ce commentaire-->
                <div class="row justify-content-center text-white" >
                    <div class="card col-lg-8 d-flex m-auto" style="background: #1d264aa9!important;">
                        <div class="card-header text-uppercase text-center text-success adC-css">
                        <?php echo _("Modification du compte Client");?>
                        </div>
                        <div class="">
                            <div class="" >
                                <div class="shadow-lg modif border-5 border-success p-2" style="background:  #0f222b8e!important;">
                                <form action="../B_config/modify.php" method="POST" >
                                        <input type="text" name="code_auth" id="" value ="<?php echo $query['code_auth'];?>" hidden>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Nom");?></label>
                                                <input type="text" name="nom" id="" class="form-control" placeholder="votre nom" value="<?php echo $query['nom'];?>" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Prenom");?></label>
                                                <input type="text" name="prenom" id="" class="form-control" placeholder="votre prenom" value="<?php echo $query['prenom'];?>" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Adresse e-mail");?></label>
                                                <input type="mail" name="email" id="" class="form-control" placeholder="nurubanque@gmail.com" value="<?php echo $query['adresse_mail'];?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Matricule Client");?></label>
                                                <input type="text" name="matricule" id="" class="form-control" placeholder="matricule" disabled value="<?php echo $query['matricule'];?>" >
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Password");?></label>
                                                <input type="text" name="psswd" id="" class="form-control" placeholder="password" value="<?php echo $query['password_customers'];?>" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Numero Tel");?>: </label>
                                                <input type="mail" name="numero_tel" id="" class="form-control" placeholder="+243970912428" value="<?php echo $query['numero_tel'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Type de Compte");?></label>
                                                <select name="type_compte" id="" class="form-control">
                                                    <option value="<?php echo $query['type_compte'];?>"><?php if($query['type_compte']=='') echo _("---Select type Compte--"); else echo $query['type_compte'];?></option>
                                                    <option value="Particulier"><?php echo _("Particulier");?></option>
                                                    <option value="Actionnaire"><?php echo _("Actionnaire/Investisseur");?></option>
                                                    <option value="Emploi"><?php echo _("Candidat a l emploi");?></option>
                                                    <option value="PME"><?php echo _("PME");?></option>
                                                    <option value="Entreprise"><?php echo _("Entreprise");?></option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Genre");?></label>
                                                <select name="genre" id="" class="form-control">
                                                    <option value="<?php echo $query['genre'];?>"><?php if($query['genre']=='M'){ echo 'Masculin';} else echo 'Feminin';?></option>
                                                    <?php if($query['genre']=='M'){
                                                         echo '<option value="F">';
                                                         echo _("Feminin");
                                                         echo '</option>';
                                                        } else echo '<option value="M">';
                                                        echo _("Masculin");
                                                        echo '</option>';?>
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
                                                <input type="text" name="quart_av" id="" class="form-control" placeholder="Goma, 22 Box Dego" value="<?php echo $query['quart_av'];?>">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="nomB"  ><?php echo _("Ville");?></label>
                                                <input type="text" name="ville" id="" class="form-control" placeholder="Goma" value="<?php echo $query['ville'];?>">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Province");?></label>
                                                <input type="text" name="province" id="" class="form-control" placeholder="Nord-Kivu" value="<?php echo $query['province'];?>">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nomB" ><?php echo _("Pays");?></label>
                                                <select name="pays" class="form-control">
                                                    <option value="RDC" selected="selected">RDC </option>
                                                    
                                                    <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                    <option value="Albanie">Albanie </option>
                                                    <option value="Algerie">Algerie </option>
                                                    <option value="Allemagne">Allemagne </option>
                                                    <option value="Andorre">Andorre </option>
                                                    <option value="Angola">Angola </option>
                                                    <option value="Anguilla">Anguilla </option>
                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                    <option value="Argentine">Argentine </option>
                                                    <option value="Armenie">Armenie </option>
                                                    <option value="Australie">Australie </option>
                                                    <option value="Autriche">Autriche </option>
                                                    <option value="Azerbaidjan">Azerbaidjan </option>
                                                    
                                                    <option value="Bahamas">Bahamas </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbade">Barbade </option>
                                                    <option value="Bahrein">Bahrein </option>
                                                    <option value="Belgique">Belgique </option>
                                                    <option value="Belize">Belize </option>
                                                    <option value="Benin">Benin </option>
                                                    <option value="Bermudes">Bermudes </option>
                                                    <option value="Bielorussie">Bielorussie </option>
                                                    <option value="Bolivie">Bolivie </option>
                                                    <option value="Botswana">Botswana </option>
                                                    <option value="Bhoutan">Bhoutan </option>
                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                    <option value="Bresil">Bresil </option>
                                                    <option value="Brunei">Brunei </option>
                                                    <option value="Bulgarie">Bulgarie </option>
                                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                                    <option value="Burundi">Burundi </option>
                                                    
                                                    <option value="Caiman">Caiman </option>
                                                    <option value="Cambodge">Cambodge </option>
                                                    <option value="Cameroun">Cameroun </option>
                                                    <option value="Canada">Canada </option>
                                                    <option value="Canaries">Canaries </option>
                                                    <option value="Cap_vert">Cap_Vert </option>
                                                    <option value="Chili">Chili </option>
                                                    <option value="Chine">Chine </option>
                                                    <option value="Chypre">Chypre </option>
                                                    <option value="Colombie">Colombie </option>
                                                    <option value="Comores">Colombie </option>
                                                    <option value="Congo">Congo </option>
                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                    <option value="Cook">Cook </option>
                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                    <option value="Croatie">Croatie </option>
                                                    <option value="Cuba">Cuba </option>
                                                    
                                                    <option value="Danemark">Danemark </option>
                                                    <option value="Djibouti">Djibouti </option>
                                                    <option value="Dominique">Dominique </option>
                                                    
                                                    <option value="Egypte">Egypte </option>
                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                    <option value="Equateur">Equateur </option>
                                                    <option value="Erythree">Erythree </option>
                                                    <option value="Espagne">Espagne </option>
                                                    <option value="Estonie">Estonie </option>
                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                    <option value="Ethiopie">Ethiopie </option>
                                                    
                                                    <option value="Falkland">Falkland </option>
                                                    <option value="Feroe">Feroe </option>
                                                    <option value="Fidji">Fidji </option>
                                                    <option value="Finlande">Finlande </option>
                                                    <option value="France">France </option>
                                                    
                                                    <option value="Gabon">Gabon </option>
                                                    <option value="Gambie">Gambie </option>
                                                    <option value="Georgie">Georgie </option>
                                                    <option value="Ghana">Ghana </option>
                                                    <option value="Gibraltar">Gibraltar </option>
                                                    <option value="Grece">Grece </option>
                                                    <option value="Grenade">Grenade </option>
                                                    <option value="Groenland">Groenland </option>
                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                    <option value="Guam">Guam </option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernesey">Guernesey </option>
                                                    <option value="Guinee">Guinee </option>
                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                    <option value="Guyana">Guyana </option>
                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>
                                                    
                                                    <option value="Haiti">Haiti </option>
                                                    <option value="Hawaii">Hawaii </option>
                                                    <option value="Honduras">Honduras </option>
                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                    <option value="Hongrie">Hongrie </option>
                                                    
                                                    <option value="Inde">Inde </option>
                                                    <option value="Indonesie">Indonesie </option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq">Iraq </option>
                                                    <option value="Irlande">Irlande </option>
                                                    <option value="Islande">Islande </option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italie">italie </option>
                                                    
                                                    <option value="Jamaique">Jamaique </option>
                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                    <option value="Japon">Japon </option>
                                                    <option value="Jersey">Jersey </option>
                                                    <option value="Jordanie">Jordanie </option>
                                                    
                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya </option>
                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                    <option value="Kiribati">Kiribati </option>
                                                    <option value="Koweit">Koweit </option>
                                                    
                                                    <option value="Laos">Laos </option>
                                                    <option value="Lesotho">Lesotho </option>
                                                    <option value="Lettonie">Lettonie </option>
                                                    <option value="Liban">Liban </option>
                                                    <option value="Liberia">Liberia </option>
                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                    <option value="Lituanie">Lituanie </option>
                                                    <option value="Luxembourg">Luxembourg </option>
                                                    <option value="Lybie">Lybie </option>
                                                    
                                                    <option value="Macao">Macao </option>
                                                    <option value="Macedoine">Macedoine </option>
                                                    <option value="Madagascar">Madagascar </option>
                                                    <option value="Madère">Madère </option>
                                                    <option value="Malaisie">Malaisie </option>
                                                    <option value="Malawi">Malawi </option>
                                                    <option value="Maldives">Maldives </option>
                                                    <option value="Mali">Mali </option>
                                                    <option value="Malte">Malte </option>
                                                    <option value="Man">Man </option>
                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                    <option value="Maroc">Maroc </option>
                                                    <option value="Marshall">Marshall </option>
                                                    <option value="Martinique">Martinique </option>
                                                    <option value="Maurice">Maurice </option>
                                                    <option value="Mauritanie">Mauritanie </option>
                                                    <option value="Mayotte">Mayotte </option>
                                                    <option value="Mexique">Mexique </option>
                                                    <option value="Micronesie">Micronesie </option>
                                                    <option value="Midway">Midway </option>
                                                    <option value="Moldavie">Moldavie </option>
                                                    <option value="Monaco">Monaco </option>
                                                    <option value="Mongolie">Mongolie </option>
                                                    <option value="Montserrat">Montserrat </option>
                                                    <option value="Mozambique">Mozambique </option>
                                                    
                                                    <option value="Namibie">Namibie </option>
                                                    <option value="Nauru">Nauru </option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Nicaragua">Nicaragua </option>
                                                    <option value="Niger">Niger </option>
                                                    <option value="Nigeria">Nigeria </option>
                                                    <option value="Niue">Niue </option>
                                                    <option value="Norfolk">Norfolk </option>
                                                    <option value="Norvege">Norvege </option>
                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                                                    
                                                    <option value="Oman">Oman </option>
                                                    <option value="Ouganda">Ouganda </option>
                                                    <option value="Ouzbekistan">Ouzbekistan </option>
                                                    
                                                    <option value="Pakistan">Pakistan </option>
                                                    <option value="Palau">Palau </option>
                                                    <option value="Palestine">Palestine </option>
                                                    <option value="Panama">Panama </option>
                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                                    <option value="Paraguay">Paraguay </option>
                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                    <option value="Perou">Perou </option>
                                                    <option value="Philippines">Philippines </option>
                                                    <option value="Pologne">Pologne </option>
                                                    <option value="Polynesie">Polynesie </option>
                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                    <option value="Portugal">Portugal </option>
                                                    
                                                    <option value="Qatar">Qatar </option>
                                                    
                                                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                    <option value="Reunion">Reunion </option>
                                                    <option value="Roumanie">Roumanie </option>
                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                    <option value="Russie">Russie </option>
                                                    <option value="Rwanda">Rwanda </option>
                                                    
                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                    <option value="Salomon">Salomon </option>
                                                    <option value="Salvador">Salvador </option>
                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                    <option value="Senegal">Senegal </option>
                                                    <option value="Seychelles">Seychelles </option>
                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                    <option value="Singapour">Singapour </option>
                                                    <option value="Slovaquie">Slovaquie </option>
                                                    <option value="Slovenie">Slovenie</option>
                                                    <option value="Somalie">Somalie </option>
                                                    <option value="Soudan">Soudan </option>
                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                    <option value="Suede">Suede </option>
                                                    <option value="Suisse">Suisse </option>
                                                    <option value="Surinam">Surinam </option>
                                                    <option value="Swaziland">Swaziland </option>
                                                    <option value="Syrie">Syrie </option>
                                                    
                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                    <option value="Taiwan">Taiwan </option>
                                                    <option value="Tonga">Tonga </option>
                                                    <option value="Tanzanie">Tanzanie </option>
                                                    <option value="Tchad">Tchad </option>
                                                    <option value="Thailande">Thailande </option>
                                                    <option value="Tibet">Tibet </option>
                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                    <option value="Togo">Togo </option>
                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                    <option value="Tunisie">Tunisie </option>
                                                    <option value="Turkmenistan">Turmenistan </option>
                                                    <option value="Turquie">Turquie </option>
                                                    
                                                    <option value="Ukraine">Ukraine </option>
                                                    <option value="Uruguay">Uruguay </option>
                                                    
                                                    <option value="Vanuatu">Vanuatu </option>
                                                    <option value="Vatican">Vatican </option>
                                                    <option value="Venezuela">Venezuela </option>
                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                    <option value="Vietnam">Vietnam </option>
                                                    
                                                    <option value="Wake">Wake </option>
                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>
                                                    
                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Yougoslavie">Yougoslavie </option>
                                                    
                                                    <option value="Zambie">Zambie </option>
                                                    <option value="Zimbabwe">Zimbabwe </option>
                                                    
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="apropos"><?php echo _("A propos du client/ Commentaire");?>:</label>
                                                <textarea name="apropos" placeholder="A propos du client" class="form-control"> <?php echo $query['apropos'];?> </textarea>
                                            </div>
                                        </div>
                                        <input type="image" src="" alt="" id="sendimage" class="d-none" name="photo6"> 
                                        <input type="hidden" name="image" class="image_cli">
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-dark  mt-2 mb-lg-2 col-lg-3"><?php echo _("Mettre a jour");?></button>
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
                <!--Fin profil user-->
                <!--Mes commandes-->
                <!--Fin Mes produits-->
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer.php');?>
 <!-- Div prendre photo -->
 <div class="modal fade" tableindex="-1" aria-hidden="true" aria-labelledby="photo" id="photo">
    <div class="modal-dialog">
        <div class="modal-content">
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
<div>
<!-- fin div prendre photo -->

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
<?php }else header('location: ../index.php')?>