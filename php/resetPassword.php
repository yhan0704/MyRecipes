<?php  
    include_once 'db.php';
    if(isset($_GET["email"]) && isset($_GET["token"])){
       
        $email = $_GET["email"];
        $token = $_GET["token"];

        $data = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE email='$email' AND token = '$token'");
        $row = mysqli_num_rows($data);
        if($row == 1){
            $str = "123456789qwerqweptioweure";
            $str = str_shuffle($str);
            $str = substr($str, 0, 15);
            
            $connection = mysqli_query($conn, "UPDATE guestbook1 SET userpw =md5('$str'), token='' WHERE email='$email'");
            
            echo "Your temporary password is \"$str\" <br/> You can copy and paste your password and please reset your temporary password.";
        }else{
            echo 'Please check your link!';
        }
    } else{
        header("Location:index.php");
        exit();
    }
?>