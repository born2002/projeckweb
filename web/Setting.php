<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/setting.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>
<section>
  <div class="headbar">
    <span>ตั้งค่า</span>
  </div>
  <div class="hr1">
    <a class="HOT1" role="" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <svg xmlns="http://www.w3.org/2000/svg" height="20" width="10" viewBox="0 0 256 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path fill="#ffffff" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
      </svg> Logo บริษัท
    </a>
    <div class="collapse" id="collapseExample">
      <div class="well">
        <div class="files">
          <div class="saction-input-file">
            <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
            <div class="button-label">
              <button type="button" class="warning1"><label for="uploadfile">เพิ่มLogo</label></button>
              <input type="file" name="uploadfile" onchange="updateImage(this)" id="uploadfile" class="d-none">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hr1">
    <a class="HOT1" role="" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
      <svg xmlns="http://www.w3.org/2000/svg" height="20" width="10" viewBox="0 0 256 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path fill="#ffffff" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
      </svg>ภาษีหัก ณ ที่จ่าย
    </a>
    <div class="collapse" id="collapseExample1">
      <div class="well">
        <div class="vat">
          ราคา ก่อน VAT
        </div>
        <input type="text" name="" id="" placeholder="฿">
      </div>
    </div>
  </div>
  <div class="hr1">
    <a class="HOT1" role="" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
      <svg xmlns="http://www.w3.org/2000/svg" height="20" width="10" viewBox="0 0 256 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path fill="#ffffff" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
      </svg>ภาษีมูลค่าเพิ่ม
    </a>
    <div class="collapse" id="collapseExample2">
      <div class="well">
        <div class="vat">
          ภาษีมูลค่าเพิ่ม
        </div>
        <input type="text" name="" id="" placeholder="฿">
      </div>
    </div>
    <div class="hr1">
      <a class="HOT1" role="" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="10" viewBox="0 0 256 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path fill="#ffffff" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
        </svg>ข้อมูลบริษัท
      </a>
      <div class="collapse" id="collapseExample3">
        <div class="well">
          <div class="Company-in">
            <span>ข้อมูลบริษัท
            </span>
          </div>
          <form action="/action_page.php">
            <label for="fname">ชื่อบริษัท:</label><br>
            <input type="text" id="fname" name="fname" value="Crosswalk Agency" readonly><br><br>
            <label for="lname">ที่อยู่บริษัท:</label>
            <input type="text" id="lname" name="lname" value="โครงการ Fifth Avenue 555/90 หมู่ที่ 2 " readonly><br><br>
            <label for="lname">ตำบล:</label>
            <input type="text" id="lname" name="lname" value="หนองจ๊อบ" readonly><br><br>
            <label for="lname">อำเภอ:</label>
            <input type="text" id="lname" name="lname" value="สันทราย" readonly><br><br>
            <label for="lname">จังหวัด:</label>
            <input type="text" id="lname" name="lname" value="เชียงใหม่" readonly><br><br>
            <label for="lname">เลขไปรษณีย์:</label>
            <input type="text" id="lname" name="lname" value="50300" readonly><br><br>
            <label for="lname">ช่องทางการติดต่อ:</label><br>
            <input type="text" id="lname1" name="lname" value="Tell  : 090-xxxx-xxx" readonly><br><br>
            <input type="text" id="lname2" name="lname" value="Gmail : CrosswalkAgency@gmail.com" readonly><br><br>
            <div class="socal">
              <div class="row">
                <div class="col-4 facebook"> <a href="https://www.facebook.com/crosswalkagency.th/"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="21" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg></a></div>
                <div class="col-4 social"><a href="https://crosswalkagency.com/"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" />
                    </svg></a></div>
                <div class="col-4 map1"> <a href="https://www.google.com/maps/place/Crosswalk+Agency+-+Creative+Marketing+Agency+(CNX)/@18.8291384,99.0121049,785m/data=!3m2!1e3!4b1!4m6!3m5!1s0x30da2f309bcc85b7:0x3961e6758a9c6ba8!8m2!3d18.8291384!4d99.0146798!16s%2Fg%2F11hzsvgfx3?hl=en-US&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M302.8 312C334.9 271.9 408 174.6 408 120C408 53.7 354.3 0 288 0S168 53.7 168 120c0 54.6 73.1 151.9 105.2 192c7.7 9.6 22 9.6 29.6 0zM416 503l144.9-58c9.1-3.6 15.1-12.5 15.1-22.3L576 152c0-17-17.1-28.6-32.9-22.3l-116 46.4c-.5 1.2-1 2.5-1.5 3.7c-2.9 6.8-6.1 13.7-9.6 20.6L416 503zM15.1 187.3C6 191 0 199.8 0 209.6L0 480.4c0 17 17.1 28.6 32.9 22.3L160 451.8l0-251.4c-3.5-6.9-6.7-13.8-9.6-20.6c-5.6-13.2-10.4-27.4-12.8-41.5l-122.6 49zM384 255c-20.5 31.3-42.3 59.6-56.2 77c-20.5 25.6-59.1 25.6-79.6 0c-13.9-17.4-35.7-45.7-56.2-77l0 194.4 192 54.9L384 255z" />
                    </svg></a>
                </div>
              </div>
              <label for="lname8" class="lanme8">เลขประจำตัวผู้เสียภาษี:</label><br>
              <input type="text" id="lname1" name="lname" value="1354824796512" readonly><br><br>
          </form>
        </div>
      </div>
    </div>
    <div class="hr1">
      <div class=""></div>
      <a class="HOT1" role="" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="10" viewBox="0 0 256 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path fill="#ffffff" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
        </svg>ตั้งค่าเงินเดือน
      </a>
      <div class="collapse" id="collapseExample4">
        <div class="well1">
          <span class="Set-up-salary">ตั้งค่าเงินเดือน</span><br>
          <span class="Payroll-information">ข้อมูลการจ่ายเงินเดือน/ค่าจ้าง</span>
          <div class="row">
            <div class="col-4 p10">
              <span class="
Payroll">บัญชีเงินเดือน</span>
            </div>
            <div class="col-8 p10 mars">
              <select name="selecttype" id="selecttype" class="form-select">
                <option value="All" selected>ธ.กสิกรไทย ออมทรัพย์ 098-758065-7</option>
                <option value="wait">ปิดการใช้งาน</option>
              </select>
            </div>
          </div>
          <span class="Payroll-information">ข้อมูลด้านประกันสังคม</span>
          <div class="row">
            <div class="col-4 p10">
              <span class="
Payroll">สิทธิประกันสังคม</span>
            </div>
            <div class="col-4 ">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">สิทธิ์ประกันสังคม</label>
            </div>
            <div class="col-4 ">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">ไม่มีสิทธิ์ประกันสังคม</label>
            </div>
            <div class="col-4 p10">
              <span class="
Payroll">เลขบัญชีนายจ้าง</span>
            </div>
            <div class="col-8 p10">
              <input type="text" value="548120456" readonly>
            </div>
            <div class="col-4 p10">
              <span class="
Payroll">ลำดับที่สาขาในระบบ</span>
            </div>
            <div class="col-8 p10">
              <input type="text" value="500079" readonly>
            </div>
          </div>
          <div class="col-12 srqwe">
            <button type="button" class="btn-pr">บันทึกข้อมูล</button>
          </div>

        </div>

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
    ;
    DocumentFragmentlrt
    const url = URL.createObjectURL(e.files[0])
    document.getElementById("preview-file").src = url
  }
</script>