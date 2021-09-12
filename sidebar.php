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


              <div class="article-container">
                <?php
                if(isset($_POST['submit-search'])){
                  $search = mysqli_real_escape_string($conn, $_POST['search']);
                  $sql = "SELECT * FROM gallery WHERE titleGallery LIKE '%$search%'
                  OR descGallery LIKE '%$search%'
                  OR orderGallery LIKE '%$search%'  ";
                  $result = mysqli_query($conn, $sql);
                  $queryResult = mysqli_num_rows($result);

                  echo "There are ".$queryResult." results";

                  if($queryResult > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<a href='sidebarlast.php?title=".$row['titleGallery']."&order=".$row['orderGallery']."'><div class ='article-box'>
                        <img src='./img/gallery/".$row['imgFULLNameGallery']."' width='40%' height= '40%'>
                        <h3>".$row['titleGallery']."</h3>
                        <p>".$row['descGallery']."</p>
                        <p>".$row['orderGallery']."</p>

                      </div></a>";
                    }
                  }
                } else {
                  echo "There are no Result matching your search";
                }
                 ?>
              </div>
            
          </article>


          <!-- post footer -->
          <div class="post-footer mb-3">
            <div class="post-tags d-flex flex-wrap justify-content-center">
              <a href="#" class="nav-link btn bg-light">Travel</a>
              <a href="#" class="nav-link btn bg-light">Food</a>
              <a href="#" class="nav-link btn bg-light">Lifestyke</a>
              <a href="#" class="nav-link btn bg-light">Technology</a>
              <a href="#" class="nav-link btn bg-light">Fashion</a>

            </div>

            <div class="post-author text-center">
              <div class="author-avatar">
                <img src="./assets/face/face1.jpg"class="rounded" alt="">
              </div>

              <div class="author-info py-2">
                <h3>John Stephens</h3>
                <p class="text-secondary secondary-title">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime praesentium consequatur quaerat itaque molestiae quo repudiandae eius quasi. Ut, ea.
                </p>

                <div class="post-tags d-flex flex-wrap justify-content-center">
                  <a href="#" class="nav-link "><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="nav-link "><i class="fab fa-twitter"></i></a>
                  <a href="#" class="nav-link "><i class="fab fa-instagram"></i></a>
                  <a href="#" class="nav-link "><i class="fab fa-dribbble"></i></a>



                </div>
              </div>
            </div>

              <!-- post related -->
              <div class="post-realted py-2">
                <div class="row justify-content-center">
                  <div class="prev">
                    <div class="py-2">
                      <a href="#" class="display-2 text-dark">
                        <i class="fas fa-chevron-left"></i>
                        Previous Post
                      </a>
                    </div>
                    <article class="article text-center" >
                      <div class="d-flex">
                        <a href="#">
                          <img src="./assets/img9.jpg" class="object-fit" alt="">
                        </a>
                        <div class="cart-body px-1">
                          <div class="category">
                            <a href="#" class="link text-primary text-secondary">Fashion</a>
                          </div>
                          <a href="#" class="text-title display-1 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, repellendus.
                          </a>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="next text-right">
                    <div class="py-2">
                      <a href="#" class="display-2 text-dark">

                        Next Post
                        <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                    <article class="article text-center" >
                      <div class="d-flex">

                        <div class="cart-body px-1">
                          <div class="category">
                            <a href="#" class="link text-primary text-secondary">Fashion</a>
                          </div>
                          <a href="#" class="text-title display-1 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, repellendus.
                          </a>
                        </div>
                        <a href="#">
                          <img src="./assets/img8.jpg" class="object-fit" alt="">
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <!-- comments -->
              <div class="post-comments py-2">
                <h3 class="text-center display-1 secondary-title">5 Comments</h3>

                <div class="comment-details">
                  <div class="comment-item py-2">
                    <div class="d-flex">
                      <div class="avatar px-2">
                        <img src="./assets/face/face1.jpg" class="rounded" alt="">
                      </div>
                      <div class="comment-content">
                        <h5 class="display-2 m-0">Brandodn Kelly</h5>
                        <p class="title-secondary text-dark">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est omnis dicta totam explicabo dolorum sunt perferendis veritatis. Pariatur, laudantium, ad.
                        </p>
                      </div>
                    </div>

                    <!-- coment reply -->
                    <div class="reply py-2">
                      <div class="d-flex">
                        <div class="avatar px-2">
                          <img src="./assets/face/face2.jpg" class="rounded" alt="">
                        </div>
                        <div class="comment-content">
                          <h5 class="display-2 m-0">Brandodn Kelly</h5>
                          <p class="title-secondary text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est omnis dicta totam explicabo dolorum sunt perferendis veritatis. Pariatur, laudantium, ad.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="comment-item py-2">
                    <div class="d-flex">
                      <div class="avatar px-2">
                        <img src="./assets/face/face3.jpg" class="rounded" alt="">
                      </div>
                      <div class="comment-content">
                        <h5 class="display-2 m-0">Brandodn Kelly</h5>
                        <p class="title-secondary text-dark">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est omnis dicta totam explicabo dolorum sunt perferendis veritatis. Pariatur, laudantium, ad.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- comment form -->
                <div class="comment-form">

                  <h3 class="text-center display-1 secondary-title py-2">Leave Comment</h3>
                  <div class="d-flex justify-content-between flex-wrap">
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="email" class="form-control" placeholder="Email">
                    <input type="text" class="form-control" placeholder="Website">

                  </div>
                  <textarea class="form-control mt-3" placeholder="Message " rows="8" cols="80"></textarea>
                  <div class="text-center">
                    <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="button">Submit</button>
                  </div>
                </div>
              </div>

          </div>
          <!-- .post footer -->
        </div>
        <div class="col-4">
          <aside id="sidebar" class="px-1">

            <!-- coategory -->
            <section class="categories">
              <h2 class="text-center text-dark">Categories</h2>

              <a href="#" class="d-flex justify-content-between text-dark">
                <span>Design</span>
                <span>5</span>
              </a>
              <a href="#" class="d-flex justify-content-between text-dark">
                <span>Graphic</span>
                <span>8</span>
              </a>
              <a href="#" class="d-flex justify-content-between text-dark">
                <span>Illustrator</span>
                <span>3</span>
              </a>
              <a href="#" class="d-flex justify-content-between text-dark">
                <span>Fashion</span>
                <span>2</span>
              </a>
            </section>
          </aside>

          <!-- Trending post -->
          <section class="trending-post mt-3">

            <h2 class="text-center text-dark py-2">Trending Post</h2>

            <!-- post items -->
            <div class="post-item py-1">
              <article class="article">
                <div class="d-flex">
                  <a href="#">
                    <img src="./assets/img1.jpg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Fashion
                      </a>
                    </div>
                    <a href="#" class="text-title display-2 text-dark">Looking for some feedback for this rejected track technology
                    </a>
                    <p class="secondary-title text-secondary display-3">
                      <span><i class="far fa-clock text-primary"></i>
                        Clock Wed 02,2019
                      </span>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <div class="post-item py-1">
              <article class="article">
                <div class="d-flex">
                  <a href="#">
                    <img src="./assets/img2.jpg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Fashion
                      </a>
                    </div>
                    <a href="#" class="text-title display-2 text-dark">Looking for some feedback for this rejected track technology
                    </a>
                    <p class="secondary-title text-secondary display-3">
                      <span><i class="far fa-clock text-primary"></i>
                        Clock Wed 02,2019
                      </span>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <div class="post-item py-1">
              <article class="article">
                <div class="d-flex">
                  <a href="#">
                    <img src="./assets/img3.jpg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Fashion
                      </a>
                    </div>
                    <a href="#" class="text-title display-2 text-dark">Looking for some feedback for this rejected track technology
                    </a>
                    <p class="secondary-title text-secondary display-3">
                      <span><i class="far fa-clock text-primary"></i>
                        Clock Wed 02,2019
                      </span>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <div class="post-item py-1">
              <article class="article">
                <div class="d-flex">
                  <a href="#">
                    <img src="./assets/img4.jpg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Fashion
                      </a>
                    </div>
                    <a href="#" class="text-title display-2 text-dark">Looking for some feedback for this rejected track technology
                    </a>
                    <p class="secondary-title text-secondary display-3">
                      <span><i class="far fa-clock text-primary"></i>
                        Clock Wed 02,2019
                      </span>
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </section>
        </div>
      </div>

    </section>
      <!-- .Post Content -->



  </main>
  <!-- .Main Site -->

  <?php include_once 'footer.php' ?>
