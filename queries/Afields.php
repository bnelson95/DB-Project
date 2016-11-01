<?php
    $select = "SELECT FIELD.name as 'Field Name', FACILITY.name as Facility, 
               FACILITY.location as Location, FIELD.capacity as Capacity ";

    $from = "FROM FIELD, FACILITY ";

    $where = "WHERE FIELD.facilityid = FACILITY.facilityid";
	$result = @mysql_query($select . $from . $where);
?>
