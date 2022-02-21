<?php
    
    // $img = $_POST['image'];
    // $folderPath = "";
  
    // $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("image/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
  
    // $image_base64 = base64_decode($image_parts[1]);
    // $fileName = uniqid() . '.png';
  
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
    // echo "<img src='".$fileName."'>";
    


    // $img = $_POST['image'];
    // $folderPath = "B_clients/";
  
    // $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("image/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
  
    // $image_base64 = base64_decode($image_parts[1]);
    // $fileName = uniqid() . '.png';
  
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
    // echo "<img src='".$fileName."'>";



$img = $_POST['image'];
if(strlen($img)){
    echo 'coool';
}
else echo 'nooooo';
// $folderPath = "B_clients/";
// $image_parts = explode(";base64,", $img);
// $image_type_aux = explode("image/", $image_parts[0]);
// $image_type = $image_type_aux[1];

// $image_base64 = base64_decode($image_parts[1]);
// $fileName = 'nuru_banque'.$_SESSION['matricule']. '.png';
// $file = $folderPath . $fileName;
// file_put_contents($file, $image_base64);
  
?>