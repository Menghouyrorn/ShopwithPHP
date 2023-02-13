<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All User</title>
</head>
<style>
    .page_viewuser{
        width:100%;
        height:100vh;
    }
    .list_viewuser_page_content_img{
        display:flex;
        justify-content:space-between;
        align-items:center;
        width:100%;
        background-color:#D9D9D9;
        height:70px;
        border-radius:5px;
        margin-top:10px;
        cursor: pointer;
    }
    .list_viewuser_page_content_img:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .list_viewuser_page_content_img img{
        width:70px;
        height:70px;
    }
    .list_viewuser_page_content_img h3,p{
        margin:0;
    }
    .list_viewuser_page_content_title{
        display:flex;
        align-items:center;
    }
    .list_viewuser_page_content_title_test{
        margin-left:15px;
    }
    .list_viewuser_page_content_button button{
        width:90px;
        height:40px;
        margin-right:20px;
        border-radius:5px;
        border:none;
        background-color:#76FFFF;
        font-size:15px;
        transition:0.3s all ease;
        cursor: pointer;
    }
    .list_viewuser_page_content_button button:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .dailog_listall_edit{
        width:480px;
        height:460px;
        background-color:white;
        position:absolute;
        top:14%;
        right:20%;
        border-radius:7px;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
    .dailog_listall_edit_button{
        display:flex;
        justify-content:end;
        position:relative;
        top:-10px;
        right:-10px;
        margin-bottom:0;
    }
    .button_dailog_listall_edit{
        width:30px;
        height:30px;
        font-size:16px;
        border:none;
        border-radius:5px;
        cursor:pointer;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
        background-color:#0D99FF;
        color:white;
    }
    .dailog_listall_edit input{
        width:90%;
        height:40px;
        border-radius:5px;
        margin-left:20px;
        margin-top:30px;
    } 
    .add_new_product_submit{
        display:flex;
        justify-content:center;
        margin-top:20px;
        
    }
    .add_new_product_submit button{
        width:35%;
        height:45px;
        border-radius:6px;
        border:none;
        background-color:#0D99FF;
        font-size:20px;
        transition:0.3s all ease;
        cursor:pointer;
    }
    .add_new_product_submit button:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
</style>

<body>
    <div class='page_viewuser'>
            <?php
                include "../query/dbconection.php";
                $query="SELECT * FROM `user` where `status`='enable' ORDER BY `id` DESC";
                $rs=mysqli_query($db,$query);
                if(mysqli_num_rows($rs)>0){
                    while($row=mysqli_fetch_assoc($rs)){
            ?>
        <div class="list_viewuser_page_content_img">
            <div class='list_viewuser_page_content_title'>
                <img src="https://cdn4.iconfinder.com/data/icons/evil-icons-user-interface/64/avatar-512.png" alt="image profile">
                <div class='list_viewuser_page_content_title_test'>
                    <h3><?php echo $row['username'];?></h3>
                    <p><?php echo $row['email'];?></p>
                </div>
            </div>
            <div class='list_viewuser_page_content_button'>
            <form action='' method='post'>
                <?php
                    echo "<button type='submit' name='edit' value='".$row['id']."'>Edit</button>";
                    echo "<button type='submit' name='delete' value='".$row['id']."'>Delete</button>";
                ?>
            </form>  
            </div>
        </div>
        <?php
                 }
                }
            ?>
        <div>
        <?php
                if(isset($_POST['edit'])){
                    $id= $_POST['edit'];
                    //echo $id;
                    $querydata="SELECT * FROM `user` where `id`='".$id."' AND `status`='enable'";
                    $result=mysqli_query($db,$querydata);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<div class='dailog_listall_edit'>";
                            echo "<div class='dailog_listall_edit_button'>";
                            echo "<form action='' method='post'>";
                            echo "<button type='submit' name='close' value='off' class='button_dailog_listall_edit'>X</button>";
                            echo "</form>";
                            echo "</div>";
                            echo "<form action='#' method='post'>";
                            echo "<input type='text' name='username' value='".$row['username']."'>";
                            echo "<input type='email' name='email' value='".$row['email']."'>";
                            echo "<input type='password' name='password' value='".$row['password']."'>";
                            echo "<div class='add_new_product_submit'>";
                            echo "<button type='submit' name='id' value='".$id."'>Update</button>";
                            echo "</div>";
                            echo "</form>";
                            echo "</div>";
                        }
                    }  
                    
                }else if(isset($_POST['delete'])){
                    $id=$_POST['delete'];
                    $queryupdate="UPDATE `user` SET `status`='disable' where `id`='".$id."'";
                    if(mysqli_query($db,$queryupdate)){
                        echo "<script>alert('Delete User Successfull')</script>";
                       }else{
                           echo "<script>alert('error')</script>";
                       }
                }else{
                    echo "";
                } 
                if(isset($_POST['username'])){
                    $id= $_POST['id'];
                    $name=$_POST['username'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $queryu="SELECT * FROM `user` where `email`='".$email."' AND `status`='enable'";
                    $rs=mysqli_query($db,$queryu);
                    if(mysqli_num_rows($rs)>0){
                        echo "<script>alert('The email is use alert')</script>";
                        // echo $email;
                    }else{
                        $query="UPDATE `user` SET `username`='".$name."',`email`='".$email."',`password`='".$password."' WHERE `status`='enable' AND `id`='".$id."'";
                    if(mysqli_query($db,$query)){
                        echo "<script>alert('Update User Successfull')</script>";
                    }else{
                        echo "<script>alert('error')</script>";
                    }
                    }
                    
                }else{
                    echo "";
                }       
                if(isset($_POST['close'])){
                    if(empty($_POST['close'])){
                        echo "";
                    }
                }
                
            ?>
        </div>
        
        <div class='pagination_viewUser_page'>

        </div>
    </div>
</body>
</html>