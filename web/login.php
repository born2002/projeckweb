<!-- <?php
      include_once("layout/headerInclude.php");

      // required connect with router only
      if (!$required) {
        header('Location: /CrosswalkAgency');
      }
      ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php include("web/linkframework/css.php"); ?>
  <link rel="stylesheet" href="./web/asset/css/cssfonten/login.css">

</head>

<body class="body-login">
  <div class="container-login d-flex justify-content-center align-items-center h-100">
    <div class="box1 d-flex flex-column justify-content-center">
      <div class="mb-5 text-center ">
        <img class="" src="web/asset/image/Re-logo-CW2020 2.png">
      </div>
      <div class="form-inp mb-3">
        <img style="display: flex; position: absolute; width: 25px; margin: 10px; margin-top: 10px;
    margin-left: 12px ;" src="web/asset/image/Users.png">
        <input id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-inp mb-3">
        <img style="display: flex; position: absolute; width: 25px; margin: 10px;margin-top: 10px;
    margin-left: 12px" src="web/asset/image/key1s.png">
        <input id="Password" name="Password" placeholder="Password" required>
      </div>
      <div class="checkbox1 mb-3 w-200">
        <input type="checkbox" class="" id="exampleCheck1 ">
        <label class="form-check-label" for="exampleCheck1"> จำรหัสผ่าน</label>
      </div>
      <div class="boxh1">
        <a href="dashboard.php">
          <button name="btn-login" class="btn-login d-inline-block txt9" type="submit">LOGIN</button>
        </a>

      </div>
    </div>
  </div>
  <!-- ./wrapper -->
</body>

</html>