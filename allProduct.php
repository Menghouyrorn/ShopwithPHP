<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>All Product Cart</title>
	<link rel='stylesheet' href='css/cart.css'>
	<linK rel='stylesheet' href="css/cartWidth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.allproduct_top{
		float:left;
		width:100%;
		height:10%;
	}
	.allproduct_right{
		float:left;
		width:65%;
		height:185vh;
		display: inline;
		margin-bottom:30px;
	}
	.allproduct_left{
		float:left;
		width:35%;
		height:60%;
	}
	.allproduct_footer{
		float:left;
		width:100%;
		height:25%;
	}
	.list_icon{
		display: flex;
		justify-content: flex-end;
		margin-right:30px;
		margin-top:1px;
		margin-bottom:1px;
	}
	.list_icon button{
		margin-left:10px;
		width:40px;
		height:38px;
		display:flex;
		justify-content: center;
		align-items: center;
		border-radius: 4px;
		background-color: transparent;
		border:none;
		transition: 0.2s all ease;
		cursor: pointer;
	}
	.list_icon button:hover{
		box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
	}
	.list_icon i{
		font-size:30px;
	}
	#form_allProduct{
		display: flex;
	}
	.allproduct_right_detail_cart{
		display: grid;
		grid-template-columns:auto auto auto;
	}
	.allproduct_right_detail_Width{
		display: grid;
		grid-template-columns:auto;
	}
	.pagination_allproduct_page{
		float:left;
		width:100%;
		height:5%;
		text-align:right;
		display:flex;
		justify-content:right;
		/* align-items:center; */
		margin-bottom:20px;
		margin-left:-50px;
	}
	/* .pagination_allproduct_page a{
		width:50px;
		height:30px;
		margin-right:10px;
		font-size:20px;
		background-color:blue;
	} */
	.pagination_allproduct {
		/* display:flex; */
		/* display:inline; */
		display:grid;
		grid-template-columns:auto auto;
		width:30px;
		height:30px;
		margin-right:10px;
		font-size:20px;
	}
	.pagination_allproduct a{
		
	}
</style>
<?php
	session_start();
