<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];
    $module = $_POST['mod'];    
    $a = 0;
    $h = 1;
    $p = 2;

if ($module == $a){
         $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Administrator_ID'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index.php");
            }else{
                echo "Incorrect Password.
                <br>
                <p>Click <a href='recover_1.php'>HERE</a> to Reset Your Password.</p>";
            }
        }else{
            echo "Administrator does not exist.";
        }
}else if ($module == $h){
         $sql = "SELECT * FROM `hospitals` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['hosname'] = $row['Hospital_ID'];
                $_SESSION['Email1'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index1.php");
            }else{
                echo "Incorrect Password.
                <br>
                <p>Click <a href='recover_1.php'>HERE</a> to Reset Your Password.</p>";
            }
        }else{
            echo "Hospital does not exist.";
        }
}else if ($module == $p){
         $sql = "SELECT * FROM `patients` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['patname'] = $row['Patient_ID'];
                $_SESSION['Email2'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index2.php");
            }else{
                echo "Incorrect Password.
                <br>
                <p>Click <a href='recover_1.php'>HERE</a> to Reset Your Password.</p>";
            }
        }else{
            echo "Patient does not exist.";
        }
}else{
    echo "An error occured.";
}
            }

           
?>
