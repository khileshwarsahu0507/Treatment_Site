<?php
    ini_set('display_errors', 0);
    include('main.php');
    echo '<h1>Doctor Login Page</h1>
        <pre>
            <form>
                Username:<input type="text" name="username" required>
    
                Password:<input type="password" name="password" required>
    
                <input type="submit" value="Login"> 
            </form>
            </pre>';
    session_start();
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $con=mysqli_connect("localhost","root","","myproject");
    $query="select username, password from doctor where username='".$username."' AND password='".$password."' limit 1";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        $_SESSION['doctor']=$username;
        header("Location: doctor.php");
    }else{
       
    }
    mysqli_close($con);
?>
