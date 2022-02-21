<?php include('../B_config/db_connex.php');
    $query=$db->query("select * from Transactions");
    while($query2=$query->fetch()){
        echo NOW();
        echo date('Y M d H:i:s',strtotime($query2['date_trans'])).'<br>';
    }
?>