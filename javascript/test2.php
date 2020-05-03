<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1, h2, h3, h4, h5, h6{
			text-align: center;
		}
		.banner{
			color: red;
			background: #333;
		}
		.banner-underline{
			text-decoration: underline;
		}
		#asdf{
			width: 300px;
			height: 100px;
			padding: 10px;
			margin: 20px;
			border: 3px solid blue;
			background-color: #333;
			color: white;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<div class="container">

<h1 id="header1">Marc Lester Lagunday</h1>
<h2 id="header2">Marc Lester Lagunday</h2>
<h3 id="header3">Marc Lester Lagunday</h3>
<h4 id="header4">Marc Lester Lagunday</h4>
<h5 id="header5">Marc Lester Lagunday</h5>
<h6 id="header6">Marc Lester Lagunday</h6>
<br>
<br>
<br>
<div class="col-sm-4">
	<form>
		<div class="form-group">
			<input type="text" class="form-control" id="name" placeholder="Name">
		</div>
		<div class="form-group">
			<input type="button" id="btnClick" value="Click here" class="btn btn-primary">
		</div>
	</form>
</div>

<a href="https://www.facebook.com" target="_blank">@Facebook</a>

<div id="asdf"></div>

<script type="text/javascript">
 
//$("#btnClick").hide();
$("a").hide();

$(function(){
	var txt = "";
	txt += "width:" + $("#asdf").width() + " ";
	txt += "height:" + $("#asdf").height() + " ";
	txt += "innerWidth:" + $("#asdf").innerWidth() + " ";
	txt += "innerHeight:" + $("#asdf").innerHeight() + " ";
	txt += "outerWidth:" + $("#asdf").outerWidth() + " ";
	txt += "outerHeight:" + $("#asdf").outerHeight() + " ";

	$("#asdf").html(txt);
});

</script>
</div>

</body>
</html>