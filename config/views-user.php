<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("views/includes/head.php")?>
</head>

<body>
  <script>
    <?php 
      if (isset($success)){ echo "swal('Berhasil', '$success', 'success');"; } 
      if (isset($error))  { echo "swal('Error!', '$error', 'error');"; } 
    ?>
  </script>

  <!-- ======= Top Bar ======= -->
  <?php //include("views/section/topbar.php")?>

  <!-- ======= Header ======= -->
  <?php include("views/includes/header.php")?>

  <?php if($page=="home"){include("views/section/hero.php");} ?>

  <main id="main">
    <?php include("views/$page.php"); ?>
  </main>

  <!-- ======= Footer ======= -->
  <?php include("views/includes/footer.php")?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include("views/includes/script.php")?>

</body>

</html>