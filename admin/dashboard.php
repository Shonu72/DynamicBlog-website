<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script
      src="https://kit.fontawesome.com/5bb29a5a34.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/style.css" />

    <link rel="stylesheet" href="../assets/css/admin.css" />
  </head>
  <body>
    
  <!-- admin code here  -->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">
    <!-- Left sidebar  -->
  <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    

    <!-- Admin content  -->
    <div class="admin-content">
      

      <div class="content">
        <h2 class="page-title">Dashboard</h2>

        <?php include(ROOT_PATH . '/app/includes/message.php'); ?>

        

      </div>
      
    </div>
    <!-- //Admin content  -->

    </div>
    <!-- //page wrapper  -->

    <!-- jquery  -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>

    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- custom script  -->
    <script src="../assets/js/script.js"></script>

  </body>
</html>
