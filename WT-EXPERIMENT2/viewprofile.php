<html>
    <head>
        <style>
               body{
        background-image: url('https://images.pexels.com/photos/4466492/pexels-photo-4466492.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
            background-repeat:no-repeat;
            background-size:1100px 800px;;
    }
            th{
                column-width:60px;
                padding-right:30px;
            }
            td{
                height:40px;
                margin-left:200px;
            }
            table{
                margin-top:10px;
                margin-left:400px;
               text-align: center;
               column-width:10px;
               }
     img{
        margin-left:400px;
        margin-top:50px;
     }
            </style>
</head>
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
$imid=$_SESSION['id'];
$sql="SELECT * from `user` where id=$imid";
$res=mysqli_query($conn,$sql);?>
 <table>
<?php
 while($row=mysqli_fetch_array($res)){
   echo '<img src="'.$row[7].'" width="200px" height="200px" />';
   echo "<tr><th>ID:</th><td>".$row[0]."</td></tr>";
   echo "<tr><th>Name:</th><td>".$row["Name"]."</td></tr>";
   echo "<tr><th>Last Name:</th><td>".$row["LName"]."</td></tr>";
   echo "<tr><th>Email:</th><td>".$row["Email"]."</td></tr>";
   echo "<tr><th>Password:</th><td>".$row[4]."</td></tr>";
   echo "<tr><th>DOB:</th><td>".$row["DOB"]."</td></tr>";
   echo "<tr><th>Gender:</th><td>".$row[6]."</td></tr>";
 }?>
 </body>
 </html>