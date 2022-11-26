
<?php include 'doctorheader.php';
$id=$_GET['id']?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="" method='POST'>
                        <fieldset>
                           <div class="col-md-4">
                              <div class="row">
                                  <h2 class="header t-center">Do You Really want to delete?</h2><br></div>
                               <div class="row">   <center><input type="submit" name="yes" value="YES" class="primary" /></center>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <center><input type="submit" name="no" value="NO" class="primary" /></center>
                                        </div>
                              </div>
                               
                        </fieldset>
                     </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php if(isset($_POST['yes']))
{
include 'dbconfig.php';
$sql="delete from `booking` where `id`='$id'";
if(mysqli_query($conn, $sql))
{
     echo "<script type=\"text/javascript\">alert(\"Appointment Deleted Succesfully\");</script>";
                 echo "<META http-equiv=\"refresh\" content=\"0;viewappointmentdoc\">";
}
else
{
    echo "<script type=\"text/javascript\">alert(\"Appointment Deleting Failed\");</script>";
                 echo "<META http-equiv=\"refresh\" content=\"0;viewappointmentdoc\">"; 
}
}
else if(isset ($_POST['no']))
{
      echo '<META http-equiv="refresh" content="0;viewappointmentdoc">';
}
?>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>