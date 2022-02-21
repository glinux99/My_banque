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
    <title>Bienvenu dans Nuru Banque Of Congo</title>
</head>
<body >
<div class="container-fluid">
    <div class="row flex-nowrap bg-css">
         <!--menu gauche flotable-->
       <?php include ('../B_menu/menug_user.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup_user.php');?>
            <!--Fin menu principale center-->
            <div class="col">
                <!--Profil user-->
                <?php include('../B_config/rapport.php');

         //echo $query['adresse_mail'];
     ?>
                <!--Le style display none est a enlenver dans le prochain div , de meme que ce commentaire-->
                <div class="row justify-content-center" >
                    <div class="card col-lg-12 adC-css text-white">
                        <div class="card-header text-center text-uppercase adC-css text-success">
                        <?php 
                            if($titre='1') {
                                echo _("Rapports Journaliers");
                                echo "<form method='POST' action='../PDF/pdf.php'>
                                        <input type='text' name='compte' value='".$_POST['compte']."' hidden>
                                        <input type='text' name='jours' value='".$_POST['jours']."' hidden>
                                        <input type='text' name='psswd2' value='".$_POST['psswd2']."' hidden>
                                        <button class='btn btn-success' type='submit'>Creer un rapport client</button>
                                      </form>";
                                      if($_GET['rapport']){
                                          echo '<a href="../B_rapport/'.$_GET['rapport'].'.pdf" class="nav-link">telecharger le rapport client</a>';
                                      }
                            }
                            else{
                           echo _("Rapport Journalier du client"); 
                           echo '<button type="submit" class="btn btn-success">';
                           echo _("Envoyer le rapport au client");
                           echo '<span class="icon-plus"></span></button>';}
                        ?>
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered table-hover table-striped text-center table-card text-primary">
                            <thead class="text-success" style="white-space: nowrap; ">
                                <tr>
                                    <td>N*</td>
                                    <td>
                                    <?php echo _("Date");?>
                                    </td>
                                    <td><?php echo _("Transaction ID");?></td>
                                    <td><?php echo _("Details");?></td>
                                    <td><?php echo _("Solde ($)");?></td>
                                    <td><?php echo _("Montant ($)");?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count=0;
                                    while($rap=$query->fetch()){
                                        $count+=1;
                                        echo "<tr>";
                                            echo "<td class='text-success' >".$count."</td>";
                                            echo "<td>".$rap['date_trans']."</td>";
                                            echo "<td>".$rap['trans_mat']."</td>";
                                            echo "<td>".$rap['motif']."</td>";
                                            echo "<td>".$rap['solde']."</td>";
                                            echo "<td>".$rap['montant_ret']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
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
<?php include('../B_menu/footer_user.php');?>
</body>
<script src="../vendor/chart.js/Chart.js"></script>
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