<html>
    <head>
        <style>
            #top{
                width:1500px;
                height:160px;
                background-image:url('https://img.freepik.com/premium-vector/facebook-background-facebook-icon-social-media-icons-realistic-facebook-app-set-logo-vector-zaporizhzhia-ukraine-may-10-2021_399089-1051.jpg');
                background-color:dodgerblue;
                background-repeat:no-repeat;
                background-size:200px 180px;
            }
            #right{
                width:40%;
                height:600px;
                float:right;
            background-image:url('https://img.freepik.com/premium-photo/facebook-background-with-logos_125322-28.jpg');
            background-repeat:no-repeat;
            background-size:700px 650px;
            /* margin:60px; */
            }
            #left{
                width:60%;
                height:600px;
                float:left;
                background-color:cornflowerblue	;
            }
            #signup{
            position:fixed;
            right:300px;
            top:10px;
            color:red;
            margin-top:55px;
            font-weight:bold;
            background-color:lightgreen;
            width:100px;
            height:30px;
        }
        #login{
            position:fixed;
            right:150px;
            top:10px;
            margin-top:55px;
            color:red;
            background-color:lightgreen;
            font-weight:bold;
            width:100px;
            height:30px;
        }
        .h{
           margin-left:80px;
            padding-top:55px;
            font-size:30px;
        }
        </style>
</head>
<body>
   <div class="frame">
       <div id="top" name="top">
        <h1 class="h"  align="center" style="color:white">WELCOME TO FACEBOOK</h1>
       <button id="signup" name="signup" type="submit" ><a href="signup.php">Sign Up</a></button>
       <button id="login" name="login" type="submit"><a href="login.php">Log In</a></button>
        </div>
       <div  id="left" name="left">
       <?php  include("left.php");?>
       </div>
        <div id="right" name="right" >
          <?php include("login.php");?>
       </div>
</div>
    </body>
</html>