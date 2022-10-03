<?php 

include "data/config.php";
include "data/Database.php";
include "data/Session.php";
session::init();
$db = new Database();
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $id  = mysqli_real_escape_string($db->link, $_POST['id']);
    $pass = mysqli_real_escape_string($db->link, $_POST['pass']);



	$query = "SELECT * FROM admin WHERE id = '$id' AND pass = '$pass'";
	 $result = $db->select($query);
	if($result != false){
		$value = $result->fetch_assoc();
		session::set("adminlogin", true);
	header("Location:index.php");
	} else {
		$loginmsg = "input incorrect";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
.ddddd{
	max-width: 400px;margin: 0 auto; 
}
</style>
<body>
<div class="ddddd">
<h2 style="text-align: center;">Please Login</h2>

<form action="" method="POST">
  <div class="container">
    <h2>Z.M.INTERNATIONAL SCHOOL</h2>
    <p>
			<?php 
			if (isset($loginmsg)) {
				echo $loginmsg;
			}
			?></p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="id..." name="id" required>
    <input type="password" placeholder="password.." name="pass" required>
  </div>

  <div class="container">
    <input type="submit" value="login">
  </div>
</form>
</div>
</body>
</html>



