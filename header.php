<?php
session_start();
 ?>

<?php include 'includes/dbh.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agjensi Udhetimi</title>

  <!-- font awesome icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!-- swiper slider css file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA==" crossorigin="anonymous" />

  <!-- custom style.css file -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- Header -->
  <header id="header" class="shadow bg-light">
    <nav class="container navbar">
      <a href="index.php" class="nav-brand text-dark">
        Agjensi Udhetimi
      </a>

      <!-- toggle button -->
      <button class="toggle-button">

        <span><i class="fas fa-bars"></i></span>
      </button>

      <!-- collapse on toggle button click -->
      <div class="collapse">
        <ul class="navbar-nav">
          <a href="index.php" class="nav-link">Home</a>
          <a href="#" class="nav-link">Blog</a>
          <a href="#" class="nav-link">Pages</a>
          <a href="#" class="nav-link">Categories</a>
          <?php
          if(isset($_SESSION["useruid"])){
            echo "<a href='admin.php' class='nav-link'>Admin </a> ";
           echo  "  <a href='includes/logout.inc.php' class='nav-link'>logout</a> ";
          }
          else {
            echo "<a href='signup.php' class='nav-link'>Sign up</a> ";
           echo  "  <a href='login.php' class='nav-link'>Login</a> ";
         }

         ?>
        </ul>
      </div>

      <!-- collapse on toggle button click -->
      <div class="collapse">
        <ul class="navbar-nav">
          <div class="search-box">
            <form  action="sidebar.php" method="post">
              <input type="text" name="search"  placeholder="Search">
            <button type="submit" name="submit-search"><i class="fas fa-search"></button></i>
          </form>

          </div>
          <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
        </ul>
      </div>
    </nav>
  </header>
