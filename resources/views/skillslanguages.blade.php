<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		#s{
	height: 5px;
	width:400px;
	border: 1px solid blue;
    margin-bottom: 45px;
}
#sk{
	width:400px;
	margin-top: -350px;
	margin-left: 700px;
}
#skills{
	width:400px;
	margin-top: 50px;
	margin-left: 240px;
}
#back{
	color:blue;
}
ul{
	margin-left: -30px;
}
li{
	color:blue;
	list-style-type: none;
	line-height: 50px;
	font-size: 25px;
}
h1{
	color:blue;
	font-family: sans-serif;
	letter-spacing: 5px;
	word-spacing: 4px;
	margin-top: 10px;
	margin-left: -70px;
	font-size: 40px;
	min-width: 5s00px;
}

	</style>
</head>
<body>
	<div id = "skills">
    
    		<h1>{{__('Skills & Languages')}}</h1>
    		<p id = "back">{{__('MY KNOWLEDGE')}}</p>
    		<ul>
    			<li>Java <mark style = "background-color: white;">70%</mark></li>
    			<li>HTML & CSS <mark style = "background-color: white;">87%</mark></li>
    			<li>DBMS <mark style = "background-color: white;">85%</mark></li>
    			<li>{{__('Kazakh')}}<mark style = "background-color: white;">100%</mark></li>
    			<li>{{__('Russian')}}<mark style = "background-color: white;">75%</mark></li>
    			<li>{{__('English')}}<mark style = "background-color: white;">70%</mark></li>
    			<li>{{__('Turkish')}}<mark style = "background-color: white;">60%</mark></li>
    		</ul>    	
</div>

<div id = "sk">
	<div id = "s"><div style = "width:300px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:350px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:345px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:400px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:300px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:300px; height: 5px; background-color:blue;"></div></div>
	<div id = "s"><div style = "width:260px; height: 5px; background-color:blue;"></div></div>
  
</div>
</body>
</html>