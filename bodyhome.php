<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Body Home</title>
<link rel="stylesheet" href='css/cart.css'>
</head>

<style>
.homebody {
    width: 100%;
    height: 190vh;
}
.topbodyhome {
    float: left;
    width: 100%;
    height: 33.3%
}
#h1 {
    margin-top: 2px;
    margin-bottom: 2px;
	margin-left: 10px;
}
#span1 {
    color: #3312B8;
}
#span2 {
    color: #DE5306;
}
.homebodydata {
    display: flex;
    justify-content: center;
}
</style>
<body>
<div class="homebody" >
  <div class="topbodyhome">
    <h1 id="h1"> <span id="span1">Hot</span> <span id="span2">Sale</span></h1>
    <div class="homebodydata">
      <?php
      include './query/cart.php';
      include './query/selectproduct.php';
      if ( $cdata->num_rows > 0 ) {
        while ( $rown = $cdata->fetch_assoc() ) {
          Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
        }
      }
      ?>
    </div>
  </div>
  <div class="topbodyhome">
    <h1 id="h1" ><span id="span1">NEW</span> <span id="span2">ARRIVAL</span></h1>
    <div class="homebodydata">
      <?php
      if ( $ndata->num_rows > 0 ) {
        while ( $rown = $ndata->fetch_assoc() ) {
          Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
        }
      }
      ?>
    </div>
  </div>
  <div class="topbodyhome">
    <h1 id="h1"><span id="span1">COMING</span> <span id="span2">SOON</span></h1>
    <div class="homebodydata">
       <?php
      if ( $sdata->num_rows > 0 ) {
        while ( $rown = $sdata->fetch_assoc() ) {
          Cart($rown['idProduct'], $rown[ 'imgComputer' ], $rown[ 'altComputer' ], $rown[ 'description' ], $rown[ 'price' ],$rown['name'] );
        }
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>