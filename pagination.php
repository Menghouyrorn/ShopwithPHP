<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>
<?php
    include "./query/dbconection.php";
    $page_start=5;
    $page="";
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $start_from_page=($page-1)*$page_start;
    $query="SELECT * from `product` ORDER BY idProduct DESC limit $start_from_page,$page_start";
    $rs=mysqli_query($db,$query);
?>
<body>
    <div>
        <table border='1' width='50%'>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
            </tr>
            <?php
                while($row=mysqli_fetch_array($rs))
                {
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div>
            <?php
                $page_query="SELECT * FROM `product` ORDER BY idProduct DESC";
                $page_result=mysqli_query($db,$page_query);
                $page_recorde=mysqli_num_rows($page_result);
                $total_page=ceil($page_recorde/$page_start);
                for($i=1;$i<=$total_page;$i++){
                    echo "<a href='pagination.php?page=".$i."'>".$i."</a>";
                }

            ?>
        </div>
    </div>
</body>
</html>