
<?php include 'adminheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="addhospitaldb" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
					<h2 class="header t-center">Add Hospitals</h2>
                                        <input type="email" name="emailid" id="username" placeholder="Enter Email ID" required="required" /><br>
                                         <input type="text" name="name" id="username" placeholder="Hospital Name" required="required" /><br>
					<input type="password" name="password" id="password" placeholder="Enter Pasword" required="required" /><br>
                                        <input type="password" name="repassword" id="password" placeholder="Re-Enter Pasword" required="required" /><br>
                                        <input type="number" name="phno" id="username" placeholder="Enter Phone Number" required="required" /><br>
                                        <input type="text" name="address" id="username" placeholder="Enter Address" required="required" /><br>
                                        <input type="number" name="pin" id="username" placeholder="Hospital Area Pin" required="required" /><br>
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