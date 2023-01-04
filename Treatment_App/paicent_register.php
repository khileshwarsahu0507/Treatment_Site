<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
        ini_set('display_errors', 0);
        include('header.php');
        echo '<h1>Paicent Registration Form</h1>
        <pre>
            <form method="POST" action="paicent_register.php">
                ID :        <input type="text" name="id" required>

                Fullname :  <input type="text" name="fullname" required>

                Contect_No :<input type="text" name="contect_no" required>

                Address :   <input type="text" name="address" required>

                Adhar_No :  <input type="text" name="adhar_no" required>

                Pan_No :    <input type="text" name="pan_no" required>

                Username :  <input type="text" name="username" required>

                Password :  <input type="password" name="password" required>

                Status :    <input type="text" name="status" required>

                <input type="submit" value="submit">
            </form>
        </pre>';
    $id=$_REQUEST['id'];
    $fullname=$_REQUEST['fullname'];
    $contect_no=$_REQUEST['contect_no'];
    $address=$_REQUEST['address'];
    $adhar_no=$_REQUEST['adhar_no'];
    $pan_no=$_REQUEST['pan_no'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $status=$_REQUEST['status'];
    $con=mysqli_connect("localhost","root","","myproject");
    $query=" INSERT INTO paicent VALUES('$id','$fullname','$contect_no','$address','$adhar_no','$pan_no','$username','$password','$status') ";
    if($id!=null){
        mysqli_query($con,$query);
        echo "<h1>Data Saved Sucessfully</h1>";
    }
?>
<?php
    }else{
        header("Location: index.php");
    }
?>