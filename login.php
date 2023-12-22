<?php
    if($_POST)
    {
        $host="localhost";
        $user="root";
        $pass="";
        $db="project";
        $username=$_POST['username'];
        $password=$_POST['password'];
    
    $conn=mysqli_connect($host,$user,$pass,$db);
    $query="select * from admin where 
            username='$username' and password='$password'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['project']='true';
                header('location:index.php');

            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
		.bgimg-1 {
		background-image: url("ec.jpeg");
		height: 100%;
		position: relative;
		opacity: 0.65;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	body, html {
	  height: 100%;
	  margin: 0;
	  font: 400 15px/1.8 "Lato", sans-serif;
	  color: #777;
	}

	</style>

</head>
<body>



	<style>
	/* Styling for the body */
	body {
	  background-color: #fafafa;
	}

	/* Styling for the form container */
	.login-container {
	  width: 100%;
	  max-width: 400px;
	  margin: 0 auto;
	  background-color: #ffffff;
	  border-radius: 10px;
	  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
	  padding: 20px;
	}


	/* Styling for the form header */
	.login-header {
	  text-align: center;
	  font-size: 30px;
	  color: #333;
	  margin-bottom: 20px;
	  text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
	}

	/* Styling for the input fields */
	.input-field {
	  width: 95%;
	  padding: 10px;
	  margin-bottom: 20px;
	  border: none;
	  border-radius: 5px;
	  background-color: #f5f5f5;
	  color: #333;
	  font-size: 18px;
	  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
	}

	/* Styling for the submit button */
	.submit-btn {
	  width: 100%;
	align-items: center;
	  padding: 10px;
	  border: none;
	  border-radius: 5px;
	  background-color:	#228B22;
	  color: #fff;
	  font-size: 20px;
	  cursor: pointer;
	  transition: all 0.3s ease-in-out;
	  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	}

	.submit-btn:hover {
	  background-color: #0F7692;
	}

	/* Styling for the form labels */
	label {
	  font-size: 16px;
	  font-weight: bold;
	  color: #333;
	}

	/* Styling for the form links */
	a {
	  color: #0F7692;
	  text-decoration: none;
	  transition: all 0.3s ease-in-out;
	}

	a:hover {
	  color: #333;
	}

	/* Styling for the form error messages */
	.error-msg {
	  color: #f44336;
	  font-size: 16px;
	  margin-bottom: 10px;
	}
    #logo{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    img{
        width: 3rem;
    }
	</style>
    <br>
    <div id="logo"><img src="./includes/subudha logo.png" alt="logo"></div>
    <div style="display: flex;justify-content: center;align-items: center;font-size: 2rem;color: #312020;">SUVIDHA FOUNDATION</div>
	<div class="login-container">
		 <h2 class="login-header">Admin login</h2>
	  <form method="post">
	    <label for="username">UserId</label>
	    <input type="text" name="username" class="input-field" placeholder="Enter user-id" autocomplete="off">
	    <label for="password">Password</label>
	    <input type="password" name="password" class="input-field" placeholder="Enter password" autocomplete="off">
	    <button type="submit" name="submit" class="submit-btn">login</button>
	    <div class="error-msg"></div>
	    	  </form>
	</div>
</div>
</body>
</html>