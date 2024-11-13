<?php 
//PATIENT SECTION
//Register Patient
if (isset($_POST['regp'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
  $keen = $_POST['keen'];
 $kcon = $_POST['kcon'];
  $blood = $_POST['blood'];
 $condi = $_POST['condi'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
   $sql = "INSERT INTO `patients`(`Fullname`, `Phone_Number`, `Email_Address`, `Next_of_Keen`, `Next_of_Keen_Contact`, `Blood_Type`, `Medical_Condition`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$phone','$email','$keen','$kcon','$blood','$condi','$question','$answer',md5('$password'))";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.html?userregistration=success");
 }else{
  echo "Passwords do not match.
  <br>
  <p> Click <a href='index.html'>HERE</a> to try again.</p>";
 }
}

//Add Emergency Response
if (isset($_POST['adde'])) {
 $pid = $_POST['pid'];
 $hid = $_POST['hid'];
 $medse = $_POST['medse'];
  $loc = $_POST['loc'];

 require_once 'dbconnection.inc.php';

       $sql = "SELECT * FROM `patients` WHERE `Patient_ID`='$pid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
          $row = mysqli_fetch_assoc($query);
           $type = $row['Blood_Type'];
          $pcondi = $row['Medical_Condition'];
       

               $sql2 = "SELECT * FROM `hospitals` WHERE `Hospital_ID`='$hid'";

        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){
          $row2 = mysqli_fetch_assoc($query2);
            $hname = $row2['Hospital_Name'];
          $phone = $row2['Phone_Number'];
          $email = $row2['Email_Address'];

   $sql3 = "INSERT INTO `emergency_response`(`Patient_ID`, `Hospital_ID`, `Medical_Services`, `Prior_Medical_Condition`, `Blood_Type`, `Time`, `Location`, `Status`) VALUES ('$pid','$hid','$medse','$pcondi','$type','30 min','$loc','Pending...')";
     mysqli_query($conn, $sql3);
   // var_dump($sql);
   // die();
  //header("Location: index.html?userregistration=success");
       echo "<p>Thank you for choosing us,  " . $hname . " has been informed of your situation and have dispatched a team. Kindly hang in there for at least 30 min they will be with you shortly, you can reach out to them via their <a href='mailto:". $email ."'> " . $email . " </a> or phone number " . $phone . " respectively. Take care!</p>
    <br>
    <br>
    <p>Click <a href='index2.php?emergencyresponse=success'>HERE</a> to return Home.</p>";
 }else{
  echo "Hospital does not exist.";
 }
}else{
  echo "Patient does not exist.";
 }
}

//Add Feedback
if (isset($_POST['send'])) {

  $pid = $_POST['pid'];
  $hid = $_POST['hid'];
  $feed = $_POST['feed'];

require_once 'dbconnection.inc.php';

         $sql = "SELECT * FROM `patients` WHERE `Patient_ID`='$pid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

               $sql3 = "SELECT * FROM `hospitals` WHERE `Hospital_ID`='$hid'";

        $query3 = mysqli_query($conn,$sql3);

        if(mysqli_num_rows($query3) > 0){

                       $sql3 = "SELECT * FROM `emergency_response` WHERE `Hospital_ID`='$hid' AND `Patient_ID`='$pid'";

        $query3 = mysqli_query($conn,$sql3);

        if(mysqli_num_rows($query3) > 0){

$sql2 = "INSERT INTO `feedback`(`Patient_ID`, `Hospital_ID`, `Feedback`) VALUES ('$pid','$hid','$feed')";

  mysqli_query($conn, $sql2);
   // var_dump($sql);
   // die();
  header("Location: index1.html?addfeedback=success");
}else{
  echo "There is no record of Patient ID " . $pid . " interacting with Hospital ID " . $hid . " kindly try to submit feedback once you have interacted or completed an Emergency Response.";
}
}else{
  echo "Hospital does not exist.";
}
}else{
  echo "Patient does not exist.
  <br>
  <p> Click <a href='index.html'>HERE</a> to Register first then try again.</p>";
}
}

//Search for EMT
if (isset($_POST['search'])) {
  $val = $_POST['val'];
  
  require_once 'dbconnection.inc.php';
  unset($_SESSION['fil']);
    $sql = "SELECT * FROM `hospitals` WHERE `Medical_Services` LIKE '%$val%';";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
                $_SESSION['fil'] = $row['Medical_Services'];
                header("Location: search.php");
            }else{
                echo "Search value does not exist.
                <br>
                <p> Click <a href='index2.php'>HERE</a> to try again.</p>";
            }
    }

//ADMINISTRATOR Section
//Delete Hospital/Response/Patient/Feedback  
if (isset($_POST['delete'])) {
  $id = $_POST['did'];
$module = $_POST['mod']; 

require_once 'dbconnection.inc.php';
     
    $r = 0;
    $h = 1;
    $p = 2;
    $f = 3;

if ($module == $r){
         $sql = "DELETE FROM `emergency_response` WHERE `Emergency_ID`='$id'";

        $query = mysqli_query($conn,$sql);

         header("Location: index.php?delete=success");
}else if ($module == $h){
         $sql = "DELETE FROM `hospitals` WHERE `Hospital_ID`='$id'";

        $query = mysqli_query($conn,$sql);

      header("Location: index.php?delete=success");
}else if ($module == $p){
         $sql = "DELETE FROM `patients` WHERE `Patient_ID`='$id'";

        $query = mysqli_query($conn,$sql);
        header("Location: index.php?delete=success");
}else if ($module == $f){
         $sql = "DELETE FROM `feedback` WHERE `Feedback_ID`='$id'";

        $query = mysqli_query($conn,$sql);
        header("Location: index.php?delete=success");
}else{
    echo "An error occured.";
}
            }

//Add a Hospital
if (isset($_POST['addh'])) {
 $hname = $_POST['hname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
  $loc = $_POST['loc'];
 $serve = $_POST['serve'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
   $sql = "INSERT INTO `hospitals`(`Hospital_Name`, `Hospital_Location`, `Medical_Services`, `Email_Address`, `Phone_Number`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$hname','$loc','$serve','$email','$phone','$question','$answer',md5('$password'))";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?hospitalregistration=success");
 }else{
  echo "Passwords do not match.
  <br>
  <p> Click <a href='index.php'>HERE</a> to try again.</p>";
 }
}

//Hospital Section
//Update an Emergency Response

if (isset($_POST['upa'])) {

 $rid = $_POST['rid'];
  $stat = $_POST['stat'];

require_once 'dbconnection.inc.php';

         $sql = "SELECT * FROM `emergency_response` WHERE `Emergency_ID`='$rid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

$sql2 = "UPDATE `emergency_response` SET `Status`='$stat' WHERE `Emergency_ID`='$rid'";

  mysqli_query($conn, $sql2);
   // var_dump($sql);
   // die();
  header("Location: index1.php?update=success");
  // echo "<p>Thank you for updating the Status for to Consultation " . $aid . " . Kindly reach out to Patient " . $name . " using their email <a href='mailto:". $email ."'> " . $email . " </a> or phone number " . $phone . " respectively.</p>
  //   <br>
  //   <br>
  //   <p>Click <a href='index1.php?update=success'>HERE</a> to return Home.</p>";
}else{
  echo "Emergency Response Request does not exist.";
}
}
 ?>