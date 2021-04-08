<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		#about{
			background-color: lightblue;
			width:1300px;
			height:550px;
			margin-top: -27px;
		}
        #me{
			padding-left: 250px;
			padding-top: -80px;
			width:800px;

		}
		p{
			color:white;
			display:inline;
			padding-left:50px;
			font-size: 22px;
		}
		h1, h3{
			word-spacing: 6px;
			letter-spacing: 3px;
			color:blue;
			font-family: sans-serif;
		}
		h1{
			font-size: 40px;
			padding-top: 100px;
		}
		h3{
			font-size: 22px;
			padding-top:18px;
			line-height: 50px;
		}
		#back{
			color:blue;
		}
		body{
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<div id = "about">
    	<div id = "me">
    		<h1>{{__('About me')}}</h1>
    		<p id = "back">{{__('Who I am?')}}</p>
    		<h3>{{__('Hello! I am Yembergenova Assel. Currently, I am second year student at Suleyman Demirel University. I like programming and math. There are five of us in the famaly: father, mother and two brothers.')}}</h3>
    	</div>
    </div>
</body>
</html>