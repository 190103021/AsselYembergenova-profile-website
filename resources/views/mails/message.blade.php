<!DOCTYPE html>
<html>
<head>
  <title>Lab work eight_2</title>
  <style>
    #part{
          background-color: #e0ffff;
          width:1200px;
          height:250px;
          margin-left: 40px;
          margin-top: 10px;
    }
    h1{
           font-family: sans-serif;
           margin-left: 10px;
           font-size: 40px;
        } 

        h3{
           font-family: sans-serif;
           margin-left: 10px;
    }
    #div{
      position:relative;
      top:-230px;
      left:320px;
    }
        #back{
            background-color: rgb(0, 0 , 0, 0.05);
            width:1170px;
            margin-left: 50px;
        }
        #code{
            background-color: steelblue;
            margin-left: 250px;
            width:700px;
        }
        .text{
            margin-left: 150px;
             font-family: sans-serif;
        }
        h4{
            margin-left: 100px;
            font-family: sans-serif;
        }
        code{
            color:white;
            background-color: steelblue;

        }
        #or{
            color:orange;
            background-color: steelblue;
        }
         #bl{
            color:lightblue;
            background-color: steelblue;
        }
         #y{
            color:yellow;
            background-color: steelblue;
        }
        samp{
            margin-left: 250px;
            background-color: white;
            border:2px solid grey;
        }
        p{
             font-family: sans-serif;
             font
        }
        #img{
            position: relative;
            top:-480px;
            left:900px;
        }

  </style>
</head>
<body>
  <h1>Hello, this is the tutorial about Recursion</h1>
  <div id = "part">
    <img src = "https://files.realpython.com/media/Thinking-Recursively-in-Python_Watermarked.1825397c00ea.jpg" width="300px" height="250px">
    <div id = "div">
    <h3>What is Recursion?</h3>
    <p>The process in which a function calls itself directly or indirectly is called <br>recursion and the corresponding function is called as recursive function.<br> Using recursive algorithm, certain problems can be solved quite easily. </p>
    <h3>What is base condition in recursion?</h3>
    <p>In the recursive program, the solution to the base case is provided and<br> the solution of the bigger problem is expressed in terms of smaller problems.. </p>
   </div>
   <img src = "https://miro.medium.com/max/1200/1*gSHrSNZK0bx-X7m1RraA6A.jpeg" width = "300px" height = "250px" id = "img">
 </div>

 <div id = "back">
   <h3>Recursion example:</h3>
   <h4>Given a string, write a recursive function that check if the given string is palindrome, else not palindrome.</h4>
    <p class = "text">Input: madam</p>
    <div id = "code">
   <code>
    <mark id = "or">import</mark> <mark id = "bl">java</mark>.<mark id = "bl">util</mark>.*;<br>
     <mark id = "or">public class</mark> <mark id = "bl">task</mark>{ <br>
   <mark id = "or">public static</mark> <mark id = "bl">void</mark> <mark id = "y">main</mark>(<mark id = "bl">String</mark>[] args){<br>
    <mark id = "bl">Scanner</mark> sc = <mark id = "or">new</mark> <mark id = "bl">Scanner</mark>(<mark id = "bl">System</mark>.in); <br>
    <mark id = "bl">String</mark> s = sc.<mark id = "y">next</mark>(); <br>                                     
      <mark id = "bl">System</mark>.out.<mark id = "y">println</mark>(<mark id = "y">palindrome</mark>(s, 0, s.length() -1));  <br>
  }   <br>                                                   
                                                                                  
                                                    
   <mark id = "or">public static</mark> <mark id = "bl">boolean</mark> <mark id = "y">palindrome</mark>(<mark id = "bl">String</mark> s, <mark id = "bl">int</mark> index1, <mark id = "bl">int</mark> index2){ <br>   
        <mark id = "or">if</mark>(index1 == index2)<br>
        <mark id = "or"> return</mark> <mark id = "y">true</mark>;  <br>            
        <mark id = "or">if</mark>(s.<mark id  = "y">charAt</mark>(index1) != s.<mark id = "y">charAt</mark>(index2))<br>
        <mark id = "or">return</mark> <mark id = "y">false</mark>;  <br>

        <mark id = "or">return</mark>  <mark id = "y">palindrome</mark>(s, index1 + 1, index2 - 1);   <br>
     }  <br>                                                              
                                                                  
}   <br>      
   </code>  
</div>
   <samp>
    Output: true
   </samp>


   

<h4>Explanation:</h4>
<p class = "text">How can you use recursion to determine whether a word is a palindrome? Let's start by understanding what's a base case. Consider<br> the word a. It's a palindrome. In fact, we don't have to think of palindromes as actual words in the English language (or whatever<br> language you'd like to consider). We can think of a palindrome as just any sequence of letters that reads the same forward and <br>backward, such as xyzyzyx. We call a sequence of letters a string. So we can say that any string containing just one letter is by<br> default a palindrome. Now, a string can contain no letters; we call a string of zero letters an empty string. An empty string is also<br> a palindrome, since it "reads" the same forward and backward. So now let's say that any string containing at most one letter is a <br>palindrome. That's our base case: a string with exactly zero letters or one letter is a palindrome. In this code variables <b><var>sc</var>, <var>s</var>, <var>index1</var><br></b> and <b><var>index2</var></b>. To run code you need to press <b><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>T</kbd></b> buttons in keyboard. </p>
</div>
</body>
</html>
