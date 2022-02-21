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
    <title><?php echo _("Messages");?></title>
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
                <div class="row">
                    <div class="col-lg-8 p-0">
                    <div class="card"  >
                       <form action="../B_config/message.php" method="post">
                            <div class="card-header table-card">
                                <?php include('../B_config/message2.php');?>
                                <!-- <img src="B_img/2.JPG" alt="profil" width="30" height="30" class="rounded-circle">  -->
                                <?php if(isset($_GET['nom'])){
                                        echo "<img src='../B_clients/".$pic2['photo']."' alt='profil' width='40' height='40' class='rounded-circle'>";
                                        echo "<span class='text-success'>". $_GET['nom'].'&nbsp;'.$_GET['prenom']."</span>";
                                        
                                    } 
                                    else if(isset($_GET['group'])){
                                        echo "<img src='../B_img/logo1.png' alt='profil' width='40' height='40' class='rounded-circle'>";
                                        echo "<span class='text-success'>".'Nuru Banque'.'</span>' ;
                                        echo "<input type='text' name='dest_m' value='group' hidden>";
                                        }
                                        else{
                                            echo "<img src='../B_img/logo1.png' alt='profil' width='40' height='40' class='rounded-circle'>";
                                           echo "<span class='text-success'>".'Nuru Banque'.'</span>' ;
                                        echo "<input type='text' name='dest_m' value='group' hidden>";
                                        }
                                        
                                        ?>
                                </div>
                                <div class="card-body"  style="overflow-y: scroll;  height: 21rem; background: url('../B_img/fond-sms.jpg');min-height: 20.8rem;">
                                     <?php
                                        if(isset($_GET['nom'])){
                                        $clie = $clip->fetch();
                                        $long=strlen($clie['messages']);
                                        if($long==0){
                                            echo '<div class=" bg-dark rounded ml-4 text-break pl-2 pr-2 pt-2 pb-2 text-success" >';
                                            echo _('Les messages sont chiffres par un algorithme propre a nuru_banque. Aucun autre tiers 
                                            ne peut les lire. Commencer une discussion avec les autres sans les importunes svp.
                                            En cas de probleme, contactez-nous 24/24!');
                                            echo '</div>';
                                        }
                                            while($clie = $cli->fetch()){
                                                if($clie['source_id']==$_SESSION['matricule']){
                                    ?>
                                        <div class="row justify-content-start  text-white">
                                                <div class="" >
                                                    <!-- <img src="B_img/2.JPG" alt="profil" width="40" height="40" class="rounded-circle"> -->
                                                    <?php echo "<img src='../B_clients/".$clie['photo']."' alt='profil' width='40' height='40' class='rounded-circle'>";?>
                                                </div>
                                                <div class=" table-card rounded ml-4 text-break pl-2 pr-2 pt-2 pb-2 " >
                                                    <?php echo $clie['messages'];?>
                                                <br><small class="text-muted float-right pt-2"><i><?php echo $clie['date_mess'];?></i></small>
                                                </div>
                                        </div><?php } else{?>
                                        <div class="row pt-1 text-white justify-content-end">
                                                <div class=" table-card rounded ml-4 text-break pl-2 pr-2 pt-2 pb-2 " >
                                                    <?php echo $clie['messages'];?>
                                                    <br><small class="text-muted float-right pt-2"><i><?php echo $clie['date_mess'];?></i></small>
                                                </div>
                                                <div class="" >
                                                    <!-- <img src="B_img/2.JPG" alt="profil" width="40" height="40" class="rounded-circle"> -->
                                                    <?php echo "<img src='../B_clients/".$clie['photo']."' alt='profil' width='40' height='40' class='rounded-circle'>";?>
                                                </div>
                                                
                                        </div><?php }}
                                        }else{
                                        include("../B_config/message_group.php");
                                        include("../B_config/message2.php");
                                        $group2= $group->fetch();
                                        $long=strlen($group2['messages']);
                                        if($long==0){
                                            echo '<div class=" table-card rounded ml-4 text-break pl-2 pr-2 pt-2 pb-2 text-success" >';
                                            echo _('Les messages sont chiffres par un algorithme propre a nuru_banque. Aucun autre tiers 
                                            ne peut les lire. Commencer une discussion avec les autres sans les importunes svp.
                                            En cas de probleme, contactez-nous 24/24!');
                                            echo '</div>';
                                        }
                                        else{
                                            
                                            while($grp2 = $grp->fetch()){
                                                echo '<div class="row pt-1 justify-content-start  ">';
                                                echo '<div class=" " >';
                                                echo "<img src='../B_clients/".$grp2['photo']."' alt='profil' width='40' height='40' class='rounded-circle'>";
                                                echo '</div>';
                                                echo '<div class=" table-card text-white rounded ml-4 text-break pl-2 pr-2 pt-2 pb-2 " >
                                                <div class="border-bottom border-dark">'.$grp2['nom'].'&nbsp;'.$grp2['prenom'].'</div>
                                                '.$grp2['messages'];
                                                echo '<br><small class="text-muted float-right pt-2"><i>'.$grp2['date_mess'].'</i></small>';
                                                echo '  </div>
                                                      </div>';
                                            }    
                                       }

                                        }
                                         ?>
                                </div>
                    </div>
                    <!-- Envoyer un message -->
                    <div class="card-body bottom-0 justify-content-center pl-0 pr-0" >
                        <div class="row">
                            <div class="col-9">
                                <input type='text' name='dest_n' value='<?php echo $_GET['nom'];?>' hidden>
                                    <input type='text' name='dest_p' value='<?php echo $_GET['prenom'];?>' hidden>
                                        <textarea name="message" id="" class="form-control" ></textarea>
                            </div>
                            <div class="pl-1 col-1">
                               <button type="submit" class="btn btn-success"><?php echo _("Envoyer");?></button>
                            </div>
                        </div>         
                   </div>
                    <!-- Message envoyer -->
                    </form>
                    </div>
                    <div class="col-lg-4 card table-card p-0" >
                        <div class="card-header pb-lg-4 text-success">
                        <?php echo _("Membres actifs");include('../B_config/message3.php');?>
                        </div>
                        <div class="card-body p-0" style="overflow-y: scroll;  height: 25rem;" >
                            <ul class="list-group">
                                <a href="../B_config/message.php?nom=groupe" class='nav-link'>
                                    <li class="list-group-item adC-css"><img src='../B_img/logo1.png' alt='profil' width='40' height='40' class='rounded-circle'>Group Nuru Banque</li>
                                </a>
                                <?php while($clie = $cli_m->fetch()){
                                            echo "<a class='nav-link' href='../B_config/message.php?nom=".$clie['nom']."&prenom=".$clie['prenom']."'><li class='list-group-item adC-css'> <span class='icon-point'></span><img src='../B_clients/".$clie['photo']."' alt='profil' width='30' height='30' class='rounded-circle'>".$clie['nom']."&nbsp;".$clie['prenom']."</li></a>";
                                        }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer_user.php');?>
</body>
<script src="../vendor/chart.js/Chart.js"></script>
<script>
    
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
