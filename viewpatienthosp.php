
<?php include 'hospitalheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Appointments</h2>
                   <?php
                           include 'dbconfig.php';
                           $sql2 = "SELECT * FROM `doctordb` where `hid`='$user'";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $did=$row2['emailid'];
                                $dname=$row2['name'];
                   $sql = "SELECT * FROM `booking` WHERE `did`='$did'";
            $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 echo "<table border=2 align=center style='background:#ffffff;'><tr><th>Doctor</th><th>Date and Time</th></tr>";
                  while($row = $result->fetch_assoc()) {
                      $did=$row['did'];
                      $date=$row['date'];
                      $time=$row['time'];
                      $id=$row['id'];
                      
                      echo "<tt><td>$dname</td><td>$date ($time)</td></tr>";
                  }
                  echo "</table>";
                  }
                            }
                        }
                   ?>
                 </div>
            </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>