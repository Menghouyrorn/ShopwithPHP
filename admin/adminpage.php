<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<style>
    .adminpage_foradmin{
        width:100%;
        height:100%;
        display:flex;
    }
    .adminpage_foradmin_leftbar{
        width:23%;
        height:100vh;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .adminpage_foradmin_leftbar a{
        display: block;
        padding:18px;
        margin-top:20px;
        text-align:center;
        text-decoration:none;
        font-size:20px;
        border-radius:5px;
        transition:0.3s all ease;
        color:black;
    }
    .adminpage_foradmin_leftbar a:hover{
        background-color:#0D99FF;
        color:white;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .adminpage_foradmin_rightbar{
        width:78%;
        height:100vh;
        margin-left:10px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .navigation_admin_page{
        display:flex;
        justify-content:space-between;
        background-color:#0D99FF;
        margin-top:0;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        margin-bottom:5px;
    }
    .navigation_admin_page button{
        width:120px;
        height:50px;
        border-radius:5px;
        border:none;
        background-color:#0D99FF;
        cursor:pointer;
        margin-right:15px;
        font-size:15px;
    }
    .navigation_admin_page button:hover{
        background-color:#0D99FF;
        color:white;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .navigation_admin_page_button {
        display:flex;
        align-items:center;
        margin-bottom:5px;
        
    }
    .navigation_admin_page h2{
        color:white;
        margin-left:20px;
    }
</style>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../login.php');
    }
    
?>
<body>
    <div class='adminpage_foradmin_page'>
        <div class='navigation_admin_page'>
            <h2>Admin</h2>
            <div class="navigation_admin_page_button">
                <?php
                    echo "<form action='' method='post'>";
                    echo "<button class='profile_button_name' type='submit' name='logout' value='true'>LOGOUT</button>";
                    echo "</form>";
                    if(isset($_POST['logout'])){
                        unset($_SESSION['username']);
                       // unset($_SESSION['cart']);
                        echo "<script>alert('Logout Successfull')</script>";
                        header('location: ../login.php');
                    }else {
                        echo"";
                    }
                ?>
            </div>
        </div>
        <div class="adminpage_foradmin">
            <div class='adminpage_foradmin_leftbar'>
                <a href="adminpage.php?view=1">Add New Products</a>
                <a href="adminpage.php?view=2">List All Products</a>
                <a href="adminpage.php?view=3">View All User</a>
                
            </div>
            <div class="adminpage_foradmin_rightbar">
                <?php
                    if(isset($_GET['view'])){
                        $view=$_GET['view'];
                        if($view==1){
                            include "./addnew.php";
                        }else if($view==2){
                            include "./listall.php";
                        }else if($view==3){
                            include "./viewuser.php";
                        }
                    }else{
                        include "./addnew.php";
                    }
                    
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>