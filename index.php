<?php
include("time.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Time</title>

  </head>
  <body>

    <div class="center">
      <h1><?php echo $message;?><?php echo $timelive;?><h1>
    </div>



  <style>
    *{
      padding: 0;
      margin: 0;
    }
    .center{
      background: url("images/<?php echo $img;?>");
      width: 100vw;
      height: 100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    h1{
      font-family: 'Lobster', cursive;
      text-align: center;
      position: absolute;
      top: 42vh;
      left: 37vw;
      color: white;
      font-size: 5rem;
      -webkit-text-stroke: 0.1px black;
    }

  </style>


  </body>
</html>
