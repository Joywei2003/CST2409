<?php
    include "utility/DBUtility.php";
    $sql = new DBUtility();
    $sqlstatement ="select * from investments limit 20";
    $data = $sql->exacute($sqlstatement);
    echo"_------------------------------------------------------------_";
    print_r($data);
?>