<?php
include 'dbconfig.php';
if(isset($_POST['addhosp']))
{
   $name=$_POST['name'];
    $phno=$_POST['phno'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $address=$_POST['address'];
    $pin=$_POST['pin'];                                            
                                                    
  if($password==$repassword)
  {
         $sql = "INSERT INTO `hospital` (`emailid`, `name`, `password`, `phno`, `address`, `pin`) VALUES ('$emailid', '$name', '$password', '$phno', '$address', '$pin')";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Hospital Added Succesfully\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;addhospital\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo '<META http-equiv="refresh" content="0;addhospital">';
    }
  }
  else{
         echo "<script type=\"text/javascript\">alert(\"Password Mismatch\");</script>";
         echo '<META http-equiv="refresh" content="0;addhospital">';
    
}
}
else
{
  echo '<META http-equiv="refresh" content="0;addhospital">';
}
?>

