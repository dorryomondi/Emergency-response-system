<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $mod = $_POST['mod'];
    $a = 0;
    $h = 1;
    $p = 2;

    if($mod == $a){
         $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
                $_SESSION['rq'] = $row['Recovery_Question'];
                $_SESSION['Email'] = $row['Email_Address'];
                header("Location: recover_a.php");
            }else{
                echo "Administrator does not exist.";
            }
    }else if($mod == $h){
         $sql = "SELECT * FROM `hospitals` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
                $_SESSION['rq1'] = $row['Recovery_Question'];
                $_SESSION['Email1'] = $row['Email_Address'];
                header("Location: recover_h.php");
            }else{
                echo "Hospital does not exist.";
            }
    }else if($mod == $p){
         $sql = "SELECT * FROM `patients` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
                $_SESSION['rq2'] = $row['Recovery_Question'];
                $_SESSION['Email2'] = $row['Email_Address'];
                header("Location: recover_p.php");
            }else{
                echo "Patient does not exist.";
            }
    }else{
        echo "Incorrect credentials.";
    }
            }
    
?>
