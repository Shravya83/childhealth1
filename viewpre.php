
<?php include 'doctorheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">History</h2>
                   <?php
                           include 'dbconfig.php';
                           $pid=$_GET['id'];
                   $sql = "SELECT * FROM `treatment` WHERE `pid`='$pid'";
            $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 echo "<table border=2 align=center style='background:#ffffff;'><tr><th>Doctor</th><th>Category</th><th>Treatment</th><th>Note</th><th>Date</th></tr>";
                  while($row = $result->fetch_assoc()) {
                      $date=$row['date'];
                      $treatment=$row['treatment'];
                      $note=$row['note'];
                      $categoryid=$row['categoryid'];
                      $did=$row['did'];
                       $sql1 = "SELECT * FROM `doctordb` WHERE `emailid`='$did'";
            $result1 = $conn->query($sql1);
             if ($result1->num_rows > 0) {
                
                  while($row1 = $result1->fetch_assoc()) {
                      $dname=$row1['name'];
                  }
             }
                      echo "<tt><td>$dname</td><td>$categoryid</td><td>$treatment</td><td>$treatment</td><td>$note</td><td>$date</td></tr>";
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