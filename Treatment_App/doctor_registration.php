<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
    ini_set('display_errors', 0);
    include('header.php');
    echo '<h1>Doctor Registration Form</h1>
        <pre>
            <form method="POST" action="doctor_registration.php">
                ID :              <input type="text" name="id" required>

                Fullname :        <input type="text" name="fullname" required>

                Email :           <input type="email" name="email" required>

                Contect_No :      <input type="text" name="contect_no" required>

                Address :         <input type="text" name="address" required>

                Adhar_No :        <input type="text" name="adhar_no" required>

                Pan_No :          <input type="text" name="pan_no" required>

                Joining_Date :    <input type="date" name="joining_data" required>

                Specility_Id :    <input type="text" name="specility_id" required>

                Visit_Time_From : <input type="time" name="visit_time_from" required>

                Visit_Time_To :   <input type="time" name="visit_time_to" required>

                Created_Date :    <input type="date" name="craeted_data" required>

                Username :        <input type="text" name="username" required>

                Password :        <input type="password" name="password" required>

                Status :          <input type="text" name="status" required>

                <input type="submit" value="submit">
            </form>
        </pre>';

    $id=$_REQUEST['id'];
    $fullname=$_REQUEST['fullname'];
    $email=$_REQUEST['email'];
    $contect_no=$_REQUEST['contect_no'];
    $address=$_REQUEST['address'];
    $adhar_no=$_REQUEST['adhar_no'];
    $pan_no=$_REQUEST['pan_no'];
    $joining_date=$_REQUEST['joining_data'];
    $specility_id=$_REQUEST['specility_id'];
    $visit_time_from=$_REQUEST['visit_time_from'];
    $visit_time_to=$_REQUEST['visit_time_to'];
    $craeted_data=$_REQUEST['craeted_data'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $status=$_REQUEST['status'];
    $con=mysqli_connect("localhost","root","","myproject");
    $query=" INSERT INTO doctor VALUES('$id','$fullname','$email','$contect_no','$address','$adhar_no','$pan_no','$joining_date','$specility_id','$visit_time_from','$visit_time_to','$craeted_data','$username','$password','$status') ";
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