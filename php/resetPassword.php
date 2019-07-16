<?php  
    include_once './php/db.php';
    if(isset($_GET["email"]) && isset($_GET["token"])){
       
        $email = $_GET["email"];
        $token = $_GET["token"];

        $data = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE email='$email' AND token = '$token'");
        $row = mysqli_num_rows($query);
        if($row == 1){
            $str = "123456789qwerqweptioweure";
            $str = str_shuffle($str);
            $str = substr($str, 0, 15);
            
            $password = sha1($str);

            $connection = mysql_query($conn, "UPDATE guestbook1 SET userpw WHERE email='$email'");
        }else{
            echo 'please check your link!';
        }
    } else{
        header("Location:index.php");
        exit();
    }
?>