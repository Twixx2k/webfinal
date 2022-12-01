
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RadiantDentistryWebsite</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">
         
      <div class="logo">
         <a href="#"><img src="images/logo1.png" alt="logo"></a>
         </div>
         <a href="index.php" class="logo">Radiant<span>Dentistry.</span></a>

         <nav class="nav">
         <a href="index.php">home</a>
            <a href="user.php?#about">about</a>
            <a href="user.php?#reviews">reviews</a>
            <div class="io">
            <?php echo "<a href='login.php?error=PleaseSignup'>Book now</a>"; ?>

            </div>

            <a href="Login.php" class="me-auto">Login</a>
            </nav>

         
         
         <div id="menu-btn" class="fas fa-bars"></div>


      </div>

   </div>

</header>

<script src="javas.js"></script>