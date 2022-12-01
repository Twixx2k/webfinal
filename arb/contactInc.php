<?php
include_once 'header.php';
@include 'config.php';

if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $services = $_POST['services'];
    $status = $_POST['status'];
    
    
   

   

    $query = "INSERT INTO appointment (customerId, Branch_ID, Barber_ID, Booking_Time, Booking_Date, Booking_haircut, Booking_otherService, Booking_Status) 
    VALUES ('$currentId','$branch','$barber','$time','$date', '$haircut', '$allCheckedService', '$Booking_Status')";
    $query_run = mysqli_query($cons, $query);

    if($query_run)
    {
        $_SESSION['status'] = "";
        header("Location: ../3. Booking.php");
        exit();
    }
    else
    {
        $_SESSION['status'] = "";
        header("Location: ../3. Booking.php");
        exit();
    }
}
?>