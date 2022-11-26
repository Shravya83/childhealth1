
<?php include 'doctorheader.php';
$pid=$_GET['id'];?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="addpredb?id=<?php echo $pid?>" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              
					<h2 class="header t-center">Add Prescription</h2>
                                        <input type="text" name="treatment" id="username" placeholder="Enter Treatment" required="required" /><br>
                                         <input type="text" name="note" id="username" placeholder="Enter Note" required="required" /><br>
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
                                        <center><input type="submit" name="addpre" value="Add"></center>
                                       
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