<?php
    $delete = "DELETE FROM " . $_GET['table'];
    $where  = " WHERE " . $_GET['table'] . "ID = " . $_GET['ID'];

    $result = @mysql_query($delete . $where);
?>
