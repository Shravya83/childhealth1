<?php include 'header.php';?> 
<div class="section layout_padding">
         <div class="container">
<div class="row">
               <div class="col-md-4">
                  <div class="full comment_form">
                      <form action="" method="POST">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                
                                     <h2>Find Nearby Child Health-care centers</h2>
                                    <input type="number" name="pin" placeholder="Enter Area Pin Code" required />
                                    <center><input type="submit" name="ser" value="Search"></center>
                                   
                                 </div>
                              </div>
                              
                          
                        </fieldset>
                     </form>
                       </div>
                  </div>
    <div class="col-md-6">
        <h2 align="center">View Hospital</h2>
                    
        <?php
        include 'dbconfig.php';
        if(isset($_POST['ser'])){
            $pin=$_POST['pin'];
       $sql = "SELECT * FROM `hospital` where pin='$pin'";
//where Candidateid='$CandidateID'
     // echo $sql;
       $name=null;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo " <p><table align=\"center\" border=\"2\" style='background:#ffffff;'><tr><th>Email ID</th><th>Name</th><th>Phone Number</th><th>Address</th></tr>";
    while($row = $result->fetch_assoc()) {
        $id=$row["emailid"];
        $name=$row["name"]; 
        $phno=$row["phno"]; 
        $address=$row['address'];
        $pin=$row['pin'];
        


        echo "<tr><td> $id </td><td> $name</td><td> $phno</td><td>$address-$pin</td></tr>";
    }
    echo " </table></p>";
}
else{
    echo "<h3>No Hospital Found Please try other Area Pin</h3>";
}
$conn->close();
        }
          

        ?>
                    
    </div>
               </div>
         </div></div> 
<?php include 'footer.php';?>