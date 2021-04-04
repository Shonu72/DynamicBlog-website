<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Section - Edit Post</title>
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
        <a href="create.php" class="btn btn-big">Add Post</a>
        <a href="index.php" class="btn btn-big">Manage Post</a>
      </div>

      <div class="content">
        <h2 class="page-title">Edit Post</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


        <form action="edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div>
                <label >Title</label>
                <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
            </div>
            <div>
                <label >Body</label>
                <textarea name="body" <?php echo $title ?> id="body" ></textarea>
            </div>

            <div>
              <label>Image</label>
              <input type="file" name="image" class="text-input">
            </div>

            <div>
                <label>Topic</label>
                <select name="topic_id" class="text-input">
                    <option value=""></option>
                      <?php foreach ($topics as $key => $topic): ?>
                      <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                      <?php else: ?>
                    <option  value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                      
                      <?php endif; ?>

                    <?php endforeach; ?>
                </select>
            </div>
            <div>
            <?php if(empty($published) && $published ==0) : ?>
              <label>
                    <input type="checkbox" name="published">
                    Publish
                    </label>
                      <?php else: ?>
                        <label>
                    <input type="checkbox" name="published" checked>
                    Publish
                    </label>
                      <?php endif; ?>
            </div>
            <div>
                <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
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
