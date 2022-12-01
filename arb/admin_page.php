<?php

@include 'config.php';

session_start();

if(!isset($_SESSION ['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

</head>
<body>
   
<div class="container">

   <div class="var">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION ['admin_name'] ?></span></h1>
      <a href="booking.php" class="btn">appointments</a>
      <a href="login.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>