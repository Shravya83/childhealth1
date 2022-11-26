
<?php include 'hospitalheader.php';?>
<?php
$id=$_GET['id'];
include 'dbconfig.php';
$sql = "SELECT * FROM `doctordb` where `emailid`='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $emailid=$row["emailid"];
        $name=$row["name"]; 
        $phno=$row["phno"]; 
        $category=$row['category'];
        $hid=$row['hid'];
    }
}
?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="editdoctordb?id=<?php echo $id;?>" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              
					<h2 class="header t-center">Update Doctor</h2>
                                        <input type="email" name="emailid" id="username" value="<?php echo $emailid;?>" placeholder="Enter Email ID" required="required" /><br>
                                         <input type="text" name="name" id="username" value="<?php echo $name;?>" placeholder="Doctor Name" required="required" /><br>
					<input type="number" name="phno" id="username" value="<?php echo $phno;?>" placeholder="Enter Phone Number" required="required" /><br>
                                        <select style="width: 100%;" name="category" required>
                                            <option disabled selected>Select Category</option>
                                            <?php 
                                            $sql = "SELECT * FROM `category`";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    $name=$row['name'];
                                                    echo "<option>$name</option>";
                                                }
                                            }
                                            ?>
                                        </select><br>
                                        <center><input type="submit" name="editdoc" value="Add"></center>
                                       
                              </div>
                               
                        </fieldset>
                     </form>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>