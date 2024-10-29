<head>
  <link rel="stylesheet" href="./web/asset/css/cssfonten/information1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>รายชื่อพนักงาน</title>
</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>
<section>

  <div class="headbar">
    <span>รายชื่อพนักงาน</span>

  </div>
  <a href="information.php"><button type="button" class="black-r"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z" />
      </svg></button>
  </a>
  <a href="#"><button type="button" class="black-l"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z" />
      </svg></button>
  </a>
  <div class="container ">
    <div class="row ">
      <div class="col-4">
        <div class="box1">
        </div>
      </div>
      <div class="col-8">
        <div class="box2">
          <div class="personal">
            <span>รายชื่อลูกค้า</span>
          </div>
          <div class="dropdown">
            <button onclick="myFunction(1)" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown1" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="name-e">
                <table class="name-ei">
                  <tr>
                    <th scope="row">บริษัท</th>
                    <td class="n">-</td>
                  </tr>
                  <tr>
                    <th scope="row">ชื่อลูกค้า</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">บุคคลที่ติดต่อ (AE)</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">ที่อยู่</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">เลขทีผู้เสียภาษี</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">Contact</th>
                    <div class="">
                      <td class="name-e-3-1"><img src="web/asset/image/Gmail.png" alt=""></td>
                      <td class="name-e-3-2"><img src="web/asset/image/tell.png" alt=""></td>
                      <td class="name-e-3-2"><img src="web/asset/image/line.png" alt=""></td>
                    </div>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 body-box3">
        <div class="box3">
          <div class="Wages">
            <span>ผู้ติดต่อ</span>
          </div>
          <div class="dropdown">
            <button onclick="myFunction(2)" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown2" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <table class="name-ei">
                <tr>
                  <th scope="row">ชื่อ:</th>
                  <td class="n">-</td>
                </tr>
                <tr>
                  <th scope="row">ตำเเหน่ง:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">Contact</th>
                  <td class="name-e-3-1"><img src="web/asset/image/Gmail.png" alt=""></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td class="name-e-3-1"><img src="web/asset/image/tell.png" alt=""></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 body-box3">
        <div class="box3">
          <span class="Wages">Project</span>
          <div class="dropdown">
            <button onclick="myFunction(3)" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown3" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 ci">
              <div class="name-e">
                <table class="name-ei">
                  <tr>
                    <div class="projc">
                      <th scope="row">Project</th>
                      <td class="n">-</td>
                    </div>
                  </tr>
                  <tr>
                    <th scope="row">ผู้ติดต่อ</th>
                    <td class="n">-</td>
                  </tr>
                  <tr>
                    <th scope="row">วันเริมสัญญา</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">วันจบสัญญา</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">สถานะ</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">รายระเอียดงาน </th>
                    <td class="name-e-2">-</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 body-box3">
        <div class="box3">
          <span class="Wages">ข้อมูลการติดต่อ</span>
          <div class="dropdown">
            <button onclick="myFunction(4)" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown4" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <table class="name-ei">
                <tr>
                  <th scope="row">Project:</th>
                  <td class="n">-</td>
                </tr>
                <tr>
                  <th scope="row">ผู้ติดต่อ:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">วันที่:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">Contact:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">รายระเอียดงาน:</th>
                  <td class="name-e-2">-</td>
                </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="butt">
        <div class="row">
          <div class="col-4 ">
            <button type="button" class="warning" data-toggle="modal" data-target="#myModal1">+ เพิ่มรายชื่อผู้ติดต่อ</button>
          </div>
          <div class="col-4 ">
            <button type="button" class="warning" data-toggle="modal" data-target="#myModal2">+ เพิ่มProject </button>
          </div>
          <div class="col-4 ">
            <button type="button" class="warning" data-toggle="modal" data-target="#myModal3">+ เพิ่มข้อมูลการติดต่อ</button>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title">รายชื่อผู้ติดต่อ</h1>

            </div>
            <div class="modal-body">
              <div class="input-group">
                <div class="name">
                  <div class="row">
                    <div class="files">
                      <div class="saction-input-file">
                        <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
                        <div class="name-borisuth">
                          <input type="name" id="name" class="form-control13" placeholder="" disabled>
                          <input type="name" id="name" class="form-control13" placeholder="" disabled>
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
                              <div class="">
                                <span class="start-date">ชื่อ</span>
                                <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                              </div>
                              <div class="">
                                <span class="start-date">ตำเหน่ง</span>
                                <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                              </div>
                              <th scope="col "><input type="image" src="web/asset/image/Gmail.png" width="35" height="25"></th>
                              <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                              <th scope="col "><input type="image" src="web/asset/image/tell.png" width="35" height="25"></th>
                              <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกเบอร์โทร"></th>
                            </tr>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="contro13">
                          <tr>
                            <div class="">
                              <span class="start-date">ชื่อ</span>
                              <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                            </div>
                            <div class=""></div>
                            <div class="">
                              <span class="start-date">ตำเหน่ง</span>
                              <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                            </div>
                            <div class=""></div>
                            <th scope="col "><input type="image" src="web/asset/image/Gmail.png" width="35" height="25"></th>
                            <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                            <th scope="col "><input type="image" src="web/asset/image/tell.png" width="35" height="25"></th>
                            <th scope="col"><input type="name" id="name" class="form-control7" placeholder="กรอกเบอร์โทร"></th>
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
<div class="">
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title">Project</h1>

        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
                    <div class="name-borisuth">
                      <input type="name" id="name" class="form-control13" placeholder="" disabled>
                      <input type="name" id="name" class="form-control13" placeholder="" disabled>
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
                          <div class="">
                            <span class="start-date">โปรเจค</span>
                            <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                          </div>
                          <div class="">
                            <span class="start-date">ผู้ติดต่อ</span>
                            <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                          </div>

                          <div class="start">
                            <span class="start-date">วันเริ่มสัญญา</span>
                            <th scope="col"><input type="date" name="mydate" id="dateStart" class="form-control9" /> </th>
                          </div>
                          <div class="finish">
                            <span class="finish-date">วันจบสัญญา</span>
                            <th scope="col"><input type="date" name="mydate" id="dateStart" class="form-control9" /> </th>
                          </div>
                        </tr>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro3">
                      <tr>
                        <th scope="col">
                          <select name="template_name" type="text" required name="name" class="form-control9" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                            <option value="">สถานะ</option>
                            <option value="">....</option>
                            <option value="">....</option>
                            </sel>
                          </select>
                        </th>
                        <div class="description-1">
                          <span class="Job-description">รายละเอียดงาน</span>
                          <th scope="col"><input type="name" id="name" class="form-control11" placeholder=""></th>
                        </div>
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
</div>

