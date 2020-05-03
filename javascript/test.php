<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body>

<div class="header">
	<h1 id="heading">Learning JavaScript</h1>
	<p>With Brad Traversy</p>
</div>

<div class="container">
	<button onmouseover="showDate()" onmouseout="clearDate()">Show Date</button>
	<h1 id="time"></h1>
</div>


<script type="text/javascript">

	function showDate(){
		var time = document.getElementById('time');
		time.innerHTML = Date();
	}

	function clearDate(){
		var time = document.getElementById('time');
		time.innerHTML = '';
	}
	
	function Fruit(name, color, shape){
		this.name = name;
		this.color = color;
		this.shape = shape;

		this.describe = function(){
			return 'The '+this.name+' is the color '+this.color+' and is the shape '+this.shape+'.';
		}
	}

	var apple = new Fruit('apple', 'red', 'round');
	var banana = new Fruit('banana', 'yellow', 'long');
	var avocado = new Fruit('avocado', 'green', 'oblong');

	console.log(apple.describe());

</script>


</body>
</html>