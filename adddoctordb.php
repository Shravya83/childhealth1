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
if(isset($_POST['adddoc']))
{
   $name=$_POST['name'];
    $phno=$_POST['phno'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $category=$_POST['category'];                                            
                                                    
  if($password==$repassword)
  {
         $sql = "INSERT INTO `doctordb` (`emailid`, `name`, `password`, `phno`, `category`, `hid`) VALUES ('$emailid', '$name', '$password', '$phno', '$category', '$user')";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Doctor Added Succesfully\");</script>";
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

