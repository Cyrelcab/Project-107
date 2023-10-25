<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClassChat</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  </head>
  <body>
    <!--navbar-->
    <?php include('components/navbar.inc.php'); ?>
    <!--end of navbar-->
    <!--option modal-->
    <?php include('components/modal_login.php'); ?>
    <?php include('components/modal_login_student.inc.php'); ?>
    <?php include('components/modal_login_employee.inc.php'); ?>
    <?php include('components/modal_signup.php'); ?>
    <!--end of option modal-->
    <!--home section-->
    <?php include('components/home.inc.php'); ?>
    <!--end of home section-->
    <!--about section-->
    <?php include('components/about.inc.php'); ?>
    <!--end of about section-->
    <!--services section-->
    <?php include('components/services.inc.php'); ?>
    <!--end of services section-->
    <!--footer-->
    <footer class="text-center text-white mb-3">
      <h6 class="fw-normal">Made with ❤❤❤</h6>
    </footer>
    <!--end of footer-->


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="close-login.js"></script>

  </body>
</html>
