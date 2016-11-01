<script>
	document.getElementById(""+$_GET['page']+"").style.display="block";
</script>

<h2>Guardian</h2>

<div id="functions">
	<form action="index.php?page=Pkids">
		
		<div id="Pkids">
			<input type='hidden' name='page'  value='Pkids'>
			<input type='text'   name='fname' placeholder='First name' value="<?php echo $_GET['fname'];?>">
			<input type='text'   name='lname' placeholder='Last name'  value="<?php echo $_GET['lname'];?>">
			<input type="submit" value="Submit">
		</div>
	</form>
</div>

<?php
	if ($_GET['page'] == "Pkids" && $_GET['fname'] != NULL && $_GET['lname'] != NULL)
	{
		include("query.php");
	}
	else if ($_GET['page'] == "Pkids")
	{
		echo "<br>Please enter a first and last name.";
	}
?>