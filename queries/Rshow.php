<?php
//FUNCTION YESNO($one 
if ($_GET['table'] == 'PLAYER' || $_GET['table'] == 'GUARDIAN')
{
	$result = @mysql_query("SELECT * FROM " . $_GET['table']);
}
else if ($_GET['table'] == 'BELONGS_TO')
{
	$select = "SELECT BELONGS_TO.PlayerID, CONCAT(P.first, ' ', P.mi,' ' , P.last) 
					  as 'Player Name', BELONGS_TO.GuardianID, 
					  CONCAT(G.first, ' ', G.mi, ' ', G.last) as 'Guardian Name',
					  Relation as 'Relationship to Player' ";

    $from = "FROM PLAYER as P, GUARDIAN as G, BELONGS_TO ";

    $where = "WHERE P.playerId = BELONGS_TO.playerId
			        AND G.guardianID = BELONGS_TO.guardianID
					ORDER BY P.last";
	$result = @mysql_query($select . $from . $where);
}
else if ($_GET['table'] == 'TEAM')
{
	$select = "SELECT TEAM.name as 'Team Name', Sport_Name as Sport,
					  CONCAT(C.first, ' ', C.mi, ' ', C.last) as 'Coach Name' ";
	$from   = "FROM COACH as C, TEAM ";
	$where  = "WHERE C.CoachID = TEAM.CoachId";
	
	$result = @mysql_query($select . $from . $where);
}
else if ($_GET['table'] == 'SPORT')
{
    $select = "SELECT Name as 'Sport Name', Min_Play as Minimum,
               Max_Play as 'Maximum Capacity', Indoors as 'Indoors(1=yes)',
               Outdoors as 'Outdoors(1=yes)'
               FROM SPORT";
    $result = @mysql_query($select);
}
?>
