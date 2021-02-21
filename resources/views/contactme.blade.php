<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.content{
        background-color: rgb(217, 229, 240);
        max-width: 450px;
        max-height: 500px;
        margin-left: 500px;
        margin-top: -450px;
}
#input{
padding-top: 100px;
margin-left: 180px;
margin-bottom: 100px;

}
    input{
    width:400px;
    height:50px;
    font-size:20px;
    margin:10px 20px;
    }
    #submit{
  margin-left: 120px;
  background-color: blue;
  color:white;
  font-family: sans-serif;
  border-radius: 50px;
  max-width: 200px;
  border-color:transparent;
  font-size: 12px; 
  letter-spacing: 2px;
  word-spacing: 3px;
}
#mes{
  height: 120px;
}
h1{
	color:blue;
	font-family: sans-serif;
	letter-spacing: 5px;
	word-spacing: 6px;
	margin-top: 20px;
	margin-left: 150px;
	font-size: 40px;
}
#gen{
	margin-top: -90px;
}

	</style>

</head>
<body>
	<h1>Contact me</h1>
	<div id = "gen">
	<div id = "input">
   	<img src = "https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixid=MXwxMjA3fDF8MHxzZWFyY2h8MXx8b2ZmaWNlfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80" width = "500" height = "450">
   	<div class = "content">
   		<input type = "text" placeholder="Your Name"><br>
   		<input type = "email" placeholder="Your Email"><br>
   		<input type = "text" placeholder="Subject"><br>
   		<input type = "text" placeholder="Your Message" id = "mes"><br>
      <input type = "submit" value="SEND MESSAGE" id = "submit"><br>
   	</div>
   </div>
</div>
</body>
</html>