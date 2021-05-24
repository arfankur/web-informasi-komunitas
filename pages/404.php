<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <?php include_once "../partials/_css.php"; ?>
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <header id="header">
        <div class="container">
          <!-- partial:../partials/_navbar.html -->
          <?php include_once "../partials/_navbar.php"; ?>

          <!-- partial -->
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="error-wrap">
              <div class="error-title">
                404
              </div>
              <div class="error-sub-title">
                Oops! That Page Can’t Be Found.
              </div>
              <p>Maybe Try Using The Search Or Navigate To Homepage.</p>

              <div class="search-container">
                <input type="text" placeholder="Search.." name="search" />
                <button type="submit"><i class="mdi mdi-magnify"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container-scroller ends -->
    <!-- partial:../partials/_footer.html -->
    <?php include_once "../partials/_footer.php"; ?>

    <!-- partial -->
    <!-- inject:js -->
    <?php include_once "../partials/_script.php"; ?>
    <!-- End custom js for this page-->
  </body>
</html>
