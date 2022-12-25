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

<div class="post-footer mb-3">
              <div class="comment-form">

                <h3 class="text-center display-1 secondary-title py-2">Update Posts</h3>
                <div class="d-flex justify-content-between flex-wrap">
                <form class="d-flex justify-content-between flex-wrap" action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                  <input type="text" class="form-control" name="filename" placeholder="File name...">
                  <input type="text" class="form-control" name="filetitle" placeholder="Image title...">
                  <textarea class="form-control mt-3" name="filedesc" placeholder="Image description... " rows="8" cols="80"></textarea>

                  <input class="form-control mt-3" type="file" name="file" >
                  <!-- <button type="submit" name="submit">Upload</button> -->
                  <button type="submit" name="submit" class="btn btn-primary display-2 text-light mt-2">Upload More Posts...</button>
              </form>

              <h3 class="text-center display-1 secondary-title py-2"> Delete file by order</h3>
              <form class="" action="deletefile.php" method="post">
                <input class="form-control" type="text" name="name" placeholder="Enter your number" style="width:300px" value="">
                <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="submit">Delete file</button>
              </form>


              <h3 class="text-center display-1 secondary-title py-2"> Delete files name</h3>
              <form class="" action="deletefile.php" method="post">
                <input class="form-control" type="text" name="filename" placeholder="Sepererate each name with a comma(,)" style="width:300px" value="">
                <button class="btn btn-primary display-2 text-light mt-2" type="submit" name="sibmitname">Delete file</button>
              </form>


              </div>
              </div>


              </div>
            </div>



          <!-- post footer -->
          <div class="post-footer mb-3">
            <div class="post-tags d-flex flex-wrap justify-content-center">
              <a href="#" class="nav-link btn bg-light">Travel</a>
              <a href="#" class="nav-link btn bg-light">Food</a>
              <a href="#" class="nav-link btn bg-light">Lifestyke</a>
              <a href="#" class="nav-link btn bg-light">Technology</a>
              <a href="#" class="nav-link btn bg-light">Fashion</a>

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
                        USA
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
                    <img src="./assets/img2.jpeg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        London
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
                    <img src="./assets/img3.jpeg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Paris
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
                    <img src="./assets/img4.jpeg" class="rounded px-1" alt="">
                  </a>
                  <div class="cart-body">
                    <div class="trending-category">
                      <a href="#" class="link text-primary">
                        Brazil
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



          </div>
        </div>

      </div>
    </section>
    <!-- .Swiper slider -->

  </main>
  <!-- .Main Site -->

  <?php include_once 'footer.php' ?>
