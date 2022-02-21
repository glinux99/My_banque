<?php
$img = $_POST['image'];
if(strlen($img)){
    $folderPath = "../B_clients/";
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = 'nuru_banque'.$_SESSION['matricule']. '.png';
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
    $photo=$fileName;
}else {
    $pic=$db->prepare("SELECT * FROM Customers WHERE matricule=:matricule");
    $pic->execute(array(
        ':matricule'=>$_SESSION['matricule']
    ));
    $pic2=$pic->fetch();
    $pic2=$pic2['photo'];
    if(strlen($pic2)!='nuru_default_user.png') $photo=$pic2;
    else $photo='nuru_default_user.png';
}
?>