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
if(isset($_POST['editdoc']))
{
    $id=$_GET['id'];
   $name=$_POST['name'];
    $phno=$_POST['phno'];
    $emailid=$_POST['emailid'];
    $category=$_POST['category'];                                            
                                                    
  
         $sql = "UPDATE `doctordb` SET `emailid`='$emailid', `name`='$name', `phno`='$phno', `category`='$category' WHERE `emailid`='$id'";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Doctor Updated Succesfully\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;viewdoctorshosp\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo '<META http-equiv="refresh" content="0;viewdoctorshosp">';
    }
  
}
else
{
  echo '<META http-equiv="refresh" content="0;viewdoctorshosp">';
}
?>

