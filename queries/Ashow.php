<?php
if ($_GET['table'] == 'FIELD')
{
	$select = "SELECT FIELD.name as 'Field Name', FACILITY.name as Facility, 
               FACILITY.location as Location, FIELD.capacity as Capacity ";

    $from = "FROM FIELD, FACILITY ";

    $where = "WHERE FIELD.facilityid = FACILITY.facilityid";
	$result = @mysql_query($select . $from . $where);
}
else if ($_GET['table'] == 'EQUIPMENT')
{
	$select = "SELECT EQUIPMENT.name as Equipment, 
			   FACILITY.name as 'Facility Name', 
			   Amount ";
	$from   = "FROM EQUIPMENT, FACILITY ";
	$where  = "WHERE EQUIPMENT.facilityID = FACILITY.facilityID";
	
	$result = @mysql_query($select . $from . $where);
}
else if ($_GET['table'] == 'FACILITY')
{
	$select = "SELECT Name as 'Facility Name', Location, Phone as 'Phone Number' ";
	$from   = "FROM FACILITY ";
	
	$result = @mysql_query($select . $from);
}
else if ($_GET['table'] == 'WORKER')
{
	$select = "SELECT WorkerID as ID, CONCAT(first,' ' , mi,' ' , last) as Name, 
			   DoB as 'Date of Birth', Address, Phone as 'Contact',
			   Sex, SSN, Job, Start_Date as 'Start Date', Hourly_Rate
			   as 'Hourly Rate', Weekly_Hours as 'Hours' ";
	$from   = "FROM WORKER ";
	
	$result = @mysql_query($select . $from);
}
?>
