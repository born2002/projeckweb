<?php
include_once("layout/headerInclude.php");
// required connect with router only
if (!$required) {
  header('Location: /CrosswalkAgency');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pong-Framewrok</title>
  <?php include("web/linkframework/css.php"); ?>
</head>

<body class="body">
  <div class="">
    <?php include("web/layout/preloder.php"); ?>
    <div class="text-center p-5">
      <h3 class="fs-1 fw-bold text-center">Test</h3>
    </div>
  </div>

  <!-- ./wrapper -->
  <?php include("web/linkframework/js.php"); ?>
</body>

</html>