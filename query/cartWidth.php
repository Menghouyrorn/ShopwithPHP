<link rel='stylesheet' href='../css/cartWidth.css'>

<?php
function CartWidth($id,$imagecomputer,$name,$cpu,$operationsystem,$memory,$harddrive,$opticaldrive,$graphics,$display,$battery,$weight,$price){
	echo("<div class='bodyCartWidth_detail'>");
	echo("<div class='img'>");
	echo("<img src='".$imagecomputer."' atl='image Computer'>");
	echo("</div>");
	echo("<div class='title'>");
	echo("<h3>".$name."</h3>");
	echo("<p>– ".$cpu."</h3>");
	echo("<p>– ".$operationsystem."</p>");
	echo("<p>– ".$memory."</p>");
	echo("<p>– ".$harddrive."</p>");
	echo("<p>– ".$opticaldrive."</p>");
	echo("<p>– ".$graphics."</p>");
	echo("<p>– ".$display."</p>");
	echo("<p>– ".$battery."</p>");
	echo("<p>– ".$weight."</p>");
	echo("<p>$ ".$price."</p>");
	echo("</div>");
	echo("<div class='line'>");
	echo("<hr>");
	echo("</div>");
	echo("<div class='action'>");
	echo "<form action='' method='post'>";
	echo "<button type='submit' name='cart' value='".$id."'>";
	echo("<img src='https://cdn-icons-png.flaticon.com/512/70/70021.png'>");
	echo("</button>");
	echo "<input type='hidden' name='name' value='".$name."'>";
	echo "<input type='hidden' name='src' value='".$imagecomputer."'>";
	echo "<input type='hidden' name='price' value='".$price."'>";
	echo("</form>");
	echo("</div>");
	echo("</div>");
}
	
?>