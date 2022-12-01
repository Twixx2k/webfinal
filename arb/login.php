<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION ['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif ($row['user_type'] == 'user'){

         $_SESSION ['user_name'] = $row['name'];
         header('location:user.php');

      }else{
         $error[] = 'incorrect email or password!';
      }
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body class="por">
<form action="" method="post">
<div class="box-tip">
      <div class="forms">
         <h2>login now</h2>
         <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
         <div class="inputBox">
            <input type="text" name="email" required="required">
            <span>Email</span>
            <i></i>
         </div>
         <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
         </div>
         <div class="links">
         <p>don't have an account?</p>
            <a href="register_form.php">Register Here</a>
         </div>
         <input type="submit" name="submit" value="login" class="links-btn">
      </div>
   </div>

</form>

</body>
</html>