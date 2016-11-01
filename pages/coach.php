<script>
	document.getElementById(""+$_GET['page']+"").style.display="block";
</script>

<h2>Coach</h2>

<div id="functions">
	<form action="index.php">
			<input type='text'   name='fname' placeholder='First name' value="<?php echo $_GET['fname'];?>">
			<input type='text'   name='lname' placeholder='Last name'  value="<?php echo $_GET['lname'];?>">
			<button style="width:70px;" type="submit" name='page' value="Cteams">Teams</button>
			<button style="width:70px;" type="submit" name='page' value="Cplayers">Players</button>
	</form>
</div>

<?php
	if ($_GET['page'] == "Cteams" && $_GET['fname'] != NULL && $_GET['lname'] != NULL)
	{
		include("query.php");
	}
	else if ($_GET['page'] == "Cplayers" && $_GET['fname'] != NULL && $_GET['lname'] != NULL)
	{
		include("query.php");
	}
	else if ($_GET['page'] == "Cteams" || $_GET['page'] == "Cplayers")
	{
		echo "<br>Please enter a first and last name.";
	}
?>