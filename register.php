<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Page</title>
</head>

<style>
* {
    box-sizing: border-box;
}
body {
    padding: 0;
    margin: 0;
}
.mid-contain {
    width: 500px;
    height: 580px;
    margin: auto;
    background-color: white;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
    cursor: pointer;
    transition: 10s all ease;
    margin-top: 8vh;
}
.mid-contain:hover {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.container {
    width: 450px;
    height: 550px;
    margin: auto;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    border-radius: 5px;
}
input[type=text]:focus, input[type=password]:focus {
    font-size: 15px;
    outline: none;
}
.registerbtn {
    background-color: #EB83E0;
    color: white;
    padding: 14px 16px;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 10px;
    opacity: 0.9;
    font-size: 18px;
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
}
.registerbtn:hover {
    opacity: 1;
}
.box-or button {
    height: 20px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    float: left;
    width: 8%;
}
.hr1 {
    float: left;
    width: 46%;
}
.hr2 {
    float: right;
    width: 46%;
}
.link a {
    text-decoration: none;
  margin-left:20px;
  }
.forget_page_link{
  display:flex;
  justify-content: space-between;

}
form {
    position: relative;
    top: 30px;
}
</style>
<?php
  session_start();
  include('./query/dbconection.php');
  if(isset($_POST['register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['psw'];
    $passwordCurrent=$_POST['pswcurrent'];
    if($password!=$passwordCurrent){
      echo "<script>alert('Password is not much')</script>";
    }else {
      $select ="SELECT * FROM `user` where `email`='".$email."'";
      $rs=$db->query($select);
      if($rs->num_rows>0){
        while($row=$rs->fetch_assoc()){
          if($email==$row['email']){
            echo "<script>alert('Email is Use Alert Please input the new email')</script>";
          }
        }
      }else{
        $query="INSERT INTO `user`( `username`,`email`, `password`,`status`) VALUES ('".$username."','".$email."','".$password."','enable')";
      
        if(mysqli_query($db,$query)){
          echo("<script>alert('create successfully')</script>");
          header('location: ./login.php');
        }else {
          echo "<script>alert('error')</script>";
        }
        $_SESSION['username']=$username;
      }
    }

  }
?>
<body>
<div class="contain">
  <div class="mid-contain">
    <div class="container">
      <form action="#" method="post">
        
        <h1>SIGN UP</h1>
        <label form='username'>FullName</label><br>
        <input type="text" name='username' id="username" require>
        <label for="email"><b>Email</b></label>
        <br>
        <input type="text" name="email" id="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" name="psw" id="psw" required>
        <label for="psw-current"><b>CurrentPassword</b></label>
        <input type="password" name="pswcurrent" id="psw-current" required>
        <button type="submit" class="registerbtn" name="register">SIGN UP</button>
        <br>
        <br>
        <div>
          <hr class="hr1">
          <div class="box-or">
            <Button>OR</Button>
          </div>
          <hr class="hr2">
        </div>
        <br>
        <br>
        <div class='forget_page_link'>
        <div class='link'>
           <a href="./login.php">has Account ?</a>
          </div>
        <div class="link">
          <a href="./forgetpassword.php">Forgetpassword ?</a>
        </div>
        
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>