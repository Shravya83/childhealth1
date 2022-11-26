<?php
if(isset($_POST['userlogin']))
{
    session_start();
  $user=$_GET['id'];
  $otp=$_POST['otp'];
  $newpass1=$_POST['newpass1'];
  $newpass2=$_POST['newpass2'];
  include 'dbconfig.php';
  $sql= "SELECT * FROM `hospital` where `emailid`='$user' and `temppass`='$otp'";

          $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
         if($newpass1==$newpass2){
            $_SESSION['username']=$user;
    $sql1 = "UPDATE `hospital` SET `temppass` = '', `password`='$newpass1' WHERE `emailid` = '$user';";
     
            if(mysqli_query($conn, $sql1))
            {
                
                 echo'<script>alert("Password Updated")</script>';
         echo '<META http-equiv="refresh" content="0;hospital">';
            }
         }else{
        echo'<script>alert("New Password Mismatch")</script>';
         echo '<META http-equiv="refresh" content="0;logout.php">';
  }
            

 }
  }
  else{
        echo'<script>alert("OTP Mismatch")</script>';
        echo '<META http-equiv="refresh" content="0;logout.php">';
  }
}
 else{
     echo '<META http-equiv="refresh" content="0;logout.php">';
}

 ?>