<?php
	include("useDatabase.php");
	
	include("queries/" . $_GET['page'] . ".php");
	
	include("showTable.php");
?>