<div class="">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title">เพิ่มข้อมูลการติดต่อ</h1>

        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
                    <div class="name-borisuth">
                      <input type="name" id="name" class="form-control13" placeholder="" disabled>
                      <input type="name" id="name" class="form-control13" placeholder="" disabled>
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
                          <div class="">
                            <span class="start-date">โปรเจค</span>
                            <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                          </div>
                          <div class="">
                            <span class="start-date">ผู้ติดต่อ</span>
                            <th scope="col"><input type="name" id="name" class="form-control9" placeholder=""></th>
                          </div>
                          <div class="finish">
                            <span class="finish-date">วันที่</span>
                            <th scope="col"><input type="date" name="mydate" id="dateStart" class="form-control9" /> </th>
                          </div>
                        </tr>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro13">
                      <tr>
                        <span class="start-date">Contact</span>
                        <div class="Em">
                          <th scope="col "><input type="image" src="web/asset/image/Gmail.png" width="35" height="25"></th>
                          <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                        </div>
                        <div class="description">
                          <span class="Job-description">รายละเอียดงาน</span>
                          <th scope="col"><input type="name" id="name" class="form-control11" placeholder=""></th>
                        </div>
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
</div>

</section>


<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
  function myFunction(id) {
    document.getElementById("myDropdown" + id).classList.toggle("show");
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


  $(function() {

    var startDateTextBox = $('#dateStart');
    var endDateTextBox = $('#dateEnd');

    startDateTextBox.datepicker({
      dateFormat: 'dd-M-yy',
      onClose: function(dateText, inst) {
        if (endDateTextBox.val() != '') {
          var testStartDate = startDateTextBox.datetimepicker('getDate');
          var testEndDate = endDateTextBox.datetimepicker('getDate');
          if (testStartDate > testEndDate)
            endDateTextBox.datetimepicker('setDate', testStartDate);
        } else {
          endDateTextBox.val(dateText);
        }
      },
      onSelect: function(selectedDateTime) {
        endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate'));
      }
    });
    endDateTextBox.datepicker({
      dateFormat: 'dd-M-yy',
      onClose: function(dateText, inst) {
        if (startDateTextBox.val() != '') {
          var testStartDate = startDateTextBox.datetimepicker('getDate');
          var testEndDate = endDateTextBox.datetimepicker('getDate');
          if (testStartDate > testEndDate)
            startDateTextBox.datetimepicker('setDate', testEndDate);
        } else {
          startDateTextBox.val(dateText);
        }
      },
      onSelect: function(selectedDateTime) {
        startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate'));
      }
    });

  });
</script>
</script>