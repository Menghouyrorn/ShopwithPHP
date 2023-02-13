<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" data="IE=edge" />
    <title>Accodrion</title>
  </head>
  <style>
    .header {
      width: 400px;
      text-align: center;
    }
    .header h2 {
      color: black;
      font-family: "Times New Roman", Times, serif;
      font-size: 30px;
      margin-top: 40px;
      margin-bottom: 40px;
    }
    .accodrion {
      width: 400px;
      background: transparent;
      border-radius: 4px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .accodrion label {
      display: block;
      position: relative;
      color: #000000;
      overflow: hidden;
      cursor: pointer;
      height: 56px;
      text-indent: 20px;
      padding-top: 1px;
    }
    .accodrion ul {
      margin: 0;
      padding: 0;
    }
    .accodrion li a {
      display: block;
      width: 100%;
      padding: 10px 0px;
      text-decoration: none;
      color: black;
      transition: all 0.2s ease;
    }
    .accodrion li a:hover {
      color: #00bfff;
    }
    .accodrion input[type="checkbox"] {
      display: none;
    }
    .accodrion .data {
      position: relative;
      height: 0;
      background-color: transparent;
      height: 300px;
      border-top: 1px solid rgba(0, 0, 0, 0.12);
      bottom: -9px;
    }
    .accodrion .icon {
      width: 8px;
      height: 8px;
      transition: transform 0.8s;
      border-top: 2px solid black;
      border-right: 2px solid black;
      float: right;
      position: relative;
      top: -30px;
      right: 27px;
      transform: rotate(135deg);
    }
    .accodrion input[type="checkbox"]:checked + label > .data {
      display: block;
    }
    .accodrion input[type="checkbox"]:checked + label > .icon {
      transition: transform 0.8s;
      transform: rotate(-45deg);
    }
    .accodrion input[type="checkbox"]:checked + label {
      display: block;
      background: white;
      color: #000000;
      height: 330px;
      transition: height 0.5s;
    }
    .accodrion label {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      margin-top: 10px;
    }
    .accodrion label:hover {
      width: 100%;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
        rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    .accodrion input[type="checkbox"]:not(:checked) + label {
      transition: height 0.5s;
      height: 60px;
    }
  </style>
	<?php
		include('./query/selecttype.php');
	?>
  <body>
    <div class="header">
      <h2>PRODUCTS CATEGARIES</h2>
    </div>
    <div class="accodrion">
      <input id="notebook" type="checkbox" />
      <label for="notebook">
        <p>Notebook & Tablets</p>
        <div class="icon"></div>
        <div class="data">
			<ul>
            	<li>
					<?php
						if($notebook->num_rows>0){
							while($row=$notebook->fetch_assoc()){
								echo "<a href='allProduct.php?value=".$row['idtype']."'>".$row['name']."</a>";
							}
						}
					?>
				 </li>
          	</ul>
        </div>
      </label>
      <input id="destops" type="checkbox" />
      <label for="destops">
        <p>Destops & All-in-One</p>
        <div class="icon"></div>
        <div class="data">
			<ul>
            	<li>
					<?php
						if($destop->num_rows>0){
							while($rowd=$destop->fetch_assoc()){
								echo "<a href='allProduct.php?value=".$rowd['idtype']."'>".$rowd['name']."</a>";
							}
						}
					?>
				 </li>
          	</ul>
        </div>
      </label>
    </div>
  </body>
</html>
