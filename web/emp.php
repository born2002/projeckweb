<head>
  <link rel="stylesheet" href="./web/asset/css/cssfonten/emp.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>รายชื่อพนักงาน</title>
</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>
<section>
  <div class="headbar">
    <span>รายชื่อพนักงาน</span>
    <button type="button" class="btn-ont" data-toggle="modal" data-target="#myModal">เพิ่มรายชื่อพนักงาน</button>
  </div>
  <div class="search">
    <div class="form-outline" data-mdb-input-init>
      <input id="search-focus" type="search" id="form1" class="form-control">
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path fill="rgb(189, 189, 189)" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg></a>
    </div>
  </div>
  <div class="box1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"><img src="web/asset/image/preple.png" alt=""></th>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <th scope="col">
            <div class="Crosswalk">Crosswalk Agency
            </div>
          </th>
        </tr>
        <tr>
          <th scope="col" class="name1">ชื่อ
          <td class="name">Ittiphon Sansu</td>
          </th>
        </tr>
        <tr>
          <th scope="col" class="name1">รหัสพนักงาน
          <td class="name">xxxxxx</td>
          </th>
        <tr>
          <th scope="col" class="name1">ตำเเหน่ง
          <td class="name"> Design</td>
          </th>
        </tr>
      </thead>
    </table>
    <tr>
      <td>
        <div class="button">
          <a href="emp1.php"><button type="button" class="details">รายระเอียดเพิ่มเติม</button></a>
        </div>
      </td>
    </tr>
  </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">ข้อมูลส่วนตัว</h1>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
                    <div class="button-label">
                      <button type="button" class="warning1"><label for="uploadfile">เพิ่มภาพ</label></button>
                      <input type="file" name="uploadfile" onchange="updateImage(this)" id="uploadfile" class="d-none">
                    </div>
                  </div>
                </div>
              </div>
              <tbody>
                <div class="row">
                  <div class="col-6 pr-0">
                    <div class="tranform">
                      <div class="contro1">
                        <tr>
                          <th scope="col">
                            <select name="template_name" type="text" required name="name" class="form-control1" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                              <option value="">นาย</option>
                              <option value="">นาง</option>
                              <option value="">นางสาว</option>
                            </select>
                          </th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="ชื่อ"></th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="นาสกุล"></th>
                        </tr>
                        <div class="contro2">
                          <tr>
                            <th scope="col"><input type="name" id="name" class="form-control3" placeholder="รหัสพนักงาน"></th>
                            <th scope="col">
                              <select name="template_name" type="text" required name="name" class="form-control3" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                                <option value="">ตำเเหน่ง</option>
                                <option value="">Design</option>
                              </select>
                            </th>
                          </tr>
                        </div>
                      </div>
                      <div class="contro3">
                        <tr>
                          <th scope="col">
                            <select name="template_name" type="text" required name="name" class="form-control1" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                              <option value="">Mister </option>
                              <option value="">Missus</option>
                              <option value="">Miss</option>
                            </select>
                          </th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="Name"></th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="Surname"></th>
                          <th scope="col">
                            <select name="template_name" type="text" required name="name" class="form-control2" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="สถานะ">
                              <option value="">สถานะ</option>
                              <option value="">โสด</option>
                            </select>
                          </th>
                          <th scope="col">
                            <select name="template_name" type="text" required name="name" class="form-control1" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                              <option value="">เพศ</option>
                              <option value="">ชาย</option>
                              <option value="">หญิง</option>
                            </select>
                          </th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="ชื่อเล่น"></th>
                        </tr>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro4">
                      <tr>
                        <th scope="col"><input type="name" id="name" class="form-control1" placeholder="วันเกิด"></th>
                        <th scope="col">
                          <select name="template_name" type="text" required name="name" class="form-control2" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                            <option value="moth">เดือน</option>
                            <option value="January">มกราคม</option>
                            <option value="February">กุมภาพันธ์</option>
                            <option value="March">มีนาคม</option>
                            <option value="April">เมษายน</option>
                            <option value="May">พฤษภาคม</option>
                            <option value="June">มิถุนายน</option>
                            <option value="July">กรกฎาคม</option>
                            <option value="August">สิงหาคม</option>
                            <option value="September">กันยายน</option>
                            <option value="October">ตุลาคม</option>
                            <option value="November">พฤษจิกายน</option>
                            <option value="December">ธันวาคม</option>
                          </select>
                        </th>
                        <th scope="col"><input type="name" id="name" class="form-control2" placeholder="พ.ศ."></th>
                    </div>
                    <div class="contro3">
                      <tr>
                        <th scope="col"><input type="name" id="name" class="form-control1" placeholder="หมู่เลือด"></th>
                        <th scope="col"><input type="name" id="name" class="form-control2" placeholder="สัญชาติ"></th>
                        <th scope="col"><input type="name" id="name" class="form-control2" placeholder="เชื้อชาติ"></th>
                        <th scope="col"><input type="name" id="name" class="form-control2" placeholder="ศาสนา"></th>
                        <th scope="col"><input type="name" id="name" class="form-control4" placeholder="เลขบัตรประจำตัวประชาชน"></th>
                      </tr>
                    </div>
                  </div>
              </tbody>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSearch" class="primary">เพืมรายชื่อ</button>
        <button type="button" class="default" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</section>

<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var x = 0;
      var dropdowns = $("dropdown-content-" + x++);
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  
  document.requestStorageAccess({
    createObjectURL: true
  }).then(
    (handle) => {
      console.log("createObjectURL access granted");
      handle.createObjectURL(new Blob(["foo"]));
    },
    () => {
      console.log("createObjectURL access denied");
    },
  );
  const updateImage = (e) => {
    const url = URL.createObjectURL(e.files[0])
    document.getElementById("preview-file").src = url
  }
</script>