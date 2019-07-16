<?php
    include_once './php/db.php';
    if(isset($_POST["forgotPass"])){
        $email = $_POST["email"];

        $query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE email='$email'");
        $row = mysqli_num_rows($query);
		if($row == 1){
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url = "http://domain.com/php/resetPassword.php?token=$str&email=$email";

			mail($email, "Reset password", "To reset your password, please visit this: $url", "From: hanyc1205@gamil.com\r\n");

			$connection = mysqli_query($conn, "UPDATE guestbook1 SET token='$str', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");

			echo "Please check your email!";
		} 
		else
		{
			echo 'wrong';
		}		
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/forgetIDPW.css">
    <link rel="shortcut icon" href="./images/Burger recipe.png" />
    <title>Forgot ID or Password</title>
</head>
<body>
    <div id="wrapper">
        <div class="recover-wrapper">
            <h1>Recover Your password</h1>

            <p>
                having troble finding your password? <br/>
                Do not worried we will send you a defalt password <br/>
                using your registered email address.
            </p> 
        </div>

        
        <section id="send-email">
        <p> o Please input your registered Email address.</p>
        <form action="forgotPW.php" method='POST'>
            <input type="text" name="email">
            <input type="submit" name="forgotPass" value="Recover Password">
        </form>
        </section>

        <div class="returnlogin">
        <a href="index.php">Return to Login</a>
        </div>
    </div>
</body>
</html>