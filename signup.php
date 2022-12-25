<?php include_once 'header.php'; ?>



<section class="signup-form">

  <div class="container">
    <h2 class="text-center display-1 secondary-title py-2">Sign Up</h2>
<div class="d-flex justify-content-between flex-wrap">
    <form  class="d-flex justify-content-between flex-wrap" action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Full name...">
      <input type="email" name="email" placeholder="Email...">
      <input type="text" name="uid" placeholder="Username...">
      <input type="password" name="pwd" placeholder="Password...">
      <input type="password" name="pwdrepeat" placeholder="Repeat PAssword...">
      <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="submit">Sign Up</button>

    </form>
    <?php
      if(isset($_GET['error'])){
        if($_GET['error'] == "empryinput"){
          echo "<p> Fill in all Fields! </p>";
        }
        if($_GET['error'] == "invaliduid"){
          echo "<p>Choose a proper username! </p>";
        }
        if($_GET['error'] == "invalidemail"){
          echo "<p> Choose a proper email! </p>";
        }
        if($_GET['error'] == "passworddontmatch"){
          echo "<p> Password doesen't match! </p>";
        }
        if($_GET['error'] == "stmtfailed"){
          echo "<p> Something went wrong! </p>";
        }
        if($_GET['error'] == "usernametaken"){
          echo "<p>Username already taken! </p>";
        }

      if($_GET['error'] == "none"){
        echo "<p> You have signed up! </p>";
      }
}
     ?>
      </div>
       </div>

    </section>


<?php include_once 'footer.php'; ?>
