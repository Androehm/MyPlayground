<?php 
require('connection.php');

?>


<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<style type="text/css">
		#a{

			margin:20px;


		}


	</style>
	<title>Hello, world!</title>
</head>
<body>


	<!-- Container -->
	<div class="container">

		<div class="form-control btn btn-outline-secondary" id="a">
			Test
		</div>



		<div class="table" id="start-table">

			<table id="coffee-table" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Coffee Name</th>
						<th>Seed</th>
						<th>Stocks Available</th>
						<th>Rarity</th>
						<th>Stars</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Latte</td>
						<td>Robusta</td>
						<td>10000</td>
						<td>Common</td>
						<td>5</td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>
	<!-- /Container -->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">

		var coffeeTable = $('#coffee-table');

		coffeeTable.DataTable();		


		var btn = $("#a");
		var index = 1;

		btn.on('click', function(){
			index = index + 1;
			console.log(index);

			appender = "<tr>"+
				"<td>"+  index  +"</td>"+
				"<td>Latte "+ index +"</td>"+
				"<td>Robusta "+ index +"</td>"+
				"<td>10000 "+ index +"</td>"+
				"<td>Common "+ index +"</td>"+
				"<td>5 "+ index +"</td>"+
			"</tr>";

			coffeeTable.append(appender);

		});
	</script>
</body>
</html>