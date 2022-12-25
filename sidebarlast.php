<?php include_once 'header.php' ?>
  <!-- Main Site -->
  <main id="site-main">

    <!-- Post Content -->
    <section class="container">
      <div class="layout-2 row">
        <div class="col-8">
          <article id="post">
            <!-- article Headings -->
            <div class="headings text-center">



                <?php
                include_once 'includes/dbh.inc.php';

                $title =  mysqli_real_escape_string($conn, $_GET['title']);
                $date =  mysqli_real_escape_string($conn, $_GET['order']);


                $sql = "SELECT * FROM gallery WHERE titleGallery='$title' AND orderGallery='$date'";//newest on bind_textdomain_codeset
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  echo "SQL statement failed!";
                } else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $queryResult = mysqli_num_rows($result);
                  if($queryResult > 0 ){
                    while ($row = mysqli_fetch_assoc($result)){

                      echo "<div class ='article-box'>
          <img src='./img/gallery/".$row['imgFULLNameGallery']."' width='40%' height= '40%'>
          <h3>".$row['titleGallery']."</h3>
          <p>".$row['descGallery']."</p>
          <p>".$row['orderGallery']."</p>

        </div>";
      }
    }
  }  

  ?>

  <!-- comments -->
              <div class="post-comments py-2">
                <h3 class="text-center display-1 secondary-title">5 Comments</h3>
                <?php 
                $sql = "SELECT * FROM comment WHERE   orderlist='$date'";//newest on bind_textdomain_codeset
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  echo "SQL statement failed!";
                } else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $queryResult = mysqli_num_rows($result);
                  if($queryResult > 0 ){
                    while ($row = mysqli_fetch_assoc($result)){

                      echo ' <div class="comment-details">
                  <div class="comment-item py-2">
                    <div class="d-flex">
                      <div class="avatar px-2">
                        <img src="./assets/face/face1.jpg" class="rounded" alt="">
                      </div>
                      <div class="comment-content">
                        <h5 class="display-2 m-0">'.$row['name'] . '</h5>
                        <p class="title-secondary text-dark">
                          '.$row['textarea'] . '
                          </p>
                      </div>
                    </div>';
      }
    }
  }  
  ?>
               
                <!-- comment form -->
                <div class="comment-form">

                  <h3 class="text-center display-1 secondary-title py-2">Leave Comment</h3>
                  <form action="comment.php" method="POST">
                    <div class="d-flex justify-content-between flex-wrap">
                      <input type="hidden" name="order" value="<?php echo $date;?>">
                      <input type="text" name="name" class="form-control" placeholder="Name">
                      <input type="email" name="email" class="form-control" placeholder="Email">

                    </div>
                    <textarea class="form-control mt-3" name="textarea" placeholder="Message " rows="8" cols="80"></textarea>
                    <div class="text-center">
                      <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="button">Submit</button>
                    </div>
                  </form>
                </div>
              </div>

          </div>
          <!-- .post footer -->
        </div>
        <div class="col-4">
          <aside id="sidebar" class="px-1">

      <?php include_once 'footer.php' ?>
