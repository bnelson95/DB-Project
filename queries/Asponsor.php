<?php
	$select = "SELECT SPONSOR.Name AS 'Sponsor', SPONSOR.Address,
					  SPONSOR.Phone as Contact,
	                  SPONSORING.DollarAmount AS 'Contribution',
					  SPONSOR.Contr_sdate as 'Start Date',
					  FACILITY.Name AS 'Facility' ";
	$from   = "FROM (FACILITY JOIN SPONSORING ON FACILITY.FacilityID = SPONSORING.FacilityID) 
                     JOIN SPONSOR ON SPONSORING.SponsorID = SPONSOR.SponsorID ";
	$where  = "ORDER BY FACILITY.Name ASC";
	
	$result = @mysql_query($select . $from . $where);
?>
