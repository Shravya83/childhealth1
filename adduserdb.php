<?php
include("dbconfig.php");
 session_start();
 $user=$_SESSION['username'];
 $pass=$_SESSION['password'];
        
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user=$_SESSION['username'];
        $pass=$_SESSION['password'];
       
    }
    else
    {
        
      echo '<META http-equiv="refresh" content="0;logout">';
    }?>
<?php
include 'dbconfig.php';
if(isset($_POST['adduser']))
{
   $name=$_POST['name'];
    $phno=$_POST['phno'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $address=$_POST['address'];                                            
    $blood=$_POST['blood'];                                              
  if($password==$repassword)
  {
         $sql = "INSERT INTO `cust` (`name`, `password`, `address`, `phno`, `email`, `bloodgrop`) VALUES ('$name', '$password', '$address', '$phno', '$emailid', '$blood')";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Registration Succesfully\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;viewdoctorshosp\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo '<META http-equiv="refresh" content="0;viewdoctorshosp">';
    }
  }
  else{
         echo "<script type=\"text/javascript\">alert(\"Password Mismatch\");</script>";
         echo '<META http-equiv="refresh" content="0;viewdoctorshosp">';
    
}
}
else
{
  echo '<META http-equiv="refresh" content="0;viewdoctorshosp">';
}
?>

