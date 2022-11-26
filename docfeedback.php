
<?php include 'doctorheader.php';
error_reporting(0);?>
<section class="layout_padding">
         <div class="container">
         
               
       
           
					<h2 class="header t-center">Feedback</h2>
                                       <?php
                                       include 'dbconfig.php';
                                        $sql = "SELECT * FROM `feedback` where `hid`='$user'";
                                        //echo $sql;
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $count=0;
                                            $total=0;
                                            while($row=$result->fetch_assoc()) {
                                                $rate=$row['rate'];
                                                $count++;
                                                $total=$total+$rate;
                                                
                                            }
                                            $avg=$total/$count;
                                            echo "<h1>Rating: $avg</h1>";
                                        }
                                        $sql = "SELECT * FROM `feedback` where `hid`='$user'";
                                        //echo $sql;
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                           while($row = $result->fetch_assoc()) {
                                                $rate=$row['rate'];
                                                $content=$row['content'];
                                                $user=$row['uname'];
                                                 
                                                echo "<h2>$user ($rate)</h2><h3>$content</h3><br><br>";
                                            }
                                           
                                        }
                                       ?>
                                        
                           </div>
         </section>
                     
<?php include 'footer.php';?>