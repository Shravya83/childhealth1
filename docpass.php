<?php
if(isset($_POST['userlogin']))
{
    session_start();
  $user=$_POST['username'];
  include 'dbconfig.php';
  $sql= "SELECT * FROM `doctordb` where `emailid`='$user'";

          $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
         
            $_SESSION['username']=$user;
    
   $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
   
         $sql1 = "UPDATE `doctordb` SET `temppass` = '$s' WHERE `emailid` = '$user';";
     
            if(mysqli_query($conn, $sql1))
            {
                
                
            }
            $message = "OTP to reset password is $s";
require_once 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->SMTPDebug = 1; 
$mail->isSMTP();                   
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = TRUE;                      
$mail->Username = "smggfgc@gmail.com";             
$mail->Password = "Gfgc@bca21";                       
$mail->SMTPSecure = "tls";                       
$mail->Port = 587;                    
$mail->From = "noreplay@project.com";
$mail->FromName = "Project Name";
$mail->addAddress($user, "Child Health");
$mail->isHTML(true);
$mail->Subject = "Password Reset";
$mail->Body = $message;
$mail->AltBody = "<br>Thankyou";
if(!$mail->send())
{
echo "<script type=\"text/javascript\">alert(\"Error Please Try again after some time\");</script>";
}
else
{
echo "<script type=\"text/javascript\">alert(\"OTP has been sent to your mail address\");</script>";
}
          echo"<META http-equiv=\"refresh\" content=\"0;docnewpass?id=$user\">";
   
          
      }  
 }
  else{
        echo'<script>alert("Username Mismatch")</script>';
         echo '<META http-equiv="refresh" content="0;logout.php">';
  }
}
 else{
     echo '<META http-equiv="refresh" content="0;logout.php">';
}

 ?>