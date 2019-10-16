<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrapp.min.css">
	<style type="text/css">

		.padding-top{

			margin-top: 50px;

		}

		button{

			margin-top: 10px;

		}
		.alert{

			display:none;

		}

	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-secondary text-center padding-top">
			<div class="panel-heading">
				<h3><span id="num"></span><span id="first-num"></span> <span id="operation"></span> <span id="second-num"></span></h3>
			</div>
			<div class="panel-body">
					<input type="text" name="answer" id="answer" class="form-control">
					<button class="form-control btn btn-outline-success" id="btn" type="button">Check</button>
				<div class="alert alert-danger" id="wrong">
					Wrong Answer!!
				</div>
				<div class="alert alert-success" id="success">
					Correct Answer!!
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>

		var fn = $("#first-num");
		var sn = $("#second-num");
		var op = $("#operation");
		var num = $("#num");
		var alCorrect = $("#success");
		var alWrong = $("#wrong");

		var ans = $("#answer");
		var btn = $("#btn");
		var total = '';
		var counter = 1;
		var correct = 0;


		function first(){return Math.floor((Math.random() * 50)+1);}
		function second(){return Math.floor((Math.random() * 50)+1);}
		function oper(){return Math.floor((Math.random() * 4)+1);}


		$('body').on('keydown', function(){

			if (event.which == 13) {

				check(total);

			}

		});

		ans.focus();
		question();	
		/*btn.on('click', function(){		

			check(total); 		

		});*/

		function question(){



			switch(oper()){

				case 1:
				var one = first();
				var two = second();
				num.text(counter+') ');
				fn.text(one);
				sn.text(two);
				op.text('+');
				total = one + two;
				console.log(counter+') '+one+' + '+two+'= '+total);


				break;
				case 2:

				var one = first();
				var two = second();
				num.text(counter+') ');
				fn.text(one);
				sn.text(two);
				op.text('-');
				total = one - two;
				console.log(counter+') '+one+' - '+two+'= '+total);



				break;
				case 3:

				var one = first();
				var two = second();
				num.text(counter+') ');
				fn.text(one);
				sn.text(two);
				op.text('*');
				total = one * two;
				console.log(counter+') '+one+' * '+two+'= '+total);



				break;
				case 4:

				var one = first();
				var two = second();
				num.text(counter+') ');
				fn.text(one);
				sn.text(two);
				op.text('/');
				total = one / two;
				total = round2Fixed(total);
				console.log(counter+') '+one+' / '+two+'= '+total);



				break;

			}

		}

		function round2Fixed(value) {
			value = +value;

			if (isNaN(value))
				return NaN;

 	  // Shift
 	  value = value.toString().split('e');
 	  value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + 2) : 2)));

 	  // Shift back
 	  value = value.toString().split('e');
 	  return (+(value[0] + 'e' + (value[1] ? (+value[1] - 2) : -2))).toFixed(2);
 	}

 	function check(total){

 		if (counter == 10) {

 			alert('You scored'+correct+'/'+counter);

 		}else{

 			if(ans.val() == total){


 				console.log('correct');
 				counter++;
 				correct++;
 				alCorrect.slideDown(300).slideUp(300);
 				question();
 				ans.val('');
 				ans.focus();

 			}else{

 				console.log('wrong');
 				counter++;
 				alWrong.slideDown(300).slideUp(300);
 				question();
 				ans.val('');
 				ans.focus();

 			}
 		}

 	}
 	

 </script>

</body>
</html>