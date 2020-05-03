<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Sequence</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin-top: 40px;
			color: #FFF;
			background: #333;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="display-4 text-center mb-3">Fibonacci Sequence</h1>
			<form target="_self" method="post">
				<div class="card bg-primary mb-3">
					<div class="card-body">
						<div class="form-group">
							<label for="fiboNumber"><h4>Number:</h4></label>
							<input type="number" name="fiboNumber" id="fiboNumber" class="form-control form-control-lg" placeholder="Enter number...">
						</div>
					</div>
				</div>
				<div class="card bg-success mb-3">
					<div class="card-body">
						<div class="form-group">
							<label for="fiboSequence"><h4>Sequence:</h4></label>
							<input type="number" name="fiboSequence" id="fiboSequence" class="form-control form-control-lg" placeholder="Enter Sequence...">
						</div>
					</div>
				</div>
				<!-- <div class="card-warning mb-3">
						<button name="fiboButton" class="btn btn-lg btn-warning form-control"><h4>Show Result</h4></button>
				</div> -->
				<div class="card bg-danger mb-3">
					<div class="card-body">
						<h4>Result:</h4>
						<div id="fiboResult">
							<!-- <?php
								if(isset($_POST['fiboButton'])){
									$fiboNumber = $_POST['fiboNumber'];
									$fiboSequence = $_POST['fiboSequence'];

									$previous1 = 0;
									$previous2 = $fiboNumber;
									$previous3 = 0;

									for ($i=0; $i<$fiboSequence; $i++){ 
										$previous3 = $previous1 + $previous2;

										echo $previous2.",";

										$previous1 = $previous2;
										$previous2 = $previous3;
										
									}
								}
							?> -->
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById('fiboNumber').addEventListener('oninput', function(e){
		var number = e.target.value;
		var sequence = document.getElementById('fiboSequence');

		var previous1 = 0;
		var previous2 = number;
		var previous3 = 0;

		var result = "";

		for(var i = 0; i<sequence.value; i++){
			previous3 = parseInt(previous1) + parseInt(previous2);

			result = result + previous2 + ",";

			previous1 = previous2;
			previous2 = previous3;
		}

		if(number == 0){
			document.getElementById('fiboResult').innerHTML = 0;
		}
		else{
			document.getElementById('fiboResult').innerHTML = result;
		}
		
	})

	document.getElementById('fiboSequence').addEventListener('input', function(e){
		var number = document.getElementById('fiboNumber');
		var sequence = e.target.value;

		var previous1 = 0;
		var previous2 = number.value;
		var previous3 = 0;

		var result = "";

		for(var i = 0; i<sequence; i++){
			previous3 = parseInt(previous1) + parseInt(previous2);

			result = result + previous2 + ",";

			previous1 = previous2;
			previous2 = previous3;
		}

		if(number.value == 0){
			document.getElementById('fiboResult').innerHTML = 0;
		}
		else{
			document.getElementById('fiboResult').innerHTML = result;
		}
	})
</script>

</body>
</html>