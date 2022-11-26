
<?php include 'adminheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                      <h2 align="center">View Hospital</h2>
                     <p><table align="center" border="2"><tr><th>Email ID</th><th>Name</th><th>Phone Number</th><th>Address</th><th></th><th></th></tr>
        <?php
        include 'dbconfig.php';
            
       $sql = "SELECT * FROM `hospital`";
//where Candidateid='$CandidateID'
     // echo $sql;
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
        


        echo "<tr><td> $id </td><td> $name</td><td> $phno</td><td>$address-$pin</td><td><a href=edithosp?id=$id>Edit</td><td><a href=delhosp?id=$id>Delete</td></td></tr>";
    }
}
$conn->close();

          

        ?>
                     </table></p><br><br><br><br><br><br><br><br><br><br>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'footer.php';?>