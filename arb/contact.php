<?php
include 'userHeader.php';
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $patientName = mysqli_real_escape_string($conn, $_POST['name']);
   $dateTime = $_POST['date'];
   $services = $_POST['services'];
   $status = $_POST['status'];
   $phone = $_POST['phone'];


   $insert = mysqli_query($conn, "INSERT INTO `appointment`(patientName, phone, dateTime, services, status) VALUES('$patientName', '$phone','$dateTime','$services','$status')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

      <!-- bootstrap cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

</head>
<body>
<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading mt-5">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>

      <span>Patient Name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>Patient Contact Number :</span>
      <input type="number" name="phone" placeholder="enter your number" class="box" required>
      <span>appointment date/time :</span>
      <input type="datetime-local" name="date" class="box" required>
      
                                <span>Services</span>
                                <select name="services" class="box">
                                    <option>None</option>
                                    <option>Teeth Whitening</option>
                                    <option>Braces</option>
                                    <option>Cosmetics Dentistry</option>
                                    <option>Root Canal Specialist</option>
                                    <option>Live Dental Advisory</option>
                                    <option>Cavity Inspection</option>
                                </select>

                                <div class="form-group d-none">
                                    <label>pending</label>
                                    <select name="status" class="form-control">
                                        <option>Pending</option>

                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                                
      <input type="submit" value="make appointment" name="submit" class="link-btn">




   </form> 
    

</section>

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Philippines, Zamboanga City - 7000</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 06:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>abbielbatoy@gmail.com</p>
         <p>toybats@gmail.com</p>
      </div>

   </div>

</section>
</body>
</html>
<!-- contact section ends -->
