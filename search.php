<?php include 'header.php'; ?>
<h1>Search Page</h1>
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
        echo "<a href='article.php?title=".$row['titleGallery']."&order=".$row['orderGallery']."'><div class ='article-box'>
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

<?php include_once 'footer.php' ;?>
