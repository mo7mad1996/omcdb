<?php	require_once "incloude/database.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database OMC</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


	<link rel="stylesheet" href="css/style.css" />
</head>
	<body>
		<?php 
			include "incloude/document/header.php";
			include "incloude/addDataaa.php";
		?>

		<form method="post"><h2>بحث بالتاريخ</h2><input type ="date" name="filter"/><input type="submit"/></form>

		<table class="table">
			<form method="post" >
				<?php include "incloude/document/table.php";?>
			</form>
		</table>

		<script src="js/app.js"></script>
	</body>
</html>