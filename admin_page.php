<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="login_system_style.css">

</head>
<body>
  
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>
<?php 


require_once('connection.php');
$query = "select * from user_form";
$result = mysqli_query($conn,$query);



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch data from database in php</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>User ID</td>
                                <td>User Name</td>
                                <td>User Address</td>
                                <td>User Phone Number</td>
                                <td>User Email</td>
                                <td>User Type</td>
                                <td>Operations</td>
                                
                            </tr>
                            <tr>
                            <?php


                              while($row = mysqli_fetch_assoc($result))
                              {
                        ?>

                           <td><?php echo $row['id']?> </td>
                           <td><?php echo $row['name']?> </td>
                           <td><?php echo $row['address']?> </td>
                           <td><?php echo $row['phone']?> </td>
                           <td><?php echo $row['email']?> </td>
                           <td><?php echo $row['user_type']?> </td>
                            <td>
                            <button class="btn btn-primary"><a href = "update.php" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href = "delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>





                            


                            </tr>

                            <?php
                            }



                            ?>  

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>