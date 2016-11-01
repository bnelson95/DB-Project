<?php
    $INSERT1 = "INSERT INTO PLAYER VALUES
              (" . $_GET['playerID'] . ", 
			  '" . $_GET['fname'] . "', 
			  '" . $_GET['middle'] . "', 
			  '" . $_GET['lname'] . "', 
			  '" . $_GET['bdate'] . "', 
			  '" . $_GET['sex'] . "', 
			  '" . $_GET['emergName'] . "', 
			  '" . $_GET['emergPhone'] . "'); ";
    $INSERT2   = "INSERT INTO GUARDIAN VALUES
				(" . $_GET['guardID'] . ", 
				'" . $_GET['Gfname'] . "', 
				'" . $_GET['Gmiddle'] . "', 
				'" . $_GET['Glname'] . "', 
				'" . $_GET['Gbdate'] . "', 
				'" . $_GET['Gaddress'] . "', 
				'" . $_GET['Gphone'] . "', 
				'" . $_GET['Gsex'] . "'); ";
    $INSERT3  = "INSERT INTO BELONGS_TO VALUES
				(" . $_GET['guardID'] . ", 
				" . $_GET['playerID'] . ",
				'" . $_GET['Grelation'] . "'); ";
	$INSERT4  = "INSERT INTO ROSTER VALUES
				(" . $_GET['playerID'] . ", 
				" . $_GET['teamID'] . "); ";

    @mysql_query($INSERT1);
	@mysql_query($INSERT2);
	@mysql_query($INSERT3);
	@mysql_query($INSERT4);
?>
