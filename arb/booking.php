<?php
  include 'userHeader.php';
  @include 'config.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <!-- bootstrap cdn link  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
  
</style>
<body style="">
  <div class="container mt-5">

<section class="browserPage" id="homeFront">  

 <!-- Trigger the modal with a button -->
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD PATIENTS</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <p>CHUCHUCHU</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>

<table class="table mt-1" id="table">

  <thead>
    <tr>
      <th scope="col" class="adminFontColor">Appointment id</th>
      <th scope="col" class="adminFontColor">PatientName</th>
      <th scope="col" class="adminFontColor">PhoneNumber</th>
      <th scope="col" class="adminFontColor">Services</th>
      <th scope="col" class="adminFontColor">Date/Time</th>
      <th scope="col" class="adminFontColor">Status</th>
      <th scope="col" class="adminFontColor">Action</th>
     
    </tr>
  </thead>
  <tbody>

  <?php 
  
  $sql1="Select * from appointment ";
  
  
 

  $result=mysqli_query($conn,$sql1);
 

  if ($result) {
     while ( $row=mysqli_fetch_assoc($result)){

        $booking_ID=$row ['id'];
        $customerName= $row['patientName'];
        $services= $row['services'];
        $dateTime=$row ['dateTime'];
        $status=$row ['status'];
        $phone=$row ['phone'];
         
         
         echo ' <tr>
         <th scope="row" class="adminFontColor">'.$booking_ID.'</th>
         <td class="adminFontColor">'.$customerName.'</td>
         <td class="adminFontColor">'.$phone.'</td>
         <td class="adminFontColor">'.$services.'</td>
         <td class="adminFontColor">'.$dateTime.'</td>
         <td class="adminFontColor">'.$status.'</td>
        
        
       
         <td>
         <div>
         <form action="updateDeleteStatus.php">
<button class="btn btn-primary"><a href="updateDeleteStatus.php? update= '.$booking_ID.'" class ="text-light">Update</a></button>
<button class="btn btn-danger"><a href="updateDeleteStatus.php? delete= '.$booking_ID.'" class ="text-light">Delete</a></button>
<h1> </h1>
</div>
</form>



</td>
         </tr>';
     }
  }
  
  ?>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#exampleModal").modal();
  });
});
</script>


    </div>

   
  </tbody>
</table>
    
</body>
</html>