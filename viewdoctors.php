
<?php include 'adminheader.php';?>
<section class="layout_padding">
         <div class="container">
            
            
            
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                      <h2 align="center">View Doctor</h2>
                      <p><table align="center" border="2" style="background: #fffff;"><tr><th>Email ID</th><th>Name</th><th>Phone Number</th><th>Category</th><th>Hospital ID</th></tr>
        <?php
        include 'dbconfig.php';
            
       $sql = "SELECT * FROM `doctordb`";
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
        $category=$row['category'];
        $hid=$row['hid'];
        


        echo "<tr><td> $id </td><td> $name</td><td> $phno</td><td>$category</td><td>$hid</td><td><a href=adminfeedback?id=$id>Feedback</a></td></tr>";
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