<?php
if(isset($_POST['hospitallogin']))
{
    session_start();
  $user=$_POST['username'];
  $password=$_POST['password'];
  include 'dbconfig.php';
  $sql= "SELECT * FROM `hospital` where `emailid`='$user' and `password`='$password'";

          $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
         
            $_SESSION['username']=$user;
    $_SESSION['password']=$password;
   
   
          echo'<META http-equiv="refresh" content="0;viewdoctorshosp">';
   
          
      }  
 }
  else{
        echo'<script>alert("Username or password Mismatch")</script>';
         echo '<META http-equiv="refresh" content="0;logout.php">';
  }
}
 else{
     echo '<META http-equiv="refresh" content="0;logout.php">';
}

 ?>   

 
     
