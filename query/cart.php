
<link rel='stylesheet' href="../css/cart.css">
<?php	
        if(isset($_POST['cart'])){
            if(isset($_SESSION['username'])){
			if(isset($_SESSION['cart'])){
				$array_count_cart=array_column($_SESSION['cart'],'id');
				if(in_array($_POST['cart'],$array_count_cart)){
                	foreach($_SESSION['cart'] as $key =>$data){
						if(isset($data['id'])){
							if($_POST['cart']==$data['id']){
								$_SESSION['cart'][$key]['quality']=$data['quality']+1;
							}
						}
					}
				}else{
					$count=count($_SESSION['cart']);
                	$array_carts=[
                    	'id' => $_POST['cart'],
                    	'name' => $_POST['name'],
                    	'url' => $_POST['src'],
                    	'price' => $_POST['price'],
                    	'quality'=>1
					];
                	$_SESSION['cart'][$count]=$array_carts;
				}
            }else{
                $array_cart=[
                    'id' => $_POST['cart'],
                    'name' => $_POST['name'],
                    'url' => $_POST['src'],
                    'price' => $_POST['price'],
                    'quality'=>1
				];
                $_SESSION['cart'][0]=$array_cart;
            }
		}else{
			echo "<script>alert('Please Login Thank')</script>";
		}
        }else{
			echo "";
		}
	

	function Cart($id,$src,$alt,$des,$price,$name){
		echo "<div class='grid'>";
		echo "<div class='bodyCard'>";
		echo "<div class='imgs'>";
		echo "<img src='".$src."'"."alt='".$alt."'>";
		echo "</div>";
		echo "<div class='titles'>";
		echo "<p>".$des."</p>";
		echo "<center><span>$ ".$price."</span></center>";
		echo "</div>";
		echo "<div class='liness'>";
		echo "<hr>";
		echo "</div>";
		echo "<div class='actionss'>";
		echo "<form action='' method='post'>";
		echo "<button type='submit' name='cart' value='".$id."'>";
		echo "<img src='https://cdn-icons-png.flaticon.com/512/70/70021.png'>";
		echo "</button>";
		echo "<input type='hidden' name='name' value='".$name."'>";
		echo "<input type='hidden' name='src' value='".$src."'>";
		echo "<input type='hidden' name='price' value='".$price."'>";
		echo "</form>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}
?>	
</body>
</html>