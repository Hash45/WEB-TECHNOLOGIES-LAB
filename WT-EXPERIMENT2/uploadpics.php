<html>
 <head>
    <style>
         table,td{
    padding:20px;
    padding-left:40px;
    border-collapse:collapse;
    margin-top:250px;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:auto;
    height:30px;
    }
    table{
        border:5px solid black;}
        body{
        background-image: url('https://cdn1.vectorstock.com/i/1000x1000/08/65/cloud-uploading-background-vector-19110865.jpg');
            background-repeat:no-repeat;
            background-size:1500px 1850px;;
    }
         </style>
</head>
<body>
     <form action="back.php" method="POST" enctype="multipart/form-data">
      <table>
     <tr><td><input type="file" name="file"></td></tr>
     <tr><td><input type ="submit" value="Upload"></td></tr>
</table>
  </form>
</body>
    </html>