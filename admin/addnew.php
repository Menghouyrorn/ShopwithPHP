<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<?php
    include "../query/dbconection.php";
    $query="SELECT * FROM `type`";
    $rs=mysqli_query($db,$query);
?>
<style>
    .formaddnew_product{
        width:100%;
    }
    .add_new_product_submit{
        width:100%;
        display:flex;
        justify-content: center;
        margin-top:30px;
    }
    .add_new_product_submit input{
        width:15%;
        height:45px;
        border-radius:6px;
        border:none;
        background-color:#0D99FF;
        font-size:20px;
        transition:0.3s all ease;
        cursor:pointer;
    }
    .add_new_product_submit input:hover{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }
    .foraddnew_item{
        width:100%;
    }
    .foraddnew_item input,select{
        width:31%;
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
</style>
<?php
    //include "../query/dbconection.php";
    if(isset($_POST['name'])){
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
        $query="INSERT INTO `product`(`name`, `imgComputer`, `altComputer`, `description`, `price`, `cpu`, `operatingsystem`, `memory`, `harddrive`, `opticaldriver`, `graphics`, `display`, `battery`, `weight`, `status`, `type`, `typeh`) VALUES('".$name."','".$image."','".$alt."','".$description."','".$price."','".$cpu."','".$operatingsystem."','".$memory."','".$harddrive."','".$opticaldriver."','".$graphics."','".$display."','".$battery."','".$weight."','enable','".$type."',' ')";
        if(mysqli_query($db,$query)){
            echo "<script>alert('Add Product Successfull')</script>";
        }else{
            echo "<script>alert('error')</script>";
        }
    }else{
        echo "";
    }
?>

<body>
    <div class='formaddnew_product'>
            <form action="#" method="post">
                <div class='foraddnew_item'>
                    <input type="text" name='name' placeholder='Input the name of Product'>
                    <input type="text" name='imgComputer' placeholder='Input the Url of Image'>
                    <input type="text" name='altComputer' placeholder='Input the alt of Image'>
                </div>
                <div class='foraddnew_item'>
                    <input type="text" name='description' placeholder='Input the description of Product'>
                    <input type="text" name='price' placeholder='Input the Price of Product'>
                    <input type="text" name='cpu' placeholder='Input the CPU of product'>
                </div>
                <div class='foraddnew_item'>
                    <input type="text" name='operatingsystem' placeholder='Input the Operatingsystem'>
                    <input type='text' name='memory' placeholder='Input the Memory'>
                    <input type="text" name='harddrive' placeholder='Input the Harddrive'>
                </div>
                <div class='foraddnew_item'>
                    <input type="text" name='opticaldriver' placeholder='Input the Optical Driver'>
                    <input type="text" name='graphics' placeholder='Input the Graphics'>
                    <input type="text" name='display' placeholder='Input the Display'>
                </div>
                <div class='foraddnew_item'>
                    <input type="text" name='battery' placeholder='Input the Battery'>
                    <input type="text" name='weight' placeholder='Input the Weight'>
                    <select name="type" id="">
                        <?php
                            if(mysqli_num_rows($rs)>0){
                                while($row=$rs->fetch_assoc()){
                                    echo "<option value='".$row['idtype']."'>".$row['name']."</option>";          
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class='add_new_product_submit'>
                    <input type='submit' value='Add New'>
                </div>
            </form>
    </div>
</body>
</html>