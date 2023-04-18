<html>
<head>
<style>
    /* body{
        background-image: url('https://t3.ftcdn.net/jpg/02/54/38/30/360_F_254383096_DqmLCzVOaaF0Skw1SxPr042ZiJYC0SX4.jpg');
    } */
    input{
        border-color:coral;
    background-color:beige;
    text-size-adjust:auto;
    padding-bottom: 10px;
    /* margin: 10px; */
    width:180px;
    height: 50px;
    text-align: center;
    padding-top:5px;
    }
    h2{
        margin-top:50px;
        text-align:center;
        color:blue;
        font-size:xx-large;
    }
    label{
        display: block;
        font-size:30px;
        color:indigo;
        margin-left:10px;
    }
    .t{
    border:5px solid black;
    border-collapse:collapse;
    margin-top:10px;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:auto;
    height:30px;

    }
    td{
        padding:20px;
    padding-left: 10px;
    }
    .sub{
         margin-left:160px;
         color:darkgreen;
         font-size:x-large;
         background-color:darkturquoise;
         width:100px;
    }
</style>
</head>
<body>
<form action="verify.php" method="post" >
    <h2>Login</h2>
<table class="t">
          <!-- <tr><td><label>User Name:</label></td>
          <td><input type="text" name="uname" placeholder="Enter your name" required></td></tr> -->
          <tr><td><label>Email Address:</label></td>
          <td><input type="text" name="email" placeholder="Enter your email" required></td></tr>
          <tr><td><label>Password:</label></td>
          <td><input type="password" name="password" placeholder="Enter your password" required></td></tr>
          <tr><td><input class="sub" type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
  