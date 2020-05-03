<!DOCTYPE html>
<html>
<head>
	<title>Javascript Test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body id="body">

<div class="header">
	<h1 id="heading">Learning JavaScript</h1>
	<p>With Brad Traversy</p>
</div>

<div class="container">
	<form action="something.php" method="post" name="myForm" onsubmit="return validateForm()">
		<div>
			<label>First Name</label>
			<input type="text" name="firstName" id="firstName">
		</div>
		<br>
		<div>
			<label>Last Name</label>
			<input type="text" name="lastName" id="lastName">
		</div>
		<br>
		<input type="submit" name="submit">
	</form>
</div>

<script type="text/javascript">

function validateForm(){
	var firstName = document.forms["myForm"]["firstName"].value;

	if(firstName == null || firstName == ""){
		alert("First name is required!");
		return false;
	}

	if(firstName.length < 3){
		alert("First name must be atleast 3 characters!");
		return false;
	}
}

</script>

</body>
</html>