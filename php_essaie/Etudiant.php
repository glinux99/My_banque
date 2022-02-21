<?php 
class Personne{
    private $noms;
    public function marcher(){
        echo "Je marche comme un homme".PHP_EOL;
    }
}
class Etudiant extends Personne{
    private $niveau;
    public function __construct($noms, $niveau){
        $this->noms=$noms;
        $this->niveau=$niveau;

    }
    public function presenter(){
        echo "Je suis Mr ".$this->noms."et je suis en : ".$this->niveau.PHP_EOL;
    }
    public static function greeting(){
        echo "Bienvenu a vous cher ami... Vous avez ete admin avec succes";
    }
}
$et1=new Etudiant("Daniel","Master");
$et1->presenter();
$et1->marcher();
Etudiant::greeting();