<?php 
    abstract class Personne{

        public function __construct(){
            echo "Je suis une personne";
        }
    }
    class Etudiant extends Personne{

    }
    interface Operation{
        public function insertion();
        public function modification();
        public function suppression();
        public function recherche();
    }
    class MysqlOperation implements Operation{
        public function __construct(){
            echo "je suis un  constructeur Mysql";
        }
    }
    class Maria_DB implements Operation{
        public function __construct(){
            echo "J suis un construct Maria_DB";
        }
    }
    $p = new Etudiant();