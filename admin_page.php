<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <div class="box">

   <table>
    <thead>
    <tr>
        <th>S no</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>

    <?php

      $sql= "Select * from `user_form`";
      $result= mysqli_query($conn,$sql);

      if($result){
      while($row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $name=$row['name'];
         $email=$row['email'];
         $mobile=$row['mobile'];
         $password=$row['password'];

         echo '<tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         <td>'.$password.'</td>
   </tr>';
   
         }

      }

    ?>
    <!--  -->
    
    </tbody>
</table>  
<a href="logout.php" class="btn">logout</a>

</div>

</body>
</html>