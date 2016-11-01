<html>
	<head>
		<title>Parks and Recreation Sports</title>
		<link rel="stylesheet" href="stylesheets/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
		
		<script type="text/javascript">
			function toggle_visibility(id)
			{
				var e = document.getElementById(id);
				if(e.style.display == 'block')
					e.style.display = 'none';
				else
					e.style.display = 'block';
			}
		</script>
	</head>
	
	<body>
		<div id="container">
			<div id="header">
				<div class="name">
					Parks and Recreation
				</div>
				
				<div class="navigation">
					<ul>
						<li class="navigation_item"><a href="index.php">Home</a></li>
						<li class="navigation_item"><a href="index.php?page=Admin">Admin</a></li>
						<li class="navigation_item"><a href="index.php?page=Registrar">Registrar</a></li>
						<li class="navigation_item"><a href="index.php?page=Coach">Coach</a></li>
						<li class="navigation_item"><a href="index.php?page=Parent">Guardian</a></li>
					</ul>
				</div>
			</div>
			
			<div id="content">
				
				<?php
					switch ($_GET['page'])
					{
						case "Admin":
						case "Ashow":
						case "Aworkerpay":
						case "Amanagers":
						case "Asponsor":
						case "Aupdatepay": include("pages/admin.php"); break;
						
						case "Registrar":
						case "Radd":
						case "Rdelete":
						case "Rshow":
						case "Rupdate": include("pages/registrar.php"); break;
						
						case "Coach":
						case "Cteams":
						case "Cplayers": include("pages/coach.php"); break;
						
						case "Parent":
						case "Pkids": include("pages/parent.php"); break;
						
						default: include("pages/home.php");
					}
				?>
				
			</div>
			
			<div id="footer">
				<h4>Created By</h4>
				Andy Cook &nbsp Blake Nelson &nbsp Brian Waldron &nbsp Gage Rozzelle
			</div>
		</div>
	</body>
</html>
