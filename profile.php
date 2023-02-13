<?php
    session_start();
   // echo($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<style>
    .profile_main_test{
        width:400px;
        height:480px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        margin:auto;
        margin-top:80px;
        border-radius:7px;
        transition:0.3s all ease;
        cursor:pointer;
    }
    .profile_main_test:hover{
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
    .profile_main_test form{
        width:90%;
        height:90%;
        margin:auto;
    }
    .profile_main_test input{
        width:100%;
        height:40px;
        border-radius:7px;
        margin-top:30px;
    }
    input[type=submit]{
        cursor:pointer;
    }
</style>
<body>
    <div>
        <div>
            <?php include "./navigationbar.php";?>
        </div>
        <div class="profile_main_test">
            <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    include './query/dbconection.php';
                    $query="SELECT * FROM `user` where `id`='".$id."'";
                    $rs=$db->query($query);
                    if($rs->num_rows>0){
                        while($row=$rs->fetch_assoc()){
                            echo "<form action='' method='post'>";
                            echo "<input type='text' name='fullname' value='".$row['username']."'>";
                            echo "<input type='email' name='email' value='".$row['email']."'>";
                            echo "<input type='password' name='psw' value='".$row['password']."'>";
                            echo "<input type='password' name='psw2' value='".$row['password']."'>";
                            echo "<input type='submit' value='Update'>";
                            echo "</form>";
                        }
                    }
                    if(isset($_POST['fullname'])){
                        $username=$_POST['fullname'];
                        $email=$_POST['email'];
                        $password=$_POST['psw'];

                        if($password!=$_POST['psw2']){
                            echo "<script>alert('Password not much!')</script>";
                        }else{
                            $queryu="SELECT * from `user` where `email`='".$email."'";
                            $rs=mysqli_query($db,$queryu);
                            if(mysqli_num_rows($rs)>0){
                                echo "<script>alert('email is use alert')</script>";
                            }else{
                            $update="UPDATE `user` set `username`='".$username."', `email`='".$email."',`password`='".$password."' WHERE `id`='".$id."'";
                            $result=$db->query($update);
                            if($result==1){
                                echo "<script>alert('Update Successfull !')</script>";
                                // header('location: ./index.php');
                            }else{
                                echo "<script>alert('error')</script>";
                            }
                        }
                        }
                    }  
                }else{
                    echo "";
                }
                
            ?>
            <!-- <form>
                <input type='text' name='id' value="<?php echo $_GET['id'];?>">
            </form> -->
        </div>
    </div>
</body>
</html>
