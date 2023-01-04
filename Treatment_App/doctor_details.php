<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
    $con=mysqli_connect("localhost","root","","myproject");
    $query="select * from doctor";
    $result=mysqli_query($con,$query);
    $output="";
    include('header.php');
    $output ='<h1> List of all Doctors</h1>
            <table border="1" width=100%>
            <tr>
            <th>Id</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Contect_No</th>
            <th>Address</th>
            <th>Adhar_No</th>
            <th>Pan_No</th>
            <th>Joining_Date</th>
            <th>Specility_Id</th>
            <th>Visit_Time_From</th>
            <th>Visit_Time_To</th>
            <th>Created_Date</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th>Delete_Record</th>
            <th>Update_Record</th></tr>';
    
    while($row=mysqli_fetch_assoc($result)){
        $output .="<tr><td>{$row["id"]}</td><td>{$row["fullname"]}</td><td>{$row["email"]}</td>
        <td>{$row["contect_no"]}</td><td>{$row["address"]}</td><td>{$row["adhar_no"]}</td>
        <td>{$row["pan_no"]}</td><td>{$row["joining_data"]}</td><td>{$row["specility_id"]}</td>
        <td>{$row["visit_time_from"]}</td><td>{$row["visit_time_to"]}</td><td>{$row["craeted_data"]}</td>
        <td>{$row["username"]}</td><td>{$row["password"]}</td><td>{$row["status"]}</td>
        <td><button><a href='delete_data.php?id={$row["id"]}'>Delete</a></button></td>
        <td><button><a href='update_data.php?id={$row["id"]}'>Update</a></button></td></tr>";
    }
    $output .="</table>";
    mysqli_close($con);
    echo $output;
?>
<?php
    }else{
        header("Location: index.php");
    }
?>
