<?php
    $select = "SELECT CONCAT(WORKER.first, ' ', WORKER.mi, ' ',
               WORKER.last) as 'Manager Name', SPORT.name as Sport ";

    $from   = "FROM WORKER, SPORT ";

    $where  = "WHERE WORKER.workerid = SPORT.managerid";
	$result = @mysql_query($select . $from . $where);
	
	//echo "Error Message = " . mysql_error();
?>
