<?php

@include 'config.php';



if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0) {

     
      

   }else{
      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
       

         $insert = "INSERT INTO user_form(name, email, password) VALUES ('$name', '$email', '$pass')";
         mysqli_query($conn, $insert);
         header("Location:login.php");
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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body class="por2">

<div class="box-tip2">
      <div class="forms2">
      <form action="" method="post">
      <h2>register now</h2>
         <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="inputBox2">
            <input type="text" name="name" required="required">
            <span>Name</span>
            <i></i>
         </div>

         <div class="inputBox2">
            <input type="email" name="email" required="required">
            <span>Email</span>
            <i></i>
         </div>

         <div class="inputBox2">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
         </div>

         <div class="inputBox2">
            <input type="password" name="cpassword" required="required">
            <span>Confirm password</span>
            <i></i>
         </div>

         <div class="links2">
         <p>already have an account?</p>
            <a href="login.php">login now</a>
         </div>

         <input type="submit" name="submit" value="register" class="links2-btn">

      </div>
   </div>

      </form>
        




</body>
</html>