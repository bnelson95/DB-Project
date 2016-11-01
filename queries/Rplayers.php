<?php
    $select = "SELECT SPORT.Name AS 'Sport', COUNT(PlayerID) AS 'Number of Players', 
  SPORT.Min_Play AS 'Minimum Players Per Team', SPORT.Max_Play 
  AS 'Maximum Players Per Team' ";

    $from   = "SPORT JOIN TEAM ON SPORT.Name = TEAM.Sport_Name) 
  JOIN ROSTER ON TEAM.TeamID = ROSTER.TeamID ";

    $where  = "GROUP BY SPORT.Name ORDER BY SPORT.Name ASC";
	$result = @mysql_query($select . $from . $where);
?>