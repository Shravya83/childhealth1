
<?php include 'doctorheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Appointments</h2>
                   <?php
                           include 'dbconfig.php';
                           
                   $sql = "SELECT * FROM `booking` WHERE `did`='$user'";
            $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 echo "<table border=2 align=center style='background:#ffffff;'><tr><th>Patient Name</th><th>Date and Time</th><td></td><td></td><td></td></tr>";
                  while($row = $result->fetch_assoc()) {
                      $pid=$row['pid'];
                      $date=$row['date'];
                      $time=$row['time'];
                      $id=$row['id'];
                       $sql1 = "SELECT * FROM `cust` WHERE `email`='$pid'";
            $result1 = $conn->query($sql1);
             if ($result1->num_rows > 0) {
                
                  while($row1 = $result1->fetch_assoc()) {
                      $pname=$row1['name'];
                  }
             }
                      echo "<tt><td>$pname</td><td>$date ($time)</td><td><a href='candoc?id=$id'>Cancle</a></td><td><a href='addpre?id=$pid'>Add Prescription</a></td><td><a href='viewpre?id=$pid'>View History</a></td></tr>";
                  }
                  echo "</table>";
                  }
                           
                   ?>
                 </div>
            </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>