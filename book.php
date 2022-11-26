<!DOCTYPE HTML>
<?php
include("dbconfig.php");
 session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user=$_SESSION['username'];
        $pass=$_SESSION['password'];
    }
    else
    {
      echo '<META http-equiv="refresh" content="0;logout">';
    }
    $did=$_GET['id'];
    $date=$_GET['date'];
    $time=$_GET['time'];
    $pid=$user;
                
          
                    $sql = "INSERT INTO `booking` (`id`, `did`, `pid`, `date`, `time`) VALUES ('','$did','$pid','$date','$time')";
                     if(mysqli_query($conn, $sql))
                    {
                           $feed=null;
                           
                           
                            echo "<script type=\"text/javascript\">alert(\"Booking Successful\");</script>";
                            echo '<META http-equiv="refresh" content="0;userappointments">';
                             
                }
                else{
                    echo '<span style="color:red;">DB Encountered an error</span>';
                }
    ?>
