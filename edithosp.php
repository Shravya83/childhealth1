
<?php include 'adminheader.php';
$id=$_GET['id'];?>
<?php
        include 'dbconfig.php';
            
       $sql = "SELECT * FROM `hospital` where `emailid`='$id'";
$name=null;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["emailid"];
        $name=$row["name"]; 
        $phno=$row["phno"]; 
        $address=$row['address'];
        $pin=$row['pin'];
    }
}
$conn->close();
?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
                <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="edithospitaldb?id=<?php echo $id;?>" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
					<h2 class="header t-center">Update Hospitals</h2>
                                        <input type="email" name="emailid" value="<?php echo $id;?>" id="username" placeholder="Enter Email ID" required="required" /><br>
                                         <input type="text" name="name" value="<?php echo $name;?>" id="username" placeholder="Hospital Name" required="required" /><br>
					<input type="number" name="phno" value="<?php echo $phno;?>" id="username" placeholder="Enter Phone Number" required="required" /><br>
                                        <input type="text" name="address" value="<?php echo $address;?>" id="username" placeholder="Enter Address" required="required" /><br>
                                        <input type="number" name="pin" value="<?php echo $pin;?>" id="username" placeholder="Hospital Area Pin" required="required" /><br>
					<center><input type="submit" name="addhosp" value="Add"></center>
                                        </div>
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