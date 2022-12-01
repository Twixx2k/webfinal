<?php
 
 @include 'config.php';
  
?>

<?php


if (isset($_GET['update'])){
    $id=$_GET['update'];
    $sql="update `appointment` set status='Approved' where id=$id";
   $result= mysqli_query($conn,$sql);
    if ($result){
        
        header("location: booking.php");
     
    }
}
       if (isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql="delete from `appointment` where id=$id";
       $result= mysqli_query($conn,$sql);
        if ($result){
            
            header("location: booking.php");    
        }
    }

     



     