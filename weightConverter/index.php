<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Weight Converter </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            margin-top:70px;
            background: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="display-4 text-center mb-3">Weight Converter</h1>
                <form>
                    <div class="form-group">
                        <input 
                        id="lbsInput"
                        type="number" 
                        class="form-control form-control-lg" 
                        placeholder="Enter Pounds..."
                        >
                    </div>
                </form>
                <div id="output">
                    <div class="card bg-primary mb-2">
                        <div class="card-body">
                            <h4>Grams:</h4>
                            <div id="gramsOutput"></div>
                        </div>
                    </div>
                    <div class="card bg-success mb-2">
                        <div class="card-body">
                            <h4>Kilograms:</h4>
                            <div id="kgOutput"></div>
                        </div>
                    </div>
                    <div class="card bg-danger mb-2">
                        <div class="card-body">
                            <h4>Ounces:</h4>
                            <div id="ozOutput"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('output').style.visibility = 'hidden';
        document.getElementById('lbsInput').addEventListener('input', function(e){
            var lbs = e.target.value;
            document.getElementById('output').style.visibility = 'visible';
            document.getElementById('gramsOutput').innerHTML = lbs/0.0022046;
            document.getElementById('kgOutput').innerHTML = lbs/2.2046;
            document.getElementById('ozOutput').innerHTML = lbs*16;
        })
    </script>
</body>
</html>