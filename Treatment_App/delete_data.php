<?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","myproject");
    $query="delete from doctor where id='".$id."' ";
    if(mysqli_query($con,$query)==true){
        header("Loaction: doctor_details.php");
    }
    mysqli_close($con);
?>