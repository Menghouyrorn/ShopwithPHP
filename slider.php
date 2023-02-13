<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    .bodys {
      width: 100%;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .box {
      width: 100%;
      height: 100%;
	  margin-top:3px;
    }

   	.box img {
      width: 100%;
      height: 110vh;
      background-size: cover;
    }
  </style>
  <body>
    <div class="bodys">
      <div class="box">
        <img id="image" src="" alt="" />
      </div>
    </div>
  </body>
  <script>
    var images = [
		"https://thumbs.dreamstime.com/z/computer-shop-neon-sign-brick-wall-background-87865811.jpg",
      "https://dlcdnrog.asus.com/rog/media/1621003776265.webp",
      "https://i.pinimg.com/originals/34/4d/42/344d42f5fe2c4a3fcd54b6c02689ec90.jpg",
      "https://wallpaperaccess.com/full/1286134.jpg",
      "https://cdn.wallpapersafari.com/79/86/WSN7nK.jpg",
      "https://wallpaperaccess.com/full/790709.jpg",
    ];

    var i = 0;

    function slideShow() {
      document.getElementById("image").src = images[i];
      if (i < images.length - 1) {
        i++;
      } else {
        i = 0;
      }

      setTimeout("slideShow()", 3000);
    }

    window.onload = slideShow;
  </script>
</html>