?>
<body>
	<div>
		<div class='allproduct_top'>
			<?php include './navigationbar.php' ?>
		</div>
		<div class='allproduct_left'>
			<?php include('./Accordion.php'); ?>
		</div>
		<div class='allproduct_right'>
			<?php 
				include('./leftallproduct.php'); 
				include ('./query/selectproduct.php');
				include('./query/cart.php');
			?>
			<div class="list_icon">
				<form action="" method="post" id="form_allProduct">
					<button type="submit" value="list" name="list"><i class="fa fa-list"></i></i></button>
					<button type="submit" value="detail" name="list"><i class="fa fa-list-alt"></i></button>
				</form>
			</div>
			<div class='allproduct_right_detail'>
				
				<div class="allproduct_right_detail_cart">
				<?php
						function DataList(){
							include ('./query/selectproduct.php');
							if(isset($_GET['value'])){
							$value=$_GET['value'];
							if($value==1){
								if ( $d1ata->num_rows > 0 ) {
									while ( $rown = $d1ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==2){
								if ( $d2ata->num_rows > 0 ) {
									while ( $rown = $d2ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==3){
								if ( $d3ata->num_rows > 0 ) {
									while ( $rown = $d3ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==4){
								if ( $d4ata->num_rows > 0 ) {
									while ( $rown = $d4ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==5){
								if ( $d5ata->num_rows > 0 ) {
									while ( $rown = $d5ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==6){
								if ( $d6ata->num_rows > 0 ) {
									while ( $rown = $d6ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==7){
								if ( $d7ata->num_rows > 0 ) {
									while ( $rown = $d7ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==8){
								if ( $d8ata->num_rows > 0 ) {
									while ( $rown = $d8ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==9){
								if ( $d9ata->num_rows > 0 ) {
									while ( $rown = $d9ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==10){
								if ( $d10ata->num_rows > 0 ) {
									while ( $rown = $d10ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==11){
								if ( $d11ata->num_rows > 0 ) {
									while ( $rown = $d11ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==12){
								if ( $d12ata->num_rows > 0 ) {
									while ( $rown = $d12ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else if($value==13){
								if ( $d13ata->num_rows > 0 ) {
									while ( $rown = $d13ata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
							}else{
								echo ('');
							}
						}else{
							if ( $selectdata->num_rows > 0 ) {
									while ( $rown = $selectdata->fetch_assoc() ) {
											Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
									}
									
								  }
						}
						}
					?>
				</div>
				<div class="allproduct_right_detail_Width">
				<?php
					function DataDetail(){
					include ('./query/selectproduct.php');
					if(isset($_GET['value'])){
					$value=$_GET['value'];
					if($value==1){
						if ( $wd1ata->num_rows > 0 ) {
        					while ( $rown = $wd1ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
							}
							
      					}
					}else if($value==2){
						if ( $wd2ata->num_rows > 0 ) {
        					while ( $rown = $wd2ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
							}
							
      					}
					}else if($value==3){
						if ( $wd3ata->num_rows > 0 ) {
        					while ( $rown = $wd3ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
				
							}
							
      					}
					}else if($value==4){
						if ( $wd4ata->num_rows > 0 ) {
        					while ( $rown = $wd4ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==5){
						if ( $wd5ata->num_rows > 0 ) {
        					while ( $rown = $wd5ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==6){
						if ( $wd6ata->num_rows > 0 ) {
        					while ( $rown = $wd6ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==7){
						if ( $wd7ata->num_rows > 0 ) {
        					while ( $rown = $wd7ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==8){
						if ( $wd8ata->num_rows > 0 ) {
        					while ( $rown = $wd8ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==9){
						if ( $wd9ata->num_rows > 0 ) {
        					while ( $rown = $wd9ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==10){
						if ( $wd10ata->num_rows > 0 ) {
        					while ( $rown = $wd10ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==11){
						if ( $wd11ata->num_rows > 0 ) {
        					while ( $rown = $wd11ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==12){
						if ( $wd12ata->num_rows > 0 ) {
        					while ( $rown = $wd12ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else if($value==13){
						if ( $wd13ata->num_rows > 0 ) {
        					while ( $rown = $wd13ata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
			
								}
							
      					}
					}else{
						echo ('');
					}
				}else{
					$counter=0;
					if ( $wselectdata->num_rows > 0 ) {
        					while ( $rown = $wselectdata->fetch_assoc() ) {
									CartWidth($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'name' ], $rown[ 'cpu' ], $rown[ 'operatingsystem' ],$rown['memory'],$rown['harddrive'],$rown['opticaldriver'],$rown['graphics'],$rown['display'],$rown['battery'],$rown['weight'],$rown['price'] );
								}
							
      					}
				}
				} 
					?>
				</div>
					
				<?php
					include "./query/dbconection.php";
					include('./query/cartWidth.php');
					if(isset($_GET['data'])){
						if(isset($_POST['list'])){
							$list=$_POST['list'];
							if($list=='detail'){
								echo("<div class='allproduct_right_detail_Width'>");
								$data=$_GET['data'];
								$query="SELECT * FROM `product` where `idProduct`='".$data."' AND `status`='enable'";
								$rs=$db->query($query);
								if($rs->num_rows>0){
									while($row=$rs->fetch_assoc()){
										CartWidth($row['idProduct'], $row[ 'imgComputer' ], $row[ 'name' ], $row[ 'cpu' ], $row[ 'operatingsystem' ],$row['memory'],$row['harddrive'],$row['opticaldriver'],$row['graphics'],$row['display'],$row['battery'],$row['weight'],$row['price'] );
									}
								}
								echo("</div>");
							}else {
								echo("<div class='allproduct_right_detail_cart'>");
								$data=$_GET['data'];
								$query="SELECT * FROM `product` where `idProduct`='".$data."' AND `status`='enable'";
								$rs=$db->query($query);
								if($rs->num_rows>0){
									while($row=$rs->fetch_assoc()){
										Cart( $row['idProduct'],$row[ 'imgComputer' ], $row[ 'altComputer' ], $row[ 'description' ], $row[ 'price' ],$row['name'] );
									}
								}
								echo "</div>";
							}
						}else {
							$data=$_GET['data'];
								$query="SELECT * FROM `product` where `idProduct`='".$data."' AND `status`='enable'";
								$rs=$db->query($query);
								if($rs->num_rows>0){
									while($row=$rs->fetch_assoc()){
										Cart( $row['idProduct'],$row[ 'imgComputer' ], $row[ 'altComputer' ], $row[ 'description' ], $row[ 'price' ],$row['name'] );
									}
								}
						}
					}else {
						if(isset($_POST['list'])){
							$list=$_POST['list'];
							if($list=="detail"){
								echo("<div class='allproduct_right_detail_Width'>");
								DataDetail();
								echo("</div>");
							}else{
								echo("<div class='allproduct_right_detail_cart'>");
								DataList();
								echo("</div>");
							}
						}else if(isset($_GET['vlaue'])&&isset($_GET['wpage'])){
							//echo "<script>alert('True')</script>";
							echo("<div class='allproduct_right_detail_Width'>");
								DataDetail();
							echo("</div>");
						}else if(isset($_GET['vlaue'])&&isset($_GET['page'])){
							echo("<div class='allproduct_right_detail_cart'>");
								DataList();
							echo("</div>");
						}
						else if(isset($_GET['wpage'])){
							echo("<div class='allproduct_right_detail_Width'>");
								DataDetail();
							echo("</div>");
						}else if(isset($_GET['page'])){
							echo("<div class='allproduct_right_detail_cart'>");
								DataList();
							echo("</div>");
						}else{
							echo("<div class='allproduct_right_detail_cart'>");
								DataList();
							echo("</div>");
						}
					}
					
				?>
			</div>
		</div>
		<div class="pagination_allproduct_page">
			<?php
				if(isset($_POST['list'])){
					$list=$_POST['list'];
					if($list=='detail'){
						if(isset($_GET['value'])){
							$value=$_GET['value'];
							$page_query="SELECT * FROM `product` where `type`='".$value."' AND `status`='enable' ORDER BY idProduct DESC";
							$page_result=mysqli_query($db,$page_query);
							$page_recorde=mysqli_num_rows($page_result);
							$total_page=ceil($page_recorde/$wpage_start);
							for($i=1;$i<=$total_page;$i++){
								echo "<button class='pagination_allproduct'>";
								echo "<a href='allProduct.php?value=".$value."&wpage=".$i."'>".$i."</a>";
								echo "</button>";
							}
						}else{
							$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
							$page_result=mysqli_query($db,$page_query);
							$page_recorde=mysqli_num_rows($page_result);
							$total_page=ceil($page_recorde/$wpage_start);
							for($i=1;$i<=$total_page;$i++){
								echo "<button class='pagination_allproduct'>";
								echo "<a href='allProduct.php?wpage=".$i."'>".$i."</a>";
								echo "</button>";
							}
						}
							
						//}
					}else if($list='list'){
						if(isset($_GET['value'])){
							$value=$_GET['value'];
							$page_query="SELECT * FROM `product` where `type`='".$value."' AND `status`='enable' ORDER BY idProduct DESC";
							$page_result=mysqli_query($db,$page_query);
							$page_recorde=mysqli_num_rows($page_result);
							$total_page=ceil($page_recorde/$page_start);
							for($i=1;$i<=$total_page;$i++){
								echo "<button class='pagination_allproduct'>";
								echo "<a href='allProduct.php?value=".$value."&page=".$i."'>".$i."</a>";
								echo "</button>";
							}
						}else{
							$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
							$page_result=mysqli_query($db,$page_query);
							$page_recorde=mysqli_num_rows($page_result);
							$total_page=ceil($page_recorde/$page_start);
							for($i=1;$i<=$total_page;$i++){
								echo "<button class='pagination_allproduct'>";
								echo "<a href='allProduct.php?page=".$i."'>".$i."</a>";
								echo "</button>";
							}	
						}
								
					}
				}else if(isset($_GET['vlaue'])&&isset($_GET['wpage'])){
					$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
					$page_result=mysqli_query($db,$page_query);
					$page_recorde=mysqli_num_rows($page_result);
					$total_page=ceil($page_recorde/$wpage_start);
					for($i=1;$i<=$total_page;$i++){
						echo "<button class='pagination_allproduct'>";
						echo "<a href='allProduct.php?wpage=".$i."'>".$i."</a>";
						echo "</button>";
					}					
				}else if(isset($_GET['vlaue'])&&isset($_GET['page'])){
					$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
					$page_result=mysqli_query($db,$page_query);
					$page_recorde=mysqli_num_rows($page_result);
					$total_page=ceil($page_recorde/$page_start);
					for($i=1;$i<=$total_page;$i++){
						echo "<button class='pagination_allproduct'>";
						echo "<a href='allProduct.php?page=".$i."'>".$i."</a>";
						echo "</button>";
					}
				}else if(isset($_GET['wpage'])){
					$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
							$page_result=mysqli_query($db,$page_query);
							$page_recorde=mysqli_num_rows($page_result);
							$total_page=ceil($page_recorde/$wpage_start);
							for($i=1;$i<=$total_page;$i++){
								echo "<button class='pagination_allproduct'>";
								echo "<a href='allProduct.php?wpage=".$i."'>".$i."</a>";
								echo "</button>";
							}
					
				}else if(isset($_GET['page'])){
						$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
						$page_result=mysqli_query($db,$page_query);
						$page_recorde=mysqli_num_rows($page_result);
						$total_page=ceil($page_recorde/$page_start);
						for($i=1;$i<=$total_page;$i++){
							echo "<button class='pagination_allproduct'>";
							echo "<a href='allProduct.php?page=".$i."'>".$i."</a>";
							echo "</button>";
						}
				}else if(isset($_GET['value'])){
					$value=$_GET['value'];
					$page_query="SELECT * FROM `product` where `type`='".$value."' AND `status`='enable' ORDER BY idProduct DESC";
					$page_result=mysqli_query($db,$page_query);
					$page_recorde=mysqli_num_rows($page_result);
					$total_page=ceil($page_recorde/$page_start);
					for($i=1;$i<=$total_page;$i++){
						echo "<button class='pagination_allproduct'>";
						echo "<a href='allProduct.php?value=".$value."&page=".$i."'>".$i."</a>";
						echo "</button>";
					}
					}else{
						$page_query="SELECT * FROM `product` WHERE `status`='enable' ORDER BY idProduct DESC";
						$page_result=mysqli_query($db,$page_query);
						$page_recorde=mysqli_num_rows($page_result);
						$total_page=ceil($page_recorde/$page_start);
						for($i=1;$i<=$total_page;$i++){
							echo "<button class='pagination_allproduct'>";
							echo "<a href='allProduct.php?page=".$i."'>".$i."</a>";
							echo "</button>";
						}	
					}
				{

				}
				
				
			?>
		</div>
		<div class='allproduct_footer'>
			<?php include './footer.php' ?>
		</div>
	</div>
</body>
</html>