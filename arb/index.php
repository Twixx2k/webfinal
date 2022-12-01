<?php
   include 'header.php' ;
?>

<!DOCTYPE html>
<html lang="en">
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
<body?>
   
<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Where your smile means more.</h3>
            <p>Treat your smile, treat your soul.</p>

         <?php echo "<a class=link-btn href='login.php?error=PleaseSignup'>Book an appointment</a>"; ?>

         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/aboutpic.jpg" class="w-100 mb-4 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Genuine Dental Care For Your Family</h3>
            <p>We are committed to offering quality dental care for the whole family. Whether you are in need of cosmetic dentistry, restorative work, or a regular dental checkup, you are in good hands with our friendly, skilled dental technicians and qualified dentists.</p>
            <a href="contact.php" class="link-btn">Book an appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->
<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>teeth whitening</h3>
         <p>Want a whiter smile? Your main options are at-home and in-office bleaching. At-home teeth whitening involves custom-made dental trays filled with hydrogen peroxide gel that you can use at home. For in-office bleaching, your dentist will combine hydrogen peroxide gel with a light source to speed up the whitening process.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>dental braces</h3>
         <p>Dental braces (also known as braces, orthodontic cases, or cases) are devices used in orthodontics that align and straighten teeth and help position them with regard to a person's bite, while also aiming to improve dental health.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>cosmetics dentistry</h3>
         <p>Cosmetic dentistry is the branch of dentistry that focuses on improving the appearance of your smile. Common cosmetic dental treatments include teeth whitening, dental bonding and veneers.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>dental procedure that relieves pain caused by an infected or abscessed tooth. During the root canal process, the inflamed pulp is removed. The surfaces inside the tooth are then cleaned and disinfected, and a filling is placed to seal the space.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>The goal is to prevent complications such as tooth decay (cavities) and gum disease and to maintain the overall health of your mouth. A healthy mouth, free of infections, injuries and other problems with teeth and gums, is important in maintaining your overall health.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>The teeth and gums should be inspected and any caries, badly broken teeth, large missing fillings, sore/swollen/retracted/bleeding gums noted. The presence of prostheses should be identified.</p>
      </div>

   </div>

</section>

<!-- services section ends -->


<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/cardo.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>CARDO DALISAY</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/jp.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>GAYPONG GONZALES</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pinkguy.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>PINKGUY</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->
<!-- footer section starts  -->

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

<!-- footer section ends -->

      </body>
      </html>