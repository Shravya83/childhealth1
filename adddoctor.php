
<?php include 'hospitalheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="adddoctordb" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              
					<h2 class="header t-center">Add Doctor</h2>
                                        <input type="email" name="emailid" id="username" placeholder="Enter Email ID" required="required" /><br>
                                         <input type="text" name="name" id="username" placeholder="Doctor Name" required="required" /><br>
					<input type="password" name="password" id="password" placeholder="Enter Pasword" required="required" /><br>
                                        <input type="password" name="repassword" id="password" placeholder="Re-Enter Pasword" required="required" /><br>
                                        <input type="number" name="phno" id="username" placeholder="Enter Phone Number" required="required" /><br>
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
                                        <center><input type="submit" name="adddoc" value="Add"></center>
                                       
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