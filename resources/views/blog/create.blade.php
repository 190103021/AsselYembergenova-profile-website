<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create new post</title>
	<style>
		body{
			background-image: url(https://img.freepik.com/free-vector/blue-copy-space-digital-background_23-2148821698.jpg?size=626&ext=jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
        #backg{
          background-color: white;
          max-width: 700px;
          min-height: 400px;
          margin-left: 300px;
          margin-top: 100px;
        }
        h1{
        	font-family: sans-serif;
        	padding-left: 230px;
        	padding-top: 50px;
        }
        input{
        	border-style: hidden hidden solid hidden;
        	border-color:blue;
        	font-size: 20px;
        }
        #t{
          margin-left: 220px;
          margin-top: 20px;
          width:250px;
          height:40px;
        }
        #b{
          width:350px;
          height:40px;
          margin-left: 170px;
          margin-top: 20px;
        }
        button{
        	width:120px;
        	height:40px;
        	background-color: blue;
        	color:white;
        	font-size:20px;
        	margin-top: 60px;
        	margin-left: 290px;
        	letter-spacing: 3px;
        }


	</style>
</head>
<body>
	<div id = "backg">
	<h1>Public your post</h1>
   
	<form method = "POST" action = "{{ route('add-post')}}">
		@csrf
		<input type="text" name="title" placeholder="Enter title of the post..." id = "t"><br>
		<input type="text" name="body" placeholder="Content of the post..." id = "b"><br>
		<button type = "submit">Create</button>
	</form>
   </div>
</body>
</html>