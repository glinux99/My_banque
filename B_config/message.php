<?php  session_start();
//  echo $_POST['message'];
//  echo $_POST['dest_n'];
//  echo $_POST['dest_p'];
//  echo $_SESSION['matricule'];
//    session_start();
   include('db_connex.php');
   $source=$_SESSION['matricule'];
  if(isset($_POST['dest_n']) && isset($_POST['dest_p'])){
    $dest_n=$_POST['dest_n'];
    $dest_p=$_POST['dest_p'];
    $message = $_POST['message'];
    //echo $dest_p;
    $msg= $db->prepare('SELECT matricule FROM Customers WHERE nom=:nom AND prenom=:prenom');
    $msg->execute(array(
        ':nom'=>$dest_n,
        ':prenom'=>$dest_p
    ));
    $msg=$msg->fetch();
    $dest_m= $msg['matricule'];
    $mode=0;
    if($_POST['dest_m']=='group'){
        $mode=1;
    }
    $msg= $db->prepare("INSERT INTO Messages(source_id, destination_id, messages, date_mess, mode) VALUES (:source_id, :destination_id, :messages, NOW(), :mode)");
    $msg->execute(
        array(
            ':source_id'=>$source,
            ':destination_id'=>$dest_m,
            ':messages'=>$message,
            ':mode'=>$mode
        )
        );
        $_SESSION['mat_dest']=$dest_m;
        if($dest_n=='') {
            header('location: ../B_users/message.php?group'); }
        else{
            header('location: ../B_users/message.php?nom='.$dest_n.'&prenom='.$dest_p); 
        }
        //
        //header('location: ../B_users/message.php?nom='.$dest_n.'&prenom='.$dest_p);
}
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
if(isset($_GET['nom']) && !isset($_GET['prenom'])){
    $_SESSION['mat_dest']='';
    $msg= $db->prepare("INSERT INTO Messages(source_id, messages, date_mess, mode) VALUES (:source_id,:messages, NOW(), :mode)");
    $msg->execute(
        array(
            ':source_id'=>$source,
            ':messages'=>$message,
            ':mode'=>$mode
        ));
    header('location: ../B_users/message.php?group');
}
if(isset($_GET['nom']) && isset($_GET['prenom'])){
    $_SESSION['mat_dest']='';
    $msg= $db->prepare('SELECT matricule FROM Customers WHERE (nom=:nom AND prenom=:prenom)');
    $msg->execute(array(
        ':nom'=>$nom,
        ':prenom'=>$prenom
    ));
    $msg=$msg->fetch();
    $_SESSION['mat_dest']=$msg['matricule'];
    include('message2.php');
    header('location: ../B_users/message.php?nom='.$nom.'&prenom='.$prenom);
}
 
?>