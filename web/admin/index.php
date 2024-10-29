<?php
include_once("web/layout/headerInclude.php");
$page_nav = 0;
// required connect with router only
// if (!$required) {
//   header('Location: /CrosswalkAgency');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php include("web/linkframework/css.php"); ?>
  <?php include("web/layout/datatable/css.php"); ?>
  <link rel="stylesheet" href="stye.css">
</head>

<body class="sidebar-mini layout-fixed sidebar-collapse">
  <!-- page to web -->
  <input type="number" id="nav_page" value="<?= $page_nav  ?>" class="d-none">
  <div class="wrapper">

    <?php include("web/layout/preloder.php"); ?>
    <?php include("web/layout/header.php"); ?>
    <?php include("web/layout/slidebar.php"); ?>


    <!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <section class="conten-box1">
      <div class="container-fluid">
        <div class="imges">
          <img src="/CrosswalkAgency/web/favicon/unnamed.jpg">
        </div>
        <button type="button" class="btn btn-outline-danger">ซื้อ</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button>
        <div class="text1">
        </div>
        <div class="imges-1">
          <img src="/CrosswalkAgency/web/favicon/87ab33ae-8dca-487d-ac86-779086de65e0.jpg">
        </div>
        <div class="text1">
        </div>
        <button type="button" class="btn btn-outline-danger">ซื้อ</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button>
        <div class="imges-2">
          <img src="/CrosswalkAgency/web/favicon/2023_306760577logo.jpg">
        </div>
        <div class="text1">

        </div>
        <button type="button" class="btn btn-outline-danger">ซื้อ</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button>
      </div>

    </section>
    <!-- /.content -->

  </div>
  <?php include("web/layout/footer.php"); ?>
  </div>
  <!-- ./wrapper -->
  <?php include("web/linkframework/js.php"); ?>
  <?php include("web/layout/datatable/js.php"); ?>
</body>

</html>