<?php 
class utilitaire{
    public function __construct(){

    }
    public function test_kilometre($kilometre){
        if($kilometre>=10000) return false;
        else return true;
    }
}
?>