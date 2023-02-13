 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Navbar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<style>
		*{
			box-sizing:border-box;
		}
		body{
			margin:0;
			padding:0;
		}
		.nav{
			width:100%;
			height:10vh;
			display:flex;
			justify-content:space-between;
			align-items: center;
			box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
		}
		.menu ul{
			display:flex;
			list-style-type: none;
		}
		.menu ul,li{
			margin-right: 20px;
		}
		.logo{
			margin-left:20px;
		}
		.search input{
			width:60vh;
			height:6vh;
			border-radius:6px;
			border:none;
		}
		input:focus{
        	outline: none;
    	}
		input:valid{
			margin-left:13px;
			font-size:17px;
		}
		input::placeholder {
			font-size: 17px;
		}
		.search{
			border:1px solid black;
			border-radius: 6px;
			border:2px solid #1400FF;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			display: flex;
		}
		.search button{
			
			width: 8vh;
			height:6vh;
			margin:0;
			border:none;
			background-color: transparent;
			cursor: pointer;
		}
		.search i{
			font-size: 16px;
		}
		.menu ul,li,a{
			text-decoration: none;
			color:black;
			cursor: pointer;
		}
		.li{
			display: flex;
			align-items: center;
			justify-content: center;
			width:100px;
			height:6vh;
			border-radius:3px;
		}
		.li:hover{
			transition: 0.1s all ease;
			box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
		}
		#span{
			position: relative;
			top:-10px;
			background-color:#1400FF;
			border-radius: 50%;
			width:22px;
			text-align: center;
			font-size: 17px;
			color:white;
		}
		.currentuser{
			display:flex;
			align-items: center;
			justify-content: center;
		}
		.currentuser img{
			border-radius:50%;
			width:40px;
			height:40px;
		}
		.currentuser button{
			background-color:transparent;
			border:none;
			cursor: pointer;
		}
		.searc_navigation{
			z-index:10;
			width:72vh;
			height:auto;
			box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
			position: absolute;
			top:70px;
			right:38%;
			background-color:white;
		}
		.searc_navigation a{
			text-align:center;
			display:block;
			padding:10px;
			margin-bottom:5px;
		}
		.searc_navigation a:hover{
			background-color:#118AEF;
			transition:0.3s all ease;
			color:white;
		}
		.profile_my_cart{
			width:200px;
			height:130px;
			position:absolute;
			background-color:white;
			top:58px;
			right:64px;
			box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
		}
		.profile_my_cart a{
			display:block;
			width:100%;
			padding:13px;
			margin-top:5px;
			font-size:15px;
			background-color:transparent;
			border:none;
			transition:0.3s all ease;
			cursor:pointer;
			text-align:center;
		}
		.profile_my_cart a:hover{
			box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
			color:blue;
		}
		.profile_button_name{
			display:block;
			width:100%;
			padding:13px;
			margin-top:5px;
			font-size:15px;
			background-color:transparent;
			border:none;
			transition:0.3s all ease;
			cursor:pointer;
			text-align:center;
		}
		.profile_button_name:hover{
			color:blue;
			box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
		}
		.cancle_profile{
			position:relative;
			top:20px;
			right:-95%;
			
		}
		.cancle_profile button{
			border-radius:5px;
			cursor: pointer;
		}
		.cancle{
			position:absolute;
			top:-10px;
			left:-10px;
		}
		.cancle button{
			background-color:#0D99FF;
			border:none;
	        border-radius:5px;
    	    cursor:pointer;
        	box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
			font-size:16px;
		}
	</style>
<?php
	if(isset($_SESSION['username'])){
		include "./query/dbconection.php";
		$query="SELECT * FROM `user` where `id`='".$_SESSION['id']."' AND `status`='enable'";
		$rs=$db->query($query);
	}
?>
<body>
	<div>
		<div class='nav'>
			<div class='logo'>
				<a href="./index.php"><h1>Computer Shop</h1></a>
			</div>
			<div class='search'>
				<form action="#" method="post">
					<input type='text' placeholder='Search...' name='search' onclick="Test()">
					<button type='submit'><i class='fa fa-search'></i></button>
				</form>
			</div>
			<div class='menu'>
				<ul>
					<li class="li"><a href="./allProduct.php">AllProduct</a></li>
					<?php
						// session_start();
						$count=0;
						if(isset($_SESSION['cart'])){
							$count=count($_SESSION['cart']);
							echo "<li class='li'><a href='./mycart.php'>AddCart</a><span id='span'>$count</span><li>";
						}else{
							echo "<li class='li'><a href='./mycart.php'>AddCart</a><span id='span'>0</span><li>";
						}
							
					?>
					
					<?php
						if(isset($_SESSION['username'])){
							if($rs->num_rows>0){
								while($row=$rs->fetch_assoc()){
								echo "<form action='' method='post'>";
								echo("<li class='currentuser'><button type='submit' name='profile' value='true'><img src='https://cdn-icons-png.flaticon.com/512/3135/3135715.png'></img></button></li>");
								echo "</form>";
								if(isset($_POST['profile'])){
									echo "<div class='profile_my_cart'>";
									echo "<a href='profile.php?id=".$row['id']."'>View Main Profile</a>";
									echo "<form action='' method='post'>";
									echo "<button class='profile_button_name' type='submit' name='logout' value='true'>LOGOUT</button>";
									echo "</form>";
									echo "<div class='cancle_profile'>";
									echo "<form action='' method='post'>";
									echo "<button type='submit'>X</button>";
									echo "</form>";
									echo "</div>";
									echo "</div>";
								}else{
									echo"";
								}
								}
							}//href='profile.php?id=".$row['id']."' onclick='".Profile(true)."'
							if(isset($_POST['logout'])){
								unset($_SESSION['username']);
								unset($_SESSION['cart']);
								echo "<script>alert('Logout Successfull')</script>";
								//header('location: login.php');
							}else {
								echo"";
							}
							//$logout=unset($_SESSION['username']);
							
							
						}else {
							echo("<li class='li' ><a  href='./login.php'>SIGNIN</a></li>");
						}
					?>
				</ul>
			</div>
		</div>
		<div class='searc_navigation' onclick="this.style='display:none'">
					<?php
						include "./query/dbconection.php";		
						if(isset($_POST['search'])){
							$name=$_POST['search'];
							if(empty($name)){
								echo"";
							}else {
								$query="SELECT * FROM `product` where `name` like '%".$name."%' AND `status`='enable'";
								$rs=$db->query($query);
								if($rs->num_rows>0){
									while($row=$rs->fetch_assoc()){
										echo("<a href='allProduct.php?data=".$row['idProduct']."'>".$row['name']."</a>");
									}
								}
								echo "<div class='cancle'>";
								echo "<form action='' method='post'>";
								echo "<button type='submit' >X</button>";
								echo "</form>";
								echo "</div>";
							}
						}
					?>

		</div>
	</div>
</body>
</html>