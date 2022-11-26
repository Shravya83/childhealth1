
<?php include 'header.php';
$user=$_GET['id'];?>
<section class="layout_padding">
         <div class="container">
          <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                      <form action="hosppassworddb?id=<?php echo $user;?>" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
					<h2 class="header t-center">Hospital Password Reset</h2>
                                       <input type="password" name="otp" id="password" placeholder="Enter OTP" required="required" /><br>
                                       <input type="password" name="newpass1" id="password" placeholder="Enter New Password" required="required" /><br>
                                       <input type="password" name="newpass2" id="password" placeholder="Re-Enter New Password" required="required" /><br>
					<center><input type="submit" name="userlogin" value="Update"></center>
                                        </div>
                           </div><br><br><Br><br><br>
                               
                        </fieldset>
                     </form>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>