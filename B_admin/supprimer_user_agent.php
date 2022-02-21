<?php session_start();
include ('../localisation.php');
if($_SESSION['type_compte']=='admin'){?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../B_users/header.php');?>
    <title><?php echo _("Supprimer ou desactiver un client ou agent");?></title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap bg-css" >
         <!--menu gauche flotable-->
       <?php include ('../B_menu/menug_user.php');?>
         <!--fin menu gauche flotable-->
        <div class="w-100">
            <!--Menu Principale center-->
            <?php include ('../B_menu/menup_user.php');?>
            <!--Fin menu principale center-->
            <div class="container-fluid ">
            
                <table class='table table-striped table-hover table-bordered text-primary table-card'>
                    <thead>
                         <tr>
                            <td ><?php echo _("Nom");?></td>
                            <td><?php echo _("Prenom");?></td>
                            <td><?php echo _("Matricule");?></td>
                             <td><?php echo _("Solde");?></td>
                             <td><?php echo _("Type_compte");?></td>
                             <td><?php echo _("compte");?></td>
                          </tr>
                    </thead>
                    <tbody> <?php include('../B_config/supprimer_user_agent.php');
                        while($clients=$client->fetch()){?>
                        <tr>
                            <td ><?php echo $clients['nom'];?></td>
                            <td><?php echo $clients['prenom'];?></td>
                            <td><?php echo $clients['matricule'];?></td>
                             <td><?php echo $clients['solde'];?></td>
                             <td><?php echo $clients['type_compte'];?></td>
                             <td class="text-center">
                                <?php if($clients['status_compte']==0){?>
                                <a role="button" class="btn btn-dark"  href="../B_config/supprimer_user_agent.php?action=desactiver&code_auth=<?php echo $clients['code_auth'];?>"><?php echo _("Desactiver");?>
                                <?php }else{?>
                                <a role="button" class="btn btn-success" href="../B_config/supprimer_user_agent.php?action=activer&code_auth=<?php echo $clients['code_auth'];?>"><?php echo _("Activer");?></a><?php }?>
                                <a role="button" class="btn btn-danger ml-1" href="../B_config/supprimer_user_agent.php?action=supprimer&code_auth=<?php echo $clients['code_auth'];?>"><?php echo _("Supprimer");?> <span class="bi-delete"></span></a>
                             </td>
                            </tr>
                             <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<?php include('../B_menu/footer_user.php');?>
</body>
</html>
<?php }else header('location: ../');?>