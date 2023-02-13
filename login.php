<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
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
    height: 540px;
    margin: auto;
    background-color: white;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
    cursor: pointer;
    transition: 0.8s all ease;
    margin-top: 8vh;
}
.mid-contain:hover {
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
}
.container {
    width: 450px;
    height: 550px;
    margin: auto;
}
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 15px;
    margin-bottom:15px;
    border-radius: 5px;
}
input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
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
    margin-top:15px;
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
	.line{
		margin-top: 25px;
}
	.check input:checked ~ .test{
		background-color: #EB83E0;
	}
  .check {
    margin-bottom:20px;
  }
</style>
<?php
session_start();
include('./query/dbconection.php');

  if(isset($_POST['login'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $psw=$_POST["psw"];
    $query="SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$psw."' AND `status`='enable'";
    $rs=mysqli_query($db,$query);
    if (mysqli_num_rows($rs) == 1) {
      $_SESSION['username']=$username;
      while($row=$rs->fetch_assoc()){
        $_SESSION['id']=$row['id'];
        if($email=='admin@gmail.com' && $psw=='admin'){
          header('location: ./admin/adminpage.php');
        }else{
          header('location: index.php');
        }
      }
      
    }else{
      echo "<script>alert('Email or Password is faild')</script>";
    }
  }
?>
<body>
<div class="contain">
  <div class="mid-contain">
    <div class="container">
      <form action="#" method="post">
        <h1>LOGIN</h1>
        <label for="email"><b>Username</b></label>
        <br>
        <input type="text" name="username" id="username" required>
        <label for="email"><b>Email</b></label>
        <br>
        <input type="email" name="email" id="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" name="psw" id="psw" required>
        <button type="submit" class="registerbtn" name="login">LOGIN</button>
        <div class="line">
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
           <a href="./register.php">don't has Account ?</a>
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