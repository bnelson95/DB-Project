<script>
	document.getElementById(""+$_GET['page']+"").style.display="block";
</script>

<h2>Admin</h2>

<div id="functions">
	<form action="index.php?page=Ashow">
		<p class="activate" onclick="toggle_visibility('Ashow')">Show</p>
		<div id="Ashow" style="display: none;">
			<input type="hidden" name="page"  value="Ashow">
			<select name="table">
				<option value="WORKER">Workers</option>
				<option value="FACILITY">Facilities</option>
				<option value="EQUIPMENT">Equipment</option>
				<option value="FIELD">Fields</option>
			</select>
			<input type="submit" value="Submit">
		</div>
	</form>
	
	<form action="index.php?page=Amanagers">
		<input type='hidden' name='page'  value='Amanagers'>
		<input type="submit" value="Managers">
	</form>
	
	<form action="index.php?page=Asponsor">
		<input type='hidden' name='page'  value='Asponsor'>
		<input type="submit" value="Contributions">
	</form>
	
	<form action="index.php?page=Aworkerpay">
		<input type='hidden' name='page'  value='Aworkerpay'>
		<input type="submit" value="Worker Pay">
	</form>
	
	<form action="index.php?page=Aupdatepay">
		<p class="activate" onclick="toggle_visibility('Aupdatepay')">Update Pay</p>
		<div class="in" id="Aupdatepay">
			<input type='hidden' name='page'  value='Aupdatepay'>
			<input type="text" name="ID" placeholder="Worker ID" value="">
			<input type="text" name="rate" placeholder="New Hourly Rate" value="">
			<input type="submit" value="Submit">
		</div>
	</form>
</div>

<?php
	if ($_GET['page'] == "Amanagers")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Ashow")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Asponsor")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Aworkerpay")
	{
		include("query.php");
	}
	
	if ($_GET['page'] == "Aupdatepay")
	{
		include("query.php");
	}
?>