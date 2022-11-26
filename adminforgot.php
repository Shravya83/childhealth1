
<?php include 'header.php';?>
<section class="layout_padding">
         <div class="container">
          <div class="row">
               <div class="col-md-4">
                    
                </div>
               <div class="col-md-4">
                  <div class="full comment_form">
                      <form action="adminppass" method='POST'>
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
					<h2 class="header t-center">Admin Password Reset</h2>
                                        <input type="text" name="username" id="username" placeholder="Enter Your Email ID" required="required" /><br>
					
					<center><input type="submit" name="userlogin" value="Send Email"></center>
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