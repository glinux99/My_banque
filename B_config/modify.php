<?php 
session_start();
include('db_connex.php');
if(isset($_POST['code_auth'])){
    $nom=$_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse_mmail = $_POST['email'];
    $psswd = $_POST['psswd'];
    $numero = $_POST['numero_tel'];
    $type = $_POST['type_compte'];
    $genre = $_POST['genre'];
    if( $genre == 'Feminin'){
        $genre= 'F';
    }
    if($genre == 'Masculin') $genre='M';
    include('photo_data.php');
    $quart_av =$_POST['quart_av'];
    $matricule = $_POST['matricule'];
    $apropos = $_POST['apropos'];
    $ville = $_POST['ville'];
    $province = $_POST['province'];
    $pays = $_POST['pays'];
    $type=$_POST['type_compte'];
    $code_auth = $_POST['code_auth'];
    $query= $db->prepare("UPDATE Adresse set quart_av=:quart_av, ville =:ville, province=:province,pays=:pays, apropos=:apropos WHERE code_auth=:code_auth");
    $query->execute(array(
        ':quart_av'=>$quart_av,
        ':ville'=>$ville,
        ':province'=>$province,
        ':pays'=>$pays,
        ':apropos'=>$apropos,
        ':code_auth'=>$code_auth
    ));
    $query2= $db->prepare("UPDATE Customers set nom=:nom, prenom=:prenom, password_customers =:psswd, numero_tel=:numero, type_compte=:type_compte, genre=:genre, photo=:photo WHERE code_auth=:code_auth");
    $query2->execute(array(
        ':nom'=>$nom,
        ':prenom'=>$prenom,
        ':psswd'=>$psswd,
        ':numero'=>$numero,
        ':type_compte'=>$type,
        ':genre'=>$genre,
        ':photo'=>$photo,
        ':code_auth'=>$code_auth
    ));
   header ('location: ../B_users/modifier_compte.php');
}else{
    $query=$db->prepare("SELECT * FROM Client INNER JOIN Customers ON Client.customers_id = Customers.id  INNER JOIN Adresse ON Adresse.id = Client.adresse_id WHERE Customers.matricule=:matricule");
$query->execute(array(
    ':matricule'=>$_SESSION['matricule']
));
$query2=$query->rowCount();
if($query2<=0){
    $query=$db->prepare("SELECT * FROM Admins INNER JOIN Customers ON Admins.customers_id = Customers.id  INNER JOIN Adresse ON Adresse.id = Customers.adresse_id WHERE Customers.matricule=:matricule");
    $query->execute(array(
        ':matricule'=>$_SESSION['matricule']
    ));
}
}
if($_POST['compte']){
    $query=$db->prepare("SELECT * FROM Client INNER JOIN Customers ON Client.customers_id = Customers.id  INNER JOIN Adresse ON Adresse.id = Client.adresse_id WHERE Customers.matricule=:matricule");
    $query->execute(array(
        ':matricule'=>$_POST['compte']
    )); 
}
?>