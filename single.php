<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $post['title']; ?> | codeblog.online</title>
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
    <!-- fb plugin  -->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="27jvDxKr"></script>
   
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <div class="page-wrapper">
      <!-- content  -->
      <div class="content clearfix">
        <!-- main content  -->
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?> </h1>

          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
       
          </div>
        </div>
        <!--// main conent  -->
        <!-- sidebar  -->
        <div class="sidebar single">
          <!-- fb plugin  -->
          <div class="fb-page" data-href="https://www.facebook.com/Code-like-pro-109907004245410/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Code-like-pro-109907004245410/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Code-like-pro-109907004245410/">Code like pro</a></blockquote></div>

          <div class="section popular">
            <h2 class="section title">Popular Post</h2>

            <?php foreach ($posts as $p): ?>
              <div class="post clearfix">
              <img src="<?php echo BASE_URL . '/assets/img/' . $p['image']; ?>" alt="" />
              <a href="" class="title">
              <h4><?php echo $p['title']; ?></h4>
              </a>
            </div>
            <?php endforeach;  ?>

            
       
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
        <!-- // sidebar  -->
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
