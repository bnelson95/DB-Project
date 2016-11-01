<script>
	document.getElementById(""+$_GET['page']+"").style.display="block";
</script>

<h2>Registrar</h2>

<div id="functions">
	<form action="index.php?page=Rshow">
		<p class="activate" onclick="toggle_visibility('Rshow')">Show</p>
		<div id="Rshow" style="display: none;">
			<input type="hidden" name="page"  value="Rshow">
			<select class="full" name="table">
				<option value="PLAYER">Players</option>
				<option value="GUARDIAN">Guardians</option>
				<option value="BELONGS_TO">Belongs To</option>
				<option value="TEAM">Teams</option>
				<option value="SPORT">Sports</option>
			</select>
			<input type="submit" value="Submit">
		</div>
	</form>
	
	<form action="index.php?page=Radd">
		<p class="activate" onclick="toggle_visibility('Radd')">Add</p>
		<div id="Radd" style="display: none;">
			Player
			<input type='hidden' name='page'  value='Radd'>
			<input type="text" name="playerID" placeholder="ID"          value="<?php echo $_GET['playerID'];?>">
			<input type="text" name="fname"    placeholder="First name"  value="<?php echo $_GET['fname'];?>">
			<input type="text" name="middle"   placeholder="Middle init" value="<?php echo $_GET['middle'];?>">
			<input type="text" name="lname"    placeholder="Last name"   value="<?php echo $_GET['lname'];?>">
			<input type="date" name="bdate"    placeholder=""            value="<?php echo $_GET['bdate'];?>">
			<select name="sex">
				<option>Sex</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			<input type="text" name="emergName"  placeholder="Emergency Contact" value="<?php echo $_GET['emergName'];?>">
			<input type="text" name="emergPhone" placeholder="Emergency Phone" value="<?php echo $_GET['emergPhone'];?>">
			Team
			<input type="text" name="teamID" placeholder="ID" value="<?php echo $_GET['teamID'];?>">
			Guardian
			<input type="text" name="guardID" placeholder="ID"          value="<?php echo $_GET['guardID'];?>">
			<input type="text" name="Gfname" placeholder="First name"   value="<?php echo $_GET['Gfname'];?>">
			<input type="text" name="Gmiddle" placeholder="Middle init" value="<?php echo $_GET['Gmiddle'];?>">
			<input type="text" name="Glname" placeholder="Last name"    value="<?php echo $_GET['Glname'];?>">
			<input type="date" name="Gbdate" placeholder=""             value="<?php echo $_GET['Gbdate'];?>">
			<input type="text" name="Gaddress" placeholder="Address"    value="<?php echo $_GET['Gaddress'];?>">
			<input type="text" name="Gphone" placeholder="Phone"        value="<?php echo $_GET['Gphone'];?>">
			<select name="Gsex">
				<option>Sex</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			<input type="text" name="Grelation" placeholder="Relationship" value="<?php echo $_GET['Grelation'];?>">
			<input type="submit" value="Submit">
		</div>
	</form>
	
	<form action="index.php?page=Rupdate">
		<p class="activate" onclick="toggle_visibility('Rupdate')">Update</p>
		<div id="Rupdate" style="display: none;">
			<input type='hidden' name='page'  value='Rupdate'>
			Player
			<select name="attribute">
				<option value="fname">First name</option>
				<option value="middle">Middle init</option>
				<option value="lname">Last name</option>
				<option value="bdate">Birthday</option>
				<option value="sex">Sex</option>
				<option value="emergName">Emergency Contact</option>
				<option value="emergPhone">Emergency Phone</option>
			</select>
			<input type="text" name="entry" placeholder="New Value">
			<input type="text" name="ID" placeholder="Player ID">
			<input type="submit" value="Submit">
		</div>
	</form>
	
	<form action="index.php?page=Rdelete">
		<p class="activate" onclick="toggle_visibility('Rdelete')">Delete</p>
		<div id="Rdelete" style="display: none;">
			<input type='hidden' name='page'  value='Rdelete'>
			<select name="table">
				<option value="PLAYER">Player</option>
				<option value="GUARDIAN">Guardian</option>
			</select>
			<input type="text" name="ID" placeholder="ID">
			<input type="submit" value="Submit">
		</div>
	</form>
</div>

<?php
	if ($_GET['page'] == "Rshow")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Radd")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Rupdate")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Rdelete")
	{
		include("query.php");
	}
?>