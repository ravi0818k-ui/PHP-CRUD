<?php
   include ('includes/header.php');
   include ('includes/connection.inc.php');

?>
<?php
   $id= $_GET['id'];
   $register_query = "select * from users where id ='$id' ";
   $register_query_num = mysqli_query($conn, $register_query);

   if(mysqli_num_rows($register_query_num) > 0)
   {
       while ($row = mysqli_fetch_array($register_query_num))
       {
       
?>

<div class="container">
    <div class="row">
       <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                     <h2>Updates Records</h2>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                     <input type="hidden" class="form-control" name="edit_id" value="<?php  echo $row['id']; ?>">
                   <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
                       <input type="text" class="form-control" name="name" value="<?php  echo $row['name']; ?>">
                   </div>

                   <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Email address</label>
                       <input type="email" class="form-control" name="email" value="<?php  echo $row['email']; ?>">
                  </div>

                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Address</label>
                       <input type="text" class="form-control" name="address" value="<?php  echo $row['address']; ?>" >
                 </div>

                 <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Pin Code</label>
                       <input type="text" class="form-control" name="pin" value="<?php  echo $row['pin']; ?>">
                 </div>
                       <a href="index.php" class="btn btn-outline-danger">Cancel</a>
                       <button type="submit" name="update" class="btn btn-primary">update</button>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>
         <?php
            }
         }
           else{
               echo "No record found";
          }
        ?>

<?php
   include ('includes/footer.php');
?>