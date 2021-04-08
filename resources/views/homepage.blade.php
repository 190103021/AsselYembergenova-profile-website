<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		 #bg{
         background-color: #6495ED;
		 width:1300px;
		 height:650px;
         }
         #img{
         background-image: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/workspace-with-brick-wall-in-office-royalty-free-image-909223304-1566845696.jpg?crop=1.00xw:0.751xh;0,0.244xh&resize=1200:*);
		width:950px;
		height:545px;
		position: relative;
		top:60px;
         }
         .div{
         width:300px;
		height:545px;
		background-color: #6495ED;
		margin-left: 970px;
		margin-top: -530px;
         }
         .text{
			text-align: center;
			font-size: 27px;
			color:white; 
			font-family: sans-serif;
			margin-top: -20px;
		}
		.cit{
			width:200px;
			height:200px;
            background-color: #6495ED ;
             margin: 100px 55px;
		}
		pre{
			font-size: 15px;
			color:white;
			font-family: sans-serif;
			margin-top: -10px;
		}
        .container{
			padding-top:5px;
			padding-left:50px;
			margin-left: 70px;
			text-align: left; 
			width:950px;
			height:40px;
		}
		a{
	    color:white;
	    text-decoration: none;
	    font-family: sans-serif;
	    padding-left: 80px;
	    cursor: pointer;
        }
        a:hover{
        	color: lightblue;
        }
        li{
	    color:blue;
	    list-style-type: none;
	    line-height: 50px;
	    font-size: 25px;
        display:inline;
        }
        #w{
        	color:white;
        	font-size: 20px;
        	max-width:250px;
        	margin-left: 30px;
        }
        
	</style>

	
</head>
<body>
	<div id = "bg">

		<div class="container">
        <ul>
           <li><a id = "a1" href="{{route('about')}}" >{{__('About me')}}</a></li>
          <li><a id = "s1" href="{{route('skillslanguages')}}">{{__('Skills & Languages')}}</a></li>
          <li><a id = "c1" href="{{route('contactme')}}">{{__('Contact me')}}</a></li>
     </ul>
 </div> 

		<div id = "img"></div>

    
    <div class = "div">
    	 <img class="cit" src="https://i.pinimg.com/564x/c0/02/2c/c0022ca8f8052a3e881957eff2bf8512.jpg" alt=" ">
    	 <h1 class="text">{{__('Yembergenova Assel')}}</h1>
    	 <div id = "w">
    	 <p>{{__('Faculty of Engeneering and Natural Science. Information System.')}}</p>
    	</div>
    </div>
   </div>
	
</body>
</html>