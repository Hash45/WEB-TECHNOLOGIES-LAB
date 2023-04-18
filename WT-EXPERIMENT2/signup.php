<html>
  <head>
      <title>Forms</title>
      <style>
        h1{
    margin-top:20px;
    text-align:center ;
    font-size: 50px;
    color: red;
}
.heading{
    color: black;
    padding-right:100px;
}
body{
    font-weight: 100px;
    font-family: sans-serif;
    background-image:url('https://img.freepik.com/free-photo/top-view-business-office-desk-background-applying-job-form-pen-pencil-eyeglasses-tree-wooden-table-background-with-copy-space_1921-21.jpg?w=2000');
    background-size:1550px 800px;
    background-repeat: no-repeat;
}
input{
    border-color:coral;
    background-color:beige;
    text-size-adjust:auto;
    padding-bottom: 10px;
    margin: 10px;
    padding-left:20px;
    width:90%;
    height: 50%;
    text-align: center;
    padding-top:5px;
}
.sub{
    width:150px;
    font-size: 20px;
    height:25px;
    background:lightgreen;
    padding-bottom: 30px;
}
.file{
    background-color:white;
    padding:0%;
    border-radius:0px
}
.gen{
    width:auto;
    height:auto;
    margin:auto;
    padding:auto;
}
        </style>
  </head>
  <body>
     <h1>Registration Form</h1>
     <form name="f1" action="abc.php" method="post" enctype="multipart/form-data">
     <table>
      <tr><td class="heading"> First Name:</td>
        <td><input name="nm" type="text" placeholder="Enter ur name"></td>
      </tr>
      <tr><td class="heading">Last Name:</td>
          <td><input name="lnm" type="text" placeholder="Enter ur name"></td>
        </tr>
        <tr><td class="heading">Email:</td>
          <td><input name="em" type="email"></td>
        </tr>
        <tr><td class="heading">Password:</td>
          <td><input name="pass" type="password"></td>
        </tr>
        <tr><td class="heading" >DOB:</td>
          <td><input name="da" type="date"></td>
        </tr>
        <tr><td class="heading">Gender:</td>
          <td><input class="gen" type="radio" name="gen" value="Male">Male</td>
          <td><input class="gen" type="radio" name="gen" value="Female">Female</td>
        </tr>
        <tr>
            <td class="heading">Profile Pic:</td>
            <td><input name="image" id="image" type="file" value="Upload"></td>
        </tr>
        <tr > 
          <td class="heading">Submit:</td>
          <td ><input class="sub" type="submit" value="Submit"></td>
</tr><tr><td class="heading">Reset:</td>
          <td><input  class="sub" type="reset"></td>
        </tr>
</table>
</form>
</body>
</html>