<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <style>
    body {
      font: 20px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body style="background-color: #2C3333;">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <img class="rounded-circle" style="width: 6rem; margin-right: 2rem;" src="./emrelogo.jpg" alt="kitapresmi" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./blogs.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./info.php">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/emre-aktas-9176a31a6/">Linkedin</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="https://memreaktas.blogspot.com/">blogger</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php

  $sql = 'SELECT * FROM blogs';

  $cikti = $mysqli->query($sql);

  if (isset($_GET['item_id'])) {

    $a = $_GET['item_id'];
    $sql3 = "SELECT * FROM 'blogs'  WHERE header = $a";
    
    header("Location: ./blogpage.php?item=".$a."");
    exit();

  }

  ?>
  <div style="margin-top: 10rem"></div>
  <div class="divs">


    <div class="container-fluid">
      <div class="row" style="display: flex; justify-content: center; align-items: center;">
   
   <?php
        if ($cikti->num_rows > 0) {

          while ($satir = $cikti->fetch_assoc()) {
            echo '<div class="col-lg-4" style="margin-top: 2rem;">';
            echo '<img  class="rounded mx-auto d-block"  style="width: 17rem; margin-bottom: 1rem;" src="./emrelogo.jpg" alt="resim" />';
            echo '<h4 class="text-wraped text-center" style="color: #A5C9CA">' . $satir["header"] . '</h4>';
            echo "<button class='btn btn-outline-secondary' style='' onclick='window.location.href=\"?item_id=". $satir['id']."\"'>İncele</button>";
            echo '<div style="margin-bottom: 5rem;"></div>';
            echo '</div>';
          }

        }
   
        $mysqli->close();
        ?>


      </div>
    </div>
  </div>
</body>

</html>