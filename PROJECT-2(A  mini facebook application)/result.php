<html>
  <head>
     <style>
      body{
        position:fixed;
      }
        .to{
          width:1500px;
          height:160px;
          background-image:url('https://img.freepik.com/free-vector/social-media-elements-background_79603-1520.jpg?w=1060&t=st=1680563603~exp=1680564203~hmac=7cb22a0bb159e9c8fe7f665ebafc44f31d33bf0cf07e878b48234b769c90a5c0');
          background-repeat:no-repeat;
          background-size:1550px 250px;
        
        }
        .lef{
          margin-top:0px;
          float:left;
          width:250px;
          height: 1550px;
          background-image:url('https://i.pinimg.com/564x/77/ce/9e/77ce9e8c915e6b1c54988e22b65b5a64.jpg');
          background-repeat:no-repeat;
           background-size:auto;
        }
        li{
          
        }
        .rig{
          float:right;
          width:250px;
          height:1550;
          padding-top:50px;
          background-image:url('https://i.pinimg.com/564x/77/ce/9e/77ce9e8c915e6b1c54988e22b65b5a64.jpg');
          background-position:bottom top;
          background-repeat:no-repeat;
          background-size:auto;
        }
        .cen{
          float:center;
          width:1500px;
          height:1550px;
        }
        h1{ 
          padding-top:55px;;
          color:red;
          text-align:center;
        }
        h3{
          color:red;
          text-align:center;
        }
        h4{
          color:darkblue;
          display:fixed;
          /* padding-top:55px;; */
          text-align:center;
        }
        a{
          font-weight:bold;
          font-size:20px;
          padding-left:10px;
          padding-right:2px; 
        }
        #li{
          padding-left:60px;
          padding-right:10px; 
        }
        iframe{
          height:1550px;
          width:1000px;
          margin-left:150px;
          margin:auto;
          padding-top:0px;
          overflow:scroll;
        } 
        </style>
		</head>
<body>
    <?php
      session_start();
      $servername = "localhost";
     $username = "root";
     $passwords = "";
     $dbname = "fbdata";
     $conn = mysqli_connect($servername, $username, $passwords, $dbname);
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
     ?>
     <div class='to' name='to'>
     <?php if(isset($_SESSION['uname'])){?>
        <h1>Welcome, <?php echo $_SESSION['uname'] ?>!</h1>  
    <?php  }
      else{
        echo "Error No User found";
      }?>
</div>
<div class="lef" name="lef">
  <ul>
    <li><a href="javascript:void(0);" onclick="document.getElementById('cen').innerHTML='<iframe frameborder=0 name=if src=viewprofile.php></iframe>';">View-Profile</a></li>
<!-- <a href="viewprofile.php" target="_self" >View-Profile</a></li> -->
<li><a href="javascript:void(0);" onclick="document.getElementById('cen').innerHTML='<iframe frameborder=0 name=if src=uploadpics.php></iframe>';">Upload-Pics</a></li>
</li>
    </ul>
    </div>
    <div class="rig" name="rig">
    <a id="li" href="logout.php">Logout</a>
    <h3>ACTIVE USERS:</h3><?php
    $sql = "SELECT user_id FROM active_users";
     $res=mysqli_query($conn,$sql);
     while($r=mysqli_fetch_array($res)){
          $name=$r['user_id'];
          $sq="SELECT Name from user where id=$name";
          $g=mysqli_query($conn,$sq);
          while($w=mysqli_fetch_array($g)){?>
      <h4><?php echo $w['Name'] ?></h4>
     <?php } }?>
    </div>
    <div class="cen" id="cen">
      <iframe frameborder="0" name="if" src="test.php">
    </div>
    <!-- <iframe frameborder="0"  src="test.php" target="cen" > -->
</body>
   </html>