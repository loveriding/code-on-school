
<!DOCTYPE html>
<html>
	<head>
		<title>ex1</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style type="text/css">
		.colorbox {
			box-sizing: border-box;
		  /*float: left;*/
		  width: 322px;
		  border: 1px solid #000;
		  margin: 50px auto;
		}
		.colorbox div {
		  float: left;
		  width: 32px;
		  height: 32px;
		  border: 1px solid #000;

		}
			.alert {
				margin: auto;
				height: 50px;
				width: 400px;
				text-align: center;
				margin-top: 10px;
				display: none;

			}
			body {
				background-color: white;
			}
			.red {
				background-color: red;
			}
			.blue {
				background-color: blue;
			}
			.green {
				background-color: green;
			}
			.white {
				background-color: white;
			}
			.blueviolet {
				background-color: blueviolet;
			}
			.yellow {
				background-color: #FFFF00;
			}
			.pink {
				background-color: #FEBECA;
			}
			.orange {
				background-color: #FFA600;
			}
		</style>
	</head>
	<body>
			
		<div class="colorbox" id="onmouseover">
			<?php   
	    		$color = array('red','blue','green','white','blueviolet','yellow','orange','pink');
	    		for($i = 0 ; $i < 100; $i ++) {
	    		$randomNumber = rand(0,7); 
	    		echo "<div class=".$color[$randomNumber]."></div>";
    		}
      
			?> 
		</div>
		<br style="clear: both;">	
		<div class="alert alert-success" role="alert" >
			Background-color has been changed
		</div>		

		<script type="text/javascript">
			//$('.alert-success').hide();
			//get element table
			var onMouse = document.getElementById('onmouseover');
			//get body color
			var defaultColor = $('body').css('background-color');
			//add event mouseover - when mouse hover on table color,background'll change
			onMouse.addEventListener('mouseover',function(event) {
				var onColor = $(event.target).css('background-color')
				$('body').css('background-color',onColor);
			});
			//when mouse hover without table color,background'll be defaul color
			onMouse.addEventListener('mouseout',function() {
				$('body').css('background-color',defaultColor);
			});
			//set background-color and alert success
			onMouse.addEventListener('click',function(event) {
				defaultColor = $(event.target).css('background-color')
				$('body').css('background-color',defaultColor);
				alertSuccess();
			})
			// alert success
			var alertSuccess = function() {
				$(document).ready(function() {
				$('.alert-success').fadeIn(1000)
				})
			}

			
		</script>
	</body>
</html>