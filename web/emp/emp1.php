<head>
  <link rel="stylesheet" href="./web/asset/css/cssfonten/emp1.css">
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
            <span>ข้อมูลส่วนตัว</span>
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
            <div class="col-5 ci">
              <div class="name-e">
                <table class="name-ei">
                  <tr>
                    <th scope="row">ชื่อ</th>
                    <td class="n">-</td>
                  </tr>
                  <tr>
                    <th scope="row">รหัสพนักงาน</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">ตำเหน่ง</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">วันเกิด</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">อายุ</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">สถานะ</th>
                    <td class="name-e-2">-</td>
                  </tr>

                </table>
              </div>
            </div>
            <div class="col-5 ci">
              <div class="name-e">
                <table class="name-ei">
                  <tr>
                    <th scope="row  ">หมู่เลือด</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">เชื้อชาติ</th>
                    <td class="n">-</td>
                  </tr>
                  <tr>
                    <th scope="row">ศาสนา</th>
                    <td class="name-e-2">-</td>
                  </tr>
                  <tr>
                    <th scope="row">เลขบัตรประชาชน</th>
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
          <div class="Wages">
            <span>ข้อมูลเงินเดือน/ค่าจ้าง</span>
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
                  <th scope="row">ประเภทพนักงาน:</th>
                  <td class="n">-</td>
                </tr>
                <tr>
                  <th scope="row">เงินเดือน:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">ประกันสังคม:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">รหัก ณ ที่จ่าย:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">ช่องทางการรับชำระ:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">ธนาคาร:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">เลขบัญชี:</th>
                  <td class="name-e-2">-</td>
                </tr>
                <tr>
                  <th scope="row">สาขา:</th>
                  <td class="name-e-2">-</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 body-box3">
        <div class="box3">
          <span class="Wages">ข้อมูลการจ้างงาน</span>
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
            <div class="col-12">
              <table class="name-ei">
                <tr>
                  <th scope="row">เเผนก:</th>
                  <td class="n">-</td>
                </tr>
                <tr>
                  <th scope="row">วันที่จ้าง:</th>
                  <td class="name-e-2">-</td>
                </tr>
              </table>
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
                  <th scope="row">ที่อยู่:</th>
                  <td class="n">-</td>
            </div>
            </tr>
            <tr>
              <th scope="row">โทรศัพท์:</th>
              <td class="name-e-2">-</td>
            </tr>
            <tr>
              <th scope="row">ไอดีไลน์:</th>
              <td class="name-e-2">-</td>
            </tr>
            <tr>
              <th scope="row">อีเมล:</th>
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
            <h1 class="modal-title">ข้อมูลเงินเดือน/ค่าจ้าง</h1>
          </div>
          <div class="modal-body">
            <div class="input-group">
              <div class="name">
                <div class="row">
                  <div class="files">
                    <div class="saction-input-file">
                      <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">

                    </div>
                  </div>
                </div>
                <tbody>
                  <div class="row">
                    <div class="col-6 pr-0">
                      <div class="tranform">
                        <div class="contro1">
                          <tr>
                            <th scope="col"><select name="template_name" type="text" required name="name" class="form-control1" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="" disabled>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                              </select>
                            </th>
                            <th scope="col"><input type="name" id="name" class="form-control2" placeholder="กรอกชื่อ" disabled></th>
                            <th scope="col"><input type="name" id="name" class="form-control2" placeholder="กรอกนามสกุล" disabled></th>
                            <th scope="col"><select name="template_name" type="text" required name="name" class="form-control5" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง" disabled>
                                <option value="ตำเเหน่ง">ตำเหน่ง</option>
                                <option value="Design">Design</option>
                                <option value="......">......</option>
                                <option value="......">......</option>
                              </select></th>
                            <th scope="col"><select name="template_name" type="text" required name="name" class="form-control5" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
                                <option value="......">ประเภทพนักงาน</option>
                                <option value="ประจำ">ประจำ</option>
                                <option value="......">......</option>
                                <option value="......">......</option>
                              </select></th>
                            </th>
                            <th scope="col"><input type="name" id="name" class="form-control13" placeholder="กรอกเงินเดือน"></th>
                            <th scope="col"><input type="name" id="name" class="form-control13" placeholder="ประกันสังคม"></th>
                            <th scope="col"><input type="name" id="name" class="form-control13" placeholder="หัก ณ ที่จ่าย:"></th>
                            <th scope="col"><select name="template_name" type="text" required name="name" class="form-control13" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
                                <option value="#">ช่องทางการรับชำระ</option>
                                <option value="#">โอน</option>
                                <option value="#">......</option>
                                <option value="......">......</option>
                              </select></th>
                          </tr>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <th scope="col"><select name="template_name" type="text" required name="name" class="form-control13" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
                          <option value="#">ธนาคาร</option>
                          <option value="#">กรุงเทพ</option>
                          <option value="#">ออมสิน</option>
                          <option value="......">......</option>
                        </select></th>
                      <th scope="col"><input type="name" id="name" class="form-control13" placeholder="กรอกเลขบัญชี"></th>
                      <th scope="col">
                        <select name="template_name" type="text" required name="name" class="form-control5" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
                          <option value="#">สาขา</option>
                          <option value="#">กรุงเทพ</option>
                          <option value="#">เชียงใหม่</option>
                          <option value="......">......</option>
                        </select>
                      </th>
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
          <h1 class="modal-title">ข้อมูลการจ้างงาน
          </h1>

        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">

                  </div>
                </div>
              </div>
              <tbody>
                <div class="row">
                  <div class="col-6 pr-0">
                    <div class="tranform">
                      <div class="contro1">
                        <tr>
                          <th scope="col"><select name="template_name" type="text" required name="name" class="form-control1" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="" disabled>
                              <option value="นาย">นาย</option>
                              <option value="นาง">นาง</option>
                              <option value="นางสาว">นางสาว</option>
                            </select>
                          </th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="กรอกชื่อ" disabled></th>
                          <th scope="col"><input type="name" id="name" class="form-control2" placeholder="กรอกนามสกุล" disabled></th>
                          <th scope="col"><select name="template_name" type="text" required name="name" class="form-control5" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง" disabled>
                              <option value="ตำเเหน่ง">ตำเหน่ง</option>
                              <option value="Design">Design</option>
                              <option value="......">......</option>
                              <option value="......">......</option>
                            </select></th>
                          <div class="">
                            <span class="start-date">เเผนก</span>
                            <th scope="col"><select name="template_name" type="text" required name="name" class="form-control5" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="">
                                <option value="ตำเเหน่ง">ฝ่ายบุลคล</option>
                                <option value="Design">......</option>
                                <option value="......">......</option>
                                <option value="......">......</option>
                              </select></th>
                          </div>

                        </tr>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro3">
                      <tr>
                        <div class="">
                          <span class="start-date">วันที่จ้าง</span>
                          <th scope="col"><input type="date" id="name" class="form-control" placeholder=""></th>
                        </div>
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
</div>

<div class="">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title">ข้อมูลการจ้างงาน</h1>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
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
                            <span class="start-date">ที่อยู่</span>
                            <th scope="col"><input type="name" id="name" class="form-control9" placeholder="กรอกที่อยู่"></th>
                          </div>
                          <div class="">
                            <span class="start-date">โทรศัพท์</span>
                            <th scope="col"><input type="tell" id="tell" class="form-control9" placeholder="0xx-xxxx-xxx"></th>
                          </div>
                          <div class="finish">
                            <span class="finish-date">ID Line</span>
                            <th scope="col"><input type="Line" id="Line" class="form-control9" placeholder="กรุณากรอกไอดีไลน์"></th>
                          </div>
                        </tr>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro13">
                      <tr>
                        <div class="Em">
                          <span>อีเมล</span>
                          <th scope="col"><input type="email" id="email" class="form-control9" placeholder="กรอกอีเมล"></th>
                        </div>
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