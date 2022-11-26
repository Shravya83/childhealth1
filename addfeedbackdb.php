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
if(isset($_POST['add']))
{
   $hid=$_GET['id'];
    $comment=$_POST['comment'];
    $rate=$_POST['rate'];
                                          
                                                    
  
         $sql = "INSERT INTO `feedback` (`id`, `content`, `uname`, `hid`, `rate`) VALUES (NULL, '$comment', '$user', '$hid', '$rate');";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Feedback Added\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;userfeedback?id=$hid\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo "<META http-equiv=\"refresh\" content=\"0;userfeedback?id=$hid\">";
    }
  
}
else
{
  echo '<META http-equiv="refresh" content="0;searchdoctor">';
}
?>

