<?php
include 'dbconfig.php';
if(isset($_POST['addhosp']))
{
    $id=$_GET['id'];
   $name=$_POST['name'];
    $phno=$_POST['phno'];
    $emailid=$_POST['emailid'];
   $address=$_POST['address'];
    $pin=$_POST['pin'];                                            
                                                    
  
         $sql = "UPDATE `hospital` SET `emailid`='$emailid', `name`='$name', `phno`='$phno', `address`='$address', `pin`='$pin' WHERE `emailid`='$id'";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Hospital Updated Succesfully\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;viewhospital\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo '<META http-equiv="refresh" content="0;viewhospital">';
    }
  
}
else
{
  echo '<META http-equiv="refresh" content="0;viewhospital">';
}
?>

