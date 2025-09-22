<?php
    $conn = mysqli_connect('localhost','root','','crud');
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $pin=$_POST['pin'];

        $query = "insert into users (name, email, address, pin) values ('$name','$email','$address','$pin')";
        $query_run = mysqli_query($conn, $query); 
        if($query_run)
    {
       echo "saved";
       header('location: index.php');
    }else{
       echo "not saved";
    }
 }

 // updating data 
   if(isset($_POST['update']))
    {
        $update_id = $_POST['edit_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $pin=$_POST['pin'];

        $query_update = "update users set name='$name', email='$email', address='$address', pin='$pin' where id='$update_id'";
        $query_update_run = mysqli_query($conn, $query_update); 

        if($query_update_run)
           {
             echo "Data Updates";
             header('location: index.php');
           }else{
            echo "Data not updates";
            header('location: index.php');
    }

    }
?>