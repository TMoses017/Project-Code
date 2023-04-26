<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;

}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{

		background-color: #7b3f00;
		margin: auto;
		width: 500px;
		padding: 20px;
		margin-top: 100px;
		border-radius: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 40px;margin: 10px;color: black; font-family: 'Raleway', sans-serif;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<p style=" font-family: 'Raleway', sans-serif;">Already have an account?</p>
			<a href="login.php" style="font-size: 20px;color:black; font-family: 'Raleway', sans-serif;">Login</a><br><br>
		</form>
	</div>
</body>
</html>