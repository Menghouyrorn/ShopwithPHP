<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Cart</title>
    <style>
    .tabel_mycart img {
      width: 80px;
      height: 70px;
    }
    .tabel_mycart {
      text-align: center;
    }
    .tabel_mycart th {
      height: 40px;
      /* background-color: rgb(187, 187, 187); */
      border-bottom: 1px solid rgb(187, 187, 187);
      /* margin-bottom: 2px; */
    }
    /* .tabel_mycart th,
    td {
      width: 50px;
    } */
    .tabel_mycart td {
      height: 100px;
      /* border: 1px solid black; */
    }
    .tabel_mycart tr{
        cursor: pointer;
        transition:0.3s all ease;
    }
    .tabel_mycart tr:hover {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }
    .pay_mycart{
        width:300px;
        height:250px;
        background-color:rgb(218, 218, 218);
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
    .pay_mycart_top{
        width:300px;
        height:50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color:rgb(218, 218, 218);
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
        margin-bottom:15px;
    }
    .tabel_mycart button:hover{
      background-color:blue;
    }
  </style>
  <?php
    session_start();
  ?>
</head>
  <body>
    <?php
      include "./navigationbar.php";
    ?>
    <div style="display:flex;justify-content:center;">
      <div style="width:75%"> 
        <div>
        <h2>Shopping Cart</h2>
        <p style="border-bottom: 4px solid blue"></p>
      </div>
      <table
        class="tabel_mycart"
        style="width: 100%; border-collapse: collapse"
      >
        <tr>
          <th></th>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quality</th>
          <th>TotalPrice</th>
        </tr>
            <?php
            //session_start();
                if(isset($_SESSION['cart'])){
                  //print_r ($_SESSION['cart']);
                  
                        $total_price=0;
                    foreach($_SESSION['cart'] as $key => $data){
                      $total=0;
                        if(isset($data['url'])){
                            
                            $total=$data['quality'] * $data['price'];
                            echo    "<tr>";
                            echo    "<form action='' method='post'> ";
                            echo    "<td><button type='submit' name='delete' value='".$data['id']."' style='font-size:20px;background-color:transparent;color:blue; border:none;cursor:pointer;width:50px;height:50px'>x</button></td>";
                            echo    "</form>";
                            echo        "<td><img src='".$data['url']."' width='80px' height='60px'/></td>";
                            echo        "<td>".$data['name']."</td>";
                            echo        "<td>".$data['price']."</td>";
                            echo        "<td>".$data['quality']."</td>";
                            echo        "<td>".number_format($total)."</td>";
                            echo    "</tr>";
                           
                        }else{
                            echo"";
                        }
                        $total_price = (int)($total_price) + (int)($total) ;
                        if(isset($_POST['delete'])){
                          if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                            if($value['id']==$_POST['delete']){
                              unset($_SESSION['cart'][$key]);
                            }
                          }
                          }
                        }
                    }
                }
                
            ?>
      </table>
            </div>
            <div style="width:18%;margin-top:9vh;margin-left:20px;">
                <div class='pay_mycart_top'>
                    FREE SHIPPING IN PHNOMPENCH
                </div>
                <div class='pay_mycart' >
                    <h2 style="text-align:center;position:relative;top:40px;">Total :<span><?php
                    if(isset($total_price)){
                      echo number_format($total_price,2);
                    }else{
                      echo $total_price=0;
                    }
                    ?> $</span></h2>
                </div>
            </div>
    </div>
  </body>
</html>


