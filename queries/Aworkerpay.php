<?php
    $select = "SELECT FACILITY.name as 'Facility Name', SUM(Hourly_Rate * 2 * Weekly_Hours) as 'Total Pay', 
	           SUM(WorkerID) as 'Number of Workers' ";

    $from   = "FROM  FACILITY, WORKER ";

    $where  = "WHERE FACILITY.facilityid = WORKER.facilityid ";
	
	$group  = "GROUP BY FACILITY.facilityid";
			   
	$result = @mysql_query($select . $from . $where . $group);
?>