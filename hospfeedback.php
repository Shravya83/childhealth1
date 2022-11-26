
<?php include 'hospitalheader.php';
error_reporting(0);?>
<section class="layout_padding">
         <div class="container">
          <div class="row">
               
               
              <div class="col-md-8">
                     <h2 align="center">Doctor Feedback</h2>
                      <p><table align="center" border="2" width="100%" style="background: #ffffff;">
<!--                          <tr><th>Email ID</th><th>Name</th><th>Phone Number</th><th>Category</th><th>Hospital Name and Address</th></tr>-->
        <?php
   
          
        include 'dbconfig.php';
        $id=$_GET['id'];
       $sql = "SELECT * FROM `doctordb` where emailid='".$id."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id=$row["emailid"];
        $name=$row["name"]; 
        $phno=$row["phno"]; 
        $category=$row['category'];
        $hid=$row['hid'];
        $sql1 = "SELECT * FROM `hospital` where `emailid`='$hid'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $hname=$row1['name'];
        $address=$row1['address'];
    }
}
//echo "<tr><td> $id </td><td> $name</td><td> $phno</td><td>$category</td><td>$hname<br>$address</td></tr>";
echo "<tr><td>Name: </td><td>$name</td></tr><tr><td>Category: </td><td>$category</td></tr><tr><td>Address:</td><td>$hname<br>$address<br>$phno</td></tr><tr>";
    }
}
$conn->close();
?>
                      </table></p>
                </div>
              
               </div>
           
					<h2 class="header t-center">Feedback</h2>
                                       <?php
                                       include 'dbconfig.php';
                                        $sql = "SELECT * FROM `feedback` where `hid`='$id'";
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
                                        $sql = "SELECT * FROM `feedback` where `hid`='$id'";
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