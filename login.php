<?php

include("connect1.php");
error_reporting(0);

?><html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 10%;  
  opacity: 0.9;  
}  


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
	<h1><center>Login Form</center></h1>
<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="fname">Login Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="loginid" name="loginid" placeholder="Enter your Id">
      </div>
    </div>
    
  
      <div class="row">
      <div class="col-25">
        <label for="password"> Create Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="password" name="password" placeholder="Enter Password">
      </div>
      </div>
    
      <div>
      	  <button type="submit" class="registerbtn" name="Login">Save</button>    
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php
$ld=$_GET['loginid'];
$pas=$_GET['password'];

$query="INSERT INTO loginform values ('$ld','$pas')";
$data=mysqli_query($con,$query);
if($data)
{
 
}
else{
  echo "failed to logine";
}
?>

