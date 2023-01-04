<?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
<?php
        ini_set('display_errors', 0);
        include('header.php');
        echo '<h1>Welcome To Admin Pannel</h1>
            <pre style="font-size: larger; float: left;">
                 Admin is the role with the highest level of access to your website. 
                 Admins can add content on all pages and access all items in the Admin Toolbar. 
                 This means that Admins can control site-wide settings like the design of your 
                 website and the homepage layout. They can add and delete other admin users, 
                 and can approve or deny edits made by authors.
    
            
                Add Content - Yes, to all pages
                Publish Content - Yes, on all pages
                Add New Pages - Yes, without restriction
                Edit Site Design - Yes, full access to the Design Studio
                Edit Site Settings - Yes, full access to Admin 
                
                <img src="admin.jfif">
            </pre>;'
?>
<?php
    }else{
        header("Location: index.php");
    }
?>