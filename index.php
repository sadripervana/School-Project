<?php include_once 'header.php'; ?>
<!-- .Header -->

<!-- Main Site -->
<main id="site-main">

  <!-- BlogPost ---->

<!-- <section class="gallery-links">
  <div class="wrapper">
    <h2>Gallery</h2>

    <div class="gallery-container">

    </div> -->
    <!-- article -->

    <section id="posts">
      <div class="container">
        <div class="grid">
          <!-- article -->
          <!-- <div class="gallery-container"> -->
            <?php
            include_once 'includes/dbh.inc.php';

                  $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";//newest on bind_textdomain_codeset
                  $stmt = mysqli_stmt_init($conn);

                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL statement failed!";
                  } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while($row = mysqli_fetch_assoc($result)){
                      echo '
                      <div class="grid-item">
                      <article class="article">
                      <div class="card">
                      <div class="overflow-img " >
                      <a href="sidebarlast.php?title='.$row['titleGallery'].'&order='.$row['orderGallery'].'"><img src="./img/gallery/'.$row['imgFULLNameGallery'].'" class="img-fluid"">
                      </a>
                      </div>
                      <div class="card-body text-center px-1">
                      <a href="#" class="text-title display-1 text-dark">
                      <h3>'.$row['titleGallery'].'</h3>
                      </a>
                      <p class="secondary-title text-secondary display-3">
                      <span><i class="far fa-comments text-primary"></i>
                      <p>'.$row['descGallery'].'</p>
                      </span>
                      <span><i class="fa fa-list-ol text-primary"  aria-hidden="true"></i> '.$row['orderGallery'].'</span>
                      </p>
                      </div>
                      </div>
                      </article>
                      </div>
                      ';
                    }
                  }
                  ?>
                  <!-- </div> -->
                  <!-- .article -->
                </div> -->
              </div>
              <!-- comment form -->

            </div>
          </section>


          <!-- .BlogPost ---->


          <?php include_once 'footer.php' ?>
