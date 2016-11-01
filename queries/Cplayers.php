<?php
	define("GET_FNAME", "'".$_GET['fname']."'");
	define("GET_LNAME", "'".$_GET['lname']."'");
	
	$select =	"SELECT T.name as 'Team Name', S.name as 'Sport', 
				CONCAT(P.first, ' ', P.last) as 'Player', 
				P.dob as 'Birthday', 
				CONCAT(G.first, ' ', G.last) as 'Guardian', 
				G.phone as 'Phone', 
				B.Relation ";
	
	$from   =	"FROM SPORT as S, TEAM as T, PLAYER as P, GUARDIAN as G, BELONGS_TO as B, ROSTER as R, COACH as C ";
	
	$where  =	"WHERE G.GuardianID = B.GuardianID
				AND P.PlayerID = B.PlayerID
				AND T.Sport_Name = S.Name
				AND R.PlayerID = P.PlayerID
				AND R.TeamID = T.TeamID
				AND C.CoachID = T.CoachID
				AND C.First = ".GET_FNAME." AND C.Last = ".GET_LNAME;

	$result = @mysql_query($select . $from . $where);
?>

