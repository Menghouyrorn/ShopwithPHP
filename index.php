<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link
      rel="icon"
      type="image/x-icon"
      href="https://t3.ftcdn.net/jpg/03/32/86/72/360_F_332867276_m7XiTTagNtOtKTekcB5hRzSUmlL40m7d.jpg"
    />
<title>Computer Shop</title>
</head>
<?php
	session_start();
?>
<body>
	<div>
		<div>
			<div style="width: 100%;height: 10vh">
				<?php
					include('./navigationbar.php');
				?>
			</div>
			<div style="width:100%;height:110vh;">
				<?php
					include('./slider.php');
				?>
			</div>
			<div>
				<?php
					include('./bodyhome.php');
				?>
			</div>
			<div style="width:100%;height:60vh;">
				<?php
				include('./footer.php');
				?>
			</div>
		</div>
	</div>
</body>
</html>