<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['submit'])){

    $answer = $_POST['ra'];

    if(empty($answer)){
        echo "Please input an answer.";
    }else{

        $sql = "SELECT * FROM `patients` WHERE `Recovery_Answer`='$answer'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
                $_SESSION['ra2'] = $row['Recovery_Answer'];
                header("Location: new_pass_p.php");
            }

    else{
         echo "Incorrect answer";   
    }
}
}
?>
