<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrapp.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<style type="text/css">

		
		#side{

			padding-left: 20px; 
			margin-top: 10px;

			overflow: auto;

		}
		#colors{
			height: 500px;
			overflow-y: auto

		}
		#body{

			z-index: 100;
			position: fixed;
			right: 0%;
			height: 100%;

		}
	</style>
</head>
<body>

		<div class="row">
			<div class="well col-md-2" id="side">
				<div class="card card-info" id="carder">
					<div class="card-header">
						<label for="colorPick">Color History:</label>
					</div>
					<div class="card-body" id="colors">
						<button class="btn btn-outline-primary" id="stop">Stop Transition </button><br>
						<hr>

					</div>
					
					
				</div>
				
			</div>
			<div class="col-md-10 responsive" id="body">
				
			</div>
		</div>
		<div id="colors" class="well">
			
		</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		var count = 0;
		var start = new Date;
		var body = $('#body');
		var colors = $('#colors');
		var stop = $('#stop');

		function red(){return Math.floor((Math.random()*255)+1);}
		function green(){return Math.floor((Math.random()*255)+1);}
		function blue(){return Math.floor((Math.random()*255)+1);}

		function color(){
			var aka = red();
			var ao = blue();
			var midori = green();			
			var rgb = 'rgb('+aka+', '+midori+', '+ao+')';
			colors.append(count+') '+aka+' '+midori+' '+ao+'<br>');
			return rgb;
		}

		var colorChange = setInterval(function() {
			count++
			var time = Math.round((new Date - start) / 500);
			var verify = time % 2;			

			if (verify == 1) {
				body.animate({backgroundColor: color(),},500);
			}else{
				body.animate({backgroundColor: color()},500);
			}		    
		}, 500);

		stop.on('click', function(){

			

		});

	</script>

</body>
</html>