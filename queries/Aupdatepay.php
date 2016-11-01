<?php
    $update = "UPDATE WORKER ";
    $set    = "SET Hourly_Rate = " . $_GET['rate'];
    $where  = " WHERE WorkerID = " . $_GET['ID'];

    $result = @mysql_query($update . $set . $where);
?>