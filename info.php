<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        body{ font: 20px sans-serif; text-align: center; }
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
<div style="margin-top: 10rem"></div>
    <div class="divs">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center; align-items: center;">
               
                    
                    
                    
                    <?php
                echo "info";
                    ?>
                

            </div>
        </div>
    </div>
</body>
</html>
