<?php
    $update = "UPDATE PLAYER ";
    $set    = "SET " . $_GET['attribute'] . " = '" . $_GET['entry'] . "'";
    $where  = " WHERE PlayerID = " . $_GET['ID'];

    @mysql_query($update . $set . $where);

    $result = @mysql_query("SELECT * FROM PLAYER WHERE playerID =" . $_GET['ID']);
?>