<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utilizers</title>
	<style type="text/css">
		body{
			background-color: #3a3a3a;
		}
		.container{
           margin-left: 450px;
		}
		input{
			height:45px;
			width:350px;
			border-style: hidden hidden solid hidden;
        	border-color:white;
        	font-size: 15px;
        	background-color: #3a3a3a;
        	border-width: 1px;
        	margin-top: 30px;
        	color:white;
		}
		::placeholder{
			color:white;
			font-size: 15px;
		}
        h1{
        	color:white;
        	font-family: sans-serif;
        	margin-left: 520px;
        	margin-top: 50px;
        }
        button{
        	background-color: blue;
        	margin-left: 100px;
        	margin-top: 50px;
        	width:150px;
        	height:50px;
        	color:white;
        	font-size: 20px;
        	letter-spacing: 2px;
        	word-spacing: 3px;
        }


	</style>
</head>
<body>
     <h1>Fill the blanks</h1>
	<div class = "container">
		<form  action="{{ route('add-image') }}" method="POST">
			@csrf
			<input type="text" name="name" placeholder="Name" ><br>
			<input type="text" name="surname" placeholder="Surname"><br>
			<input type="email" name="email" placeholder="Email"><br>
			<input type="file" name="image" placeholder="Choose image"><br>
			<button type="submit">Upload</button><br>
		</form>
		
	</div>
	
</body>
</html>

