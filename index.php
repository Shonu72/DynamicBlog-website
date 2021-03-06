<?php
 include("path.php"); 
 include(ROOT_PATH . "/app/controllers/topics.php"); 

 $posts = array();
 $postsTitle = 'Recent posts';

 if (isset($_GET['t_id'])) {
   $posts = getPostByTopicId($_GET['t_id']);
   $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";

 }else if(isset($_POST['search-term'])) {
   $postsTitle = "You searched for '" . $_POST['search-term'] . " '";
   $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>codeblog</title>
    <script
      src="https://kit.fontawesome.com/5bb29a5a34.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script data-ad-client="ca-pub-7178765053023237" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>
  <body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/message.php"); ?>




    <div class="page-wrapper">
      <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="post-wrapper">

        <?php foreach ($posts as $post):?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>" alt="" class="slider-img" />
            <div class="post-info">
              <h4>
                <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>               
              </h4>
              <i class="fa fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="fa fa-calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            </div>
          </div>
        <?php endforeach; ?>

         
        </div>
      </div>

      <!-- content  -->
      <div class="content clearfix">
        <!-- main content  -->
        <div class="main-content">
          <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

      <?php foreach ($posts as $post):?>
            <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>" alt="" class="post-img" />
            <div class="post-preview">
              <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="fa fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="fa fa-calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
              </p>
              <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More..</a>
            </div>
          </div>
        <?php endforeach; ?>


          

        </div>
        <!--// main conent  -->
        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.php" method="POST">
              <input
                type="text"
                name="search-term"
                class="text-input"
                placeholder="search..."
              />
            </form>
          </div>

          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>

            <?php foreach ($topics as $key => $topic): ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- footer  -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="assets/js/script.js"></script>

    <!-- <footer>
      <div class="center">
        Copyright &copy; codeblog.online All rights reserved!
      </div>
    </footer> -->
  </body>
</html>
