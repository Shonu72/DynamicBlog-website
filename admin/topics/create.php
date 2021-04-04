<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Section - Add Topic</title>
    <script
      src="https://kit.fontawesome.com/5bb29a5a34.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="../../assets/css/admin.css" />
  </head>
  <body>
    
  <!-- admin code here  -->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">
    <!-- Left sidebar  -->
  <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    

    <!-- Admin content  -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Topic</a>
        <a href="index.php" class="btn btn-big">Manage Post</a>
      </div>

      <div class="content">
        <h2 class="page-title">Add Topic</h2>
        
  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <form action="create.php" method="post">
            <div>
                <label >Name</label>
                <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
            </div>
            <div>
                <label >Description</label>
                <textarea name="description" id="body" <?php echo $description ?> ></textarea>
            </div>
            <div>
                <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
            </div>
        </form>

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
    <script src="../../assets/js/script.js"></script>

  </body>
</html>
