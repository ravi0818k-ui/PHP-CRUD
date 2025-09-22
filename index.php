<?php
   include ('includes/header.php');
?>
    <div class="container">
       <div class="row">
             <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            PHP || CRUD
                            
                        </h4>

                    </div>
                    <div class="card-body" >
                            <?php    
                                $conn = mysqli_connect('localhost','root','','crud');
                                $register = ' select * from users';
                                $register_num= mysqli_query($conn,$register);
                        
                                if(mysqli_num_rows($register_num) > 0)
                                {
                            ?>          
                       <table class="table table-bordered col-md-12">
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">pincode</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  while($reg_now = mysqli_fetch_array($register_num))
                                    {
                                ?>
                                <tr>
                                <th><?php echo $reg_now['id']; ?></th>
                                <td><?php echo $reg_now['name']; ?></td>
                                <td><?php echo $reg_now['email']; ?></td>
                                <td><?php echo $reg_now['address']; ?></td>
                                <td><?php echo $reg_now['pin']; ?></td>
                                <td><a href="update.php?id=<?php echo $reg_now['id']; ?>" class="btn btn-warning" >Edit</a></td>
                                <td><a href="delete.php" class="btn btn-danger" >Delete</a></td>
                                
                                </tr>
                                <?php   }  ?>
                                
                            </tbody>
                            </table>
                             
                                    <?php
                                }else{
                                    echo "Record Not Found";
                                }
                            ?>
                    </div>
                </div>
             </div>
       </div>
    </div>
    <?php//input form ?>
    <div class="container">
    <div class="row">
       <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                     <h2>Fill This Form</h2>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                   <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
                       <input type="text" class="form-control" name="name" i>
                   </div>

                   <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Email address</label>
                       <input type="email" class="form-control" name="email" i>
                  </div>

                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Address</label>
                       <input type="text" class="form-control" name="address" i>
                 </div>

                 <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Pin Code</label>
                       <input type="text" class="form-control" name="pin" i>
                 </div>
                       <a href="index.php" class="btn btn-outline-danger">Cancel</a>
                       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>
<?php
   include ('includes/footer.php');
?>