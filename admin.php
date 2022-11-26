
<?php include 'header.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                     <form action="adminlogin" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
					<h2 class="header t-center">Admin Login</h2>
                                        <input type="text" name="username" id="username" placeholder="Admin Username" required="required" /><br>
					<input type="password" name="password" id="password" placeholder="Admin Pasword" required="required" /><br>
					<center><input type="submit" name="adminlogin" value="Login"></center>
                                        </div>
                              </div><a href="adminforgot">Forgot Password</a><br><br><Br><br><br>
                               
                        </fieldset>
                     </form>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>