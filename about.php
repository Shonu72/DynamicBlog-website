<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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

    <section id="About" class="about">
        <div class="container flex items-center about-inner">
            <div class="flex-1">
                <img class="about-me-img" src="assets/img/me.jpg" alt="">
            </div>
            <div class="flex-1 right">
                <h1>About <span>Me</span></h1>
                <h3>Hello I'm Shourya Sonu</h3>
                <p> A FullStack Developer with 1 year of  expereince. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quo praesentium accusamus sapiente voluptatem. Sit autem sint atque provident, eligendi nisi praesentium ipsa quasi placeat culpa consequatur numquam! Sequi delectus vero atque nam suscipit.
                </p>
                <div><button class="btn btn-big"><a target="_blank" href="/resume.pdf">DOWNLOAD CV</a></button></div>
                
            </div>
        </div>
    </section>

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

  </body>
</html>
