<?php include_once 'header.php'; ?>



<section class="login-form">

  <div class="container">
      <h2 class="text-center display-1 secondary-title py-2">Log In</h2>
      <div class="d-flex justify-content-between flex-wrap">
      <form class="d-flex justify-content-between flex-wrap"  action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/email...">

        <input type="text" name="pwd" placeholder="Password...">

        <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="submit">Log In</button>

      </form>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "empryinput"){
            echo "<p> Fill in all Fields! </p>";
          }
          if($_GET['error'] == "wronglogin"){
            echo "<p>Incorrect login information! </p>";
          }
        }

       ?>
        </div>
       </div>

    </section>


<?php include_once 'footer.php'; ?>
