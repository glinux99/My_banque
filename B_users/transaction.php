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
    <title><?php echo ("Effectuez vos transaction");?></title>
</head>
<body>
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

                <!--Le style display none est a enlenver dans le prochain div , de meme que ce commentaire-->
                <div class="row justify-content-center" >
                    <div class="card w-100 adC-css text-white" >
                        <div class="card-header text-uppercase text-center adC-css text-success ">
                        <?php echo _("Historique de transaction");?> 
                        <form action="../PDF/transaction.php" method="post">
                        <input type="text" name="jours" id="" value="<?php echo $_POST['jours'];?>" hidden>
                        <button type="submit" class="btn btn-success">
                            <?php echo _("Generer le rapports");?> <span ></span>
                        </button>
                    </form>
                        </div>
                        <div class="card-body">
                        <div class="card-text ">
                            <div class="row justify-content-center">
                            <div>
                            <form action="transaction.php" method="post">
                                <div class="form-group">
                                <button class="btn btn-success">Transaction durant</button>
                                <input type="number" name="jours" min='0' id="" value="<?php if(isset($_POST['jours'])) echo $_POST['jours'] ; else echo 1;?>" class="from-control " style="width: 90px">Jours
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                        <?php include('../B_config/transaction_caiss.php');?>
                            <div class="container table-responsive table--no--card m-b-40">
                            <table class="table table-striped table-hover table-bordered table-card text-primary">
                                <thead class="text-success">
                                    <tr>
                                        <td ><?php echo _("Date");?></td>
                                        <td><?php echo _("Transaction");?></td>
                                        <td><?php echo _("Matricule Client");?></td>
                                        <td><?php echo _("solde");?></td>
                                        <td><?php echo _("Retrait/Depot");?></td>
                                        <td><?php echo _("montant");?></td>
                                    </tr>
                                </thead>
                                <tbody style="white-space: nowrap;">
                                <?php while($trans=$tra->fetch()){
                                    echo '<tr>';
                                    echo '<td>'.$trans['date_trans'].'</td>';
                                    echo '<td>'.$trans['trans_mat'].'</td>';
                                    echo '<td>'.$trans['client_mat'].'</td>';
                                    echo '<td>'.$trans['solde'].'&nbsp;USD</td>';
                                    echo '<td>'.$trans['motif'].'</td>';
                                    echo '<td>'.$trans['montant_ret'].'&nbsp;USD</td>';
                                }?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <!--Details users -->
                   
                    <!--Fin detail users-->
                </div>
                <!--Fin profil user-->
                <!--Mes commandes-->
              
               
                <!--Fin Mes produits-->
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer.php');?>
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