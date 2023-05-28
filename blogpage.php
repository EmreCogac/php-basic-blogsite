<?php
require_once "config.php";


$id_param = $_GET["item"];


$sql1 = "SELECT * FROM `blogs` WHERE header = $id_param";

$cikti = $mysqli->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="./code.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        body{ font: 20px sans-serif;  }
        @media all and (orientation:landscape){
    pre {
        white-space: pre-wrap;
        word-wrap: break-word;
        text-align: justify;
    }
}
    </style>
</head>
<body style="background-color: #2C3333;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="text-align: center">
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

  $sql = "SELECT * FROM `blogs` WHERE id=$id_param";

  $cikti = $mysqli->query($sql);

  ?>

<div style="margin-top: 10rem"></div>,
  <div class="divs">

    <div style="margin-top: 15%"></div>
    <div class="container-fluid padding:2px">
      <div class="row" style="display: flex; justify-content: center; align-items: center;">
   <?php
        if ($cikti->num_rows > 0) {

          $satir = $cikti->fetch_assoc();
          $header =$satir["header"] ;
          $info1 = $satir["info1"] ;
          $code1 = $satir["code1"] ;
        }
        echo '<div class="col-lg-12" style="margin-top: 2rem;">';

        echo '<h2 class="text-wraped text-center" style="color: #A5C9CA">' . $satir["header"] . '</h2>';

     
        $mysqli->close();
        ?>
        <div class="container-fluid padding:2px">
      <div class="row" style="display: flex; justify-content: center; align-items: center;">
          <div style="margin-bottom: 10%"></div>
          <?php
             echo '<img  class="rounded mx-auto d-block img-fluid"  style=" width: 500px; margin-bottom: 1rem;" src="./emrelogo.jpg" alt="resim" />';
          ?>
          </div>
          </div>
           <div style="margin: 10%"></div>
           <?php
            echo "<div style='background-color: #2b2b2b; padding: 1%;'><span  font-family: JetBrains Mono, monospace;'> ";
             echo '<h4 class="text-wraped" style="color: #A5C9CA">' . $satir["info1"] . '</h2>';
             echo '</span></div>';
          ?>
           <div style="margin-bottom: 10%"></div>

    <?php
        echo "<pre style='background-color: #2b2b2b;'><span style='color: #e8bf6a; font-family: JetBrains Mono, monospace;'> ";
        echo htmlspecialchars($code1);
        echo '</span></pre>';
        echo '</div>';
    ?>

      </div>
    </div>
  </div>
</div>
</body>
</html>

