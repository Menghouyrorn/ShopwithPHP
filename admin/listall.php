<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Product</title>
</head>
<style>
    .table_for_listallproduct{
        width:100%;
        height:100vh;
    }
    .table_for_listallproduct table{
        width:100%;
        text-align:center;
        cursor:pointer;
    }
    .table_for_listallproduct tr{
        transition:0.3s all ease;
    }
    .table_for_listallproduct tr:hover{
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
    .table_for_listallproduct th{
        width:100px;
        height:50px;
        border-bottom: 2px solid rgb(187, 187, 187);
    }
    .table_for_listallproduct img{
        width:80px;
        height:80px;
    }
    .pagination_mylistall{
        width:100%;
        height:8%;
    }
    .pagination_mylistall a{
        text-decoration:none;
    }
    .pagination_mylistall_button{
		width:30px;
		height:30px;
		margin-left:30px;
		font-size:20px;
    }
    .table_for_listallproduct_table{
        width:100%;
        height:92%;
    }
    .table_for_listallproduct_table button{
        margin-left:5px;
        width:70px;
        height:30px;
        cursor:pointer;
    }
    .dailog_listall_edit{
        width:700px;
        height:650px;
        background-color:white;
        position:absolute;
        top:14%;
        right:20%;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
    .add_new_product_submit{
        width:100%;
        display:flex;
        justify-content: center;
        margin-top:30px;
    }
    .add_new_product_submit button{
        width:15%;
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
    .foraddnew_item{
        width:100%;
    }
    .foraddnew_item input,select{
        width:30%;
        height:45px;
        margin-left:10px;
        margin-top:40px;
        border-radius:5px;
        border:1px solid #0D99FF;
        
    }
    .foraddnew_item input[type=text]:focus{
        border:1px solid #0D99FF;
        outline: none;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
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
</style>
<?php
    include "../query/dbconection.php";
    $query="SELECT * FROM `type`";
    $rst=mysqli_query($db,$query);
?>
<body>
    <div class='table_for_listallproduct'>
        <div class='table_for_listallproduct_table'>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
              <?php
                include "../query/dbconection.php";
                $page_start=7;
                $page="";
                if(isset($_GET['page'])){
                    $page=$_GET['page'];
                }else{
                    $page=1;
                }
                $start_from_page=($page-1)*$page_start;
                $query="SELECT * FROM `product` where `status`='enable' ORDER BY `idProduct` DESC LIMIT $start_from_page,$page_start";
                $rs=mysqli_query($db,$query);
                $counter=0;
                if(mysqli_num_rows($rs)>0){
                    while($row=mysqli_fetch_assoc($rs)){
                    $counter++;
              ?>
              <tr>  
              <td><?php echo $counter;?></td>
              <td><img src="<?php echo $row['imgComputer'];?>" alt=""></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['price'];?></td>
              <td>
                <?php 
                
                ?>
                <form action='' method='post'>
                <?php
                    echo "<button type='submit' name='edit' value='".$row['idProduct']."'>Edit</button>";
                    echo "<button type='submit' name='delete' value='".$row['idProduct']."'>Delete</button>";
                ?>
                </form>  
            </td>
              </tr>
              <?php
                    }
                }
              ?>
        </table>
        </div>
        
            <?php
                if(isset($_POST['edit'])){
                    $id= $_POST['edit'];
                    $querydata="SELECT * FROM `product` where `idProduct`='".$id."'";
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
                            echo "<div class='foraddnew_item'>";
                            echo "<input type='text' name='name' value='". $row['name']."' placeholder='Input the name of Product'>";
                            echo "<input type='text' name='imgComputer' value='".$row['imgComputer']."' placeholder='Input the Url of Image'>";
                            echo "<input type='text' name='altComputer' value='".$row['altComputer']."' placeholder='Input the alt of Image'>";
                            echo "</div>";
                            echo "<div class='foraddnew_item'>";
                            echo "<input type='text' name='description' value='".$row['description']."' placeholder='Input the description of Product'>";
                            echo "<input type='text' name='price' value='".$row['price']."' placeholder='Input the Price of Product'>";
                            echo "<input type='text' name='cpu' value='".$row['cpu']."' placeholder='Input the CPU of product'>";
                            echo "</div>";
                            echo "<div class='foraddnew_item'>";
                            echo "<input type='text' name='operatingsystem' value='".$row['operatingsystem']."' placeholder='Input the Operatingsystem'>";
                            echo "<input type='text' name='memory' value='".$row['memory']."' placeholder='Input the Memory'>";
                            echo "<input type='text' name='harddrive' value='".$row['harddrive']."' placeholder='Input the Harddrive'>";
                            echo "</div>";
                            echo "<div class='foraddnew_item'>";
                            echo "<input type='text' name='opticaldriver' value='".$row['opticaldriver']."' placeholder='Input the Optical Driver'>";
                            echo "<input type='text' name='graphics' value='".$row['graphics']."' placeholder='Input the Graphics'>";
                            echo "<input type='text' name='display' value='".$row['display']."' placeholder='Input the Display'>";
                            echo "</div>";
                            echo "<div class='foraddnew_item'>";
                            echo "<input type='text' name='battery' value='".$row['battery']."' placeholder='Input the Battery'>";
                            echo "<input type='text' name='weight' value='".$row['weight']."' placeholder='Input the Weight'>";
                            echo "<select name='type' value='".$row['type']."'>";
                                        if(mysqli_num_rows($rst)>0){
                                            while($row=$rst->fetch_assoc()){
                                                echo "<option value='".$row['idtype']."'>".$row['name']."</option>";          
                                            }
                                        }
                            echo "</select>";
                            echo "<select name='typeh'>";
                            $querytype="SELECT * FROM `typeh`";
                            $typeh=mysqli_query($db,$querytype);
                            if(mysqli_num_rows($typeh)>0){
                                while($row=$typeh->fetch_assoc()){
                                    echo "<option value='".$row['id']."'>".$row['name']."</option>";          
                                }
                            }
                            // echo "<option value='hotsale'>Hot Sale</option>";
                            // echo "<option value='newarrival'>New Arrival</option>";
                            // echo "<option value='comingsoon'>Coming Soon</option>";
                            echo "</select>";
                            echo "</div>";
                            echo "<div class='add_new_product_submit'>";
                            echo "<button type='submit' name='id' value='".$id."'>Update</button>";
                            echo "</div>";
                            echo "</form>";
                            echo "</div>";
                        }
                    }  
                    
                }else if(isset($_POST['delete'])){
                    $id=$_POST['delete'];
                    $queryupdate="UPDATE `product` SET `status`='disable' where `idProduct`='".$id."'";
                    if(mysqli_query($db,$queryupdate)){
                        echo "<script>alert('Delete Product Successfull')</script>";
                        //   mysql_close($query);
                       }else{
                           echo "<script>alert('error')</script>";
                       }
                }else{
                    echo "";
                } 
                if(isset($_POST['name'])){
                    $id= $_POST['id'];
                    $name=$_POST['name'];
                    $image=$_POST['imgComputer'];
                    $alt=$_POST['altComputer'];
                    $description=$_POST['description'];
                    $price=$_POST['price'];
                    $cpu=$_POST['cpu'];
                    $operatingsystem=$_POST['operatingsystem'];
                    $memory=$_POST['memory'];
                    $harddrive=$_POST['harddrive'];
                    $opticaldriver=$_POST['opticaldriver'];
                    $graphics=$_POST['graphics'];
                    $display=$_POST['display'];
                    $battery=$_POST['battery'];
                    $weight=$_POST['weight'];
                    $type=$_POST['type'];
                    $typeh=$_POST['typeh'];
                    $query="UPDATE `product` SET `name`='".$name."',`imgComputer`='".$image."',`altComputer`='".$alt."',`description`='".$description."',`price`='".$price."',`cpu`='".$cpu."',`operatingsystem`='".$operatingsystem."',`memory`='".$memory."',`harddrive`='".$harddrive."',`opticaldriver`='".$opticaldriver."',`graphics`='".$graphics."',`display`='".$display."',`battery`='".$battery."',`weight`='".$weight."',`type`='".$type."',`typeh`='".$typeh."' where `idProduct`='".$id."'";
                    if(mysqli_query($db,$query)){
                        echo "<script>alert('Update Product Successfull')</script>";
                     //   mysql_close($query);
                    }else{
                        echo "<script>alert('error')</script>";
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
        <div class='pagination_mylistall'>
            <?php
                $page_query="SELECT * FROM `product` where `status`='enable' ORDER BY idProduct DESC";
                $page_result=mysqli_query($db,$page_query);
                $page_recorde=mysqli_num_rows($page_result);
                $total_page=ceil($page_recorde/$page_start);
                for($i=1;$i<=$total_page;$i++){
                    echo "<button class='pagination_mylistall_button'>";
                    echo "<a class='pagination_mylistall_a' href='adminpage.php?view=2&page=".$i."'>".$i."</a>";
                    echo "</button>";
                }
            ?>
        </div>
    </div>
</body>
</html>