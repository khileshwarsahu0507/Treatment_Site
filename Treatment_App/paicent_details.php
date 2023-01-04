<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
    $con=mysqli_connect("localhost","root","","myproject");
    $query="select * from paicent";
    $result=mysqli_query($con,$query);
    $output="";
    include('header.php');
    $output .='<h1> List of all Patient</h1>
            <table border="1" width=100%>
            <tr>
            <th>Id</th>
            <th>Fullname</th>
            <th>Contect_No</th>
            <th>Address</th>
            <th>Adhar_no</th>
            <th>Pan_No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th>Delete_Record</th>
            <th>Update_Record</th></tr>';
    while($row=mysqli_fetch_assoc($result)){
        $output .="<tr><td>{$row["id"]}</td><td>{$row["fullname"]}</td><td>{$row["contect_no"]}</td>
        <td>{$row["address"]}</td><td>{$row["adhar_no"]}</td><td>{$row["pan_no"]}</td>
        <td>{$row["username"]}</td><td>{$row["password"]}</td><td>{$row["status"]}</td>
        </td><td><button><a href='delete_data.php'>Delete</a></button></td>
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
