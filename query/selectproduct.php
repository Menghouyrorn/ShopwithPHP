<?php
include './query/dbconection.php';
$page_start=9;
$page="";
if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page=1;
}
$start_from_page=($page-1)*$page_start;
$wpage_start=3;
$wpage="";
if(isset($_GET['wpage'])){
    $wpage=$_GET['wpage'];
}else{
    $wpage=1;
}
$wstart_from_page=($wpage-1)*$wpage_start;
//include './query/cart.php';
//select data from table product where type equal HotSale
$data = "select * from `product` where typeh='1' AND `status`='enable' ORDER BY idProduct DESC limit 4 ";
$cdata = $db->query( $data );
//select data from table product where type equal NEW ARRIVAL
$datan = "select * from `product` where typeh='2' AND `status`='enable' ORDER BY idProduct DESC limit 4 ";
$ndata = $db->query( $datan );
//select data from table product where type quals COMING SOON
$datas = "select * from `product` where typeh='3' AND `status`='enable' ORDER BY idProduct DESC limit 4 ";
$sdata = $db->query( $datas );

$dataselect="SELECT * from `product` WHERE `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$selectdata=$db->query($dataselect);

$wdataselect="SELECT * from `product` WHERE `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wselectdata=$db->query($wdataselect);

$data1 = "SELECT * from `product` where type='1' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d1ata = $db->query( $data1 );

$wdata1 = "select * from `product` where type='1' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start ";
$wd1ata = $db->query( $wdata1 );

$data2 = "select * from `product` where type='2' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start ";
$d2ata = $db->query( $data2 );

$wdata2 = "select * from `product` where type='2' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start ";
$wd2ata = $db->query( $wdata2 );

$data3 = "select * from `product` where type='3' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d3ata = $db->query( $data3 );

$wdata3 = "select * from `product` where type='3' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd3ata = $db->query( $wdata3 );

$data4 = "select * from `product` where type='4' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d4ata = $db->query( $data4 );

$wdata4 = "select * from `product` where type='4' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd4ata = $db->query( $wdata4 );

$data5 = "select * from `product` where type='5' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d5ata = $db->query( $data5 );

$wdata5 = "select * from `product` where type='5' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd5ata = $db->query( $wdata5 );

$data6 = "select * from `product` where type='6' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d6ata = $db->query( $data6 );

$wdata6 = "select * from `product` where type='6' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd6ata = $db->query( $wdata6 );

$data7 = "select * from `product` where type='7' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d7ata = $db->query( $data7 );

$wdata7 = "select * from `product` where type='7' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd7ata = $db->query( $wdata7 );

$data8 = "select * from `product` where type='8' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d8ata = $db->query( $data8 );

$wdata8 = "select * from `product` where type='8' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd8ata = $db->query( $wdata8 );

$data9 = "select * from `product` where type='9' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d9ata = $db->query( $data9 );

$wdata9 = "select * from `product` where type='9' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd9ata = $db->query( $wdata9 );

$data10 = "select * from `product` where type='10' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d10ata = $db->query( $data10 );

$wdata10 = "select * from `product` where type='10' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd10ata = $db->query( $wdata10 );

$data11 = "select * from `product` where type='11' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d11ata = $db->query( $data11 );

$wdata11 = "select * from `product` where type='11' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd11ata = $db->query( $wdata11 );

$data12 = "select * from `product` where type='12' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d12ata = $db->query( $data12 );

$wdata12 = "select * from `product` where type='12' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd12ata = $db->query( $wdata12 );

$data13 = "select * from `product` where type='13' AND `status`='enable' ORDER BY idProduct DESC limit $start_from_page,$page_start";
$d13ata = $db->query( $data13 );

$wdata13 = "select * from `product` where type='13' AND `status`='enable' ORDER BY idProduct DESC limit $wstart_from_page,$wpage_start";
$wd13ata = $db->query( $wdata13 );

?>