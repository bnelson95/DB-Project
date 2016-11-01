<?php
    $select = "SELECT CONCAT(PLAYER.first, ' ', PLAYER.mi, ' ', PLAYER.last) AS Player, 
			   TEAM.name AS 'Team Name', TEAM.sport_name AS Sport, 
			   CONCAT(COACH.first, ' ', COACH.mi, ' ', COACH.last) AS Coach,
               COACH.phone AS CoachPhone ";

    $from = "FROM PLAYER, TEAM, COACH, SPORT, ROSTER, GUARDIAN, BELONGS_TO ";

    $where = "WHERE TEAM.CoachID = COACH.CoachID 
              AND TEAM.Sport_Name = SPORT.Name 
              AND PLAYER.PlayerID = ROSTER.PlayerID 
              AND TEAM.TeamID = ROSTER.TeamID
			  AND PLAYER.PlayerID = BELONGS_TO.PlayerID 
			  AND BELONGS_TO.GuardianID = GUARDIAN.GuardianID 
			  AND GUARDIAN.first = '" . $_GET['fname'] . "' 
			  AND GUARDIAN.last = '" . $_GET['lname'] . "'";
	
	$result = @mysql_query($select . $from . $where);
?>
