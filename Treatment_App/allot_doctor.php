<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
        ini_set('display_errors', 0);
        include('header.php');
        echo '<h1>Allot Doctor To Paicent</h1>
        <pre>
            <form method="POST" action="allot_doctor.php">
                ID :                        <input type="text" name="id" required>

                Doctor_Id :                 <input type="text" name="doctor_id" required>

                Paicent_ID :                <input type="text" name="paicent_id" required>

                Disease_Name :              <input type="text" name="disease_name" required>

                Appointment_DateTime :      <input type="datetime" name="appointment_datetime" required>

                Last_Appointment_DateTime : <input type="datetime" name="last_appointment_datetime" required>

                Status :                    <input type="text" name="status" required>

                <input type="submit" value="submit">
            </form>
        </pre>';
    $id=$_REQUEST['id'];
    $doctor_id=$_REQUEST['doctor_id'];
    $paicent_id=$_REQUEST['paicent_id'];
    $disease_name=$_REQUEST['disease_name'];
    $appointment_datetime=$_REQUEST['appointment_datetime'];
    $last_appointment_datetime=$_REQUEST['last_appointment_datetime'];
    $status=$_REQUEST['status'];
    $con=mysqli_connect("localhost","root","","myproject");
    $query=" INSERT INTO allotment VALUES('$id','$doctor_id','$paicent_id','$disease_name','$appointment_datetime','$last_appointment_datetime','$status') ";
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