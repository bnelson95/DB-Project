<?php
	$select = "SELECT CONCAT(COACH.First, ' ', COACH.Last) as 'Coach Name', 
               TEAM.name as 'Team Name', SPORT.Name as 'Sport', 
               COUNT(PLAYER.First) as 'Player Count' ";
	$from   = "FROM COACH, TEAM, PLAYER, SPORT, ROSTER ";
	$where  = "WHERE TEAM.CoachID = COACH.CoachID
               AND ROSTER.PlayerID = PLAYER.PlayerID
               AND TEAM.TeamID = ROSTER.TeamID
               AND TEAM.Sport_Name = SPORT.Name
               AND COACH.First = '" . $_GET['fname'] . "' " . "AND COACH.Last = '" . $_GET['lname'] . "' 
               GROUP BY TEAM.TeamID";
	
	$result = @mysql_query($select . $from . $where);
?>
