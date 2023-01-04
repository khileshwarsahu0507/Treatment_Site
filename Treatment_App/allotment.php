<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
    $con=mysqli_connect("localhost","root","","myproject");
    $query="select * from allotment";
    $result=mysqli_query($con,$query);
    $output="";
    include('header.php');
    $output .='<h1> List of all alloated Patient</h1>
            <table border="1" width=100%>
            <tr>
            <th>Id</th>
            <th>Doctor_ID</th>
            <th>Paicent_Id</th>
            <th>Disease_Name</th>
            <th>Appointment_Date</th>
            <th>Last_Appointment</th>
            <th>Status</th>
            <th>Delete_Record</th>
            <th>Update_Record</th></tr>';
            
    while($row=mysqli_fetch_assoc($result)){
        $output .="<tr><td>{$row["id"]}</td><td>{$row["doctor_id"]}</td><td>{$row["paicent_id"]}</td>
        <td>{$row["disease_name"]}</td><td>{$row["appointment_datetime"]}</td><td>{$row["last_appointment_datetime"]}</td>
        <td>{$row["status"]}</td><td><button><a href='delete_data.php'>Delete</a></button></td>
        <td><button><a href='update_data.php'>Update</a></button></td></tr>";
    }
    $output .="</table></body></html>";
    mysqli_close($con);
    echo $output;
?>
<?php
    }else{
        header("Location: index.php");
    }
?>
