<?php session_start();
class Voiture{
    public $kilometre, $marque, $couleur, $moteur;
    public function __construct($marque, $moteur, $couleur,$kilometre){
        $this->marque=$marque;
        $this->moteur=$moteur;
        $this->couleur=$couleur;
        $this->kilometre=$kilometre;

    }
    public function vehiculeMarche(){
        echo "Je suis en  marche";
    }
    public static function vehiculePanne(){
        echo "Je suis en  panne";
    }
    public function setKilometre($kilometre){
        $this->kilometre=$kilometre;
    }
    public function getKilometre(){
        return $this->kilometre;
    }

}
include('utilitaire.php');
$test=new utilitaire();
$ok=$test->test_kilometre($_POST['kilometre']);
if($ok){
    $_SESSION['error']='';
    $_SESSION['marque']=$_POST['marque'];
    $_SESSION['moteur']=$_POST['moteur'];
    $_SESSION['couleur']=$_POST['couleur'];
    $_SESSION['kilometre']=$_POST['kilometre'];
    header('location: next.php');
}
else {
    $_SESSION['error']='1';
    header('location: login.php');
}
?>