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
if(isset($_POST['addpre']))
{
   $treatment=$_POST['treatment'];
    $note=$_POST['note'];
    $category=$_POST['category'];
    $pid=$_GET['id'];
    $date=date("d-m-Y");                                            
                                                    
  
         $sql = "INSERT INTO `treatment` (`id`, `categoryid`, `treatment`, `note`, `date`, `did`, `pid`) VALUES (NULL, '$category', '$treatment', '$note', '$date', '$user', '$pid')";
     
            if(mysqli_query($conn, $sql))
            {
                 echo "<script type=\"text/javascript\">alert(\"Doctor Added Succesfully\");</script>";
                echo "<META http-equiv=\"refresh\" content=\"0;viewappointmentdoc\">";
                
            }
  
   else{
         echo "<script type=\"text/javascript\">alert(\"Error Please try later\");</script>";
         echo '<META http-equiv="refresh" content="0;viewappointmentdoc">';
    }
  
}
else
{
  echo '<META http-equiv="refresh" content="0;viewappointmentdoc">';
}
?>

