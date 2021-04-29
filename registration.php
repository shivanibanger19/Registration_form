<?php

include("connect.php");
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
  width: 100%;  
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
	<h1><center>Registration Form</center></h1>
<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
   <div class="row">
   	<div class="col-25">
   		<label for="date">DOB</label>
   	</div>
   	<div class="col-75">
   		<input type="date" name="date">
   	</div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="courses">Course</label>
      </div>
      <div class="col-75">
        <select id="courses" name="courses">
          <option value="Select Course">Select Course</option>
          <option value="B.Tech">B.Tech</option>
          <option value="BBA">BA</option>
          <option value="BCA">BCA</option>
          <option value="MCA">MCA</option>
          <option value="M.Tech">M.Tech</option>
          <option value="Diploma">Diploma</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" placeholder="ABC@gmail.com">
      </div>
  </div>
      <div class="row">
      <div class="col-25">
        <label for="password"> Create Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="password" name="password" placeholder="Password mus be Strong....">
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="re-type password">Re-type Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="re-type password" name="re-typepassword" placeholder="Re-type Password">
      </div>
      </div>
      <div>
      	  <button type="submit" class="registerbtn" name="save">Save</button>    
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$dt=$_GET['date'];
$cr=$_GET['courses'];
$em=$_GET['email'];
$pas=$_GET['password'];

$query="INSERT INTO registration values ('$fn','$ln','$dt','$cr','$em','$pas')";
$data=mysqli_query($con,$query);
if($data)
{
 
}
else{
  echo "failed to insert data into database";
}
?>

